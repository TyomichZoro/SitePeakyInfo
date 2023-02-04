<?php
    session_start();
    error_reporting(0);
    $connect = mysqli_connect('localhost', 'root', '', 'TestBD');

    $login = $_POST['login'];
    $password = md5($_POST['password']);

    $checkUser = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");

    if (mysqli_num_rows($checkUser) > 0) {
        $user = mysqli_fetch_assoc($checkUser);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "fio" => $user['fio'],
            "avatar" => $user['avatar'],
            "email" => $user['email']
        ];

        header("Location: ../profile.php");
    }
    else {
        $_SESSION['message'] = 'Неверный логин или пароль';
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
?>


