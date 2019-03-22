<?php 
require_once 'security.php';
require_once 'roleScolarite.php';
?>
<?php
$code = $_GET['code'];
require_once 'conn.php'; // forward quand la ressources n'est pas hros site
$ps = $pdo->prepare("SELECT * FROM  etudiants  WHERE  CODE =?"); //prepare statement
$params = array($code);
$ps->execute($params);
$ETudiant = $ps->fetch();
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
                <h1>Etudiant <?php echo ($ETudiant['NOM']) ?> (CODE: <?php echo ($code); ?>) </h1>
            </div>
            <div class="card-body">
                <form method="POST" action="modifierEtudiant.php" enctype="multipart/form-data">
                    <div class="form-group ">
                        <label class="control-lable">CODE: <?php echo ($code); ?> </label>
                        <input type="hidden" name="code" value="<?php echo ($code); ?>" readonly="readonly" class=" form-control">
                    </div>
                    <div class="form-group ">
                        <label class="control-lable">NOM :</label>
                        <input type="text" name="nom" value="<?php echo ($ETudiant['NOM']) ?>" class=" form-control">
                    </div>
                    <div class="form-group ">
                        <label class="control-lable">EMAIL:</label>
                        <input type="text" name="email" value="<?php echo ($ETudiant['EMAIL']) ?> " class=" form-control">
                    </div>
                    <div class="form-group ">
                        <label class="control-lable">PHOTO :</label>
                        <input type="file" name="photo" class="control-lable">
                        <img src="../images/<?php echo ($ETudiant['PHOTO']) ?>">
                    </div>
                    <div class="form-group ">
                        <input type="submit" value="Modifier">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html> 