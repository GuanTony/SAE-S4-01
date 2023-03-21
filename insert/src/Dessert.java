import java.util.Random;

public class Dessert {
        private static String[] dessert = {"","Cheesse Cake" , "Crepe" , "Mousse au Chocolat" , "Compote", " Riz au lait", "Creme Brule","Gateau","Bonbon","Patisserie","Glace", "Autre"};
        private static Random random = new Random();

        public static String generatedessert() {
            int index = random.nextInt(dessert.length);
            return dessert[index];
        }

}
