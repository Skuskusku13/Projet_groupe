<?php
session_start(); // demarrage de la session
if (isset($_SESSION['email'])) {
    header('Location: home.php');
    exit;
}
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
    <link rel="stylesheet" href="style1.css">
    <style>

    </style>
</head>

<body>
    <center>
        <!-- index.php === connexion 
        etape 1 : formulaire de connexion dans ce formulaire, 2input email + mdp et submit 
        etape 2 : faire le php et controler si mes input correspondent au valeurs de la table user
         Pour faire la fonction : 
            1. pour eviter toutes les erreurs, controler si le bouton est appuer ou pas (if)
            2. recuperer les input avec les $name
            3. controler si les champs ont été rempli (if)
            4. avec une requete selectionner les admins
            5. definir variable de session (mail, mdp) = UnUser de $email
            6. refaire un controle si $name est = a la $_SESSION['email'] 
            7. autoriser l'accès et faire une redirection avec header(location) vers home.php si c'est pas bon il reste dans index.php avec petit mot, identifiants incorrect
-->

        <h2>Connexion au site du CFA</h2><br />

        <form method="post" action="" class="form_connex">
            <h3>MERCI DE VOUS CONNECTER AVANT DE RENTER SUR NOTRE SITE</h2>
                <table class="table table-striped table-hover table_connexion" border="4" style="box-shadow: 10px 5px 5px black; border-color: black; margin: 50px auto;">
                    <tr>
                        <td class="font-weight-bold text-center align-middle">Email : </td>
                        <td><input type="email" name="email"></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold text-center align-middle">MDP : </td>
                        <td><input type="password" name="mdp"></td>
                    </tr>
                    <tr>
                        <td class="text-center align-middle"><input class="boutonP" type="reset" name="Annuler" value="Annuler"></td>
                        <td class="text-center align-middle"><input class="boutonP" type="submit" name="seConnecter" value="Valider"></td>
                    </tr>
                    <?php
                    if (isset($_POST['seConnecter'])) {
                        if (!empty($_POST['email']) && !empty($_POST['mdp'])) {
                            $email = $_POST['email'];
                            $mdp = $_POST['mdp'];
                            $unUser = selectUser($email);
                            // var_dump($unUser);
                            $_SESSION['email'] = $unUser['email'];
                            $_SESSION['mdp'] = $unUser['mdp'];
                            $_SESSION['role'] = $unUser['role'];
                            if ($_SESSION['email'] == $email && $_SESSION['mdp'] == $mdp) {
                                header("Location: home.php");
                            } else {
                                echo "Veuillez verifier vos identifiants !";
                            }
                        } else {
                            echo "Les champs ne sont pas remplis";
                        }
                    }
                    ?>
                </table>
        </form>
    </center>
</body>

</html>