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
    
    ?>