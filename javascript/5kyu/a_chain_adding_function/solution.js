function add(n){
    let r = v => add(n + v);
    r.valueOf = () => n;
    return r;
}