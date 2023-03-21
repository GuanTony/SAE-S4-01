import java.util.Random;

public class eta{
    private static String[] etablissement = {"", "Oui"};
    private static Random random = new Random();

    public static String generateE() {
        int index = random.nextInt(etablissement.length);
        return etablissement[index];
    }
}