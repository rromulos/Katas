function pigIt(str){
    let result = [];
    let elements = str.split(" ");
    for (el of elements) {
      ((el != '?') && (el != '!')) ? result.push(el.slice(1) + el.charAt(0) + "ay") : result.push(el);
    }
    return result.join(" ");
  }