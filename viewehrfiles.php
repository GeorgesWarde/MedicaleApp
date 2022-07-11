<?php
include_once './php/Models/model.php';
include './php/Controller/user.php';
include './php/Controller/ehrfiles.php';
if (!isset($_SESSION['doctorfname'])) {
    header("location:login");
}
$query = "select first_name,last_name from users where id=" . $_GET['id'];
$res = mysqli_query((new Model)->getConnection(), $query);
$row = mysqli_fetch_assoc($res);
$pre = new ehrfiles;
$read = $pre->readehr($_GET['id']);
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
        <h1><?= $row['first_name'] . " " . $row['last_name'] ?>'s ehrfile </h1>
        <div id="tab">
            <div class="row">
                <div class="col-6">
                    Patient Name
                </div>
                <div class="col-6">
                    <?= $row['first_name'] . " " . $row['last_name'] ?>
                </div>

            </div>
            <div class="row">
                <div class="col-6">
                    Doctor Name
                </div>
                <div class="col-6">
                    Dr <?= $rows[3] . " " . $rows[4] ?>
                </div>

            </div>
            <div class="row">
                <div class="col-6">
                    Blood Type
                </div>
                <div class="col-6">
                    <?= $rows[0] ?>
                </div>

            </div>
            <div class="row">
                <div class="col-6">
                    Medical Require
                </div>
                <div class="col-6">
                    <?= $rows[5] ?>
                </div>

            </div>
            <div class="row">
                <div class="col-6">
                    Payment
                </div>
                <div class="col-6">
                    <?= $rows[1] ?>

                </div>

            </div>
            <div class="row">
                <div class="col-6">
                    Created at
                </div>
                <div class="col-6">
                    <?= $rows[2] ?>

                </div>

            </div>

        </div>
        <button style="padding:5px;background-color:#00556f;color:white;border-radius:3px;" onclick="createpdf()">Print
            Ehr</button>*Print and Send it to the patient
    </div>


    <?php include './require/footer.php' ?>
    <script src="./Js/main.js"></script>


</body>

</html>