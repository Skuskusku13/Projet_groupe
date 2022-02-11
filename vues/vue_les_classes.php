<h4> Liste des Classes </h4>

<form method="post" action="">
    Mot de recherche :
    <input type="text" name="mot">
    <input class="boutonP" type="submit" name="Rechercher" value="Rechercher">
</form>
<br />

<div style="width: 90%;">
    <table class="table table-hover table-striped table-dark table_inline_flex" border="1">
        <tr>
            <td class="text-center align-midlle"> Id Classe</td>
            <td class="text-center align-midlle"> Nom Classe</td>
            <td class="text-center align-midlle"> Salle </td>
            <td class="text-center align-midlle"> Diplôme</td>
            <td class="text-center align-midlle"> Nombre Etudiants</td>
             <?php  if(isset($_SESSION['email']) and $_SESSION['role'] == "admin"){
                     echo "<td class='text-center align-midlle'> Opérations</td>";
                     }
                    ?> 
        </tr>
        <?php
        foreach ($lesClasses as $uneClasse) {
            echo "<tr>";
            echo "<td class='text-center align-middle'>" . $uneClasse['idclasse'] . "</td>";
            echo "<td class='text-center align-middle'>" . $uneClasse['nomClasse'] . "</td>";
            echo "<td class='text-center align-middle'>" . $uneClasse['salle'] . "</td>";
            echo "<td class='text-center align-middle'>" . $uneClasse['diplome'] . "</td>";
            echo "<td class='text-center align-middle'>" . $uneClasse['nbEtudiants'] . "</td>";
            if(isset($_SESSION['email']) and $_SESSION['role'] == "admin"){
            echo "<td class='text-center align-middle'>";
            echo "<a href='home.php?page=3&action=sup&idclasse=" . $uneClasse['idclasse'] . "'>";
            echo "<img src = 'images/delete.png' height = '30' width = '30'> ";
            echo "</a>";
            echo "<a href='home.php?page=3&action=edit&idclasse=" . $uneClasse['idclasse'] . "'>";
            echo "<img src = 'images/edit.png' height = '30' width = '30'> ";
            echo "</a>";
            echo "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</div><br />