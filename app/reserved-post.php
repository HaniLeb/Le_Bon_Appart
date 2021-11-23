<?php
require "includes/connect.php";

// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';
$getId = explode('=', $_SERVER['HTTP_REFERER'])[1];

if (!($getId == $_POST['id'])) {
    header("Location:_annonce-details.php?id=$getId&error=malformedInput");
    exit();
}

if (!empty($_POST['msg_reservation'])) {
    $msg_reservation = htmlspecialchars(trim($_POST['msg_reservation']));
    $id = intval(htmlspecialchars(trim($_POST['id'])));
}
    


try {
    $updateMsg = 'UPDATE annonce SET msg_reservation = :msg_reservation WHERE annonce_id = :annonce_id';
    $reqUpdateMsg = $connexion->prepare($updateMsg);
    $reqUpdateMsg->bindValue(':msg_reservation', $msg_reservation, PDO::PARAM_STR);
    $reqUpdateMsg->bindValue(':annonce_id', $id, PDO::PARAM_INT);
    if($reqUpdateMsg->execute()){
        header("Location:_annonce-details.php?id=$getId&success=msgChanger");
        exit();
    }
} catch (PDOException $e) {
    echo "ERROR : " . $e->getMessage();
}
?>