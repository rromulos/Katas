//first version

function sumEvenNumbers(input) {
    var evenArray = [];
    var calc = 0;
    for (i = 0; i < input.length; i++) { 
        if(input[i] % 2 == 0){
            evenArray.push(parseInt(input[i]));
        }
    }
    return calc = evenArray.reduce(function(a, b) { return a + b; }, 0);
  }

  //second version

  function sumEvenNumbers(input) {
    var r = 0;
    for(var i=0; i<input.length; i++) {
        r = (input[i] % 2 ) == 0 ? r+input[i] : r+0;
    }
    return r;
}