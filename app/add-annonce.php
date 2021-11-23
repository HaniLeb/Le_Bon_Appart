<?php
include_once "_bootstrap.php";
include_once "_navbar.php";
include_once "_alerts.php";
?>
        
        
<form action="add-annonce-post.php" method="POST">

    <?php echo $alert ? "<div class='alert alert-{$type} mt-2'>{$message}</div>" : ''; ?>
    
    <div>
        <label for="titre">Titre</label>
        <input type="text" name="titre" id="titre">
    </div>
    <div>
        <label for="description">Description</label>
        <input type="text" name="description" id="description">
    </div>
    <div>
        <label for="code_postal">Code postal</label>
        <input type="number" name="code_postal" id="code_postal">
    </div>
    <div>
        <label for="ville">Ville</label>
        <input type="text" name="ville" id="ville">
    </div>
    <div>
        <label for="type">Type</label>
        <input type="text" name="type" id="type">
    </div>
    <div>
        <label for="prix">Prix</label>
        <input type="number" name="prix" id="prix">
    </div>

    <button type="submit">Ajouter</button>
</form>