function dontGiveMeFive(start, end)
{
  let c = 0
  for (let i = start; i <= end; i++) {
      if(i.toString().indexOf('5') > -1){
        continue;
      }else{
        c++;
      }
  }
  return c;
}