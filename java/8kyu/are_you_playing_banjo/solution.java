public class Banjo {
  public static String areYouPlayingBanjo(String name) {
    return (name.substring(0,1).equals("R") || name.substring(0,1).equals("r")) ? name + " plays banjo" : name + " does not play banjo";
  }
}