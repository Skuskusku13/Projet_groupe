<h4>Insertion d'une matière</h4>

<form method="post" action="">
    <table class="table table-hover" border="0">
        <tr>
            <td class="align-middle text-center">Nom Matière :</td>
            <td>
                <input type="text" name="nomMatiere" value="<?php if($laMatiere != null) echo $laMatiere['nomMatiere']; ?>">
            </td>
        </tr>
        <tr>
            <td class="align-middle text-center">Coefficient :</td>
            <td>
                <input type="text" name="coef" value="<?php if($laMatiere != null) echo $laMatiere['coef']; ?>">
            </td>
        </tr>
        <tr>
            <td class="align-middle text-center">Nombes d'heures :</td>
            <td>
                <input type="text" name="nbHeures" value="<?php if($laMatiere != null) echo $laMatiere['nbHeures']; ?>">
            </td>
        </tr>
        <tr>
            <td class="align-middle text-center">Id Classe :</td>
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
        <tr>
            <td class="align-middle text-center">Id Professeur :</td>
            <td>
            <select name="idprofesseur">
                    <?php
                        foreach ($lesProfesseurs as $unProfesseur){
                            echo "<option value='".$unProfesseur['idprofesseur']."'>";
                            echo $unProfesseur['idprofesseur']."-- ".$unProfesseur['nom']."  ".$unProfesseur['prenom'];
                            echo "</option>";
                        }
                    ?>
                </select>
            </td>
        </tr>
        <?php 
            if ($laMatiere != null) echo "<input type='hidden' name='idmatière' value = '".$laMatiere['idmatiere']."' >";
        ?>
        <tr>
            <td class="align-middle text-center">
                <input type="reset" name="Annuler" value="Annuler">
            </td>
            <td class="align-middle text-center">
                <input type="submit"    <?php
                if ($laMatiere != null) {
                    echo 'name = "Modifier" value = "Modifier"';
                } else {
                    echo 'name = "Valider" value = "Valider"';
                }
                ?> >
            </td>
        </tr>
    </table>
</form>