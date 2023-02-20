<?php
  session_start(); 
  $Entree =  isset($_POST['Entree'])?($_POST['Entree']):'';
  $Viande =  isset($_POST['Viande'])?($_POST['Viande']):'';
  $Poisson =  isset($_POST['Poisson'])?($_POST['Poisson']):'';
  $Pates=  isset($_POST['Pates'])?($_POST['Pates']):'';
  $Compose=  isset($_POST['Compose'])?($_POST['Compose']):'';
  $msg = '';
  

  if  (count($_POST)==0)
      require ('Aliment.html');
  else{
        if(!ajout($Entree,$Viande,$Poisson,$Pates,$Compose)){
            $msg = "ajout impossible veuillez réesayer plus tard";
            require ('Aliment.html');
        } else{
          $url = "Merci.html"; 
          header("Location:".$url);
        }
  }

    function ajout($Entree,$Viande,$Poisson,$Pates,$Compose){
      require('connectSQL.php');
      $sql = "INSERT INTO `Aliment` (Entree,Viande, Poisson, Pates, Compose) VALUES (?,?,?,?,?)";
          try{
              $commande = $pdo->prepare($sql);
              $exec = $commande->execute([$Entree,$Viande,$Poisson,$Pates,$Compose]);
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



