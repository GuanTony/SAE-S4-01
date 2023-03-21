import java.util.Random;

public class Fromage {

        private static String[] fromage = {"","Brie", "Camembert","Cantal","Cheddar", "Chevre","Comté" , "Mimolette","Roquefort","Reblochon","Autre "};
        private static Random random = new Random();

        public static String generatefromage() {
            int index = random.nextInt(fromage.length);
            return fromage[index];
        }

}
