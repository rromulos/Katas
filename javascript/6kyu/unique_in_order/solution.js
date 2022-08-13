var uniqueInOrder=function(iterable){
    const sequence = [];
    let lastElement = null;
    let arrOfElements = [];
    (!Array.isArray(iterable)) ? arrOfElements = iterable.split("") : arrOfElements = iterable;
    for(l of arrOfElements) {    
      if (l != lastElement) {
        sequence.push(l);
        lastElement = l;
      }
    }
   return sequence;
  }