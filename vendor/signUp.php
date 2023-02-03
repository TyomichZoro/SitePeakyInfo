<?php
    session_start();
    error_reporting(0);
    require_once '../connectBD.php';

    $fio = $_POST['fio'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordConfirm = $_POST['passwordConfirm'];

    if ($password === $passwordConfirm) {
        $path = 'uploads/' . time() . $_FILES['avatar']['name'];
        if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../'. $path)) {
            $_SESSION['message'] = 'Ошибка при загрузке сообщения';
            header('Location: ../register.php');
        }

        $password = md5($password);

        mysqli_query($connect, "INSERT INTO `users` (`id`, `fio`, `login`, `email`, `password`, `avatar`) VALUES (NULL, '$fio', '$login', '$email', '$password', '$path')");

        $_SESSION['message'] = 'Регистрация прошла успешна';
        header('Location: ../account.php');
    }
    else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../register.php');
    }
?>