<?php 
require_once 'security.php';
require_once 'roleScolarite.php';
?>
<?php
      //charger le fichier connection
      require_once 'conn.php';
      //recupération du contenu des champs de saisie
      echo $nom = $_POST['nom'];
      $email = $_POST['email'];
      //récupération du nom de la phtoto
      $nomPhoto = $_FILES["photo"]["name"];
      $file_tmp_name = $_FILES["photo"]["tmp_name"];
      $destination = "../images/ $nomPhoto";
      move_uploaded_file($file_tmp_name, $destination) or die("Error: fichier non chargé!");

      //Requête SQL
      $req = "INSERT INTO  etudiants ( NOM, EMAIL,PHOTO) VALUES (?,?,?)";
      $ps = $pdo->prepare($req);                    //prepare statement       
      $params = array($nom, $email, $nomPhoto);
      $ps->execute($params);
      header("location: etudiants.php");
      //require_once 'etudiants.php';

?> 