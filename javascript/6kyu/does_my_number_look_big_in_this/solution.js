function narcissistic(value) {
    const s = String(value);
    const v = s.split('');
    let r = 0;
  
    for (el of v) {
      const n = el;
      r += Math.pow(n, v.length);
    }
  
    return (r === value) ? true : false;
  }