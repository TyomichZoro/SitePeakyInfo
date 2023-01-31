<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Test-BD</title>
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
    <?php
        require_once 'connectBD.php';
    ?>
    <table>
        <tr>
            <th>ID</th>
            <th>TITLE</th>
            <th>DESCRIPTION</th>
            <th>PRICE</th>
        </tr>

        <?php
            $products = mysqli_query($connect, "SELECT * FROM `Test`");
            $products = mysqli_fetch_all($products);

            foreach ($products as $item) {
                ?>
                    <tr>
                        <td><?= $item[0] ?></td>
                        <td><?= $item[1] ?></td>
                        <td><?= $item[2] ?></td>
                        <td><?= $item[3] ?></td>
                        <td><a href="product.php?id=<?= $item[0] ?>">
                                <button class="btn btn-outline-info">View</button>
                            </a>
                        </td>
                        <td><a href="update.php?id=<?= $item[0] ?>">
                                <button class="btn btn-outline-warning">Update</button>
                            </a>
                        </td>
                        <td><a href="scripts/delete.php?id=<?= $item[0] ?>">
                                <button class="btn btn-outline-danger">Delete</button>
                            </a>
                        </td>
                    </tr>
                <?php
            }
        ?>
    </table>
    <h3>Add new product</h3>
    <form action="scripts/create.php" method="post">
        <p>Title</p>
        <input type="text" name="title">
        <p>Description</p>
        <textarea name="description"></textarea>
        <p>Price</p>
        <input type="number" name="price">
        <button type="submit">Add new product</button>
    </form>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous">
</script>
</body>
</html>