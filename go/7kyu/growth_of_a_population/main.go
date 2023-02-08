package kata

func NbYear(p0 int, percent float64, aug int, p int) int {
  years := 0
  for p0 < p {
    p0 = p0 + int(float64(p0) * percent / 100) + aug
    years++
  }
  return years
}