<?php 

if(isset($_POST['id'])){
    $x = $_POST['id'];

    $sql = "DELETE FROM animaux WHERE id=$x";

    include '../inc/cle.php';

    if($cle->query($sql)){
        header('location:admin.php');
        exit();
    }else{
        header('location:admin.php');
    }
}