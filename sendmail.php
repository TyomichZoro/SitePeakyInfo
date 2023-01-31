<?php
    $subject = null;
    if($_POST['captcha'] !== "012345") {
        header('location: test.html');
        exit;
    }
    if($_POST['subject'] == 1) {
        $subject = 'По фану';
    }
    elseif($_POST['subject'] == 2) {
        $subject = 'Вопрос';
    }
    elseif($_POST['subject'] == 3) {
        $subject = 'Благодарность';
    }
    elseif($_POST['subject'] == 4) {
        $subject = 'Никита';
    }
    $to = trim($_POST['email']);
    $from = "artyombakov03@mail.ru";
    $message = htmlspecialchars($_POST['message']);
    $message = urldecode($message);
    $message = trim($message);

    $headers = "From: $from"."\r\n";
    $headers .= "Reply-To: $from"."\r\n";
    $headers .= "X-Mailer: PHP/".phpversion();

    if (mail("$to", "$subject", "$message", "$headers")) {
        echo "Письмо отправлено";
    }
    else {
        echo "Письмо не отправлено";
    }
?>