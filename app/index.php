<?php
require "_view-annonces.php";
include_once "_navbar.php";
?>

<?php
    foreach ($annoncesLimite as $annonce) {
?>
<ul>
    <li><?php echo $annonce['annonce_id']?></li>
    <li><?php echo strtoupper($annonce['titre'])?></li>
    <li><?php echo $annonce['description']?></li>
    <li><?php echo $annonce['code_postal']?></li>
    <li><?php echo $annonce['ville']?></li>
    <li><?php echo $annonce['type']?></li>
    <li><?php echo $annonce['prix']?></li>
</ul>
<?php }?>