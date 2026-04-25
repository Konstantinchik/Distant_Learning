/* ============================================================
 * pascal-trainer.js — подсветка Pascal + упрощённый интерпретатор
 *                     + сборка типовых мини-тренажёров.
 * Подключается на страницах Pascal-уроков (19..24).
 * Зависит только от Bootstrap (для классов).
 * ============================================================ */

(function (window) {
    'use strict';

    // ============================================================
    //  ПОДСВЕТКА СИНТАКСИСА Pascal
    // ============================================================

    const PAS_KEYWORDS = [
        'program','uses','var','const','type','begin','end',
        'for','to','downto','do','while','until','repeat',
        'if','then','else','case','of','procedure','function',
        'array','record','div','mod','and','or','not','xor',
        'true','false','nil','exit','break','continue'
    ];
    const PAS_TYPES = [
        'integer','real','string','boolean','char','byte','word',
        'longint','shortint','single','double','extended'
    ];
    const PAS_BUILTINS = [
        'writeln','write','readln','read','length','copy','pos',
        'inc','dec','abs','sqr','sqrt','sin','cos','round','trunc',
        'random','randomize','chr','ord','succ','pred'
    ];

    function escapeHtml(s) {
        return s.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;');
    }

    function highlightPascal(code) {
        // Сначала экранируем HTML
        let s = escapeHtml(code);

        // Маркируем плейсхолдеры __ID__ для безопасности (не трогаем уже подсвеченное)
        const tokens = [];
        const stash = (html) => { tokens.push(html); return `\u0001S${tokens.length - 1}\u0001`; };

        // 1) Комментарии { ... } и (* ... *)
        s = s.replace(/\{[\s\S]*?\}|\(\*[\s\S]*?\*\)/g, m => stash(`<span class="pas-comment">${m}</span>`));
        // 2) Линейные комментарии //
        s = s.replace(/\/\/[^\n]*/g, m => stash(`<span class="pas-comment">${m}</span>`));
        // 3) Строки 'foo' (с поддержкой '' внутри)
        s = s.replace(/'(?:[^'\n]|'')*'/g, m => stash(`<span class="pas-string">${m}</span>`));
        // 4) Числа (целые и вещественные)
        s = s.replace(/\b\d+(?:\.\d+)?\b/g, m => stash(`<span class="pas-number">${m}</span>`));

        // 5) Ключевые слова, типы, встроенные процедуры (case-insensitive)
        const kwRe   = new RegExp(`\\b(${PAS_KEYWORDS.join('|')})\\b`, 'gi');
        const tpRe   = new RegExp(`\\b(${PAS_TYPES.join('|')})\\b`, 'gi');
        const blRe   = new RegExp(`\\b(${PAS_BUILTINS.join('|')})\\b`, 'gi');
        s = s.replace(kwRe, m => stash(`<span class="pas-keyword">${m}</span>`));
        s = s.replace(tpRe, m => stash(`<span class="pas-type">${m}</span>`));
        s = s.replace(blRe, m => stash(`<span class="pas-builtin">${m}</span>`));

        // 6) Операторы
        s = s.replace(/(:=|&lt;=|&gt;=|&lt;&gt;|&lt;|&gt;|[+\-*\/=])/g, m => stash(`<span class="pas-operator">${m}</span>`));

        // Восстанавливаем
        s = s.replace(/\u0001S(\d+)\u0001/g, (_, i) => tokens[+i]);

        // Оборачиваем каждую строку в .pas-line
        const lines = s.split('\n');
        // Убираем последнюю пустую строку, если есть
        while (lines.length && lines[lines.length - 1].trim() === '') lines.pop();
        return lines.map(l => `<span class="pas-line">${l || ' '}</span>`).join('\n');
    }

    // ============================================================
    //  УПРОЩЁННЫЙ ИНТЕРПРЕТАТОР Pascal
    //  Поддерживает: program/var/const/begin/end, :=, +-*/, div/mod,
    //                writeln/write, for...to/downto...do, while/repeat,
    //                if/then/else, простые одномерные массивы, boolean.
    //  НЕ поддерживает: procedure/function/record/string ops/file I/O/readln.
    // ============================================================

    function PascalRunner(code) {
        // ---- Лексер ----
        const tokens = [];
        let i = 0, line = 1;
        const N = code.length;
        const KEYW = new Set(PAS_KEYWORDS.concat(PAS_TYPES));
        while (i < N) {
            const c = code[i];
            if (c === '\n') { line++; i++; continue; }
            if (/\s/.test(c)) { i++; continue; }
            // Комментарии { ... }
            if (c === '{') {
                while (i < N && code[i] !== '}') { if (code[i] === '\n') line++; i++; }
                i++; continue;
            }
            // (* ... *)
            if (c === '(' && code[i+1] === '*') {
                i += 2;
                while (i < N - 1 && !(code[i] === '*' && code[i+1] === ')')) { if (code[i] === '\n') line++; i++; }
                i += 2; continue;
            }
            // Линейные //
            if (c === '/' && code[i+1] === '/') {
                while (i < N && code[i] !== '\n') i++;
                continue;
            }
            // Числа (целые и дробные — но не путаемся с '..' диапазона)
            if (/[0-9]/.test(c)) {
                let s = '';
                while (i < N && /[0-9]/.test(code[i])) s += code[i++];
                // Дробная часть только если за точкой идёт цифра (а не ещё одна точка для '..')
                if (code[i] === '.' && /[0-9]/.test(code[i + 1] || '')) {
                    s += code[i++];
                    while (i < N && /[0-9]/.test(code[i])) s += code[i++];
                }
                tokens.push({ type: 'NUM', value: parseFloat(s), line });
                continue;
            }
            // Строки
            if (c === "'") {
                i++;
                let s = '';
                while (i < N) {
                    if (code[i] === "'") {
                        if (code[i+1] === "'") { s += "'"; i += 2; continue; }
                        i++; break;
                    }
                    s += code[i++];
                }
                tokens.push({ type: 'STR', value: s, line });
                continue;
            }
            // Идентификаторы / ключевые слова
            if (/[a-zA-Z_]/.test(c)) {
                let s = '';
                while (i < N && /[a-zA-Z0-9_]/.test(code[i])) s += code[i++];
                const lw = s.toLowerCase();
                if (KEYW.has(lw)) tokens.push({ type: 'KW',  value: lw, line });
                else              tokens.push({ type: 'ID',  value: s,  line });
                continue;
            }
            // Операторы и пунктуация
            const two = code.substr(i, 2);
            if ([':=', '<=', '>=', '<>', '..'].includes(two)) {
                tokens.push({ type: 'OP', value: two, line });
                i += 2; continue;
            }
            if ('+-*/=<>(),:;.[]'.includes(c)) {
                tokens.push({ type: 'OP', value: c, line });
                i++; continue;
            }
            i++;
        }
        tokens.push({ type: 'EOF', value: null, line });

        // ---- Парсер (рекурсивный спуск, упрощённый) ----
        let p = 0;
        const peek = () => tokens[p];
        const eat = (type, value) => {
            const t = tokens[p];
            if (t.type !== type) throw new Error(`Ожидался ${type}, получено '${t.value}' (стр. ${t.line})`);
            if (value !== undefined && t.value !== value) throw new Error(`Ожидалось '${value}', получено '${t.value}' (стр. ${t.line})`);
            p++; return t;
        };
        const accept = (type, value) => {
            const t = tokens[p];
            if (t.type === type && (value === undefined || t.value === value)) { p++; return t; }
            return null;
        };

        // program := 'program' ID ';' [decls] block '.'
        function parseProgram() {
            if (accept('KW', 'program')) {
                eat('ID');
                accept('OP', ';');
            }
            // декларации (можно пропустить)
            const decls = parseDeclarations();
            const body = parseBlock();
            accept('OP', '.');
            return { type: 'Program', decls, body };
        }
        function parseDeclarations() {
            const vars = {};
            while (true) {
                if (accept('KW', 'var')) {
                    while (peek().type === 'ID') {
                        const names = [eat('ID').value];
                        while (accept('OP', ',')) names.push(eat('ID').value);
                        eat('OP', ':');
                        const t = parseType();
                        accept('OP', ';');
                        for (const n of names) vars[n.toLowerCase()] = makeDefault(t);
                    }
                } else if (accept('KW', 'const')) {
                    while (peek().type === 'ID') {
                        const name = eat('ID').value.toLowerCase();
                        eat('OP', '=');
                        const v = parseExpr();
                        accept('OP', ';');
                        vars[name] = { type: 'const', value: evalConst(v) };
                    }
                } else break;
            }
            return vars;
        }
        function parseType() {
            const t = peek();
            if (t.type === 'KW' && (t.value === 'array')) {
                eat('KW', 'array');
                eat('OP', '[');
                const lo = parseExpr();
                eat('OP', '..');
                const hi = parseExpr();
                eat('OP', ']');
                eat('KW', 'of');
                const elemT = parseType();
                return { kind: 'array', lo, hi, elemT };
            }
            if (t.type === 'KW') {
                p++;
                return { kind: 'simple', name: t.value };
            }
            if (t.type === 'ID') {
                p++;
                return { kind: 'simple', name: t.value.toLowerCase() };
            }
            throw new Error(`Неизвестный тип на стр. ${t.line}`);
        }
        function makeDefault(t) {
            if (t.kind === 'simple') {
                if (t.name === 'string') return '';
                if (t.name === 'boolean') return false;
                return 0;
            }
            if (t.kind === 'array') {
                const lo = evalConst(t.lo), hi = evalConst(t.hi);
                const arr = { _isArray: true, _lo: lo, _hi: hi, _data: [] };
                for (let k = lo; k <= hi; k++) arr._data[k - lo] = makeDefault(t.elemT);
                return arr;
            }
            return 0;
        }
        function evalConst(node) {
            if (node.type === 'Num') return node.value;
            if (node.type === 'Str') return node.value;
            if (node.type === 'BinOp') {
                const a = evalConst(node.a), b = evalConst(node.b);
                switch (node.op) {
                    case '+': return a + b;
                    case '-': return a - b;
                    case '*': return a * b;
                    case '/': return a / b;
                    case 'div': return Math.trunc(a / b);
                    case 'mod': return a % b;
                }
            }
            if (node.type === 'Unary') {
                const v = evalConst(node.x);
                return node.op === '-' ? -v : v;
            }
            throw new Error('Не константное выражение');
        }

        function parseBlock() {
            eat('KW', 'begin');
            const stmts = [];
            if (!accept('KW', 'end')) {
                stmts.push(parseStatement());
                while (accept('OP', ';')) {
                    if (peek().type === 'KW' && peek().value === 'end') break;
                    stmts.push(parseStatement());
                }
                eat('KW', 'end');
            }
            return { type: 'Block', stmts };
        }

        function parseStatement() {
            const t = peek();
            if (t.type === 'KW') {
                switch (t.value) {
                    case 'begin':  return parseBlock();
                    case 'if':     return parseIf();
                    case 'for':    return parseFor();
                    case 'while':  return parseWhile();
                    case 'repeat': return parseRepeat();
                    case 'exit':   p++; return { type: 'Exit' };
                }
            }
            if (t.type === 'ID') {
                // Это либо присваивание, либо вызов
                const id = eat('ID').value.toLowerCase();
                if (peek().type === 'OP' && peek().value === '[') {
                    // массив: a[i] := expr
                    eat('OP', '[');
                    const idx = parseExpr();
                    eat('OP', ']');
                    eat('OP', ':=');
                    const val = parseExpr();
                    return { type: 'AssignIdx', id, idx, val, line: t.line };
                }
                if (accept('OP', ':=')) {
                    const val = parseExpr();
                    return { type: 'Assign', id, val, line: t.line };
                }
                // вызов
                if (accept('OP', '(')) {
                    const args = [];
                    if (!accept('OP', ')')) {
                        args.push(parseExpr());
                        while (accept('OP', ',')) args.push(parseExpr());
                        eat('OP', ')');
                    }
                    return { type: 'Call', id, args, line: t.line };
                }
                // одиночный идентификатор без аргументов (writeln без скобок)
                return { type: 'Call', id, args: [], line: t.line };
            }
            throw new Error(`Не понимаю инструкцию '${t.value}' на стр. ${t.line}`);
        }

        function parseIf() {
            eat('KW', 'if');
            const cond = parseExpr();
            eat('KW', 'then');
            const thenS = parseStatement();
            let elseS = null;
            if (accept('KW', 'else')) elseS = parseStatement();
            return { type: 'If', cond, thenS, elseS };
        }
        function parseFor() {
            eat('KW', 'for');
            const id = eat('ID').value.toLowerCase();
            eat('OP', ':=');
            const from = parseExpr();
            let dir = 'to';
            if (accept('KW', 'downto')) dir = 'downto';
            else eat('KW', 'to');
            const toExpr = parseExpr();
            eat('KW', 'do');
            const body = parseStatement();
            return { type: 'For', id, from, to: toExpr, dir, body };
        }
        function parseWhile() {
            eat('KW', 'while');
            const cond = parseExpr();
            eat('KW', 'do');
            const body = parseStatement();
            return { type: 'While', cond, body };
        }
        function parseRepeat() {
            eat('KW', 'repeat');
            const stmts = [parseStatement()];
            while (accept('OP', ';')) {
                if (peek().type === 'KW' && peek().value === 'until') break;
                stmts.push(parseStatement());
            }
            eat('KW', 'until');
            const cond = parseExpr();
            return { type: 'Repeat', stmts, cond };
        }

        // expr : term ((+|-|or) term)*
        function parseExpr() {
            let left = parseSimpleExpr();
            while (true) {
                if (peek().type === 'OP' && ['=','<>','<','>','<=','>='].includes(peek().value)) {
                    const op = eat('OP').value;
                    const right = parseSimpleExpr();
                    left = { type: 'BinOp', op, a: left, b: right };
                } else break;
            }
            return left;
        }
        function parseSimpleExpr() {
            // унарный минус/плюс
            let neg = null;
            if (accept('OP', '+')) {}
            else if (accept('OP', '-')) neg = '-';
            let left = parseTerm();
            if (neg) left = { type: 'Unary', op: neg, x: left };
            while (true) {
                if (peek().type === 'OP' && ['+','-'].includes(peek().value)) {
                    const op = eat('OP').value;
                    const right = parseTerm();
                    left = { type: 'BinOp', op, a: left, b: right };
                } else if (peek().type === 'KW' && peek().value === 'or') {
                    eat('KW', 'or');
                    const right = parseTerm();
                    left = { type: 'BinOp', op: 'or', a: left, b: right };
                } else break;
            }
            return left;
        }
        function parseTerm() {
            let left = parseFactor();
            while (true) {
                if (peek().type === 'OP' && ['*','/'].includes(peek().value)) {
                    const op = eat('OP').value;
                    const right = parseFactor();
                    left = { type: 'BinOp', op, a: left, b: right };
                } else if (peek().type === 'KW' && ['div','mod','and'].includes(peek().value)) {
                    const op = eat('KW').value;
                    const right = parseFactor();
                    left = { type: 'BinOp', op, a: left, b: right };
                } else break;
            }
            return left;
        }
        function parseFactor() {
            const t = peek();
            if (t.type === 'NUM') { p++; return { type: 'Num', value: t.value }; }
            if (t.type === 'STR') { p++; return { type: 'Str', value: t.value }; }
            if (t.type === 'KW' && (t.value === 'true' || t.value === 'false')) {
                p++; return { type: 'Bool', value: t.value === 'true' };
            }
            if (t.type === 'KW' && t.value === 'not') {
                p++;
                return { type: 'Unary', op: 'not', x: parseFactor() };
            }
            if (t.type === 'OP' && t.value === '(') {
                p++;
                const e = parseExpr();
                eat('OP', ')');
                return e;
            }
            if (t.type === 'ID') {
                p++;
                if (peek().type === 'OP' && peek().value === '[') {
                    eat('OP', '[');
                    const idx = parseExpr();
                    eat('OP', ']');
                    return { type: 'Index', id: t.value.toLowerCase(), idx };
                }
                if (peek().type === 'OP' && peek().value === '(') {
                    eat('OP', '(');
                    const args = [];
                    if (!accept('OP', ')')) {
                        args.push(parseExpr());
                        while (accept('OP', ',')) args.push(parseExpr());
                        eat('OP', ')');
                    }
                    return { type: 'CallExpr', id: t.value.toLowerCase(), args };
                }
                return { type: 'Var', id: t.value.toLowerCase() };
            }
            throw new Error(`Не понимаю выражение '${t.value}' на стр. ${t.line}`);
        }

        // ---- Парсим всё ----
        const ast = parseProgram();
        // Декларации применяются ниже как начальные значения
        const env = {};
        for (const k in ast.decls) env[k] = ast.decls[k];

        // ---- Интерпретатор ----
        const out = [];
        const MAX_ITER = 50000;
        let iterations = 0;
        function bumpIter() {
            iterations++;
            if (iterations > MAX_ITER) throw new Error('Превышен лимит итераций (вероятно, бесконечный цикл).');
        }
        function evalExpr(n) {
            switch (n.type) {
                case 'Num':  return n.value;
                case 'Str':  return n.value;
                case 'Bool': return n.value;
                case 'Var': {
                    if (n.id in env) {
                        const v = env[n.id];
                        if (v && typeof v === 'object' && v.type === 'const') return v.value;
                        return v;
                    }
                    throw new Error(`Переменная '${n.id}' не объявлена`);
                }
                case 'Index': {
                    const arr = env[n.id];
                    if (!arr || !arr._isArray) throw new Error(`'${n.id}' — не массив`);
                    const k = evalExpr(n.idx);
                    if (k < arr._lo || k > arr._hi) throw new Error(`Индекс ${k} вне диапазона [${arr._lo}..${arr._hi}]`);
                    return arr._data[k - arr._lo];
                }
                case 'BinOp': {
                    const a = evalExpr(n.a), b = evalExpr(n.b);
                    switch (n.op) {
                        case '+': return a + b;
                        case '-': return a - b;
                        case '*': return a * b;
                        case '/': return a / b;
                        case 'div': return Math.trunc(a / b);
                        case 'mod': return ((a % b) + b) % b;
                        case '=':  return a === b;
                        case '<>': return a !== b;
                        case '<':  return a < b;
                        case '>':  return a > b;
                        case '<=': return a <= b;
                        case '>=': return a >= b;
                        case 'and': return !!(a && b);
                        case 'or':  return !!(a || b);
                    }
                    throw new Error(`Неизвестный оператор '${n.op}'`);
                }
                case 'Unary':
                    if (n.op === '-') return -evalExpr(n.x);
                    if (n.op === 'not') return !evalExpr(n.x);
                    return evalExpr(n.x);
                case 'CallExpr': {
                    const args = n.args.map(evalExpr);
                    const f = BUILTIN_FUNCS[n.id];
                    if (!f) throw new Error(`Неизвестная функция '${n.id}'`);
                    return f(...args);
                }
            }
        }
        const BUILTIN_FUNCS = {
            abs:   x => Math.abs(x),
            sqr:   x => x * x,
            sqrt:  x => Math.sqrt(x),
            sin:   x => Math.sin(x),
            cos:   x => Math.cos(x),
            round: x => Math.round(x),
            trunc: x => Math.trunc(x),
            length: s => (typeof s === 'string' ? s.length : (s._isArray ? (s._hi - s._lo + 1) : 0)),
            chr: x => String.fromCharCode(x),
            ord: x => (typeof x === 'string' ? x.charCodeAt(0) : x === true ? 1 : 0),
            random: x => x ? Math.floor(Math.random() * x) : Math.random()
        };

        function execStmt(s) {
            bumpIter();
            switch (s.type) {
                case 'Block':
                    for (const st of s.stmts) execStmt(st);
                    return;
                case 'Assign':
                    if (!(s.id in env)) throw new Error(`Переменная '${s.id}' не объявлена`);
                    env[s.id] = evalExpr(s.val);
                    return;
                case 'AssignIdx': {
                    const arr = env[s.id];
                    if (!arr || !arr._isArray) throw new Error(`'${s.id}' — не массив`);
                    const k = evalExpr(s.idx);
                    if (k < arr._lo || k > arr._hi) throw new Error(`Индекс ${k} вне [${arr._lo}..${arr._hi}]`);
                    arr._data[k - arr._lo] = evalExpr(s.val);
                    return;
                }
                case 'If':
                    if (evalExpr(s.cond)) execStmt(s.thenS);
                    else if (s.elseS) execStmt(s.elseS);
                    return;
                case 'For': {
                    const a = evalExpr(s.from), b = evalExpr(s.to);
                    if (s.dir === 'to') {
                        for (let k = a; k <= b; k++) { env[s.id] = k; execStmt(s.body); bumpIter(); }
                    } else {
                        for (let k = a; k >= b; k--) { env[s.id] = k; execStmt(s.body); bumpIter(); }
                    }
                    return;
                }
                case 'While':
                    while (evalExpr(s.cond)) { execStmt(s.body); bumpIter(); }
                    return;
                case 'Repeat':
                    do { for (const st of s.stmts) execStmt(st); bumpIter(); }
                    while (!evalExpr(s.cond));
                    return;
                case 'Exit':
                    throw { _exit: true };
                case 'Call': {
                    const id = s.id;
                    const args = s.args.map(evalExpr);
                    if (id === 'writeln' || id === 'write') {
                        // Pascal: write/writeln без аргументов = пустая строка
                        const str = args.map(a => formatValue(a)).join('');
                        if (id === 'writeln') out.push(str + '\n');
                        else if (out.length) out[out.length - 1] = (out[out.length - 1] || '') + str;
                        else out.push(str);
                        return;
                    }
                    if (id === 'readln' || id === 'read') {
                        // Игнорируем — нет ввода
                        return;
                    }
                    const f = BUILTIN_FUNCS[id];
                    if (f) { f(...args); return; }
                    throw new Error(`Неизвестная процедура '${id}'`);
                }
            }
        }
        function formatValue(v) {
            if (typeof v === 'boolean') return v ? 'TRUE' : 'FALSE';
            if (typeof v === 'number') {
                // Целые без точки, дробные округлим до 4 знаков
                if (Number.isInteger(v)) return String(v);
                return v.toFixed(4).replace(/\.?0+$/, '');
            }
            return String(v);
        }

        try {
            execStmt(ast.body);
        } catch (e) {
            if (e && e._exit) {
                // нормальный выход
            } else {
                throw e;
            }
        }
        return out.join('').replace(/\n$/, '');
    }

    // ============================================================
    //  ИНИЦИАЛИЗАЦИЯ ЛИСТИНГОВ
    // ============================================================

    function initListings() {
        document.querySelectorAll('.pas-listing:not([data-init="1"])').forEach(box => {
            box.dataset.init = '1';
            const codeEl = box.querySelector('pre > code');
            if (!codeEl) return;
            // Skip if blank-inputs or pas-no-highlight class — keep DOM intact
            if (codeEl.classList.contains('pas-no-highlight') || codeEl.querySelector('input')) return;
            const raw = codeEl.textContent;
            codeEl.dataset.raw = raw;
            codeEl.innerHTML = highlightPascal(raw);

            // Кнопка «Запустить»
            const runBtn = box.querySelector('[data-run]');
            if (runBtn) {
                const outBox = box.querySelector('.pas-run-output');
                runBtn.addEventListener('click', () => {
                    if (!outBox) return;
                    outBox.classList.remove('error');
                    try {
                        const result = PascalRunner(codeEl.dataset.raw);
                        outBox.textContent = result || '(программа ничего не вывела)';
                    } catch (e) {
                        outBox.classList.add('error');
                        outBox.textContent = '⚠ Ошибка: ' + e.message;
                    }
                });
            }
            // Кнопка «Скопировать»
            const copyBtn = box.querySelector('[data-copy]');
            if (copyBtn) {
                copyBtn.addEventListener('click', () => {
                    navigator.clipboard.writeText(codeEl.dataset.raw).then(() => {
                        copyBtn.textContent = '✓ Скопировано';
                        setTimeout(() => copyBtn.textContent = 'Копировать', 1500);
                    });
                });
            }
        });
    }

    // ============================================================
    //  ТРЕНАЖЁР «Что выведет программа?»
    // ============================================================

    function initPredict() {
        document.querySelectorAll('.pas-predict:not([data-init="1"])').forEach(box => {
            box.dataset.init = '1';
            const expected = (box.dataset.expected || '').replace(/\\n/g, '\n').trim();
            const input = box.querySelector('.pas-predict-input');
            const fb = box.querySelector('.pas-predict-feedback');
            const btn = box.querySelector('[data-check]');
            if (!btn) return;
            btn.addEventListener('click', () => {
                const got = (input.value || '').trim();
                const norm = s => s.replace(/\s+/g, ' ').trim().toLowerCase();
                if (norm(got) === norm(expected)) {
                    fb.className = 'pas-predict-feedback ok';
                    fb.textContent = '✓ Правильно!';
                } else {
                    fb.className = 'pas-predict-feedback fail';
                    fb.innerHTML = '✗ Неверно. Ожидалось:<pre class="mt-1 mb-0">' + escapeHtml(expected) + '</pre>';
                }
            });
        });
    }

    // ============================================================
    //  ТРЕНАЖЁР «Заполни пропуск»
    //  Разметка: внутри pre есть <input class="pas-blank" data-correct="...">
    // ============================================================

    function initBlanks() {
        document.querySelectorAll('.pas-blanks:not([data-init="1"])').forEach(box => {
            box.dataset.init = '1';
            const btn = box.querySelector('[data-check]');
            const fb = box.querySelector('.pas-blanks-feedback');
            if (!btn) return;
            btn.addEventListener('click', () => {
                const inputs = box.querySelectorAll('.pas-blank');
                let correct = 0, total = 0;
                inputs.forEach(inp => {
                    total++;
                    const ans = (inp.value || '').trim().toLowerCase();
                    const exp = (inp.dataset.correct || '').trim().toLowerCase();
                    inp.classList.remove('is-valid', 'is-invalid');
                    if (ans === exp) { inp.classList.add('is-valid'); correct++; }
                    else inp.classList.add('is-invalid');
                });
                if (fb) {
                    fb.className = 'pas-blanks-feedback ' + (correct === total ? 'text-success' : 'text-danger') + ' fw-bold mt-2';
                    fb.textContent = correct === total
                        ? `✓ Все ${total} пропусков заполнены правильно!`
                        : `Правильно: ${correct} из ${total}`;
                }
            });
        });
    }

    // ============================================================
    //  ТРЕНАЖЁР «Расставь по порядку» (HTML5 drag&drop)
    // ============================================================

    function initReorder() {
        document.querySelectorAll('.pas-reorder:not([data-init="1"])').forEach(box => {
            box.dataset.init = '1';
            const list = box.querySelector('.pas-reorder-list');
            if (!list) return;
            // Сохраняем правильный порядок (по data-order)
            const items = Array.from(list.children);
            // Мешаем
            for (let i = items.length - 1; i > 0; i--) {
                const j = Math.floor(Math.random() * (i + 1));
                [items[i], items[j]] = [items[j], items[i]];
            }
            list.innerHTML = '';
            items.forEach(it => {
                it.draggable = true;
                list.appendChild(it);
                it.addEventListener('dragstart', e => {
                    it.classList.add('dragging');
                    e.dataTransfer.effectAllowed = 'move';
                });
                it.addEventListener('dragend', () => it.classList.remove('dragging'));
            });
            list.addEventListener('dragover', e => {
                e.preventDefault();
                const dragging = list.querySelector('.dragging');
                if (!dragging) return;
                const after = getDragAfter(list, e.clientY);
                if (after == null) list.appendChild(dragging);
                else list.insertBefore(dragging, after);
            });
            const scope = box.closest('.card-body') || box.parentElement || box;
            const btn = scope.querySelector('[data-check]');
            const fb = scope.querySelector('.pas-reorder-feedback');
            if (btn) {
                btn.addEventListener('click', () => {
                    const cur = Array.from(list.children);
                    // data-order трактуется как «группа позиций»: одинаковые номера = эквивалентные
                    // строки (порядок между ними произволен). Правильно, если массив неубывающий.
                    let maxSoFar = -Infinity;
                    let allOk = true;
                    cur.forEach(it => {
                        const g = parseInt(it.dataset.order, 10);
                        it.classList.remove('correct', 'incorrect');
                        if (g >= maxSoFar) {
                            it.classList.add('correct');
                            maxSoFar = g;
                        } else {
                            it.classList.add('incorrect');
                            allOk = false;
                        }
                    });
                    if (fb) {
                        fb.className = 'pas-reorder-feedback ' + (allOk ? 'text-success' : 'text-danger') + ' fw-bold mt-2';
                        fb.textContent = allOk
                            ? '✓ Правильный порядок!'
                            : 'Не все строки на своих местах — красные опоздали со своей очередью';
                    }
                });
            }
        });
    }
    function getDragAfter(container, y) {
        const items = [...container.querySelectorAll('.pas-reorder-item:not(.dragging)')];
        return items.reduce((closest, child) => {
            const box = child.getBoundingClientRect();
            const offset = y - box.top - box.height / 2;
            if (offset < 0 && offset > closest.offset) return { offset, element: child };
            return closest;
        }, { offset: -Infinity }).element;
    }

    // ============================================================
    //  Авто-инициализация по DOMContentLoaded
    // ============================================================

    function initAll() {
        initListings();
        initPredict();
        initBlanks();
        initReorder();
    }
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initAll);
    } else {
        initAll();
    }

    // Экспорт для отладки
    window.PascalTrainer = {
        run: PascalRunner,
        highlight: highlightPascal,
        init: initAll
    };

})(window);
