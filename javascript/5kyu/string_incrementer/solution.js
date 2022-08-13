function incrementString (strng) {
    const arrLettersAndZero = [];
    let numbers = '';
    let lastArrEl = '';
    if (!strng == '') {
        for (let el of strng.split("")) {
            (!isNaN(parseInt(el)) && el != '0') ? numbers += el : arrLettersAndZero.push(el);
        }
        lastArrEl = arrLettersAndZero[arrLettersAndZero.length-1];
        if (numbers === '') {
            if (lastArrEl[0] == '0') {
                 arrLettersAndZero.pop();   
            }
            numbers = 1;
        } else {
            numbers = Number(numbers) + Number('1');
            if (numbers > 9 && lastArrEl[0] == '0') {
                arrLettersAndZero.pop();   
            }
        }
        return arrLettersAndZero.toString().replace(/,/g , "") + numbers;
    }
    return '1';
}