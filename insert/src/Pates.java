import java.util.Random;

public class Pates {


        private static String[] pates = {"","Bolognaise", "Carbonara", "Pesto", "Ketchup", "Fromage", "Autre "};
        private static Random random = new Random();

        public static String generatepates() {
            int index = random.nextInt(pates.length);
            return pates[index];
        }
    }

