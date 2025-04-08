<?php 
session_start();
define('ROOT', '/pawheaven/'); 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Contrôle PHP</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    


    </head>
<body>

    <header>
        <h1>
            <a href="<?= ROOT ?>index.php">
                <img src="<?= ROOT ?>images/logop.png" alt="">
            </a>
        </h1>


        <form action="<?= ROOT ?>pages/traitement.php" method="get" style="display: flex; align-items: center; gap: 0.5em;">
    <input 
        type="search" 
        name="recherche" 
        id="recherche" 
        maxlength="200" 
        placeholder="Recherche..." 
        style="padding: 0.6em 1em; border: 2px solid #fff; border-radius: 25px; outline: none; font-size: 1em;">
    
    <button 
        type="submit" 
        style="background-color: white; border: none; border-radius: 25px; padding: 0.6em 1.2em; cursor: pointer; font-weight: bold; color: #2980b9;">
        Chercher
    </button>
</form>
    </header>
    <nav>
        <a href="<?= ROOT ?>index.php">Accueil</a>
        <br>
        <a href="<?= ROOT ?>pages/contact.php">Nous Contacter</a>
        <br>
        <a href="<?= ROOT ?>pages/animal.php">Adoptez</a>
        <br>
        <a href="<?= ROOT ?>pages/signup.php">S'incrire</a>
        <br>
        <a href="<?= ROOT ?>pages/connexion.php">Connexion</a>
    </nav>