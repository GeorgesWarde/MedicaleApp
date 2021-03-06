<?php
// session_start();
include_once './php/Models/model.php';
include_once './php/Controller/user.php';

$user = new user;
if (isset($_POST['registeruser'])) {
    $field = [
        'first_name' => $_POST['fname'],
        'last_name' => $_POST['lname'],
        'year_of_birth' => $_POST['birth'],
        'gender' => $_POST['gender'],
        'username' => $_POST['uname'],
        'password' => md5($_POST['password']),
        'role_id' => 4,
        'email' => $_POST['email']
    ];
    $result = $user->findByEmailUsername($_POST['uname'], $_POST['email']);
    $row = mysqli_fetch_row($result);
    if ($row) {
        if ($field['email'] == $row[1]) {
            echo "email already exist";
        } else if ($field['username'] == $row[0]) {
            echo "username already exist";
        }
    } else {
        if ($_POST['password'] == $_POST['confirmpass']) {

            $user->register($field);
        } else {
            echo "password not match";
        }
    }
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
    <title>Register</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">






    <link href="style.css" rel="stylesheet">
</head>

<body class="text-center">
    <div class="container-xl">
        <main class="form-signin">
            <form method="POST">

                <h1 class="h3 mb-3 fw-normal">Register</h1>

                <div class="form-floating inputs">
                    <input type="text" name="uname" class="form-control borders" id="floatingInput"
                        placeholder="Username" required>
                    <label for="floatingInput">Username</label>
                </div>
                <div class="form-floating inputs">
                    <input type="text" name="fname" class="form-control borders" id="floatingInput"
                        placeholder="name@example.com" required>
                    <label for="floatingInput">First name</label>
                </div>
                <div class="form-floating inputs">
                    <input type="text" name="lname" class="form-control borders" id="floatingInput"
                        placeholder="name@example.com" required>
                    <label for="floatingInput">Last name</label>
                </div>
                <div class="form-floating inputs">
                    <input type="date" name="birth" class="form-control borders" id="floatingInput" required>
                    <label for="floatingInput">Date of birth</label>
                </div>
                <div class="form-floating inputs">
                    <select name="gender" name="gender" id="floatingInput" class="form-control borders" required>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>

                    </select>
                    <label for="floatingInput">Gender</label>
                </div>
                <div class="form-floating inputs">
                    <input type="email" name="email" class="form-control borders" id="floatingPassword"
                        placeholder="Email" required>
                    <label for="floatingPassword">Email</label>
                </div>
                <div class="form-floating inputs">
                    <input type="password" name="password" class="form-control borders" id="floatingPassword"
                        placeholder="Password" required>
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="form-floating inputs ">
                    <input type="password" name="confirmpass" class="form-control borders" id="floatingPassword"
                        placeholder="Password" required>
                    <label for="floatingPassword">Confirm Password</label>
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit" name="registeruser">Sign up</button>

            </form>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>