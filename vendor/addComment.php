<?php
    session_start();
    error_reporting(0);
    $connect = mysqli_connect('localhost', 'root', '', 'TestBD');

    $user_fio = 'anonimus'. time();
    $user_img = 'img/account.jpg';
    $user_comment = $_POST['comment'];

    if ($_SESSION['user']) {
        $user_fio = $_SESSION['user']['fio'];
        $user_img = $_SESSION['user']['avatar'];
        $user_id = $_SESSION['user']['id'];

        mysqli_query($connect, "INSERT INTO `Comments` (`id`, `user_id`, `user_fio`, `user_img`, `comment`) VALUES (NULL, '$user_id', '$user_fio', '$user_img', '$user_comment')");
    }
    else {
        mysqli_query($connect, "INSERT INTO `Comments` (`id`, `user_id`, `user_fio`, `user_img`, `comment`) VALUES (NULL, NULL, '$user_fio', '$user_img', '$user_comment')");
    }

    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>