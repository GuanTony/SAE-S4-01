<?php
  session_start();
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
  $Boisson2=  isset($_POST['Boisson'])?($_POST['Boisson']):'';
  $msg = '';
  

  if  (count($_POST)==0)
      require ('Aliment.html');
  else{
        if(!ajout($Produit,$Fruit,$Boisson1,$Patisserie,,$Entree,$Viande,$Poisson,$Pates,$Compose,$Fromage,$Dessert,$Boisson2)){
            $msg = "ajout impossible veuillez réesayer plus tard";
            require ('Aliment.html');
        } else{
          $url = "Merci.html"; 
          header("Location:".$url);
        }
  }

    function ajout($Produit,$Fruit,$Boisson1,$Patisserie,$Entree,$Viande,$Poisson,$Pates,$Compose,$Fromage,$Dessert,$Boisson2){
      require('connectSQL.php');
      $sql = "INSERT INTO `Aliment` (Produit Laitier,Fruit,Boisson1,Patisserie,Entree,Viande, Poisson, Pates, Compose) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
          try{
              $commande = $pdo->prepare($sql);
              $exec = $commande->execute([$Produit,$Fruit,$Boisson1,$Patisserie,$Entree,$Viande,$Poisson,$Pates,$Compose,$Fromage,$Dessert,$Boisson2]);
              getID();
              return true;
          }
          catch (PDOException $e) {
              echo utf8_encode("Echec de select : " . $e->getMessage() . "\n");
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



