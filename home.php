<?php
session_start();
if (isset($_SESSION['email']) == null) {
    header('Location: index.php');
    exit;
}
require_once('./fonctions/fonctions.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- cdn fontawesome -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css -->
    <link rel="stylesheet" href="style1.css">
    <title>Groupe CFA Insta</title>
</head>

<body>

    <div class="container_navbar_smart">
        <div style="float: left;">
            <a href="home.php?page=0">
                <img style="height: 60px;" src="images/logo.png" />
            </a>
        </div>
        <div class="toggle_burger" style="float: right;">
            <i class="fas fa-bars ouvrir"></i>
            <i class="fas fa-times fermer"></i>
        </div>
        <ul class="d-flex flex-wrap menu_smart">
            <!-- pages du menu -->
            <a href="home.php?page=0">
                <i class="fas fa-home"></i>Accueil
            </a>
            <a href="home.php?page=1">
                <i class="fas fa-user-tie"></i>Professeur
            </a>
            <a href="home.php?page=2">
                <i class="fas fa-user-graduate"></i>Etudiant
            </a>
            <a href="home.php?page=3">
                <i class="fas fa-chair"></i>Classe
            </a>
            <a href="home.php?page=4">
                <i class="fas fa-book-reader"></i>Matière
            </a>
            <a href="deconnexion.php">
                <i class="fas fa-sign-out-alt"></i>Déconnexion
            </a>
        </ul>
    </div>
    <!-- fin menu smart -->
    <div class="navigation_navbar">
        <div class="d-flex justify-content-evenly onglets">
            <a href="home.php?page=0">
                <img src="images/logo.png" />
            </a>
            <a href="home.php?page=0">
                <i class="fas fa-home"></i>Accueil
            </a>
            <a href="home.php?page=1">
                <i class="fas fa-user-tie"></i>Professeur
            </a>
            <a href="home.php?page=2">
                <i class="fas fa-user-graduate"></i>Etudiant
            </a>
            <a href="home.php?page=3">
                <i class="fas fa-chair"></i>Classe
            </a>
            <a href="home.php?page=4">
                <i class="fas fa-book-reader"></i>Matière
            </a>
            <a href="deconnexion.php">
                <i class="fas fa-sign-out-alt"></i>Déconnexion
            </a>
        </div>
    </div>

    <center>
        <h1>Bienvenue sur notre site sur le CFA</h1><br />

        <h3 style="font-size: 26px;">Accueil du site</h3>

        <h4>
            <?php
            echo '<br />Vous avez le rôle : ' . $_SESSION['role'];
            ?>
        </h4>

        <!-- menu smart -->

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
        }
        ?>
        <img class="img_accueil" style="object-fit: cover; background-color: black; padding: 10px; border-radius: 15px; margin-bottom: 30px;" src="images/background_tree.jpeg">
        <br />
        <p>
            Bienvenue dans le site du CFA INSTA. Créé en 2009 par Ryad Lebib et Hubert
            </br>Trapet,le CFA INSTA accueille et forme près de 600 étudiant(e)s par an pour leur assurer
            </br>un avenir professionnel. Venez nous voir, nous serons ravis de vous accueillir et de vous rendre service.
            </br>
        </p>
    </center>

    <footer class="responsive_footer" style="margin-top: 30px;">
        <div class="d-flex justify-content-evenly respon_li">
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
                    <li><a href="mailto:m.guendouzi@cfa-insta.fr">m.guendouzi@cfa-insta.fr</a></li>
                </ul>
                </p>
            </div>
            <div>
                <p class="text-center">Contact par téléphone :
                <ul>
                    <li><a href="tel:+33781267866">Dan LEVY</a></li>
                    <li><a href="tel:+33605743353">Amazigh AKILAL</a></li>
                    <li><a href="tel:+33767669505">Mehdi GUENDOUZI</a></li>
                </ul>
                </p>
            </div>
        </div>
    </footer>


    <!-- insertion de notre javascript -->
    <script type="text/javascript" src="js/script1.js"></script>
</body>

</html>