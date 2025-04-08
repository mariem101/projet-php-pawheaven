<?php include '../inc/header.php'; ?>
<main>
    <h2>modifications</h2>
    <?php 

$id = $_POST['id'];

include '../inc/cle.php';

$sql = "SELECT * FROM animaux WHERE id=$id";

$reponse = $cle->query($sql);

foreach($reponse AS $r): ?>

    <form action="update_animal.php" method="POST">
        <input type="text" name="nom" id="nom" value="<?= $r['nom'] ?>" maxlenght="200">
        <label for="age"></label>
        <select name="age" id="age" required>
            <option value="">Age</option>
            <?php
            for ($i = 1; $i <= 50; $i++){
                echo "<option value='$i'>$i an(s)</option>";
            } ?>
        <input type="text" name="sex" id="sex" value="<?= $r['sex'] ?>" maxlenght="20">
        <input type="text" name="espece" id="espece" value="<?= $r['espece'] ?>" maxlenght="200">
        <input type="text" name="race" id="race" value="<?= $r['race'] ?>" maxlenght="200">
        <input type="text" name="descrption" id="description" value="<?= $r['description'] ?>" maxlenght="1000">
        <input type="hidden" name="id" value="<?= $r['id'] ?>">
        <input type="submit" value="Modifier">
    </form>
</main>
<?php endforeach;

include '../inc/footer.php'; 