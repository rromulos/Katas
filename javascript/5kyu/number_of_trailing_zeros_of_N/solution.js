function zeros (n) {
    let r = 0;
    while (n = Math.floor(n / 5)) {
        r += n;
    }
    return r;
}