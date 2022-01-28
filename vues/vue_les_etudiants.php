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
                echo "<td >".$unEtudiant['idetudiant']."</td>";
                echo "<td>".$unEtudiant['nom']."</td>";
                echo "<td>".$unEtudiant['prenom']."</td>";
                echo "<td>".$unEtudiant['adresse']."</td>";
                echo "<td>".$unEtudiant['email']."</td>";
                echo "<td>".$unEtudiant['tel']."</td>";
                echo "<td>".$unEtudiant['idclasse']."</td>";
                echo "<td style='width: 200px;'>";
                    // if(isset($_SESSION['email']) and $_SESSION['role'] == "admin"){

                        echo "<a href='index.php?page=1&action=sup&idetudiant=".$unEtudiant['idetudiant']."'>";
                        echo "<img src = 'images/sup.png' height = '30' width = '30'> ";
                        echo "</a>";
                        echo "<a href='index.php?page=1&action=edit&idetudiant=".$unEtudiant['idetudiant']."'>";
                        echo "<img src = 'images/edit.png' height = '30' width = '30'> ";
                        echo "</a>";
                   // }
// attention ligne 45 modifier le vehicule&idetudiant 
                    echo "<a href='index.php?page=1&action=vehicule&idetudiant=".$unEtudiant['idetudiant']."'>";
                    echo "<img src = 'images/vehicule_.png' height = '30' width = '30' style='object-fit: cover;'> ";
                    echo "</a>";
                echo "</td>";
            echo "</tr>";
        }
    ?>
</table>