</br>
</br>
<h3>Gestion des Matières</h3>
</br>

<?php

 $laMatiere = null;
 $leProfesseur = null;
 $lesMatieres = selectAllMatieres();
 $lesClasses = selectAllClasses();
 $lesProfesseurs = selectAllProfesseurs();
 if (isset($_GET['action']) && isset($_GET['idmatiere'])){
    $action = $_GET['action'];
    $idmatiere = $_GET['idmatiere'];
}

     if(isset($_SESSION['email']) and $_SESSION['role'] == "admin"){
       
        if (isset($_GET['action']) && isset($_GET['idmatiere'])){
            $action = $_GET['action'];
            $idmatiere = $_GET['idmatiere'];
            switch ($action) {
                case 'sup':
                    deleteMatiere($idmatiere);
                    break;
                case 'edit' :
                    $laMatiere = selectWhereMatiere($idmatiere);
                    break; 
            }
        }
        require_once ("vues/vue_insert_matiere.php");
        if (isset($_POST['Modifier']))
        {
            updateMatiere($_POST);

            header("Location: home.php?page=4");
        }
        if (isset($_POST['Valider']))
        {
            insertMatiere($_POST);
        }
    }
    if (isset($_POST['Rechercher']))
    {
        $mot = $_POST['mot'];
        $lesMatieres = searchMatieres($mot);
    }
    else 
    {
        $lesMatieres = selectAllMatieres();
        
    }

    require_once ("vues/vue_les_matieres.php");

    echo "<br /> <br />";
   /* if ($lesMatieres != null)
    {
        echo "<h2>Listes des classes de l'étudiant : </h2>";
        require_once ("vues/vue_les_matieres_professeurs.php");
    } */
?>