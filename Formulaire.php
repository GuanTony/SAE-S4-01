   <?php
  session_start(); 
  $name =  isset($_POST['name'])?($_POST['name']):'';
  $prenom =  isset($_POST['prenom'])?($_POST['prenom']):'';
  $Etablissement =  isset($_POST['Etablissement'])?($_POST['Etablissement']):'';
  $age =  isset($_POST['age'])?($_POST['age']):'';
  $msg = '';
  

  if  (count($_POST)==0)
      require ('Formulaire.html');
  else{
        if(!ajout($name,$prenom,$Etablissement,$age)){
            $msg = "ajout impossible veuillez réesayer plus tard";
            require ('Fourmulaire.html');
        } else{
          $url = "Questionnaire.html"; 
          header("Location:".$url);
        }
  }

    function ajout($name,$prenom,$Etablissement,$age){
      require('connectSQL.php');
      $sql = "INSERT INTO `info perso` (Nom, Prenom, Etablissement, Age) VALUES (?,?,?,?)";
          try{
              $commande = $pdo->prepare($sql);
              $exec = $commande->execute([$name,$prenom,$Etablissement,$age]);
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







