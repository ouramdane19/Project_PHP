<?php 
 if(!isset($_SESSION)) 
 { 
    session_start();
 } 

if (!($_SESSION['PROFILE']['ROLE']=="SCOLARITE")) {
    header("location:$_SERVER[HTTP_REFERER]") ;
}
?>

