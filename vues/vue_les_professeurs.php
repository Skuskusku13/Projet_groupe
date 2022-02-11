</br>
<h4> Liste des Professeurs </h4>

<form method="post" action="">
    Mot de recherche :
    <input type="text" name="mot">
    <input class="boutonP" type="submit" name="Rechercher" value="Rechercher">
</form>
<br />

<div style="width: 90%">
    <table class="table table-hover table-striped table-dark table_inline_flex" border="1">
        <tr>
            <td class="text-center align-midlle"> Id Professeur</td>
            <td class="text-center align-midlle"> Nom</td>
            <td class="text-center align-midlle"> Prénom</td>
            <td class="text-center align-midlle"> Email</td>
            <td class="text-center align-midlle"> Téléphone</td>
            <td class="text-center align-midlle"> Opérations</td>
        </tr>
        <?php
        foreach ($lesProfesseurs as $unProfesseur) {
            echo "<tr>";
            echo "<td class='text-center align-midlle'>" . $unProfesseur['idprofesseur'] . "</td>";
            echo "<td class='text-center align-midlle'>" . $unProfesseur['nom'] . "</td>";
            echo "<td class='text-center align-midlle'>" . $unProfesseur['prenom'] . "</td>";
            echo "<td class='text-center align-midlle'>" . $unProfesseur['email'] . "</td>";
            echo "<td class='text-center align-midlle'>" . $unProfesseur['tel'] . "</td>";
            echo "<td class='text-center align-midlle'>";
             if(isset($_SESSION['email']) and $_SESSION['role'] == "admin"){

            echo "<a href='home.php?page=1&action=sup&idprofesseur=" . $unProfesseur['idprofesseur'] . "'>";
            echo "<img src = 'images/delete.png' height = '30' width = '30'> ";
            echo "</a>";
            echo "<a href='home.php?page=1&action=edit&idprofesseur=" . $unProfesseur['idprofesseur'] . "'>";
            echo "<img src = 'images/edit.png' height = '30' width = '30'> ";
            echo "</a>";
             }

            echo "<a href='home.php?page=1&action=matiere&idprofesseur=" . $unProfesseur['idprofesseur'] . "'>";
            echo "<img src = 'images/matiere.png' height = '30' width = '30' style='object-fit: cover;'> ";
            echo "</a>";

            echo "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</div><br />