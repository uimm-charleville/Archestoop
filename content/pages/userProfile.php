<?php 
        $path = $_SERVER['DOCUMENT_ROOT'];
                $path .= '/archestop/content/include/navbar.php';
        include_once($path);    
?>

<link href="/archestop/assets/css/userProfile.css" rel="stylesheet"/>
<link rel="stylesheet" href="../../assets/css/reset.css">

<div class="userProfile">
<div class="row container mx-auto pb-5 pt-3 w-75">
    <div class="col d-flex align-items-center">
        <img src="/archestop/assets/img/casque_romain.png">
    </div>
    <div class=" w-100 mt-1 border infoUser">
        <ul class="mb-0 ps-0 fs-6">
            <li>Nom : <?php echo 'nom'?></li>
            <li>Prénom : <?php echo 'nom'?></li>
            <li>Points : <?php echo 'nom'?></li>
        </ul>
    </div>
</div>

<div class="modif w-75 m-auto">
    <h4 class="fs-2">Paramètres du compte</h4>
    <ul class="pb-0 ps-0 mb-0 lh-lg">
        <li><a href="#" class="text-black text-decoration-none">Historiques des points</a></li>
        <li><a href="#" class="text-black text-decoration-none">Modifier la photo de profil</a></li>
        <li><a href="#" class="text-black text-decoration-none">Modifier l'adresse e-mail</a></li>
        <li><a href="#" class="text-black text-decoration-none">Modifier le mot de passe</a></li>
        <li><a href="../src/deconnexion.php" class="text-black text-decoration-none">Se déconnecter</a></li>
    </ul>
</div>
</div>


<?php
require_once("../include/footer.php");
?>
