class Kata {
  public static String getMiddle(String word) {    
    if (word.length() == 1 || word.length() == 2) return word;    
    
    return (word.length() % 2 == 0) 
      ? "" + word.charAt(word.length() /2 - 1) + word.charAt(word.length() / 2)
      : "" + word.charAt(word.length() / 2);
  }
}