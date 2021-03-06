<?php
// session_start();
include_once './php/Models/model.php';

include_once './php/Controller/user.php';

$user = new user;

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user->findByUsername($username, $password);
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Login</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="./style/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="text-center">
    <?php include_once './require/header.php'; ?>

    <div class="container-xl">
        <main class="form-signin">

            <form method="POST" enctype="multipart/form-data">

                <h1 class="h3 mb-3 fw-normal">Login</h1>

                <div class="form-floating inputs">
                    <input type="text" class="form-control borders" id="floatingInput" placeholder="Username"
                        name="username">
                    <label for="floatingInput">Username</label>
                </div>

                <div class="form-floating inputs">
                    <input type="password" class="form-control borders" id="floatingPassword" placeholder="Password"
                        name="password">
                    <label for="floatingPassword">Password</label>
                </div>


                <button class="w-100 btn btn-lg btn-primary" type="submit" name="login">Login</button>
                <p>New patient?Please register <a href="Registration.php">here</a></p>
            </form>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>