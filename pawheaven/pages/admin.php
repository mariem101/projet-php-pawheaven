<?php include '../inc/header.php'; ?>
<main>
    <h2>Page Administrateur</h2>

    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Age</th>
                <th>Sex</th>
                <th>Race</th>
                <th>Espèce</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

        <?php

        include '../inc/cle.php';

        $sql = "SELECT * FROM animaux";
        $reponse = $cle->query($sql);

        foreach($reponse AS $r): ?>

            <tr>
                <td><?= $r['nom'] ?></td>
                <td><?= $r['age'] ?></td>
                <td><?= $r['sex'] ?></td>
                <td><?= $r['race'] ?></td>
                <td><?= $r['espece'] ?></td>
                <td><?= $r['description'] ?></td>
                <td>
                    <form action="suppression.php" method="POST">
                        <input type="hidden" name="id" value="<?= $r['id'] ?>">
                        <input type="image" src="../images/supp.png" alt="Delete" title="Delete" style="width: 35px; cursor: pointer;">
                    </form>
                    <form action="modification.php" method="POST" >
                        <input type="hidden" name="id" value="<?= $r['id'] ?>">
                        <input type="image" src="../images/mod.png" alt="Modify" title="Modify" style="width: 35px; cursor: pointer;">
                    </form>
                </td>
            </tr>

        <?php endforeach; ?>
        </tbody>
    </table>
<br>
    <h3>Ajouter un Nouvel Animal</h3>
    <form action="add.php" method="POST">
        <input type="text" name="nom" id="nom" placeholder="Nom" required><br>
        <select name="age" required>
            <option value="">Sélectionnez l'âge</option>
            <?php for ($i = 1; $i <= 20; $i++) : ?>
                <option value="<?= $i ?>"><?= $i ?> an(s)</option>
            <?php endfor; ?>
        </select><br>
        <select name="sex" required>
            <option value="">Sexe</option>
            <option value="Male">Mâle</option>
            <option value="Femelle">Femelle</option>
        </select><br>
        <input type="text" name="race" id="race" placeholder="Race" required><br>
        <input type="text" name="espece" id="espece" placeholder="Espèce" required><br>
        <textarea name="description" id="description" placeholder="Description" required></textarea><br>
        <input type="submit" value="Ajouter">
    </form>
</main>
<?php include '../inc/footer.php'; ?>
