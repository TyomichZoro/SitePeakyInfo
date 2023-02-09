<?php
    session_start();
    error_reporting(0);
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
          crossorigin="anonymous"
    >
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/page_audio-style.css">
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
                        <a class="nav-link active-style" href="page_audio.php">OST</a>
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
    <div class="page_audio-grid">
        <div class="audio-container">
            <div class="audio-body">
                <p class="audio-text">
                    Red Right Hand <br><span style="font-weight: lighter; font-size: small">Nick Cave & The Bad Seeds</span>
                </p>
                <audio class="audio-player" controls preload="metadata">
                    <source src="audio/Nick_Cave_The_Bad_Seeds_-_Red_Right_Hand_48028321.mp3" type="audio/mpeg">
                </audio>
            </div>
            <div class="audio-body">
                <p class="audio-text">
                    Zanstra <br><span style="font-weight: lighter; font-size: small">Nick Cave, Warren Ellis</span>
                </p>
                <audio class="audio-player" controls preload="metadata">
                    <source src="audio/nick-cave-warren-ellis-zanstra.mp3" type="audio/mpeg">
                </audio>
            </div>
            <div class="audio-body">
                <p class="audio-text">
                    Abbatoir Blues <br><span style="font-weight: lighter; font-size: small">Nick Cave & The Bad Seeds</span>
                </p>
                <audio class="audio-player" controls preload="metadata">
                    <source src="audio/Nick_Cave_The_Bad_Seeds_-_Abbatoir_Blues_48399100.mp3" type="audio/mpeg">
                </audio>
            </div>
            <div class="audio-body">
                <p class="audio-text">
                    To Bring You My Love <br><span style="font-weight: lighter; font-size: small">PJ Harvey</span>
                </p>
                <audio class="audio-player" controls preload="metadata">
                    <source src="audio/PJ_Harvey_-_To_Bring_You_My_Love_48014988.mp3" type="audio/mpeg">
                </audio>
            </div>
            <div class="audio-body">
                <p class="audio-text">
                    Loverman<br><span style="font-weight: lighter; font-size: small">Nick Cave & The Bad Seeds</span>
                </p>
                <audio class="audio-player" controls preload="metadata">
                    <source src="audio/Nick_Cave_The_Bad_Seeds_-_Loverman_48028320.mp3" type="audio/mpeg">
                </audio>
            </div>
            <div class="audio-body">
                <p class="audio-text">
                    Martha's Dream <br><span style="font-weight: lighter; font-size: small">Nick Cave, Warren Ellis</span>
                </p>
                <audio class="audio-player" controls preload="metadata">
                    <source src="audio/Nick_Cave_-_Marthas_Dream_65212494.mp3" type="audio/mpeg">
                </audio>
            </div>
            <div class="audio-body">
                <p class="audio-text">
                    You're Not God <br><span style="font-weight: lighter; font-size: small">Anna Calvi</span>
                </p>
                <audio class="audio-player" controls preload="metadata">
                    <source src="audio/Anna_Calvi_-_Youre_Not_God_From_Peaky_Blinders_Original_Soundtrack_67270030.mp3" type="audio/mpeg">
                </audio>
            </div>
        </div>
        <div class="right-bar">
            <p>
                Британский сериал «Острые козырьки» покорил зрителей не только сильным актерским составом, но и мощным саундтреком: песни Nick Cave & The Bad Seeds, The White Stripes, PJ Harvey, The Raconteurs, Arctic Monkeys, Jack White, Royal Blood и многих других отлично вписались в гангстерскую сагу.
            </p>
            <p>
                Тематическая песня для Peaky Blinders, Red Right Hand была написана Ником Кейвом и The Bad Seeds. Эта песня также появляется в «Секретных материалах» (1993), «Тупой и еще тупее» (1994), «Хеллбой: Герой из пекла» (2004), трилогии «Крик» и «Джек Айриш: Безнадежные долги» (2012), а также в других фильмах и сериалах Джека Айриша.
            </p>
            <p>
                «Red Right Hand» — песня рок-группы Nick Cave and the Bad Seeds, впервые выпущенная на их восьмом студийном альбоме Let Love In в 1994 году.
            </p>
            <p>
                Песни австралийского рок-музыканта Ника Кейва звучат как в заставке сериала «Острые козырьки», так и почти во всех эпизодах. Так получилось, что они очень созвучны происходящему на экране.
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
<script src="js/audio-script.js"></script>
</body>
</html>