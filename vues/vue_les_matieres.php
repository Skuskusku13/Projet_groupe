</br>
<h4> Liste des Matières </h4>

<form method="post" action="">
    Mot de recherche : 
    <input type="text" name="mot">
    <input type="submit" name="Rechercher" value="Rechercher">
</form>
<br />

<table class="table table-hover table-striped table-dark" border ="1">
    <tr>
        <td class="text-center align-midlle"> Id Matiere</td>
        <td class="text-center align-midlle"> Nom Matière</td>
        <td class="text-center align-midlle"> Coefficient</td>
        <td class="text-center align-midlle"> Nombes d'heures</td>
        <td class="text-center align-midlle"> Id Classe</td>
        <td class="text-center align-midlle"> Id Professeur</td>
        <td class="text-center align-midlle"> Opérations</td>
    </tr>
    <?php 
         foreach ($lesMatieres as $uneMatiere) {
            echo "<tr>";
                echo "<td class='text-center align-midlle'>".$uneMatiere['idmatiere']."</td>";
                echo "<td class='text-center align-midlle'>".$uneMatiere['nomMatiere']."</td>";
                echo "<td class='text-center align-midlle'>".$uneMatiere['coef']."</td>";
                echo "<td class='text-center align-midlle'>".$uneMatiere['nbHeures']."</td>";
                echo "<td class='text-center align-midlle'>".$uneMatiere['idclasse']."</td>";
                echo "<td class='text-center align-midlle'>".$uneMatiere['idprofesseur']."</td>";
                echo "<td class='text-center align-midlle' style='width: 200px;'>";
                    // if(isset($_SESSION['email']) and $_SESSION['role'] == "admin"){

                        echo "<a href='index.php?page=2&action=sup&idmatiere=".$uneMatiere['idmatiere']."'>";
                        echo "<img src = 'images/delete.png' height = '30' width = '30'> ";
                        echo "</a>";
                        echo "<a href='index.php?page=2&action=edit&idmatiere=".$uneMatiere['idmatiere']."'>";
                        echo "<img src = 'images/edit.png' height = '30' width = '30'> ";
                        echo "</a>";
                    // }

                echo "</td>";
            echo "</tr>";
        }
    ?>
</table>

