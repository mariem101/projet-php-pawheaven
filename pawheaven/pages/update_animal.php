<?php 
if(isset($_POST['nom'])){

    $nom = htmlspecialchars($_POST['nom']);
    $age = htmlspecialchars($_POST['age']);
    $sex = htmlspecialchars($_POST['sex']);
    $espece = htmlspecialchars($_POST['espece']);
    $race = htmlspecialchars($_POST['race']);
    $description = htmlspecialchars($_POST['description']);
    $id = htmlspecialchars($_POST['id']);

    include '../inc/cle.php';

    $sql  = "UPDATE animaux SET nom = '$nom',espece='$espece',race='$race',description='description' WHERE id=$id";

    if($cle->query($sql)){
        header('location:animal.php');
    }
}