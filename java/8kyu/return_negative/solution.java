public class Kata {

  public static int makeNegative(final int x) {
    int result = x;
    if(result < 0){
      return result;
    }else{
      return result *= -1;
    }        
  }
  
}