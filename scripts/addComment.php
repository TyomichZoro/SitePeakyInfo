<?php
    require_once '../connectBD.php';

    $id = $_POST['id'];
    $body = $_POST['body'];

    mysqli_query($connect, "INSERT INTO `Comments` (`id`, `product_id`, `body`) VALUES (NULL, '$id', '$body')");

    header('Location: ../product.php?id='.$id);
?>
