package kata

func SmallestIntegerFinder(numbers []int) int {

	smallestNumber := numbers[0]

	for _, num := range numbers {
		if num < smallestNumber {
			smallestNumber = num
		}
	}

	return smallestNumber
}
