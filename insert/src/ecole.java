import java.util.Random;

public class ecole {

    private static String[] ecole = {"College","Lycee"};
    private static Random random = new Random();

    public static String generateecole() {
        int index = random.nextInt(ecole.length);
        return ecole[index];
    }


}

