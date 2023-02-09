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
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/index-style.css">
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
    <div>
        <img class="main-index-img" src="https://i.playground.ru/e/HxQmVqsFEfxvd0lUQthkQw.jpeg" alt="Главная">
    </div>
    <div class="index-grid">
        <div class="main-container">
            <h1 class="h-style">Острые козырьки</h1>
            <p>
                Острые козырьки» — британский криминальный драматический сериал, созданный Стивеном Найтом в 2013 году для телеканала BBC Two и повествующий о деятельности преступного клана Шелби в Бирмингеме в 1920-е годы.
            </p>
            <form id="container" class="index-form-container">
                <input type="text" id="nikita-input" placeholder="Введите значение" autocomplete="off">
                <button class="btn btn-outline-success my-1" id="nikita-btn">Доп информация</button>
            </form>
            <div class="fade-block hidden" id="well-modal">
                <div class="modal-window">
                    <div class="modal-header">
                        <h3>ВНИМАНИЕ</h3>
                    </div>
                    <div class="modal-body">
                        <p>
                            Данная страничка не имеет цели оскорбить или унизить данного человека.
                            <br>
                            Все совпадения случайны. Ни одна горилла при создании не пострадала.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-outline-danger close-btn" id="close-1">Закрыть</button>
                        <button class="btn btn-outline-success success-btn">Принять</button>
                    </div>
                </div>
            </div>
            <div class="fade-block hidden" id="bad-modal">
                <div class="modal-window">
                    <div class="modal-header">
                        <h3>ВНИМАНИЕ</h3>
                    </div>
                    <div class="modal-body">
                        <p>
                            Информации по данному запросу не найдено.
                            <br>
                            Попробуйте ввести другой запрос.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-outline-danger close-btn" id="close-2">Закрыть</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="right-bar">
            <p>
                Название и история сериала основаны на одной особенности банды — вшивать в козырьки кепок бритвенные лезвия, чтобы применять кепку как оружие в схватках с противниками. Лезвия вшивались в козырьки кепок для того, чтобы при ударе головой рассечь кожу противника и ослепить его своей же кровью.
            </p>
            <p>
                Несмотря на то, что по сюжету действие сериала разворачивается в Бирмингеме, на самом деле съемки проходят по всей Великобритании. Некоторые серии были сняты в Лидсе, Манчестере, Брэдфорде, Дадли, Болтоне и Китли. Конечно же, есть серии, снятые и в самом Бирмингеме.
            </p>
            <p>
                Когда Стивена Найта спросили, какие фильмы вдохновили его на написание сценария, он признался, что это были больше американские вестерны, чем гангстерские фильмы. Британская версия ковбойских историй — это легенды о рыцарях, но у британцев нет традиции снимать кино о рыцарях, как у американцев, напротив, есть традиция снимать фильмы о ковбоях.
            </p>
        </div>
        <div class="comment-container">
            <h3 class="comment-h">Комментарии</h3>
            <div>
                <?php
                $connect = mysqli_connect('localhost', 'root', '', 'TestBD');
                $comments = mysqli_query($connect, "SELECT * FROM `Comments`");
                $comments = mysqli_fetch_all($comments);
                ?>
                <form action="vendor/addComment.php" class="comment-add" id="comment-form" method="post">
                    <textarea class="comment-text" name="comment" required placeholder="Введите текст комментария"></textarea>
                    <div class="comment-btn">
                        <button class="btn btn-outline-success" type="submit">Оставить комментарий</button>
                        <button id="close-comment" type="button" class="btn btn-outline-danger">Отмена</button>
                    </div>
                </form>
            </div>
            <?php
            foreach ($comments as $item) {
                ?>
                <div class="comment-body">
                    <span style="font-weight: bold"><?= $item[2] ?></span>
                    <img src="<?= $item[3] ?>" style="width: 40px" alt="avatar">
                    <p><?= $item[4] ?></p>
                </div>
                <?php
            }
            ?>
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
<script src="js/index-script.js"></script>
</body>
</html>