function countAnimals(sentence) {
    sentence = sentence.replace(/ /g, ',');
    var array = sentence.split(',');
    var number = 0;
    for (i = 0; i < array.length; i++) { 
        if(!isNaN(array[i])){
            if(!array[i] == ''){
                number += parseInt(array[i]);
            }
        }
    }
    return number;
}