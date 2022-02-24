<?php 
     function connexion ()
     {
        //$con = mysqli_connect("localhost:8889","root", "root", "groupe_cfa_250"); 
        $con = mysqli_connect("localhost", "root", "", "groupe_cfa_250");
        if ($con == null)
        {
            echo "Erreur de connexion à la bdd";
        }
         return $con;
     }
    /*function connexion (){
        
        // teste de connexion pour double os
        $con1 = mysqli_connect("localhost:8889","root", "root", "groupe_cfa_250");
        $con2 = mysqli_connect("localhost", "root", "", "groupe_cfa_250");
        if ($con1 == false){
            return $con2;
        }

        //pour Mac
        
        //pour Windows
        //$con1 = mysqli_connect("localhost:8889","root", "root", "groupe_cfa_250");
        //$con2 = mysqli_connect("localhost", "root", "", "groupe_cfa_250");
       if ($con1 == null){
            echo "Erreur de connexion à la bdd";
        }
        return $con1;
        if ($con2 == null){
            echo "Erreur de connexion à la bdd";
        }
        return $con2;
    }*/

    function deconnexion ($con){
        mysqli_close($con);
    } 

// ******************* Classes *********************

function selectAllClasses (){
    $requete = "select * from classe; ";
    $con = connexion();
    if ($con){

        $lesClasses = mysqli_query($con, $requete); 
           // var_dump($lesClients);
    }
    else{
        return null;
    }
    deconnexion($con);
    return $lesClasses;
}

function insertClasse ($tab){
    $requete = "insert into classe values(null,'".$tab['nomClasse']."','".$tab['salle']."','".$tab['diplome']."', '".$tab['nbEtudiants']."');" ;
    // echo $requete;
    $con = connexion ();
    if ($con)
    {
        mysqli_query($con, $requete);
    }
    deconnexion($con);
}
function deleteClasse ($idclasse){
    $requete = "delete from classe where idclasse = ".$idclasse;
    // echo $requete;
    $con = connexion ();
    if ($con)
    {
        mysqli_query($con, $requete);
    }
    deconnexion($con);
}
function selectWhereClasse($idclasse){
    $requete = "select * from classe where idclasse = " .$idclasse;
    $con = connexion();
    if ($con){

        $lesClasses = mysqli_query($con, $requete);
        $uneClasse = mysqli_fetch_assoc($lesClasses);
    }
    else{
        return null;
    }
    deconnexion($con);
    return $uneClasse;
}
function updateClasse ($tab){
    $requete = "update classe set nomClasse = '".$tab['nomClasse'] ."', salle = '".$tab['salle'] ."', diplome = '".$tab['diplome'] ."', nbEtudiants = '".$tab['nbEtudiants'] ."' where idclasse = ".$tab['idclasse'];
     // echo $requete;
    $con = connexion ();
    if ($con)
    {
        mysqli_query($con, $requete);
    }
    deconnexion($con);
}
function searchClasse ($mot){
    $requete = "select * from classe where nomClasse like '%".$mot."%' or salle like '%".$mot."%' or diplome like '%".$mot."%' or nbEtudiants like '%".$mot."%'; ";
    $con = connexion();
    if ($con){

        $lesClasses = mysqli_query($con, $requete);
    }
    else{
        return null;
    }
    deconnexion($con);
    return $lesClasses;
}
function countClasses (){
    $requete = "select count(*) as nb from classe ;";
    $con = connexion();
    if ($con)
    {
        $resultat = mysqli_query($con, $requete);
        $nb = mysqli_fetch_assoc($resultat);
    } else {
        return null;
    }
    deconnexion($con);
    return $nb["nb"];
}

// ******************* Etudiants *********************

function selectAllEtudiants (){
    $requete = "select * from etudiant; ";
    $con = connexion();
    if ($con){

        $lesEtudiants = mysqli_query($con, $requete);
       // var_dump($lesClients);
    }
    else{
        return null;
    }
    deconnexion($con);
    return $lesEtudiants;
}
function insertEtudiant ($tab){
    $requete = "insert into etudiant values(null,'".$tab['nom']."','".$tab['prenom']."','".$tab['adresse']."', '".$tab['email']."', '".$tab['mdp']."', '".$tab['tel']."', '".$tab['idclasse']."');" ; //, 
    // echo $requete;
    $con = connexion ();
    if ($con)
    {
        mysqli_query($con, $requete);
    }
    deconnexion($con);
}
function deleteEtudiant ($idetudiant){
    $requete = "delete from etudiant where idetudiant = ".$idetudiant;
    // echo $requete;
    $con = connexion ();
    if ($con)
    {
        mysqli_query($con, $requete);
    }
    deconnexion($con);
}
function selectWhereEtudiant($idetudiant){
    $requete = "select * from etudiant where idetudiant = " .$idetudiant;
    $con = connexion();
    if ($con){

        $lesEtudiants = mysqli_query($con, $requete);
        $unEtudiant = mysqli_fetch_assoc($lesEtudiants);
       // var_dump($lesClients);
    }
    else{
        return null;
    }
    deconnexion($con);
    return $unEtudiant;
}

function updateEtudiant ($tab){
    $requete = "update etudiant set nom = '".$tab['nom'] ."', prenom = '".$tab['prenom'] ."', adresse = '".$tab['adresse'] ."', email = '".$tab['email'] ."', mdp = '".$tab['mdp'] ."', tel = '".$tab['tel'] ."', idclasse = '".$tab['idclasse']."' where idetudiant = ".$tab['idetudiant'];
    // echo $requete;
    $con = connexion ();
    if ($con)
    {
        mysqli_query($con, $requete);
    }
    deconnexion($con);
}
function searchEtudiants ($mot){
    $requete = "select * from etudiant where nom like '%".$mot."%' or prenom like '%".$mot."%' or adresse like '%".$mot."%' or email like '%".$mot."%' or tel like '%".$mot."%' or idclasse like '%".$mot."%'; ";
    $con = connexion();
    if ($con){

        $lesEtudiants = mysqli_query($con, $requete);
       // var_dump($lesClients);
    }
    else{
        return null;
    }
    deconnexion($con);
    return $lesEtudiants;
}
function countEtudiants (){
    $requete = "select count(*) as nb from etudiant ;";
    $con = connexion();
    if ($con)
    {
        $resultat = mysqli_query($con, $requete);
        $nb = mysqli_fetch_assoc($resultat);
    } else {
        return null;
    }
    deconnexion($con);
    return $nb["nb"];
}

function selectClassesEtudiants ($idetudiant)
    {
        $requete = "select * from classe where idclasse=".$idetudiant;
        $con = connexion ();
        if ($con)
        {
            $lesClasses = mysqli_query($con, $requete);
        }
        else 
        {
           deconnexion($con);
        }
           return $lesClasses;  
        
    }

// ******************* Professeur *********************

/***** fonction 1 ******/

function selectAllProfesseurs (){
    $requete = "select * from professeur; ";
    $con = connexion();
    if ($con){

        $lesProfesseurs = mysqli_query($con, $requete);
    }
    else{
        return null;
    }
    deconnexion($con);
    return $lesProfesseurs;
}

/***** fonction 2 ******/

function insertProfesseur ($tab){
    $requete = "insert into professeur values(null,'".$tab['nom']."','".$tab['prenom']."', '".$tab['email']."', '".$tab['mdp']."', '".$tab['tel']."');" ; 
    // echo $requete;
    $con = connexion ();
    if ($con)
    {
        mysqli_query($con, $requete);
    }
    deconnexion($con);
}

/***** fonction 3 ******/

function deleteProfesseur ($idprofesseur){
    $requete = "delete from professeur where idprofesseur = ".$idprofesseur;
    // echo $requete;
    $con = connexion ();
    if ($con)
    {
        mysqli_query($con, $requete);
    }
    deconnexion($con);
}

/***** fonction 4 ******/

function selectWhereProfesseur($idprofesseur){
    $requete = "select * from professeur where idprofesseur = " .$idprofesseur;
    $con = connexion();
    if ($con){

        $lesProfesseurs = mysqli_query($con, $requete);
        $unProfesseur = mysqli_fetch_assoc($lesProfesseurs);
    }
    else{
        return null;
    }
    deconnexion($con);
    return $unProfesseur;
}

/***** fonction 5 ******/

function updateProfesseur ($tab){
    $requete = "update professeur set nom = '".$tab['nom'] ."', prenom = '".$tab['prenom'] ."', email = '".$tab['email'] ."', mdp = '".$tab['mdp'] ."', tel = '".$tab['tel']."' where idprofesseur = ".$tab['idprofesseur'];
    // echo $requete;
    $con = connexion ();
    if ($con)
    {
        mysqli_query($con, $requete);
    }
    deconnexion($con);
}

/***** fonction 6 ******/

function searchProfesseurs ($mot){
    $requete = "select * from professeur where nom like '%".$mot."%' or prenom like '%".$mot."%' or email like '%".$mot."%' or tel like '%".$mot."%'; ";
    $con = connexion();
    if ($con){

        $lesProfesseurs = mysqli_query($con, $requete);
    }
    else{
        return null;
    }
    deconnexion($con);
    return $lesProfesseurs;
}

/***** fonction 7 ******/

function countProfesseurs (){
    $requete = "select count(*) as nb from professeur ;";
    $con = connexion();
    if ($con)
    {
        $resultat = mysqli_query($con, $requete);
        $nb = mysqli_fetch_assoc($resultat);
    } else {
        return null;
    }
    deconnexion($con);
    return $nb["nb"];
}

/***** fonction 8 ******/

function selectMatieresProfesseurs ($idprofesseur)
    {
        $requete = "select * from matiere where idprofesseur=".$idprofesseur;
        $con = connexion ();
        if ($con)
        {
            $lesMatieres = mysqli_query($con, $requete);
        }
        else 
        {
           deconnexion($con);
        }
           return $lesMatieres;  
        
    }

// ******************* Matiere *********************

function selectAllMatieres (){
    $requete = "select * from matiere; ";
    $con = connexion();
    if ($con){

        $lesMatieres = mysqli_query($con, $requete);
    }
    else{
        return null;
    }
    deconnexion($con);
    return $lesMatieres;
}

function insertMatiere ($tab){
    $requete = "insert into matiere values(null,'".$tab['nomMatiere']."','".$tab['coef']."','".$tab['nbHeures']."', '".$tab['idclasse']."', '".$tab['idprofesseur']."');" ;
     echo $requete;
    $con = connexion ();
    if ($con)
    {
        mysqli_query($con, $requete);
    }
    deconnexion($con);
}
function deleteMatiere ($idmatiere){
    $requete = "delete from matiere where idmatiere = ".$idmatiere;
    // echo $requete;
    $con = connexion ();
    if ($con)
    {
        mysqli_query($con, $requete);
    }
    deconnexion($con);
}
function selectWhereMatiere($idmatiere){
    $requete = "select * from matiere where idmatiere = " .$idmatiere;
    $con = connexion();
    if ($con){

        $lesMatieres = mysqli_query($con, $requete);
        $uneMatiere = mysqli_fetch_assoc($lesMatieres);
    }
    else{
        return null;
    }
    deconnexion($con);
    return $uneMatiere;
}
function updateMatiere ($tab){
    $requete = "update matiere set nomMatiere = '".$tab['nomMatiere'] ."', coef = '".$tab['coef'] ."', nbHeures = '".$tab['nbHeures'] ."', idclasse = '".$tab['idclasse'] ."', idprofesseur = '".$tab['idprofesseur'] ."' where idmatiere = ".$tab['idmatiere'];
    echo $requete;
    $con = connexion ();
    if ($con)
    {
        mysqli_query($con, $requete);
    }
    deconnexion($con);
}
function searchMatieres ($mot){
    $requete = "select * from matiere where nomMatiere like '%".$mot."%' or coef like '%".$mot."%' or nbHeures like '%".$mot."%' or idclasse like '%".$mot."%' or idprofesseur like '%".$mot."%'; ";
    $con = connexion();
    if ($con){

        $lesMatieres = mysqli_query($con, $requete);
    }
    else{
        return null;
    }
    deconnexion($con);
    return $lesMatieres;
}
function countMatieres (){
    $requete = "select count(*) as nb from matiere ;";
    $con = connexion();
    if ($con)
    {
        $resultat = mysqli_query($con, $requete);
        $nb = mysqli_fetch_assoc($resultat);
    } else {
        return null;
    }
    deconnexion($con);
    return $nb["nb"];
}

// ******************* Users *********************

function selectUser ($email){
    $requete = "select * from user where email='$email'";
    $con = connexion();
    if ($con)
    {
        $resultat = mysqli_query($con, $requete);
        $unUser = mysqli_fetch_assoc($resultat);
    } else {
        return null;
    }
    deconnexion($con);
    return $unUser;
}
?>