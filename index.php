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
    <style>
        /* media queries / et navbar_smart  */

        .container_navbar_smart {
            display: none;
        }

        .navigation_navbar {
            background: radial-gradient(circle, rgba(128, 188, 238, 1) 0%, rgba(77, 114, 230, 1) 100%);
            color: black;
            position: fixed;
            width: 100%;
            padding: 0;
            font-weight: 700;
        }

        .navigation_navbar .onglets a {
            color: black;
            text-decoration: none;
            padding: 0 30px;
            font-size: 19px;
            line-height: 110px;
            vertical-align: middle;
        }

        .navigation_navbar a i {
            margin-right: 5px;
        }

        .navigation_navbar .onglets img {
            height: 50px;
            margin: 0;
            padding: 0;
        }

        .navigation_navbar .onglets a:not(:first-child):hover {
            background-color: #3F4856;
            color: #F1F1F1;
            transition: 0.3s ease-in;
        }

        @media all and (max-width: 1200px) {

            .img_accueil {
                width: 300px;
            }

            .en_tete {
                margin: 50px;
            }

            .navigation_navbar,
            .navigation_navbar i {
                display: none;
            }

            .container_navbar_smart {
                display: block;
                width: 100%;
                background-color: #74A7E9;
                height: 100px;
                z-index: 100;
                min-width: 360px;
                font-size: 1.5rem;
            }

            .container_navbar_smart ul {
                z-index: 1;
                display: flex;
                flex-direction: column;
                list-style: none;
            }

            .container_navbar_smart ul a {
                padding: 20px;
            }

            .container_navbar_smart ul a:first-child {
                margin-top: 90px;
                padding: 20px;
            }

            .container_navbar_smart img {
                position: relative;
                margin: 22px 5px;
                line-height: 100px;
                vertical-align: middle;
                z-index: 120;
            }

            .container_navbar_smart ul a {
                text-decoration: none;
                font-weight: 700;
                color: #fff;
            }

            .container_navbar_smart i {
                position: absolute;
                font-size: 3rem;
                right: 5px;
                top: 0;
                cursor: pointer;
                color: #fff;
                z-index: 100;
            }

            .toggle_burger i {
                position: relative;
                margin: 0 20px;
                line-height: 100px;
                vertical-align: middle;
            }

            .ouvrir {
                display: block;
                z-index: 100;
            }

            .fermer {
                display: none;
            }

            .open .ouvrir {
                display: none;
            }

            .open .fermer {
                display: block;
            }

            .menu_smart {
                position: absolute;
                transform: translateX(-100%);
                transition: 0.5s ease-in-out;
                width: 100%;
                height: 100vh;
                background-color: #74A7E9;
                z-index: -1;
            }

            .open .menu_smart {
                transform: translateX(0);
            }

            .menu_smart i {
                display: none;
            }

            .responsive_footer li,
            .responsive_footer a {
                font-size: 12px;
            }
        }

        /* fin des media et navbar  */

        @font-face {
            font-family: 'Roboto Mono', monospace;
            ;
            src: url("fonts/RobotoMono.ttf");
        }

        body {
            background: linear-gradient(180deg, rgba(34, 147, 195, 1) 27%, rgba(45, 253, 235, 0.9626225490196079) 100%);
            color: #F1F1F1;
            background-repeat: no-repeat;
            font-family: 'Roboto Mono', monospace;
        }

        h1 {
            padding-top: 70px;
        }

        footer {
            max-height: 150px;
            /*position: absolute;*/
            bottom: 0;
            width: 100%;
            color: black;
            background: radial-gradient(circle, rgba(128, 188, 238, 1) 0%, rgba(77, 114, 230, 1) 100%);
            padding: 10px 0;
            font-weight: 700;
        }

        ul {
            list-style-type: none;
        }

        ul a {
            text-decoration: none;
            color: black;
        }
    </style>
</head>

<body>

    <!-- menu smart -->



    <div class="container_navbar_smart">
        <div style="float: left;">
            <a href="index.php?page=0">
                <img style="height: 60px;" src="images/logo.png" />
            </a>
        </div>

        <div class="toggle_burger" style="float: right;">
            <i class="fas fa-bars ouvrir"></i>
            <i class="fas fa-times fermer"></i>
        </div>

        <ul class="d-flex flex-wrap menu_smart">
            <!-- pages du menu -->
            <a href="index.php?page=6">
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
        </ul>
    </div>
    <!-- fin menu smart -->


    <div class="navigation_navbar">
        <div class="d-flex justify-content-evenly onglets">
            <a href="index.php?page=0">
                <img src="images/logo.png" />
            </a>
            <a href="index.php?page=0">
            </a>
            <a href="index.php?page=1">
            </a>
            <a href="index.php?page=2">
            </a>
            <a href="index.php?page=3">
            </a>
            <a href="index.php?page=4">
            </a>
            <a href="index.php?page=5">
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
    <footer class="repsonsive_footer" style="margin-top: 30px;">
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
    <script type="text/javascript">
        // javascript menu smart

        let burger = document.querySelector('.toggle_burger');
        let contains_smart = document.querySelector('.container_navbar_smart');

        burger.addEventListener('click', () => {
            contains_smart.classList.toggle('open');
        });
    </script>
</body>

</html>