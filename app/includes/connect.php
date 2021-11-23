<?php
require "dev.env.php";

$connexion_string = "mysql:host=" . SERVER . ";dbname=" . DATABASE;

try {
    $attributs=[
        PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC
    ];

    $connexion = new PDO($connexion_string, USER, PASSWORD, $attributs);

} catch (PDOException $e) {
    $connexion = null;
    echo "ERROR : " . $e->getMessage();
}
?>