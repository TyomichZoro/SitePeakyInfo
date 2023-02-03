<?php
    require_once 'connectBD.php';

    $productID = $_GET['id'];
    $product = mysqli_query($connect, "SELECT * FROM `Test` WHERE `id` = '$productID'");
    $product = mysqli_fetch_assoc($product);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
          crossorigin="anonymous"
    >
    <!--  <link rel="stylesheet" href="css/style.css" class="rel">-->
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
</head>
<style>
    th, td {
        padding: 1.5em;
    }
    th {
        background: rgba(0, 0, 0, 0.71);
        color: white;
    }
    td {
        background: rgba(112, 128, 144, 0.26);
    }
    form {
        margin: 1em;
    }
</style>
<body>
<section>
    <h3>Update product</h3>
    <form action="vendor/updateProduct.php" method="post">
        <input type="hidden" name="id" value="<?= $product['id'] ?>">
        <p>Title</p>
        <input type="text" name="title" value="<?= $product['title'] ?>">
        <p>Description</p>
        <textarea name="description"><?= $product['description'] ?></textarea>
        <p>Price</p>
        <input type="number" name="price" value="<?= $product['price'] ?>">
        <button class="btn btn-outline-success" type="submit">Update product</button>
    </form>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous">
</script>
</body>
</html>