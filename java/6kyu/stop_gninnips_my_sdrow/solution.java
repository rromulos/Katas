import java.util.ArrayList;
public class SpinWords {

  public String spinWords(String sentence) {
    String[] list = sentence.split("\\s+");
		ArrayList<String> listOfWords = new ArrayList<String>();
		String reversedString = "";
		char ch;
		
		if (list.length > 0) {
			for (String item : list) {
				if (item.length() >= 5) {
				      for (int i = 0; i < item.length(); i++) {
				        ch = item.charAt(i);
				        reversedString = ch + reversedString;
				      }
					  listOfWords.add(reversedString);
				      reversedString = "";
				} else {
					listOfWords.add(item);
				}
			}
		} else {
			listOfWords.add(sentence);
		}
    
		return String.join(" ", listOfWords);
  }
}