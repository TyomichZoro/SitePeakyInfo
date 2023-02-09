<?php
    session_start();
    error_reporting(0);
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Финн Шелби</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
          crossorigin="anonymous"
    >
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/page_brothers-style.css">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
</head>
<body>
<header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="img/logo.png" alt="nav" width="30" height="34" class="d-inline-block align-text-top">
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
                        $user_fio = 'Аккаунт';
                        $user_img = 'img/Account-User-PNG-Clipart.png';
                        if ($_SESSION['user']) {
                            $user_fio = $_SESSION['user']['fio'];
                            $user_img = $_SESSION['user']['avatar'];
                        }

                        $href = 'auth.php';
                        if ($_SESSION['user']) {
                            $href = 'profile.php';
                        }
                        ?>
                        <a class="nav-link" href="<?= $href ?>"><?= $user_fio ?><img class="logo-style" src="<?= $user_img ?>" alt="avatar"></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<section>
    <div class="page_brothers-grid">
        <div class="main-container">
            <div class="card">
                <img src="https://images.kinorium.com/movie/promo/669090/w1500_48902456.jpg" class="card-img-top img-brothers-page" alt="Финн Шелби"/>
                <div class="card-body">
                    <h3 class="card-title-style">Финн Шелби</h3>
                    <p class="card-text-style">Харизма: 30 Ум: 60 Сила: 30</p>
                </div>
            </div>
        </div>
        <div class="right-bar">
            <p>
                Финн Шелби (англ. Finn Shelby) — младший сын Артура Шелби-старшего и младший брат Артура, Томаса, Джона и Эйды Шелби.
            </p>
            <p>
                Финн родился в 1908 году, поэтому он единственный из братьев Шелби не участвовал в Первой мировой войне из-за своего возраста.
                Хотя он и является «Острым Козырькм», его братья часто присматривают за ним, пока он учится ремеслу и вживается в роль.
            </p>
        </div>
    </div>
</section>
<footer>
    <div class="footer-text">
        <p>
            © 2023 PeakyBlindersInfo, все материалы взяты в открытых источниках. Все права защищены.
        </p>
    </div>
    <div class="footer-body">
        <a href="https://t.me/tyomichh" target="_blank"><img src="img/telegram.png" style="width: 2em" alt="Телеграм"></a>
        <a href="https://vk.com/tyomichh" target="_blank"><img src="img/logo.svg.png" style="width: 2em" alt="ВК"></a>
        <a href="https://github.com/TyomichZoro" target="_blank"><img src="img/github-mark.png" style="width: 2em" alt="GitHub"></a>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous">
</script>
</body>
</html>