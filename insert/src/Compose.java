import java.util.Random;

public class Compose {

        private static String[] compose = {"","Burger","Lasagne","Harchi Parmentier", "Crepe", "Sandwich", "Nugget", "Pizza", "Fruit de mer", "Autre"};
        private static Random random = new Random();

        public static String generatecompose() {
            int index = random.nextInt(compose.length);
            return compose[index];
        }
    }

