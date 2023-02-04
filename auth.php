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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/account-style-form.css"">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand p-0" href="index.php">
                <img src="img/logo.png" alt="Лого">
            </a>
            <button class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav"
                    aria-controls="navbarNav"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Начальная страница</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="page_1.php">Братья Шелби</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="page_audio.php">OST</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="page_seasons.php">Сезоны</a>
                    </li>
                    <li class="nav-item account">
                        <?php
                        $href = 'auth.php';
                        if ($_SESSION['user']) {
                            $href = 'profile.php';
                        }
                        ?>
                        <a class="nav-link active-style" href="<?= $href ?>">Аккаунт</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<section>
    <form class="form-authorization" action="vendor/signIn.php" method="post">
        <input type="text" name="login" placeholder="Введите свой логин">
        <input type="password" name="password" placeholder="Введите пароль">
        <button class="btn btn-outline-success" type="submit">Войти</button>
        <p>
            У вас нет аккаунта? - <a href="register.php">Зарегистрируйтесь</a>
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
</section>
<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-12 footer-text text-center">
                <p>
                    © 2023 PeakyBlindersInfo, все материалы взяты в открытых источниках. Все права защищены.
                </p>
            </div>
            <div class="col-lg-4 col-md-12 my-3 text-center">
                <a href="https://t.me/tyomichh" target="_blank"><img src="img/telegram.png" style="width: 50px" alt="Телеграм"></a>
                <a href="https://vk.com/tyomichh" target="_blank"><img src="img/logo.svg.png" style="width: 50px" alt="ВК"></a>
                <a href="https://github.com/TyomichZoro" target="_blank"><img src="img/github-mark.png" style="width: 50px" alt="GitHub"></a>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous">
</script>
</body>
</html>