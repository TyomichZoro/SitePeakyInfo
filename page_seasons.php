<?php
    session_start();
    error_reporting(0);
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Сезоны</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
          crossorigin="anonymous"
    >
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/page_seasons-style.css">
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
                        <a class="nav-link active-style" href="page_seasons.php">Сезоны</a>
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
    <div class="page_seasons-grid">
        <div class="season-body">
            <h3 class="h-style season-title border-season-title">1 Сезон</h3>
            <div class="season-text hidden" id="season_1">
                <div class="season-left-bar">
                    <img src="https://plaqat.ru/images/21329.jpg" alt="1">
                </div>
                <div class="season-right-bar">
                    <h4><span style="font-weight: lighter">Рейтинг IMDb:</span> 8.47</h4>
                    <h4><span style="font-weight: lighter">Личный рейтинг:</span> 8.83</h4>
                    <a href="https://serialfan.net/39-peaky-blinders-5/1-season.html" target="_blank"><button class="btn btn-outline-warning">Смотреть</button></a>
                    <button class="btn btn-outline-primary info-btn">Информация о сюжете</button>
                    <p class="info-season hidden" id="text-season-1">
                        В 1 сезоне сериала «Острые козырьки» представлен английский город Бирмингем в 1919 году. Криминальными делами заправляет банда Шелби. Братьям приходится бороться с конкурирующими кланами и присланным военным министром Черчиллем инспектором Кэмпбеллом. Лидер группировки Томми влюбляется в барменшу Грейс Бёрджесс, которая – как выяснилось – работала на правительство.
                    </p>
                </div>
            </div>
        </div>
        <div class="season-body">
            <h3 class="h-style season-title border-season-title">2 Сезон</h3>
            <div class="season-text hidden" id="season_2">
                <div class="season-left-bar">
                    <img src="https://www.film.ru/sites/default/files/movies/posters/1921154-2064545.jpg" alt="2">
                </div>
                <div class="season-right-bar">
                    <h4><span style="font-weight: lighter">Рейтинг IMDb:</span> 8.63</h4>
                    <h4><span style="font-weight: lighter">Личный рейтинг:</span> 9.0</h4>
                    <a href="https://serialfan.net/39-peaky-blinders-5/2-season.html" target="_blank"><button class="btn btn-outline-warning">Смотреть</button></a>
                    <button class="btn btn-outline-primary info-btn">Информация о сюжете</button>
                    <p class="info-season hidden" id="text-season-2">
                        1921 год, два года спустя после событий первого сезона, банда Острые Козырьки пытается расширить своё влияние на север и юг Англии, оставляя Бирмингем в качестве штаб-квартиры. Однако эти области не пусты. Здесь также есть свои бандитские группировки. К тому же Томас Шелби оказывается нужен старому знакомому, Честеру Кэмбеллу, который теперь возглавляет службу разведки Британии.
                    </p>
                </div>
            </div>
        </div>
        <div class="season-body">
            <h3 class="h-style season-title border-season-title">3 Сезон</h3>
            <div class="season-text hidden" id="season_3">
                <div class="season-left-bar">
                    <img src="https://media7.kinotree.ru/files/s3/jv/tj/zatochennyie-kepki.jpg" alt="3">
                </div>
                <div class="season-right-bar">
                    <h4><span style="font-weight: lighter">Рейтинг IMDb:</span> 8.67</h4>
                    <h4><span style="font-weight: lighter">Личный рейтинг:</span> -</h4>
                    <a href="https://serialfan.net/39-peaky-blinders-5/3-season.html" target="_blank"><button class="btn btn-outline-warning">Смотреть</button></a>
                    <button class="btn btn-outline-primary info-btn">Информация о сюжете</button>
                    <p class="info-season hidden" id="text-season-3">
                        1924 год, влияние банды Острые Козырьки всё растёт. Теперь они готовы взяться за международный бизнес. Однако интриги становятся всё сложнее и риск потерять всё - гораздо выше. Томасу Шелби приходиться задать себе неудобные вопросы о том, насколько его желания и амбиции совпадают с реальными возможностями его банды.
                    </p>
                </div>
            </div>
        </div>
        <div class="season-body">
            <h3 class="h-style season-title border-season-title">4 Сезон</h3>
            <div class="season-text hidden" id="season_4">
                <div class="season-left-bar">
                    <img src="https://maksatbilgi.com/wp-content/uploads/2020/06/peaky-blinders-1.jpg" alt="4">
                </div>
                <div class="season-right-bar">
                    <h4><span style="font-weight: lighter">Рейтинг IMDb:</span> 8.95</h4>
                    <h4><span style="font-weight: lighter">Личный рейтинг:</span> -</h4>
                    <a href="https://serialfan.net/39-peaky-blinders-5/4-season.html" target="_blank"><button class="btn btn-outline-warning">Смотреть</button></a>
                    <button class="btn btn-outline-primary info-btn">Информация о сюжете</button>
                    <p class="info-season hidden" id="text-season-4">
                        1925 год, банда Острые Козырьки практически распалась, но всё ещё имеет влияние. Поэтому Луи Чангретта, глава сицилийской мафии планирует расправиться с каждый членом семьи Шелби в отдельности. Томасу Шелби приходится применить все свои таланты, чтобы он и его родные избежали смерти, а банда выжила.
                    </p>
                </div>
            </div>
        </div>
        <div class="season-body">
            <h3 class="h-style season-title border-season-title">5 Сезон</h3>
            <div class="season-text hidden" id="season_5">
                <div class="season-left-bar">
                    <img src="https://dodonung.com/wp-content/uploads/2020/04/96-1.jpg" alt="5">
                </div>
                <div class="season-right-bar">
                    <h4><span style="font-weight: lighter">Рейтинг IMDb:</span> 8.68</h4>
                    <h4><span style="font-weight: lighter">Личный рейтинг:</span> -</h4>
                    <a href="https://serialfan.net/39-peaky-blinders-5/5-season.html" target="_blank"><button class="btn btn-outline-warning">Смотреть</button></a>
                    <button class="btn btn-outline-primary info-btn">Информация о сюжете</button>
                    <p class="info-season hidden" id="text-season-5">
                        1929 год, в Англии крупномасштабный финансовый кризис, затронувший всё. Томас Шелби теперь член парламента, харизматичный политик с интересным видением будущего. Однако он не бросил свою семью, и теперь его решения напрямую влияют на неё и на всех жителей Британии.
                    </p>
                </div>
            </div>
        </div>
        <div class="season-body">
            <h3 class="h-style season-title border-season-title">6 Сезон</h3>
            <div class="season-text hidden" id="season_6">
                <div class="season-left-bar">
                    <img src="https://sun9-63.userapi.com/impg/mXac8-0m8mUh2win7CzpBzXNIR4SfHzmaYyO0Q/YdhN6i-h1kw.jpg?size=864x1080&quality=96&sign=3c912a920cfe2c7bbf10d86de5ca1bc9&c_uniq_tag=0mBF9p4IFtZhLhKwS7YV3siVxgwHjZHex1EvNUJjX9g&type=album" alt="6">
                </div>
                <div class="season-right-bar">
                    <h4><span style="font-weight: lighter">Рейтинг IMDb:</span> 8.45</h4>
                    <h4><span style="font-weight: lighter">Личный рейтинг:</span> -</h4>
                    <a href="https://serialfan.net/39-peaky-blinders-5/6-season.html" target="_blank"><button class="btn btn-outline-warning">Смотреть</button></a>
                    <button class="btn btn-outline-primary info-btn">Информация о сюжете</button>
                    <p class="info-season hidden" id="text-season-6">
                        Томас остается в живых, но уже через месяц пытается совершить самоубийство, т.к. уверен, что все равно умрет: доктор поставил ему страшный диагноз. Совершенно случайно с помощью потусторонних сил главный герой узнает, что диагноз был фальшивым. Томас хочет отомстить доктору, обманувшему его, но оставляет обманщика в живых. Он садится на белого коня и скачет вдаль, оставляя зрителей, смотрящих новый сезон «Острых козырьков» онлайн, гадать, что же ждет героев впереди. Открытая концовка намекает на продолжение...
                    </p>
                </div>
            </div>
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
<script src="js/seasons-script.js"></script>
</body>
</html>