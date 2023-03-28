import java.util.Random;

public class agee{
    private static String[] age = {"10", "11", "12", "13", "14", "15", "16", "17", "18"};
    private static Random random = new Random();

    public static String generateA() {
        int index = random.nextInt(age.length);
        return age[index];
    }
}