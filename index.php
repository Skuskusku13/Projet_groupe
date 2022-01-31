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
    <!-- cdn fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css -->
    <link rel="stylesheet" href="css/style1.css">
</head>

<body>
    <div class="navigation_navbar">
        <div class="d-flex justify-content-evenly">
            <a href="index.php?page=0">
                <i class="fas fa-home"></i>Accueil
            </a>
            <a href="index.php?page=1">
                <i class="fas fa-user-tie"></i>Professeur
            </a>
            <a href="index.php?page=2">
                <i class="fas fa-user-graduate"></i>Etudiant
            </a>
            <a href="index.php?page=3">
                <i class="fas fa-chair"></i>Classe
            </a>
            <a href="index.php?page=4">
                <i class="fas fa-book-reader"></i>Matière
            </a>
            <a href="index.php?page=5">
                <i class="fas fa-sign-out-alt"></i>Déconnexion
            </a>

        </div>
    </div>

    <center>
        <h1>Bienvenue sur notre site sur le CFA</h1>

        <?php
        if (isset($_GET["page"])) {
            $page = $_GET["page"];
        } else {
            $page = 0;
        }
        switch ($page) {
            case 0:
                require_once("home.php");
                break;
            case 1:
                require_once("g_professeur.php");
                break;
            case 2:
                require_once("g_etudiant.php");
                break;
            case 3:
                require_once("g_classe.php");
                break;
            case 4:
                require_once("g_matiere.php");
                break;
            case 5: // deconnexion suppression de la connexion 
                session_destroy();
                header("Location: index.php"); // recharger la page 
                break;
        }
        ?>
    </center>
    <footer>
        <div class="d-flex justify-content-evenly">
            <div>
                <p class="text-center">Coryright©
                <ul>
                    <li>Groupe info cfa 2022 ;)</li>
                </ul>
                </p>
            </div>
            <div>
                <p class="text-center">Contact par mail :
                <ul>
                    <li><a href="mailto:d.levy@cfa-insta.fr">d.levy@cfa-insta.fr</a></li>
                    <li><a href="mailto:a.akilal@cfa-insta.fr">a.akilal@cfa-insta.fr</a></li>
                </ul>
                </p>
            </div>
            <div>
                <p class="text-center">Contact par téléphone :
                <ul>
                    <li><a href="tel:+33781267866">Dan LEVY</a></li>
                    <li><a href="tel:+33605743353">Amazigh AKILAL</a></li>
                </ul>
                </p>
            </div>
        </div>
    </footer>
</body>

</html>