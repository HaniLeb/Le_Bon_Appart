<?php
require "_view-details.php";
include_once "_navbar.php";
include_once "_alerts.php";
?>

<?php echo $alert ? "<div class='alert alert-{$type} mt-2'>{$message}</div>" : ''; ?>

<ul>
    <li><?php echo $annonce['annonce_id']?></li>
    <li><?php echo strtoupper($annonce['titre'])?></li>
    <li><?php echo $annonce['description']?></li>
    <li><?php echo $annonce['code_postal']?></li>
    <li><?php echo $annonce['ville']?></li>
    <li><?php echo $annonce['type']?></li>
    <li><?php echo $annonce['prix']?></li>
    <li><?php echo $annonce['msg_reservation']?></li>
    
    <form action="reserved-post.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $annonce['annonce_id']; ?>">
        <textarea name="msg_reservation" id="msg_reservation" cols="30" rows="10"></textarea>
        <button type="submit">Je réserve</button>
    </form>
    <li><a href="all-annonces.php">Retour</a></li>
</ul>