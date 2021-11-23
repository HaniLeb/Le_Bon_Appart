<?php
require "includes/connect.php";

$id = htmlspecialchars(trim($_GET['id']));

try {

    $viewAnnonce = 'SELECT * FROM annonce WHERE annonce_id = :annonce_id';
    $reqView = $connexion->prepare($viewAnnonce);
    $reqView->bindValue(':annonce_id', $id);
    $reqView->execute();
    $annonce = $reqView->fetch();
    
} catch (PDOException $e) {
    echo "ERROR : " . $e->getMessage();
}
?>