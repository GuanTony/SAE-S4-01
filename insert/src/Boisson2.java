import java.util.Random;

public class Boisson2 {

        private static String[] boisson2 = {"","Soda","Jus de Fruit","Eau","Sirop","Autre "};
        private static Random random = new Random();

        public static String generateboisson2() {
            int index = random.nextInt(boisson2.length);
            return boisson2[index];
        }
    }
