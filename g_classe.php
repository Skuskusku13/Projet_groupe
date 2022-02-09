</br>
</br>
<h3>Gestion des Classes</h3>
</br>

<?php

$laClasse = null;
$lesClasses = selectAllClasses();

 if(isset($_SESSION['email']) and $_SESSION['role'] == "admin"){
 
    if (isset($_GET['action']) && isset($_GET['idclasse'])){
        $action = $_GET['action'];
        $idclasse = $_GET['idclasse'];
        switch ($action) {
            case 'sup':
                deleteClasse($idclasse);
                break;
            case 'edit' :
                $laClasse = selectWhereClasse($idclasse);
                break;
        }
    }
    require_once ("vues/vue_insert_classe.php");
    if (isset($_POST['Modifier']))
    {
        updateClasse($_POST);

        header("Location: home.php?page=3");
    }
        if (isset($_POST['Valider']))
        {
            insertClasse($_POST);
        }
 } 
    if (isset($_POST['Rechercher']))
    {
        $mot = $_POST['mot'];
        $lesClasses = searchClasse($mot);
    }
    else {
        $lesClasses = selectAllClasses();  
    }
    
    require_once ("vues/vue_les_classes.php");
?>