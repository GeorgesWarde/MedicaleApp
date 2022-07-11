<?php
include_once './php/Models/model.php';
include './php/Controller/user.php';
include './php/Controller/preexam.php';
if (!isset($_SESSION['doctorfname'])) {
    header("location:login");
}
$query = "select first_name,last_name from users where id=" . $_GET['id'];
$res = mysqli_query((new Model)->getConnection(), $query);
$row = mysqli_fetch_assoc($res);
$pre = new Preexams;
$read = $pre->readPre($_GET['id']);
$rows = mysqli_fetch_row($read);
if ($rows == null) {
    $rows[0] = "";
    $rows[1] = "";
    $rows[2] = "";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Center</title>
    <link rel="stylesheet" href="style/style.css">
    <style type="text/css">
    @media screen and (max-width:400px) {
        .mob {
            font-size: 14px;
        }
    }
    </style>
</head>

<body>
    <?php include './require/header.php' ?>
    <div class="container-xl">
        <h1><?= $row['first_name'] . " " . $row['last_name'] ?>'s pre_exam to be consulted by the doctor and fill our
            ehrfile</h1>
        <div class="row">
            <div class="col-4">Temperature</div>
            <div class="col-4">pulse_rate</div>
            <div class="col-4 mob">Blood_pressure</div>
        </div>
        <div class="row">
            <div class="col-4"><?= $rows[0] ?></div>
            <div class="col-4"><?= $rows[1] ?></div>
            <div class="col-4"><?= $rows[2] ?></div>
        </div>
    </div>

    <?php include './require/footer.php' ?>
</body>

</html>