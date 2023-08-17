package kata

import (
	"strings"
)

func DuplicateEncode(word string) string {
	word = strings.ToLower(word) // Convert the word to lowercase
	charCount := make(map[rune]int)

	for _, char := range word {
		charCount[char]++
	}

	var result strings.Builder

	for _, char := range word {
		if charCount[char] > 1 {
			result.WriteString(")")
		} else {
			result.WriteString("(")
		}
	}

	return result.String()
}
