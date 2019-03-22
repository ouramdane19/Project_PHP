<?php require_once 'security.php'; ?>

<?php
require_once 'conn.php';   // établire une connexion 
$req = "SELECT * FROM etudiants "; // formuler la requête
$ps = $pdo->prepare($req);                    //prepare statement : préparer la requête req, il se pourait qu'elle contient de paramètres
$ps->execute();                              // execution de la requête préparée
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>afficherEtudiants</title>
    <link rel="stylesheet" type="text/css" href="../CSS/myStyle.css">
    <link rel="stylesheet" type="text/css" href="../CSS/bootstrap.min.css">
</head>
<body>
    <?php require_once 'entete.php'; ?>
    <div class="container col-md-12 col-xs-12  ">
        <h1>Liste des étudiants </h1>
        <table class="table table-striped table-bordered table-hover table-sm">
            <thead class="thead-dark">
                <tr>
                    <th>CODE</th>
                    <th>NOM </th>
                    <th>Email </th>
                    <th>Photo </th>
                </tr>
            </thead>
            <tbody>
                <?php while ($ET = $ps->fetch()) { ?>
                <tr>
                    <td><?php echo ($ET['CODE']) ?> </td>
                    <td><?php echo ($ET['NOM']) ?> </td>
                    <td><?php echo ($ET['EMAIL']) ?> </td>
                    <td> <img src="../images/ <?php echo ($ET['PHOTO']) ?>" alt="photo de l'étudiant" width="304" height="236"> </td>
                    <td><a onclick="return confirm ('Veuillez confirmer la suppression du fichier !');" href="supprimerEtudiant.php?code=<?php echo ($ET['CODE']) ?> ">Supprimer </a></td>
                    <td><a href="editerEtudiant.php?code=<?php echo ($ET['CODE']) ?> ">Editer </a></td>
                </tr>
                <?php 
			} ?>
            </tbody>
        </table>
    </div>
</body>
</html> 