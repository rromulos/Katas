package kata

import "math"

func TwiceAsOld(dadYearsOld, sonYearsOld int) int {
	calc := dadYearsOld - sonYearsOld*2
	return int(math.Abs(float64(calc)))
}
