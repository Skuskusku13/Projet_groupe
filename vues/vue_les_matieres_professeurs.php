<div style="width: 90%;">
    <table class="table table-striped table-hover table_inline_flex" border="4" style="box-shadow: 10px 5px 5px black; border-color: black;">
        <tr>
            <td class="font-weight-bold text-center align-midlle"> Id Matiere</td>
            <td class="font-weight-bold text-center align-midlle"> Nom Matière</td>
            <td class="font-weight-bold text-center align-midlle"> Coefficient</td>
            <td class="font-weight-bold text-center align-midlle"> Nombes d'heures</td>
            <td class="font-weight-bold text-center align-midlle"> Id Classe</td>
            <td class="font-weight-bold text-center align-midlle"> Id Professeur</td>
        </tr>
        <?php
        foreach ($lesMatieres as $uneMatiere) {
            echo "<tr>";
            echo "<td class='font-weight-bold text-center align-middle'>" . $uneMatiere['idmatiere'] . "</td>";
            echo "<td class='font-weight-bold text-center align-middle'>" . $uneMatiere['nomMatiere'] . "</td>";
            echo "<td class='font-weight-bold text-center align-middle'>" . $uneMatiere['coef'] . "</td>";
            echo "<td class='font-weight-bold text-center align-middle'>" . $uneMatiere['nbHeures'] . "</td>";
            echo "<td class='font-weight-bold text-center align-middle'>" . $uneMatiere['idclasse'] . "</td>";
            echo "<td class='font-weight-bold text-center align-middle'>" . $uneMatiere['idprofesseur'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</div> <br />