
import java.util.Random;
public class Main {
    public static void main(String[] args) {
        String name;
        String entree ;
        String poisson ;
        String viande ;
        String compose ;
        String pates ;
        String fromage ;
        String dessert ;
        String boisson2 ;
        String boisson1 ;
        String patisserie ;
        String produitlaitier ;
        String fruit ;
        String prename;
        String eco;
        String age;
        String oui1;
        String oui2;
        String oui3;
        String oui4;
        String oui5;
        String oui6;
        String oui7;
        String oui8;
        String oui9;
        String oui10;
        String oui11;
        String oui12;
        String oui13;
        String oui14;
        String oui15;
        String oui16;
        String oui17;


        int j=108;

        for (int i = 100; i < 200; i++) {

            j ++;
            age = agee.generateA();
            prename = prenom.generatePrenom();
            name = prenom.generateName();
            entree = Entree.generateentree();
            poisson = Poisson.generatepoisson();
            viande = Viande.generateviande();
            compose = Compose.generatecompose();
            pates = Pates.generatepates();
            fromage = Fromage.generatefromage();
            dessert = Dessert.generatedessert();
            boisson2 = Boisson2.generateboisson2();
            boisson1 = Boisson1.generateboisson1();
            patisserie = Patisserie.generatepatisserie();
            produitlaitier = ProduitL.generateProduitL();
            fruit = Fruit.generatefruit();
            eco = ecole.generateecole();
            oui1 = Grandoui.grandoui();
            oui2 = Grandoui.grandoui2();
            oui3 = Grandoui.grandoui3();
            oui4 = Grandoui.grandoui4();
            oui5 = Grandoui.grandoui5();
            oui6 = Grandoui.grandoui6();
            oui7 = Grandoui.grandoui7();
            oui8 = Grandoui.grandoui8();
            oui9 = Grandoui.grandoui9();
            oui10 = Grandoui.grandoui10();
            oui11 = Grandoui.grandoui11();
            oui12 = Grandoui.grandoui12();
            oui13 = Grandoui.grandoui13();
            oui14 = Grandoui.grandoui14();
            oui15 = Grandoui.grandoui15();
            oui16 = Grandoui.grandoui16();
            oui17 = Grandoui.grandoui17();




            System.out.println("INSERT INTO `aliments`(`IDProd`, `Produit Laitier`, `Fruit`, `Boisson1`, `Patisserie`, `Entree`, `Poisson`, `Viande`, `Compose`, `Pates`, `Fromage`, `Dessert`, `Boisson2`, `ID`) VALUES ("+i+",'"+produitlaitier+"','"+fruit+"','"+boisson1+"','"+patisserie+"','"+entree+"','"+poisson+"','"+viande+"','"+compose+"','"+pates+"','"+fromage+"','"+dessert+"','"+boisson2+"',"+j+");");
        }
    }
}
