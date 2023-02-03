<?php
    require_once '../connectBD.php';

    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    mysqli_query($connect, "UPDATE `Test` SET `title` = '$title', `price` = '$price', `description` = '$description' WHERE `Test`.`id` = '$id'");

    header('Location: ../testBD.php');
?>