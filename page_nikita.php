<?php
    session_start();
    error_reporting(0);
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Никита Шелби</title>
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
                <img src="img/nikita.jpg" class="card-img-top img-brothers-page" alt="Никита Шелби">
                <div class="card-body">
                    <h3 class="card-title-style">Никита Шелби</h3>
                    <p class="card-text-style">Харизма: 0 Ум: 5 Сила: 10</p>
                </div>
            </div>
        </div>
        <div class="right-bar">
            <p>
                Никита "Гориллов" Шелби также известный под прозвищем: Кипяток, Купиту, Купи шоколад, Треск анала, Анальный треск, а также Никита Деньги.
            </p>
            <p>
                Опасность не представляет, не имеет особых способностей, но имеет деньги.
            </p>
            <h4 class="h-style">Отличительные черты</h4>
            <ol>
                <li>Наличие денег</li>
                <li>Желание покупать всем шоколад</li>
                <li>Носить одну толстовку, пока она не будет вся в дырках</li>
                <li>Не стирать свою толстовку никогда (то есть ну вообще типо никогда, на ней уже волосы блять лобковые, а он сука так и не стирал ее)</li>
                <li>Нулевой процент самостоятельности и желания делать что-то самим</li>
                <li>Полная неграмотность как в английском, так и в русском языках</li>
            </ol>
            <h4 class="h-style">
                Легендарное покаяние
            </h4>
            <img class="page-img-gif" src="img/poka.jpg" alt="Покаяние"/>
            <h4 class="h-style">
                Никита Обыкновенный
            </h4>
            <img class="page-img-gif" src="img/gorilla_1.gif" alt="Горилла 1">
            <p>
                Здесь Никита Обезьяний Треск Анала отказывается присылать деньги.
                Однако рано или поздно он все же их пришлет, потому что он Никита Анальная Обезьяна Горилльного Анала.
            </p>
            <h4 class="h-style">
                Прием пищи
            </h4>
            <img class="page-img-gif" src="img/gorilla_2.gif" alt="Горилла 2">
            <h4 class="h-style">
                Это Никита плачет после того как увидел данный сайт и его страничку
            </h4>
            <img class="page-img-gif" src="img/gorilla_3.gif" alt="Горилла 3">
            <h4 class="h-style">
                Это я, когда Никита скинул мне деньги
            </h4>
            <img class="page-img-gif" src="img/money.gif" alt="Деньги">
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