package kata

func Solve(arr []int) int {
	occurrences := make(map[int]int)

	for _, num := range arr {
		if num > 0 {
			occurrences[num]++
		} else if num < 0 {
			occurrences[-num]--
		}
	}

	for num, count := range occurrences {
		if count != 0 {
			if count > 0 {
				return num
			} else {
				return -num
			}
		}
	}

	return 0
}
