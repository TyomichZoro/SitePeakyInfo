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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/account-style-form.css">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
</head>
    <body>
    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
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
                            <a class="nav-link" href="<?= $href ?>"><?= $user_fio ?><img style="width: 2em; margin-inline: 1em" src="<?= $user_img ?>" alt="avatar"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section>
        <div class="container-fluid my-2">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-ms-12 mx-auto">
                    <div class="card my-4">
                        <img src="https://adonius.club/uploads/posts/2022-03/thumbs/1646951853_34-adonius-club-p-dzhon-shelbi-art-58.jpg" class="card-img-top" alt="Финн Шелби"/>
                        <div class="card-body">
                            <h3 class="card-title-style">Финн Шелби</h3>
                            <p class="card-text-style">Харизма: 30 Ум: 60 Сила: 30</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 right-bar">
                    <div class="row">
                        <p>
                            Финн Шелби (англ. Finn Shelby) — младший сын Артура Шелби-старшего и младший брат Артура, Томаса, Джона и Эйды Шелби.
                        </p>
                        <p>
                            Финн родился в 1908 году, поэтому он единственный из братьев Шелби не участвовал в Первой мировой войне из-за своего возраста.
                            Хотя он и является «Острым Козырькм», его братья часто присматривают за ним, пока он учится ремеслу и вживается в роль.
                        </p>
                    </div>
                </div>
            </div>
        </div>
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