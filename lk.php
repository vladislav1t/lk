<?php
session_start();
if (!empty($_SESSION['user']['massage'])) {
    echo '<p>'. $_SESSION['user']['massage'].'</p>';
}
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
    <title>User</title>
</head>
<body>
<div class="container">
    <div class="row align-items-center">
        <div class="col-md-4">&nbsp;</div>
        <div class="col-md-4">
            <h1>Личный кабинет</h1>
            <form action="update.php" method="post">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Login</label>
                    <input type="text" name="newname" class="form-control" value="<?php echo $_SESSION['user']['name'] ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                    <input type="text" name="newpass" class="form-control"
                           value="<?php echo $_SESSION['user']['pass'] ?>">
                </div>
                <input type="submit" class="btn btn-primary" value="Сохранить">
            </form>
        </div>
    </div>
</body>
</html>
