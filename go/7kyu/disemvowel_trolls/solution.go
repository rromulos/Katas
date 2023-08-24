package kata

import "regexp"

func Disemvowel(comment string) string {
	reg := regexp.MustCompile("[AEIOUaeiou]")
	return reg.ReplaceAllString(comment, "")
}
