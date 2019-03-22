<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Page d'authentification</title>
    <link rel="stylesheet" type="text/css" href="../CSS/myStyle.css">
    <link rel="stylesheet" type="text/css" href="../CSS/bootstrap.min.css">
</head>
<body>
    <?php require_once 'entete.php'; ?>
    <div class="container col-md-6 ">
        <div class="panel panel-default  ">
            <div class="panel-heading  ">
                <h1 class="panel-title">Authentification</h1>
            </div>
            <div class="panel-body">
                <form method="POST" action="authentifier.php" enctype="multipart/form-data">
                    <div class="form-group ">
                        <label class="control-lable">Login :</label>
                        <input type="text" name="username" class=" form-control">
                    </div>
                    <div class="form-group ">
                        <label class="control-lable">Mot de passe :</label>
                        <input type="password" name="pass" class=" form-control">
                    </div>
                    <div class="form-group ">
                        <input type="submit" value="Connexion">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html> 