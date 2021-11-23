<?php
require "_view-annonces.php";
include_once "_bootstrap.php";
include_once "_navbar.php";
?>
<section class="row justify-content-center gap-2 p-2">

<?php
    foreach ($annonces as $annonce) {
?>
<div class="card shadow" style="width: 18rem;">
    <div class="card-body">
        <p><?php echo $annonce['annonce_id']?></p>
        <h5 class="card-title text-center"><?php echo strtoupper($annonce['titre'])?></h5>
        <h5 class="card-title text-center"><?php echo $annonce['type']?></h5>

        <?php
        if (isset($annonce['msg_reservation'])) {
        ?>
        <div class="d-flex justify-content-center align-items-center">
            <div class="badge bg-danger text-wrap" style="width: 6rem;">Réservé</div>
        </div>
        <?php }else{?>
            <div class="d-flex justify-content-center align-items-center">
                <div class="badge bg-success text-wrap" style="width: 6rem;">Disponible</div>
            </div>
        <? }?>

        <div class="d-flex justify-content-center align-items-center">
            <a class="btn btn-primary mt-2" href="_annonce-details.php?id=<?php echo $annonce['annonce_id']?>">Consulter l'annonce</a>
        </div>
    </div>
</div>
<?php }?>

</section>