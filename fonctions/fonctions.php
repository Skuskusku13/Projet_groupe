<?php 
    function connexion (){
        $con = mysqli_connect("localhost:8889","root", "root", "groupe_cfa_250");
        if ($con ==null){
            echo "Erreur de connexion à la bdd";
        }
        return $con;
    }

    function deconnexion ($con){
        mysqli_close($con);
    } 

// ******************* Classes *********************


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
    $requete = "insert into etudiant values(null,'".$tab['nom']."','".$tab['prenom']."','".$tab['adresse']."', '".$tab['email']."', '".$tab['mdp']."', '".$tab['tel']."', '".$tab['idclasse']."');" ;
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

?>