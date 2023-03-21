import java.util.Random;

public class prenom {
    private static String[] firstNames = {"Alice", "Bob", "Charlie", "David", "Eve", "Frank", "Grace", "Henry", "Isabella", "Jack", "Kate", "Liam", "Mia", "Noah", "Olivia", "Peter", "Quinn", "Rose", "Samuel", "Taylor", "Uma", "Victor", "Willow", "Xavier", "Yara", "Zoe"};
    private static Random random = new Random();

    public static String generateName() {
        int index = random.nextInt(firstNames.length);
        return firstNames[index];
    }
    public static String generatePrenom(){
        int index = random.nextInt(firstNames.length);
        return firstNames[index];
    }
}