<?php 
require_once 'security.php';
require_once 'roleScolarite.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>saisieInformations</title>
    <link rel="stylesheet" type="text/css" href="../CSS/myStyle.css">
    <link rel="stylesheet" type="text/css" href="../CSS/bootstrap.min.css">
</head>

<body>
    <?php require_once 'entete.php'; ?>
    <div class="container col-md-6 ">
        <div class=" container card spacer  ">
            <div class="card-header ">
                <h1>Formulaire d'inscription </h1>
            </div>
            <div class="card-body">
                <form method="POST" action="saveEtudiant.php" enctype="multipart/form-data">
                    <div class="form-group ">
                        <label class="control-lable">NOM :</label>
                        <input type="text" name="nom" class=" form-control">
                    </div>
                    <div class="form-group ">
                        <label class="control-lable">EMAIL:</label>
                        <input type="text" name="email" class=" form-control">
                    </div>
                    <div class="form-group ">
                        <label class="control-lable">PHOTO :</label>
                        <input type="file" name="photo">
                    </div>
                    <div class="form-group ">
                        <input type="submit" value="Enregistrer">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html> 