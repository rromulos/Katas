package kata

import (
	"strconv"
	"strings"
)

func HighAndLow(in string) string {
	nums := strings.Fields(in)
	if len(nums) == 0 {
		return ""
	}

	highest, _ := strconv.Atoi(nums[0])
	lowest, _ := strconv.Atoi(nums[0])

	for _, numStr := range nums {
		num, _ := strconv.Atoi(numStr)
		if num > highest {
			highest = num
		}
		if num < lowest {
			lowest = num
		}
	}

	return strconv.Itoa(highest) + " " + strconv.Itoa(lowest)
}
