package kata

func GetCount(str string) (count int) {
	for _, char := range str {
		switch char {
		case 'a', 'e', 'i', 'o', 'u':
			count++
		}
	}
	return count
}
