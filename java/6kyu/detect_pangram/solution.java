import java.util.LinkedHashSet;

public class PangramChecker {
  public boolean check(String sentence){
    sentence = sentence.replaceAll("\\s+", "");
    sentence = sentence.replaceAll("[^a-zA-Z0-9]", ""); 
    sentence = sentence.toLowerCase();
    LinkedHashSet<Character> set = new LinkedHashSet<>();   
    
    for(int i = 0; i < sentence.length();i++) {
        set.add(sentence.charAt(i));
    }  
    
    return (set.size() == 26) ? true : false;
  }
}
