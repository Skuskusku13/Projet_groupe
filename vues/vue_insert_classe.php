<h4>Insertion d'une classe</h4>

<form method="post" action="">
    <table class="table table-hover table_insert" border="0">
        <tr>
            <td class="align-middle text-center">Nom Classe :</td>
            <td>
                <input type="text" name="nomClasse" required value="<?php if($laClasse != null) echo $laClasse['nomClasse']; ?>">
            </td>
        </tr>
        <tr>
            <td class="align-middle text-center">Salle :</td>
            <td>
                <input type="text" name="salle" required value="<?php if($laClasse != null) echo $laClasse['salle']; ?>">
            </td>
        </tr>
        <tr>
            <td class="align-middle text-center">Diplôme :</td>
            <td>
                <input type="text" name="diplome" required value="<?php if($laClasse != null) echo $laClasse['diplome']; ?>">
            </td>
        </tr>
        <tr>
            <td class="align-middle text-center">Nombre Etudiants :</td>
            <td>
                <input type="text" name="nbEtudiants" value="<?php if($laClasse != null) echo $laClasse['nbEtudiants']; ?>">
            </td>
        </tr>
        <tr>
            <td class="align-middle text-center">Id Classe Etudiant :</td>
            <td>
            <select name="idclasse">
                    <?php
                        foreach ($lesClasses as $uneClasse){
                            echo "<option value='".$uneClasse['idclasse']."'>";
                            echo $uneClasse['idclasse']."-- ".$uneClasse['nomClasse']."  ".$uneClasse['salle'];
                            echo "</option>";
                        }
                    ?>
                </select>
            </td>
        </tr>
        <?php 
            if ($laClasse != null) echo "<input type='hidden' name='idclasse' value = '".$laClasse['idclasse']."' >";
        ?>
        <tr>
            <td class="align-middle text-center">
                <input class="boutonP" class="" type="reset" name="Annuler" value="Annuler">
            </td>
            <td class="align-middle text-center">
                <input class="boutonP" type="submit" <?php
                if ($laClasse != null) {
                    echo 'name = "Modifier" value = "Modifier"';
                } else {
                    echo 'name = "Valider" value = "Valider"';
                }
                ?> >
            </td>
        </tr>
    </table>
</form>