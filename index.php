<?php
session_start(); // demarrage de la session
    require_once("fonctions/fonctions.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet groupe Info CFA</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- css -->
    <link rel="stylesheet" href="css/style1.css">
</head>

<body>
    <center>
        <h1>Bienvenue sur notre site sur le CFA</h1>
        </br>
        <a href="index.php?page=0">
            <img src="images/home.png" height="40" width="40">
        </a>
        <a href="index.php?page=1">
            <img src="images/professeur.png" height="40" width="40">
        </a>
        <a href="index.php?page=2">
            <img src="images/eleve.png" height="40" width="40">
        </a>
        <a href="index.php?page=3">
            <img src="images/classe.png" height="40" width="40">
        </a>
        <a href="index.php?page=4">
            <img src="images/matiere.png" height="40" width="40">
        </a>
        <a href="index.php?page=5">
            <img style="object-fit: cover; transform: rotate(180deg);" src="images/deconnexion.png" height="40" width="40">
        </a>

        <?php
            if(isset($_GET["page"])){
                $page = $_GET["page"];
            }else {
                $page = 0; 
            } switch ($page) {
                    case 0 : require_once("home.php");
                        break;
                    case 1 : require_once("g_professeur.php");
                        break;
                    case 2: require_once("g_etudiant.php");
                        break;
                    case 3 : require_once("g_classe.php");
                        break;
                    case 4 : require_once("g_matiere.php");
                        break;
                    case 5 : // deconnexion suppression de la connexion 
                        session_destroy();
                        header("Location: index.php"); // recharger la page 
                        break;
                }
        ?>
    </center>
</body>

</html>