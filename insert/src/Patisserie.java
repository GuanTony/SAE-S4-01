import java.util.Random;

public class Patisserie {


        private static String[] patisserie = {"","Eclair","Croissant", "Pain au Raisin", "Pain au Chocolat","Crepe", "Pancake", "Brioche", "Pain","Choquettes","Gauffre","Autre"};
        private static Random random = new Random();

        public static String generatepatisserie() {
            int index = random.nextInt(patisserie.length);
            return patisserie[index];
        }
    }
