<?php
include './php/Models/model.php';
include './php/Controller/results.php';
session_start();
if (!isset($_SESSION['fname'])) {
    header("location:login");
}
$result = new result;
$lab = $result->findAll($_GET['idU'], $_GET['idL']);
$row = mysqli_fetch_row($lab);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lunges Scan Results</title>

    <link rel="stylesheet" href="style/admin.css">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <?php include_once './require/header.php' ?>
    <div id="tab">
        <h2 style="justify-content:center;align-items:center;display:flex"><?= $_SESSION['fname'] ?></h2>
        <div class="container" style="margin-top:3%;">
            <div class="row align-items-start">
                <div class="col">
                    <p style="justify-content:center;align-items:center;display:flex"><img
                            src="public/uploads/<?= $row[31] ?>" width="70%" height="300px " style="border-radius:8px;">
                    </p>

                </div>
                <div class="col">
                    <p style="justify-content:center;align-items:center;display:flex"><img
                            src="public/uploads/<?= $row[32] ?>" width="70%" height="300px" style="border-radius:8px;">
                    </p>

                </div>
            </div>
        </div>
    </div>
    <div class="container-xl"><button style="padding:5px;background-color:#00556f;color:white;border-radius:3px;"
            onclick="createpdf()">Print your Test</button>*Bring the test with you when you visit our center</div>
    <?php include_once './require/footer.php' ?>
</body>
<script src="./Js/main.js"></script>

</html>