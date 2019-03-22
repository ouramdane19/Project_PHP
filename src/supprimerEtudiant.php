<?php
require_once 'security.php';
require_once 'roleScolarite.php';
?>

<?php
$code = $_GET['code'];
require_once 'conn.php'; // forward quand la ressources n'est pas hros site
$ps = $pdo->prepare("DELETE FROM  etudiants  WHERE  CODE =?"); //prepare statement
$params = array($code);
$ps->execute($params);

require_once 'etudiants.php';

//header("location : etudiants.php");

?> 