function digitalRoot(n) {
    let numbers = Array.from(String(n), Number);
    let sum = 0;
    while (numbers.length > 0) {
        sum += numbers[0];
        numbers.shift();
        if ((numbers.length == 0) && (`${sum}`.length > 1)) {
            numbers = Array.from(String(sum), Number);
            sum = 0;
        }
    }
    return sum;
}