<?php 
var_dump ($_POST);
include '../inc/cle.php';

$nom = htmlspecialchars($_POST['nom']);
$age = htmlspecialchars($_POST['age']);
$sex = htmlspecialchars($_POST['sex']);
$espece = htmlspecialchars($_POST['espece']);
$race = htmlspecialchars($_POST['race']);
$description = htmlspecialchars($_POST['description']);

$sql = "INSERT INTO animaux (nom, age, sex, espece, race, description) VALUES ('$nom', '$age', '$sex', '$espece', '$race', '$description')";

if($cle->query($sql)){
    header('Location: admin.php');
} else {
    header('Location: admin.php');
}

