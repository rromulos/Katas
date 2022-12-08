function arrayDiff(a, b) {
    return a.filter(function(el) {
    return b.indexOf(el) === -1;
  });
}