package kata

type PosPeaks struct {
	Pos   []int
	Peaks []int
}

func PickPeaks(array []int) PosPeaks {
	var result PosPeaks
	length := len(array)

	if length <= 2 {
		return result
	}

	for i := 1; i < length-1; i++ {
		if array[i] > array[i-1] {
			j := i
			for j < length-1 && array[j] == array[j+1] {
				j++
			}
			if j < length-1 && array[j] > array[j+1] {
				result.Pos = append(result.Pos, i)
				result.Peaks = append(result.Peaks, array[i])
			}
		}
	}

	return result
}
