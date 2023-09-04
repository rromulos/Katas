package kata

func CreateBox(width, length int) [][]int {

	box := make([][]int, length)
	for i := range box {
		box[i] = make([]int, width)
	}

	for i := 0; i < length; i++ {
		for j := 0; j < width; j++ {

			minDist := i
			if j < minDist {
				minDist = j
			}
			if width-j-1 < minDist {
				minDist = width - j - 1
			}
			if length-i-1 < minDist {
				minDist = length - i - 1
			}

			box[i][j] = minDist + 1
		}
	}

	return box
}
