package kata

func RepeatStr(repetitions int, value string) string {

	var content string

	for i := 0; i < repetitions; i++ {
		content += value
	}

	return content
}
