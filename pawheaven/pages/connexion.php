<?php include '../inc/header.php'; ?>
<main>
    <h2><i class="fas fa-paw"></i>Connexion</h2>

    <form action="<?=ROOT?>pages/user.php" method="post">
        <p class="user">
            <?php
             if(isset($_SESSION['user']) && !empty($_SESSION['user'])){
                echo $_SESSION['user'];
                $_SESSION['user'] = '';
             }
             ?>
        </p>
        <input type="text" name="identifiant" id="identifiant" maxlength="200" placeholder="Identifiant">
        <input type="password" name="password" id="password" maxlength="200" placeholder="Mot de passe">

        <input type="submit" value="Se connecter">
</main>
<?php include '../inc/footer.php';