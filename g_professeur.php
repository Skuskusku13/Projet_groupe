</br>
</br>
<h3> Gestion des Professeurs </h3>
</br>
<?php

$lesMatieres = null;
$lesProfesseurs = null;
$leProfesseur = null;
if (isset($_GET['action']) && isset($_GET['idprofesseur'])){
    $action = $_GET['action'];
    $idprofesseur = $_GET['idprofesseur'];
   if ($action == "matiere"){
        $lesMatieres = selectMatieresProfesseurs($idprofesseur);
    } 
}

     if(isset($_SESSION['email']) and $_SESSION['role'] == "admin"){
       
        if (isset($_GET['action']) && isset($_GET['idprofesseur'])){
            $action = $_GET['action'];
            $idprofesseur = $_GET['idprofesseur'];
            switch ($action) {
                case 'sup':
                    deleteProfesseur($idprofesseur);
                    break;
                case 'edit' :
                    $leProfesseur = selectWhereProfesseur($idprofesseur);
                    break;
                case 'matiere' :
                    $lesMatieres = selectMatieresProfesseurs($idprofesseur);
                    break; 
            }
        }
        require_once ("vues/vue_insert_professeur.php");
        if (isset($_POST['Modifier']))
        {
            updateProfesseur($_POST);

            header("Location: home.php?page=1");
        }
        if (isset($_POST['Valider']))
        {
            insertProfesseur($_POST);
        }
    }
    if (isset($_POST['Rechercher']))
    {
        $mot = $_POST['mot'];
        $lesProfesseurs = searchProfesseurs($mot);
    }
    else 
    {
        $lesProfesseurs = selectAllProfesseurs();
    }
    
    require_once ("vues/vue_les_professeurs.php");

    echo "<br /> <br />";
    if ($lesMatieres != null)
    {
        echo "<h2>Listes des matières du Professeur : </h2>";
        require_once ("vues/vue_les_matieres_professeurs.php");
    }
?>
