import java.util.Random;

public class Fruit {


        private static String[] fruit = {"","Pomme", "Orange", "Fruit Rouge", "Agrume", "Kiwi", "Fruit a Pepin", "Autre"};
        private static Random random = new Random();

        public static String generatefruit() {
            int index = random.nextInt(fruit.length);
            return fruit[index];
        }
    }

