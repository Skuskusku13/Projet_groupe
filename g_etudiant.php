</br>
</br>
<h3>Gestion des Étudiants</h3>
</br>

<?php

$lesEtudiants = null;
$lEtudiant = null;
$lesClasses = selectAllClasses();
// var_dump($lesClasses);
if (isset($_GET['action']) && isset($_GET['idetudiant'])) {
    $action = $_GET['action'];
    $idetudiant = $_GET['idetudiant'];
    if ($action == "classe") {
        $lesClasses = selectClassesEtudiants($idetudiant);
    }
}

if (isset($_SESSION['email']) and $_SESSION['role'] == "admin") {

    if (isset($_GET['action']) && isset($_GET['idetudiant'])) {
        $action = $_GET['action'];
        $idetudiant = $_GET['idetudiant'];
        switch ($action) {
            case 'sup':
                deleteEtudiant($idetudiant);
                break;
            case 'edit':
                $lEtudiant = selectWhereEtudiant($idetudiant);
                break;
            case 'classe':
                $lesClasses = selectClassesEtudiants($idetudiant);
                break;
        }
    }
    require_once("vues/vue_insert_etudiant.php");
    if (isset($_POST['Modifier'])) {
        updateEtudiant($_POST);

        header("Location: home.php?page=2");
    }
    if (isset($_POST['Valider'])) {
        insertEtudiant($_POST);
    }
}
if (isset($_POST['Rechercher'])) {
    $mot = $_POST['mot'];
    $lesEtudiants = searchEtudiants($mot);
} else {
    $lesEtudiants = selectAllEtudiants();
}

require_once("vues/vue_les_etudiants.php");

echo "<br /> <br />";
    if ($lesClasses != null)
    {
        echo "<h2>Listes des classes de l'étudiant : </h2>";
        require_once ("vues/vue_les_classes_etudiants.php");
    }
?>