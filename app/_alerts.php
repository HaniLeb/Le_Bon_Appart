<?php
$alert = false;

if (isset($_GET["error"])) {
    $alert = true;

    if ($_GET['error'] == "champVide") {
        $type = "danger";
        $message = "Tous les champs doivent être rempli";
    }

    if ($_GET['error'] == "malformedInput") {
        $type = "danger";
        $message = "Erreur ID";
    }
}

if ($_GET["success"]) {
    $alert = true;

    if ($_GET['success'] == "annonceAjouter") {
        $type = "success";
        $message = "Annonce ajouté";
    }
    if ($_GET['success'] == "msgChanger") {
        $type = "success";
        $message = "Message Modifier";
    }
}
?>