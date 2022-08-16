function amountOfPages(summary){
    var c = 0;
    var r = 0;
    
    if (summary <= 9) {
      return summary;
    }
    
    for(let i = 1; i<summary; i++) {
      c += i.toString().length;
      
      if (c === summary) {
        r = i;
      }
      
    }
    return r;  
  }