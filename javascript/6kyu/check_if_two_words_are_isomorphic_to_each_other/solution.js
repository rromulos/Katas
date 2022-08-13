function isomorph(a, b) {
    if (a.length !== b.length) return false;
    const m = new Map();
    const s = new Set();
    for (let i = 0; i < a.length; i++) {
        c1 = a.charAt(i);
        c2 = b.charAt(i);
        if (m.has(c1) == true) {
            if (m.get(c1) !== c2) return false; 
        }
        else {
            if (s.has(c2)) return false;
            m.set(c1, c2);
            s.add(c2);
        }
    }
    return true;
}