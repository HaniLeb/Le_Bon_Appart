<?php
require "_view-annonces.php";
include_once "_navbar.php";
?>

<?php
    foreach ($annonces as $annonce) {
?>
<ul>
    <li><?php echo $annonce['annonce_id']?></li>
    <li><?php echo strtoupper($annonce['titre'])?></li>
    <li><?php echo $annonce['type']?></li>
    <button type="click" disabled>Réservé</button>
    <li><a href="_annonce-details.php?id=<?php echo $annonce['annonce_id']?>">Consulter l'annonce</a></li>
</ul>
<?php }?>