<h4>Insertion d'une classe</h4>

<form method="post" action="">
    <table class="table table-hover" border="0">
        <tr>
            <td class="align-middle text-center">Nom Classe :</td>
            <td>
                <input type="text" name="nomClasse" value="<?php if($laClasse != null) echo $laClasse['nomClasse']; ?>">
            </td>
        </tr>
        <tr>
            <td class="align-middle text-center">Salle Classe :</td>
            <td>
                <input type="text" name="salle" value="<?php if($laClasse != null) echo $laClasse['salle']; ?>">
            </td>
        </tr>
        <tr>
            <td class="align-middle text-center">Diplôme Classe :</td>
            <td>
                <input type="text" name="diplome" value="<?php if($laClasse != null) echo $laClasse['diplome']; ?>">
            </td>
        </tr>
        <tr>
            <td class="align-middle text-center">Nombres d'étudiants :</td>
            <td>
                <input type="text" name="nbEtudiants" value="<?php if($laClasse != null) echo $laClasse['nbEtudiants']; ?>">
            </td>
        </tr>
        <?php 
            if ($laClasse != null) echo "<input type='hidden' name='idclasse' value = '".$laClasse['idclasse']."' >";
        ?>
        <tr>
            <td class="align-middle text-center">
                <input type="reset" name="Annuler" value="Annuler">
            </td>
            <td class="align-middle text-center">
                <input type="submit"    <?php
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