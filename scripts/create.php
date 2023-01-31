<?php
    require_once '../connectBD.php';

    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    mysqli_query($connect, "INSERT INTO `Test` (`id`, `title`, `price`, `description`) VALUES (NULL, '$title', '$price','$description')");

    header('Location: ../testBD.php');

?>
