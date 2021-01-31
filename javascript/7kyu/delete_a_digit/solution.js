function deleteDigit(n) {
    n = n.toString();
    orStr = n;
    stringSize = n.length;
    var arrayResult = new Array();
    for (i = 0; i < stringSize; i++) { 
        orStr = n;
        var elementToFind = orStr.substr(i,1);
        var strPos = orStr.indexOf(elementToFind);
        var partilString = orStr.replace(elementToFind, "");
        arrayResult.push(partilString);
        arrayResult.sort(function(a, b){return b-a}); 
    }
    return parseInt(arrayResult[0]);
  }