<?php
include_once "_bootstrap.php";
include_once "_navbar.php";
include_once "_alerts.php";
?>
        
        
<form action="add-annonce-post.php" method="POST" class="w-50 border p-4 mt-5 mx-auto shadow">

    <?php echo $alert ? "<div class='alert alert-{$type} mt-2'>{$message}</div>" : ''; ?>
    
    <div class="mb-3">
        <label for="titre" class="form-label">Titre</label>
        <input type="text" class="form-control" name="titre" id="titre">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control" name="description" id="description">
    </div>
    <div class="mb-3">
        <label for="code_postal" class="form-label">Code postal</label>
        <input type="number" class="form-control" name="code_postal" id="code_postal">
    </div>
    <div class="mb-3">
        <label for="ville" class="form-label">Ville</label>
        <input type="text" class="form-control" name="ville" id="ville">
    </div>
    <div class="mb-3">
        <label for="type" class="form-label">Type</label>
        <input type="text" class="form-control" name="type" id="type">
    </div>
    <div class="mb-3">
        <label for="prix" class="form-label">Prix</label>
        <input type="number" class="form-control" name="prix" id="prix">
    </div>

    <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </div>
</form>