<?php
require "includes/connect.php";

try {
    $annonces = $connexion->query('SELECT * FROM annonce ORDER BY annonce_id DESC')->fetchAll();
    
    $annoncesLimite = $connexion->query('SELECT * FROM annonce ORDER BY annonce_id DESC LIMIT 15')->fetchAll();
} catch (PDOException $e) {
    echo "ERROR : " . $e->getMessage();
}
?>