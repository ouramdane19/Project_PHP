<?php 
    session_start();
    
    if (!($_SESSION['PROFILE'])){
        header("location: login.php");
    }
?>
