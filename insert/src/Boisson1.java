import java.util.Random;

public class Boisson1 {

        private static String[] boisson1 = {" ","Jus d Orange", "Jus de Pomme", "Eau", "Cafe", "The", "Jus de Fruit", "Autre"};
        private static Random random = new Random();

        public static String generateboisson1() {
            int index = random.nextInt(boisson1.length);
            return boisson1[index];
        }


}

