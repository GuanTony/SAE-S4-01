import java.util.Random;

public class Entree {

        private static String[] entree = {"","Soupe", "Salade","Burritos", "Cake sale" , "Autre"};
        private static Random random = new Random();

        public static String generateentree() {
            int index = random.nextInt(entree.length);
            return entree[index];
        }
    }

