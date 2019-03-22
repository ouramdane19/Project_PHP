
<?php
//charger le fichier connection
 require_once 'conn.php';
//recupération du contenu des champs de saisie
 $login= $_POST['username'];
 $motDePasse=md5($_POST['pass']);
 
  //Requête SQL
 $req="SELECT * FROM users WHERE LOGIN=? AND PASSWORD=? ";
 $ps= $pdo->prepare($req);                    
 $params= array($login,$motDePasse) ;
 $ex=$ps->execute($params);
 echo($ex);
 
 if($user=$ps->fetch()){
     session_start();
     $_SESSION['PROFILE']= $user;  //stocker l'objet user dans 
     header("location: etudiants.php");
 } else {
    
     header("location: login.php");
    
 }
 
?>