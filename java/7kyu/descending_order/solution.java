public class DescendingOrder {
    public static int sortDesc(final int num) {
        if (num < 10) {
            return num;
        }

        int[] digitCount = new int[10];
        
        int n = num;
        while (n > 0) {
            int digit = n % 10;
            digitCount[digit]++;
            n /= 10;
        }

        int result = 0;
        for (int i = 9; i >= 0; i--) {
            while (digitCount[i] > 0) {
                result = result * 10 + i;
                digitCount[i]--;
            }
        }
        
        return result;
    }
}