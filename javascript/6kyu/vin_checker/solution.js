const checkVin = (vin) => {
    let table = { "A": 1, "B": 2, "C": 3, "D": 4, "E": 5, "F": 6, "G": 7, "H": 8, "J": 1, "K": 2, "L": 3, "M": 4, "N": 5, "P": 7, "R": 9, "S": 2, "T": 3, "U": 4, "V": 5, "W": 6, "X": 7, "Y": 8, "Z": 9 };
    let weight = [8,7,6,5,4,3,2,10,0,9,8,7,6,5,4,3,2];
    let resultTemp = '';
    let c = 0;
    let sum = 0;
    let mod = 0;
    let values = vin.split("");
  
    if ((vin.includes("I")) || (vin.includes("O")) || (vin.includes("Q"))) {
        return false;
    }
  
    for (element of values) {
        if (!isNaN(parseInt(element))) {
            resultTemp += element;
        } else {
            let v = table[element];
            resultTemp += v;
        }  
    }
  
    for (r of resultTemp) {
        sum += r * weight[c];
        c++;
    }
  
    mod = sum % 11;
    return ((vin.substr(8,1) == mod) || (mod == '10' && vin.substr(8,1) == 'X') && (vin.length == 17)) ? true : false;
};