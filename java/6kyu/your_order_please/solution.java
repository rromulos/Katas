public class Order {
  public static String order(String words) {
    
    if (words.isEmpty()) {
      return words;
    }
    
    String[] items = words.split("\\s+");
    String sentenceOrdered[] = new String[items.length];
    
    for(String item : items) {
      String position = item.replaceAll("[^0-9]", "");
      int pos = Integer.parseInt(position);  
      sentenceOrdered[pos - 1] = item;

    }
    
    return String.join(" ", sentenceOrdered);
  }
}