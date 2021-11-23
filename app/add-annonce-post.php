<?php
require "includes/connect.php";

echo '<pre>';
var_dump($_POST);
echo '</pre>';

if (in_array('', $_POST)) {
    header('Location:add-annonce.php?error=champVide');
    exit();
}else{
    $titre = htmlspecialchars(trim($_POST['titre']));
    $description = htmlspecialchars(trim($_POST['description']));
    $code_postal = htmlspecialchars(trim($_POST['code_postal']));
    $ville = htmlspecialchars(trim($_POST['ville']));
    $type = htmlspecialchars(trim($_POST['type']));
    $prix = htmlspecialchars(trim($_POST['prix']));
}

try {
    $insertAnnonce = "INSERT INTO annonce (titre, description, code_postal, ville, type, prix) VALUES (:titre, :description, :code_postal, :ville, :type, :prix)";
    $reqInsertAnnonce = $connexion->prepare($insertAnnonce);
    $reqInsertAnnonce->bindValue(':titre', $titre, PDO::PARAM_STR);
    $reqInsertAnnonce->bindValue(':description', $description, PDO::PARAM_STR);
    $reqInsertAnnonce->bindValue(':code_postal', $code_postal, PDO::PARAM_INT);
    $reqInsertAnnonce->bindValue(':ville', $ville, PDO::PARAM_STR);
    $reqInsertAnnonce->bindValue(':type', $type, PDO::PARAM_STR);
    $reqInsertAnnonce->bindValue(':prix', $prix, PDO::PARAM_INT);

    if($reqInsertAnnonce->execute()){
        header('Location:add-annonce.php?success=annonceAjouter');
        exit();
    }
} catch (PDOException $e) {
    echo "ERROR : " . $e->getMessage();
}
?>