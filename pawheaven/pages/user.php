<?php
include '../inc/cle.php';

if (isset($_POST['identifiant']) && isset($_POST['password'])) {
    $identifiant = htmlspecialchars($_POST['identifiant']);
    $mdp = htmlspecialchars($_POST['password']);

    // Vérification dans la table admin
    $sqlAdmin = "SELECT * FROM admin";
    $reponseAdmin = $cle->query($sqlAdmin);

    foreach ($reponseAdmin as $r) :
        if ($r['identifiant'] == $identifiant && $r['password'] == $mdp) {
            header('Location:admin.php');
            exit();
        }
    endforeach;


    $sqlClient = "SELECT * FROM clients";
    $reponseClient = $cle->query($sqlClient);
    echo $sqlClient;
    
var_dump($reponseClient);     
    
    foreach ($reponseClient as $r) :
        if ($r['identifiant'] == $identifiant && $r['password'] == $mdp) {
            header('Location:animal.php');
            exit();
        }
    endforeach;

    header('Location:echec.php');
    exit();
}
else {
    header('Location:../index.php');
}
