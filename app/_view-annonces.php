<?php
require "includes/connect.php";

try {
    // query prépare et exécute une requête SQL.
    $annonces = $connexion->query('SELECT * FROM annonce ORDER BY annonce_id DESC')->fetchAll();
    
    // ORDER BY ... DESC LIMIT ... me permet d'afficher toutes les lignes de mon tableau dans un ordre décroissant du plus récent au plus ancien, avec une limite.
    $annoncesLimite = $connexion->query('SELECT * FROM annonce ORDER BY annonce_id DESC LIMIT 15')->fetchAll();
} catch (PDOException $e) {
    echo "ERROR : " . $e->getMessage();
}
?>