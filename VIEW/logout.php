<?php 
    session_start();
    unset($_SESSION['login']);
    Header("location: index.php");
?>