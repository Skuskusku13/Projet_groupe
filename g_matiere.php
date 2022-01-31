</br>
</br>
<h3>Gestion des Matières</h3>
</br>

<?php

 $lesMatieres = null;
 $laMatiere = null;
 $lesProfesseurs = selectAllProfesseurs();
 $lesClasses = selectAllClasses();
 
 if (isset($_GET['action']) && isset($_GET['idmatiere'])){
    $action = $_GET['action'];
    $idmatiere = $_GET['idmatiere'];
}

    // if(isset($_SESSION['email']) and $_SESSION['role'] == "admin"){
       
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

            header("Location: index.php?page=4");
        }
        if (isset($_POST['Valider']))
        {
            insertMatiere($_POST);
        }
   // }
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

?>
