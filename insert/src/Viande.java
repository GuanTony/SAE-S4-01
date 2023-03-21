import java.util.Random;

public class Viande {

        private static String[] viande = {"", "Boeuf", "Porc", "Volaille", "Saucisse","Mouton" ,"Autre "};
        private static Random random = new Random();

        public static String generateviande() {
            int index = random.nextInt(viande.length);
            return viande[index];
        }
    }

