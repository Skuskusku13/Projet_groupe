<?php 
    /* 
        si on arrive sur deconnexion.php c'est qu'il a clqiué sur un lien qui l'enmene ici
        definir un session start
        definir un session destroy => index.php
        faire un exit; 
    */
    session_start();
    $_SESSION['email'] = null;
    session_destroy();
    header('Location: index.php');
    exit;
?>