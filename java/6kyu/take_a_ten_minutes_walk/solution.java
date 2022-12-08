public class TenMinWalk {
  public static boolean isValid(char[] walk) {
    
    if (walk.length != 10) return false;

    int a = 0;
    int b = 0;

    for (Character direction : walk) {
      switch (direction) {
          case 'n':
              b++;
              continue;
          case 's':
              b--;
              continue;
          case 'e':
              a--;
              continue;
          case 'w':
              a++;
              continue;
          default :
              continue;
      }
    }
    
    return (b == 0 && a == 0);
  }
}