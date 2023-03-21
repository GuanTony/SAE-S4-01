import java.util.Random;

public class Poisson {

        private static String[] poisson = {"", "Cabillaud", "Hareng", "Dorade", "Maquereau", "Autre"};
        private static Random random = new Random();

        public static String generatepoisson() {
            int index = random.nextInt(poisson.length);
            return poisson[index];
        }
    }

