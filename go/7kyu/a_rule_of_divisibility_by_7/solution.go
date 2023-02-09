package kata

func Seven(n int64) []int {
  c := 0
  
  for ; n > 99; c++ {
    n = (n / 10) - (2 * (n % 10))    
  }
  
  return []int{int(n), c}
}