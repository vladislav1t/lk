<?php
session_start();

if ($_POST['name'] && $_POST['pass']) {

    $data = [$_POST['name'], $_POST['pass']];
    $file = 'data.csv';
    $fp = fopen($file, 'a');

    $csv = array_map('str_getcsv', file($file));

    $i = 0;
    foreach ($csv as $value) {
        if (in_array($_POST['name'], $value)) {
            if ($csv[$i][1] !== $_POST['pass']) {
                $_SESSION['errors']['pass'] = 'Password не верен!';
                header('Location: /');
                exit('111');
            } else {
                $_SESSION['user']['pass'] = $_POST['pass'];
            }
            if($csv[$i][0] !== $_POST['name']) {
                $_SESSION['errors']['name'] = 'Login не верен!';
                header('Location: /');
                exit('222');
            } else {
                $_SESSION['user']['name'] = $_POST['name'];
            }
            if ($_SESSION['user']['name'] == $_POST['name'] && $_SESSION['user']['pass'] == $_POST['pass']) {
                header('Location: /lk.php');
                exit('asdasd');
            }

        }
        $i++;
    }

    fclose($fp);

}

