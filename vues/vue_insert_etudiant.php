<h4>Insertion d'un étudiant</h4>

<form method="post" action="">
    <table class="table table-hover table_insert" border="0">
        <tr>
            <td class="align-middle text-center">Nom Etudiant :</td>
            <td>
                <input type="text" name="nom" required value="<?php if($lEtudiant != null) echo $lEtudiant['nom']; ?>">
            </td>
        </tr>
        <tr>
            <td class="align-middle text-center">Prénom Etudiant :</td>
            <td>
                <input type="text" name="prenom" required value="<?php if($lEtudiant != null) echo $lEtudiant['prenom']; ?>">
            </td>
        </tr>
        <tr>
            <td class="align-middle text-center">Adresse Etudiant :</td>
            <td>
                <input type="text" name="adresse" required value="<?php if($lEtudiant != null) echo $lEtudiant['adresse']; ?>">
            </td>
        </tr>
        <tr>
            <td class="align-middle text-center">Email Etudiant :</td>
            <td>
                <input type="email" name="email" required value="<?php if($lEtudiant != null) echo $lEtudiant['email']; ?>">
            </td>
        </tr>
        <tr>
            <td class="align-middle text-center">Mot de passe Etudiant :</td>
            <td>
                <input type="password" name="mdp" required value="<?php if($lEtudiant != null) echo $lEtudiant['mdp']; ?>">
            </td>
        </tr>
        <tr>
            <td class="align-middle text-center">Téléphone Etudiant :</td>
            <td>
                <input type="text" name="tel" value="<?php if($lEtudiant != null) echo $lEtudiant['tel']; ?>">
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
            if ($lEtudiant != null) echo "<input type='hidden' name='idetudiant' value = '".$lEtudiant['idetudiant']."' >";
        ?>
        <tr>
            <td class="align-middle text-center">
                <input class="boutonP" type="reset" name="Annuler" value="Annuler">
            </td>
            <td class="align-middle text-center">
                <input class="boutonP" type="submit"    <?php
                 if ($lEtudiant != null) {
                    echo 'name = "Modifier" value = "Modifier"';
                } else {
                    echo 'name = "Valider" value = "Valider"';
                } 
                ?> >
            </td>
        </tr>
    </table>
</form>