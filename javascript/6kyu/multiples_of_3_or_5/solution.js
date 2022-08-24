function solution(number){
    let sum = 0;    
    for (i = 3; i < number; i++) {              
      (i % 3 === 0 || i % 5 === 0) ? sum += i : null;
    }
    return sum;
}