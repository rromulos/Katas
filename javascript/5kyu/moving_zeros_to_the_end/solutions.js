function moveZeros(arr) {
    let c = 0;
    for (let i = 0; i < arr.length; i++) {
      if (arr[i] !== 0) arr[c++] = arr[i];
    }
    for (let i = c; i < arr.length; i++) {
      arr[i] = 0;
    }
    return arr;
  }