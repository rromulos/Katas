package kata

func RemoveChar(word string) string {

	if len(word) < 2 {
		return word
	}

	return word[1 : len(word)-1]
}
