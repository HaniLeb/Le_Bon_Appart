<?php
require "_view-annonces.php";
include_once "_bootstrap.php";
include_once "_navbar.php";
?>

<section class="row justify-content-center gap-2 p-2 mt-3">
    <?php
    // Boucle qui parcours et stock toutes les lignes du tableau de ma BDD retourner par le fetchall().
    foreach ($annoncesLimite as $annonce) {
    ?>
    
    <div class="card shadow" style="width: 18rem;">
        <div class="card-body">
            <p><?php echo $annonce['annonce_id']?></p>
            <h3 class="card-title text-center"><?php echo $annonce['titre']?></h3>
            <p class="card-text"><?php echo $annonce['description']?></p>
            <p class="card-text"><?php echo $annonce['code_postal']?></p>
            <p class="card-text"><?php echo $annonce['ville']?></p>
            <h5 class="card-text"><?php echo $annonce['type']?></h5>
            <p class="card-text"><?php echo $annonce['prix']?> €</p>
        </div>
    </div>
    <?php }?>
</section>