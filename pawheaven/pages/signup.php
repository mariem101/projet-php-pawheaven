<?php include '../inc/header.php'; ?>
<main>
    <h2><i class="fas fa-paw"></i>S'inscrire</h2>
    <form action="<?=ROOT?>pages/traitement.php" method="post">
        <p class="message">
            <?php
             if(isset($_SESSION['message']) && !empty($_SESSION['message'])){
                echo $_SESSION['message'];
                $_SESSION['message'] = '';
             }
             ?>
        </p>
        <input type="text" name="lastname" id="lastname" maxlength="200" placeholder="Nom">
        <input type="text" name="firstname" id="firstname" maxlength="200" placeholder="Prénom">
        <input type="email" name="email" id="email" maxlength="200" placeholder="Email">
        <input type="email" name="confemail" id="confemail" maxlength="200" placeholder="Confirmation de l'email">
        <input type="text" name="identifiant" id="identifiant" maxlength="200" placeholder="Identifiant">
        <input type="password" name="password" id="password" maxlength="200" placeholder="Mot de passe">
        <input type="password" name="confpassword" id="confpassword" maxlength="200" placeholder="Confirmation du mot de passe">

        <input type="submit" value="S'inscrire">
    </form>
</main>
<?php include '../inc/footer.php';