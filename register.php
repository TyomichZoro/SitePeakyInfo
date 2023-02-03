<?php
    session_start();
    error_reporting(0);
    if ($_SESSION['user']) {
        header("Location: ../profile.php");
    }
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Аккаунт</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
          crossorigin="anonymous"
    >
    <link rel="stylesheet" href="css/account-form.css" class="rel">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
</head>
<body>
<form action="vendor/signUp.php" method="post" enctype="multipart/form-data">
    <label style="margin-top: 6em">ФИО</label>
    <input type="text" name="fio" placeholder="Введите свое полное имя" required>
    <label>Логин</label>
    <input type="text" name="login" placeholder="Введите свой логин" required>
    <label>Почта</label>
    <input type="email" name="email" placeholder="Введите адрес своей почты" required>
    <label>Изображение профиля</label>
    <input type="file" name="avatar">
    <label>Пароль</label>
    <input type="password" name="password" placeholder="Введите пароль" required>
    <label>Подтвердите пароль</label>
    <input type="password" name="passwordConfirm" placeholder="Введите пароль" required>
    <button type="submit">Войти</button>
    <p style="margin-bottom: 2em">
        У вас уже есть аккаунт? - <a href="account.php">Войти</a>
    </p>
        <?php
            error_reporting(0);
            if ($_SESSION['message']) {
                echo
                '
                    <p class="msg"> '. $_SESSION['message'] .' </p>
                ';
            }
            unset($_SESSION['message']);
        ?>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous">
</script>
</body>
</html>