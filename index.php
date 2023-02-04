<?php
    session_start();
    error_reporting(0);
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Острые козырьки</title>
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
                            <a class="nav-link active-style" aria-current="page" href="index.php">Начальная страница</a>
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
                            <a class="nav-link" href="<?= $href ?>">Аккаунт</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section>
        <div>
            <img class="img-style" width="100%" height="60%" src="https://i.playground.ru/e/HxQmVqsFEfxvd0lUQthkQw.jpeg" alt="Главная">
        </div>
        <div class="container-fluid my-4">
        <div class="row">
            <div class="col-lg-8 col-md-12 main-container">
                <div class="row">
                    <div id="carouselExampleIndicators" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="d-block w-100">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <img src="https://oboi-telefon.ru/wallpapers/56499/30657.jpg" class="w-100" alt="Томас Шелби">
                                        </div>
                                        <div class="col-lg-6 col-md-6 slide-text">
                                            <p>
                                                “	Одна минута. Минута солдата. В бою это всё, что у тебя есть. Одна минута на всё сразу, и всё, что было до — ничто. Всё, что после — ничто. Ничто по сравнению с этой минутой.	”

                                                — Томас Шелби.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="d-block w-100">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <img src="https://oboi-telefon.ru/wallpapers/56524/36220.jpg" class="w-100" alt="Артур Шелби">
                                        </div>
                                        <div class="col-lg-6 col-md-6 slide-text">
                                            <p>
                                                “	Моя голова как баржа, гружённая углём и железом. И когда она накреняется, груз скользит то к одному борту, то к другому, и в конечном итоге — баржа переворачивается. Вот и моя голова, как эта чёртова баржа — качается, качается и переворачивается, и я ничего сделать не могу.	”

                                                — Артур Шелби
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="d-block w-100">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <img src="https://oboi-telefon.ru/wallpapers/56545/30736.jpg" class="w-100" alt="Джон Шелби">
                                        </div>
                                        <div class="col-lg-6 col-md-6 slide-text">
                                            <p>
                                                " Томми, я хочу, чтобы среди всех людей в мире именно ты оценил мою смелость.
                                                Смелость — это бывать в тех местах, где не бывали другие мужчины. А о Лиззи Старк такого сказать нельзя."
                                                — Джон и Томас Шелби
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="d-block w-100">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <img src="https://adonius.club/uploads/posts/2022-03/thumbs/1646951853_34-adonius-club-p-dzhon-shelbi-art-58.jpg" class="w-100" alt="Финн Шелби">
                                        </div>
                                        <div class="col-lg-6 col-md-6 slide-text">
                                            <p>
                                                " Я делал вид, что я — это ты. <...>
                                                 Теперь ты видишь, как опасно притворяться мной? "
                                                — Финн и Томас Шелби
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-carousel">
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 my-4 mb-0 text-center">
                        <h1 class="h-style">Острые козырьки</h1>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <p>
                            Острые козырьки» — британский криминальный драматический сериал, созданный Стивеном Найтом в 2013 году для телеканала BBC Two и повествующий о деятельности преступного клана Шелби в Бирмингеме в 1920-е годы.                        </p>
                    </div>
                    <div class="col-lg-12 col-md-12 text-center my-4">
                        <form id="container">
                            <input type="text" id="nikita-input" placeholder="Введите значение" autocomplete="off">
                            <button class="btn btn-outline-success my-1" id="nikita-btn">Доп информация</button>
                        </form>
                        <div class="fade-block hidden" id="well-modal">
                            <div class="modal-window">
                                <div class="modal-header">
                                    <h3>ВНИМАНИЕ</h3>
                                </div>
                                <div class="modal-body mx-2">
                                    <p>
                                        Данная страничка не имеет цели оскорбить или унизить данного человека.
                                        <br>
                                        Все совпадения случайны. Ни одна горилла при создании не пострадала.
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-outline-danger my-1 close-btn" id="close-1">Закрыть</button>
                                    <button class="btn btn-outline-success my-1 success-btn">Принять</button>
                                </div>
                            </div>
                        </div>
                        <div class="fade-block hidden" id="bad-modal">
                            <div class="modal-window">
                                <div class="modal-header">
                                    <h3>ВНИМАНИЕ</h3>
                                </div>
                                <div class="modal-body mx-2">
                                    <p>
                                        Информации по данному запросу не найдено.
                                        <br>
                                        Попробуйте ввести другой запрос.
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-outline-danger my-1 close-btn" id="close-2">Закрыть</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 right-bar">
                <div class="row">
                    <div class="col-lg-12">
                        <p>
                            Название и история сериала основаны на одной особенности банды — вшивать в козырьки кепок бритвенные лезвия, чтобы применять кепку как оружие в схватках с противниками. Лезвия вшивались в козырьки кепок для того, чтобы при ударе головой рассечь кожу противника и ослепить его своей же кровью.
                        </p>
                    </div>
                    <div class="col-lg-12">
                        <p>
                            Несмотря на то, что по сюжету действие сериала разворачивается в Бирмингеме, на самом деле съемки проходят по всей Великобритании. Некоторые серии были сняты в Лидсе, Манчестере, Брэдфорде, Дадли, Болтоне и Китли. Конечно же, есть серии, снятые и в самом Бирмингеме.
                        </p>
                    </div>
                    <div class="col-lg-12">
                        <p>
                            Когда Стивена Найта спросили, какие фильмы вдохновили его на написание сценария, он признался, что это были больше американские вестерны, чем гангстерские фильмы. Британская версия ковбойских историй — это легенды о рыцарях, но у британцев нет традиции снимать кино о рыцарях, как у американцев, напротив, есть традиция снимать фильмы о ковбоях.
                        </p>
                    </div>
                </div>
            </div>
            <h3 class="comment-h">Комментарии</h3>
            <div class="col-lg-12 col-md-12 col-sm-11 comment-container">
                <div class="col-lg-8 col-md-12 com-ms-12">

                    <?php
                        $connect = mysqli_connect('localhost', 'root', '', 'TestBD');
                        $comments = mysqli_query($connect, "SELECT * FROM `Comments`");
                        $comments = mysqli_fetch_all($comments);
                    ?>

                    <form action="vendor/addComment.php" class="comment-add my-3" id="comment-form" method="post">
                        <textarea class="comment-text" name="comment" required></textarea>
                        <div class="comment-btn">
                            <button class="btn btn-outline-success" type="submit">Оставить комментарий</button>
                            <button class="btn btn-outline-danger">Отмена</button>
                        </div>
                    </form>
                </div>
                <?php
                    foreach ($comments as $item) {
                        ?>
                            <div class="comment-body">
                                <span style="font-weight: lighter"><?= $item[2] ?></span>
                                <img src="<?= $item[3] ?>" style="width: 40px" alt="avatar">
                                <p><?= $item[4] ?></p>
                            </div>
                        <?php

                    }
                ?>
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
    <script src="js/index-script.js"></script>
    </body>
</html>