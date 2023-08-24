package kata

func SquareSum(numbers []int) int {
	sum := 0

	for i := 0; i < len(numbers); i++ {
		sum += numbers[i] * numbers[i]
	}

	return sum
}
