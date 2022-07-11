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
    <title>Dexa Scan Result</title>

    <link rel="stylesheet" href="style/admin.css">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <?php include_once './require/header.php' ?>
    <div id="tab">
        <h3 style="justify-content:center;align-items:center;display:flex;"><?= $_SESSION['fname'] ?></h3>
        <div class="container" style="color:#00556f">
            <div class="row align-items-start">
                <div class="col" style="overflow-x: auto;">
                    <table class="table mytable">
                        <thead style="color:#00556f" ;>
                            <tr>

                                <th>Area(cm*cm)</th>
                                <th>BMC(g)</th>
                                <th>BMD(g/cm*cm)</th>
                                <th>T-score</th>
                                <th>Z-score</th>
                            </tr>
                            <tr>

                                <th><?= $row[22] ?></th>
                                <th><?= $row[23] ?></th>
                                <th><?= $row[24] ?></th>
                                <th><?= $row[25] ?></th>
                                <th><?= $row[26] ?></th>

                            </tr>



                        </thead>
                    </table>
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