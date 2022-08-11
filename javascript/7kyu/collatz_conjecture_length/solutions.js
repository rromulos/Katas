function collatz(n) {
    let c = 1;
    while (n > 1) {
       n = (n % 2 == 0) ?  n / 2 : (n * 3) + 1;
       c++;
    }
    return c;
}