<?php
    require_once '../connectBD.php';

    $id = $_GET['id'];

    mysqli_query($connect, "DELETE FROM Test WHERE `Test`.`id` = '$id'");

    header('Location: ../testBD.php');
?>
