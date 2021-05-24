<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Registration</title>
</head>
<body>
<div class="container">
    <div class="row align-items-center">
        <div class="col-md-4">&nbsp;</div>
        <div class="col-md-4">
            <?php if (!empty($_SESSION['errors'])) {
                foreach ($_SESSION['errors'] as $error) {
                    echo '<p>' . $error . '</p>';
                }
            } ?>
            <h1>Регистрация</h1>
            <form method="post" action="registration.php">
                <input type="hidden" name="reg">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Login</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                    <input type="password" name="pass" class="form-control">
                </div>
                <input type="submit" class="btn btn-primary">
                <a href="/">Авторизация</a>
            </form>
        </div>
    </div>
</body>
</html>