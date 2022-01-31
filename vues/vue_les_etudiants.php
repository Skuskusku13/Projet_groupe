</br>
<h4> Liste des Étudiants </h4>

<form method="post" action="">
    Mot de recherche : 
    <input type="text" name="mot">
    <input type="submit" name="Rechercher" value="Rechercher">
</form>
<br />

<table class="table table-hover table-striped table-dark" border ="1">
    <tr>
        <td class="text-center align-midlle"> Id Etudiant</td>
        <td class="text-center align-midlle"> Nom Etudiant</td>
        <td class="text-center align-midlle"> Prenom Etudiant</td>
        <td class="text-center align-midlle"> Adresse</td>
        <td class="text-center align-midlle"> Email</td>
        <td class="text-center align-midlle"> Téléphone</td>
        <td class="text-center align-midlle"> Id Classe</td>
        <td class="text-center align-midlle"> Opérations</td>
    </tr>
    <?php 
         foreach ($lesEtudiants as $unEtudiant) {
            echo "<tr>";
                echo "<td class='text-center align-midlle'>".$unEtudiant['idetudiant']."</td>";
                echo "<td class='text-center align-midlle'>".$unEtudiant['nom']."</td>";
                echo "<td class='text-center align-midlle'>".$unEtudiant['prenom']."</td>";
                echo "<td class='text-center align-midlle'>".$unEtudiant['adresse']."</td>";
                echo "<td class='text-center align-midlle'>".$unEtudiant['email']."</td>";
                echo "<td class='text-center align-midlle'>".$unEtudiant['tel']."</td>";
                echo "<td class='text-center align-midlle'>".$unEtudiant['idclasse']."</td>";
                echo "<td class='text-center align-midlle' style='width: 200px;'>";
                    // if(isset($_SESSION['email']) and $_SESSION['role'] == "admin"){

                        echo "<a href='index.php?page=2&action=sup&idetudiant=".$unEtudiant['idetudiant']."'>";
                        echo "<img src = 'images/delete.png' height = '30' width = '30'> ";
                        echo "</a>";
                        echo "<a href='index.php?page=2&action=edit&idetudiant=".$unEtudiant['idetudiant']."'>";
                        echo "<img src = 'images/edit.png' height = '30' width = '30'> ";
                        echo "</a>";
                    // }
                    // attention ligne 45 modifier le vehicule&idetudiant 
                    echo "<a href='index.php?page=2&action=classe&idetudiant=".$unEtudiant['idetudiant']."'>";
                    echo "<img src = 'images/classe.png' height = '30' width = '30' style='object-fit: cover;'> ";
                    echo "</a>";
                echo "</td>";
            echo "</tr>";
        }
    ?>
</table>