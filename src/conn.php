<?php require_once 'security.php'; ?>
<?php
// nouvelle méthode 
try {
    $strConnection = 'mysql:host=localhost; dbname=db_scolarite';
    $pdo = new PDO($strConnection, 'login', 'password');
} catch (PDOException $e) {
    $msg = 'ERREUR PDO DANS ' . $e->getMessage();
    die($msg);
}
?> 