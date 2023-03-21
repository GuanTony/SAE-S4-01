import java.util.Random;

public class ProduitL {

        private static String[] produit = {"","Yaourt", "Milshake"," Fromage blanc","Lait" , "Autre"};
        private static Random random = new Random();

        public static String generateProduitL() {
            int index = random.nextInt(produit.length);
            return produit[index];
        }
    }

