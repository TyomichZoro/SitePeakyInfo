<?php
    session_start();
    error_reporting(0);
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Братья шелби</title>
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
                        <a class="nav-link active-style" href="page_1.php">Братья Шелби</a>
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
    <div class="page1-grid">
        <div class="card-grid">
            <div class="card">
                <a href="page_tomas.php">
                    <img src="https://oboi-telefon.ru/wallpapers/56499/30657.jpg" class="card-img-top" alt="Томас Шелби">
                    <div class="card-body">
                        <h4 class="card-title-style">Томас Шелби</h4>
                        <a href="page_tomas.php" class="btn btn-info">Информация</a>
                    </div>
                </a>
            </div>
            <div class="card">
                <a href="page_arthur.php">
                    <img src="https://oboi-telefon.ru/wallpapers/56524/36220.jpg" class="card-img-top" alt="Артур Шелби">
                    <div class="card-body">
                        <h4 class="card-title-style">Артур Шелби</h4>
                        <a href="page_arthur.php" class="btn btn-info">Информация</a>
                    </div>
                </a>
            </div>
            <div class="card">
                <a href="page_john.php">
                    <img src="https://oboi-telefon.ru/wallpapers/56545/30736.jpg" class="card-img-top" alt="Джон Шелби">
                    <div class="card-body">
                        <h4 class="card-title-style">Джон Шелби</h4>
                        <a href="page_john.php" class="btn btn-info">Информация</a>
                    </div>
                </a>
            </div>
            <div class="card">
                <a href="page_finn.php">
                    <img src="https://images.kinorium.com/movie/promo/669090/w1500_48902456.jpg" class="card-img-top" alt="Финн Шелби">
                    <div class="card-body">
                        <h4 class="card-title-style">Финн Шелби</h4>
                        <a href="page_finn.php" class="btn btn-info">Информация</a>
                    </div>
                </a>
            </div>
        </div>
        <div class="right-bar">
            <p>
                Томас Шелби курит как паровоз. В 1920-х годах никто не знал, насколько курение вредно для нашего организма. Но Киллиан Мерфи курил не совсем сигареты. Когда его персонаж должен был закурить, а это случалось частенько, Мерфи использовал специальные травяные сигареты с ароматом розы.
            </p>
            <p>
                Персонажи сериала Джон Шелби и Майкл Грей в «‎Острых козырьках» — двоюродные братья, кузены, но актеры, которые их играют — Джо и Финн Коул — на самом деле братья в реальной жизни. Это похоже на то, как во Вселенной Марвел Лиам Хемсворт сыграл кузена Тора, или Кейси Аффлек во Вселенной DC сыграл кузена Брюса Уэйна.
            </p>
            <p>
                За последние годы прическа Томаса Шелби стала своего рода феноменом в моде среди молодых мужчин. Каждый молодой человек из рядов поклонников сериала хочет такую же прическу, как у Томаса Шелби. Можно смело утверждать, что ни один телевизионный персонаж не имел столь сильного влияния на модные стрижки со времен Рейчел Грин.
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