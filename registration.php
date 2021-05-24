<?php
session_start();

if ($_POST['name'] && $_POST['pass']) {
    $data = [$_POST['name'], $_POST['pass']];
    $file = 'data.csv';
    $fp = fopen($file, 'a+');

    $csv = array_map('str_getcsv', file($file));
    foreach ($csv as $value) {
        if (in_array($_POST['name'], $value)) {
            $_SESSION['errors']['user'] = 'Пользователь с таким именем существует!';
            header('Location: /reg.php');
            exit();
        }
    }

    if (is_resource($fp)) {
        fputcsv($fp, $data);
    }

    fclose($fp);
    $_SESSION['user']['name'] = $_POST['name'];
    $_SESSION['user']['pass'] = $_POST['pass'];
    $_SESSION['user']['massage'] = 'Регистрация прошла успешно';
    header('Location: /lk.php');
    exit('asdasd');
} else {
    if ($_POST['name']) {
        $_SESSION['errors']['name'] = 'Login не заполнен!';
    }
    if ($_POST['pass']) {
        $_SESSION['errors']['pass'] = 'Password не заполнен!';
    }
    header('Location: /reg.php');
}
