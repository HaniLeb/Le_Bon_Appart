<?php
require "_view-details.php";
include_once "_bootstrap.php";
include_once "_navbar.php";
include_once "_alerts.php";
?>

<?php echo $alert ? "<div class='alert alert-{$type} mt-2'>{$message}</div>" : ''; ?>

<section class="d-flex justify-content-center">
    
    <div class="card shadow w-50 mt-5" style="width: 18rem;">
        <div class="card-body">
            <p><?php echo $annonce['annonce_id']?></p>
            <h3 class="card-title text-center"><?php echo strtoupper($annonce['titre'])?></h3>
            <p class="card-text"><?php echo $annonce['description']?></p>
            <p class="card-text"><?php echo $annonce['code_postal']?></p>
            <p class="card-text"><?php echo $annonce['ville']?></p>
            <h5 class="card-text"><?php echo $annonce['type']?></h5>
            <p class="card-text"><?php echo $annonce['prix']?> €</p>
            <p class="card-text"><?php echo $annonce['msg_reservation']?></p>

            <form action="reserved-post.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $annonce['annonce_id']; ?>">

                <div class="form-floating">
                    <textarea class="form-control" id="msg_reservation" name="msg_reservation" style="height: 100px"></textarea>
                </div>
                
                <div class="d-flex justify-content-center mt-2">
                    <button type="submit" class="btn btn-primary w-25">Je Réserve</button>
                </div>
            </form>

            <a href="all-annonces.php" class="btn btn-primary">Retour</a>
        </div>
    </div>

</section>