<?php
  session_start(); 
  $question= isset($_POST['question'])?($_POST['question']):'';
  $pdej1 = isset($_POST['pdej1'])?($_POST['pdej1']):'';
  $pdej2 = isset($_POST['pdej2'])?($_POST['pdej2']):'';
  $pdej3 = isset($_POST['pdej3'])?($_POST['pdej3']):'';
  $pdej4 = isset($_POST['pdej4'])?($_POST['pdej4']):'';
  $pdej5= isset($_POST['pdej5'])?($_POST['pdej5']):'';
  $pdej6 = isset($_POST['pdej6'])?($_POST['pdej6']):'';
  $pdej7 = isset($_POST['pdej7'])?($_POST['pdej7']):'';
  $repas1 = isset($_POST['repas1'])?($_POST['repas1']):'';
  $repas2 = isset($_POST['repas2'])?($_POST['repas2']):'';
  $repas3 = isset($_POST['repas3'])?($_POST['repas3']):'';
  $repas4 = isset($_POST['repas4'])?($_POST['repas4']):'';
  $repas5 = isset($_POST['repas5'])?($_POST['repas5']):'';
  $repas6 = isset($_POST['repas6'])?($_POST['repas6']):'';
  $repas7 = isset($_POST['repas7'])?($_POST['repas7']):'';
  $repas8 = isset($_POST['repas8'])?($_POST['repas8']):'';
  $repas9 = isset($_POST['repas9'])?($_POST['repas9']):'';
  $repas10 = isset($_POST['repas10'])?($_POST['repas10']):'';
  $repas11 = isset($_POST['repas11'])?($_POST['repas11']):'';


  $Produit =  isset($_POST['Produit'])?($_POST['Produit']):'';
  $Fruit =  isset($_POST['Fruit'])?($_POST['Fruit']):'';
  $Boisson1 =  isset($_POST['Boisson1'])?($_POST['Boisson1']):'';
  $Patisserie=  isset($_POST['Patisserie'])?($_POST['Patisserie']):'';
  $Entree =  isset($_POST['Entree'])?($_POST['Entree']):'';
  $Viande =  isset($_POST['Viande'])?($_POST['Viande']):'';
  $Poisson =  isset($_POST['Poisson'])?($_POST['Poisson']):'';
  $Pates=  isset($_POST['Pates'])?($_POST['Pates']):'';
  $Compose=  isset($_POST['Compose'])?($_POST['Compose']):'';
  $Fromage=  isset($_POST['Fromage'])?($_POST['Fromage']):'';
  $Dessert=  isset($_POST['Dessert'])?($_POST['Dessert']):'';
  $Boisson2=  isset($_POST['Boisson2'])?($_POST['Boisson2']):'';
  $msg = '';

  if  (count($_POST)==0)
      require ('Questionnaire.html');
  else{
        if(!ajout($question,$pdej1,$pdej2,$pdej3,$pdej4,$pdej5,$pdej6,$pdej7,$repas1,$repas2,$repas3,$repas4,$repas5,$repas6,$repas7,$repas8,$repas9,$repas10) || !ajoutAliment($Produit,$Fruit,$Boisson1,$Patisserie,$Entree,$Viande,$Poisson,$Pates,$Compose,$Fromage,$Dessert,$Boisson2)){
            $msg = "ajout impossible veuillez réesayer plus tard";
            require ('Questionnaire.html');
        } else{
          $url = "Merci.html"; 
          header("Location:".$url);
        }
  }

    function ajout($question,$pdej1,$pdej2,$pdej3,$pdej4,$pdej5,$pdej6,$pdej7,$repas1,$repas2,$repas3,$repas4,$repas5,$repas6,$repas7,$repas8,$repas9,$repas10){
      require('connectSQL.php');
      $sql = "INSERT INTO `alimentation` (`Mange Matin`, `Produit Laitier`, `Charcuterie`, `Oeuf`, `Fruit`, `Cereales`, `Boisson`,`Patisserie`, `Plat de Legume`, `Plat de Viande`, `Plat de Poisson`, `Plat de Pates`, `Plat Compose`, `Une Entree`, `Dessert`,`Fromage`,`Fast Food`,`Vegetarien`,`ID`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
      try{
              $commande = $pdo->prepare($sql);
              $exec = $commande->execute([$question,$pdej1,$pdej2,$pdej3,$pdej4,$pdej5,$pdej6,$pdej7,$repas1,$repas2,$repas3,$repas4,$repas5,$repas6,$repas7,$repas8,$repas9,$repas10,$_SESSION[`ID`]]);
              return true;
          }
          catch (PDOException $e) {
              echo utf8_encode("Echec de l'insertion : " . $e->getMessage() . "\n");
              die(); // On arrête tout.
          }
          return false;
        }

  

        
    function ajoutAliment($Produit,$Fruit,$Boisson1,$Patisserie,$Entree,$Viande,$Poisson,$Pates,$Compose,$Fromage,$Dessert,$Boisson2){
      require('connectSQL.php');
      $sql = "INSERT INTO `aliments` (`Produit Laitier`,`Fruit`,`Boisson1`,`Patisserie`,`Entree`,`Viande`,`Poisson`,`Pates`,`Compose`,`Fromage`,`Dessert`,`Boisson2`,`ID`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
          try{
              $commande = $pdo->prepare($sql);
              $exec = $commande->execute([$Produit,$Fruit,$Boisson1,$Patisserie,$Entree,$Viande,$Poisson,$Pates,$Compose,$Fromage,$Dessert,$Boisson2,$_SESSION[`ID`]]);
              getID();
              return true;
          }
          catch (PDOException $e) {
              echo utf8_encode("Echec de Insert : " . $e->getMessage() . "\n");
              die(); // On arrête tout.
          }
          return false;
        }
      
      function getID(){
        require('connectSQL.php');
        $sql="SELECT MAX(ID) FROM `info perso`";
            try {
              $commande = $pdo->prepare($sql);
              $bool = $commande->execute();
              if ($bool) {
                  $resultat = $commande->fetchAll(PDO::FETCH_ASSOC);
              }
            }
            catch (PDOException $e) {
            }
            $_SESSION[`ID`]=$resultat[0]["MAX(ID)"];
        }

?>
