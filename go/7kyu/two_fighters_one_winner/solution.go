package kata

import "math"

func DeclareWinner(fighter1 Fighter, fighter2 Fighter, firstAttacker string) string {
  
  type Fighter struct {
    Name            string
    Health          int
    DamagePerAttack int
  }
  
  fighter_1 := math.Ceil(float64(fighter1.Health) / float64(fighter2.DamagePerAttack))
  fighter_2 := math.Ceil(float64(fighter2.Health) / float64(fighter1.DamagePerAttack))
  
  if fighter_1 > fighter_2 {
    return fighter1.Name
  } else if fighter_1 == fighter_2 {
    return firstAttacker
  }
  
  return fighter2.Name
}