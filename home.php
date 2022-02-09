<h3 style="font-size: 26px;">Accueil du site</h3>
<h4>
    <?php
    echo 'Bienvenue ' . $_SESSION['nom'] . " " . $_SESSION['prenom'];
    echo '<br /><br /> Vous avez le rôle : ' . $_SESSION['role'];
    ?>
</h4>

<br />

<div>
    <img class="img_accueil" style="object-fit: cover; background-color: black; padding: 10px; border-radius: 15px;" src="images/background_tree.jpeg" height="600" width="auto">

</div>
<p>

</p>

