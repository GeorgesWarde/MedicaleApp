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
    <title>Blood Test Result</title>

    <link rel="stylesheet" href="style/admin.css">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <?php include_once './require/header.php' ?>
    <div id="tab">
        <h3 style="justify-content:center;align-items:center;display:flex;"><?= $_SESSION['fname'] ?></h3>

        <div class="container" style="color:#00556f">
            <div class="row align-items-start">
                <div class="col">
                    <table class="table mytable">
                        <thead>
                            <tr>
                                <th scope="col" style="color:#00556f;">Blood Test</th>

                                <th scope="col" style="color:#00556f;">Result</th>
                                <th scope="col" style="color:#00556f;">Normal Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="col">Sodium (mmol/L)</th>

                                <th scope="col"><?= $row[3] ?></th>
                                <th scope="col">150-160</th>
                            </tr>
                            <tr>
                                <th scope="col">Potasium (mmol/L)</th>

                                <th scope="col"><?= $row[4] ?></th>
                                <th scope="col">40-60</th>
                            </tr>
                            <tr>
                                <th scope="col">Chloriode(mmol/L)</th>

                                <th scope="col"><?= $row[5] ?></th>
                                <th scope="col">25-40</th>
                            </tr>
                            <tr>
                                <th scope="col">Bicarbonate(mmol/L)</th>

                                <th scope="col"><?= $row[6] ?></th>
                                <th scope="col">22-32</th>
                            </tr>
                            <tr>
                                <th scope="col">Urea(mmol/L)</th>

                                <th scope="col"><?= $row[7] ?></th>
                                <th scope="col">3-7.5</th>
                            </tr>
                            <tr>
                                <th scope="col">Creatinine(nmol/L)</th>

                                <th scope="col"><?= $row[8] ?></th>
                                <th scope="col">60-110</th>
                            </tr>
                            <tr>
                                <th scope="col">eGFR(mL/min/1.73m*m)</th>

                                <th scope="col">><?= $row[9] ?></th>
                                <th scope="col">>90</th>
                            </tr>
                            <tr>
                                <th scope="col">Corrected Calcium(mmol/L)</th>

                                <th scope="col"><?= $row[10] ?></th>
                                <th scope="col">2.15-2.55</th>
                            </tr>
                            <tr>
                                <th scope="col">Phosphate(mmol/L)</th>

                                <th scope="col"><?= $row[11] ?></th>
                                <th scope="col">0.75-1.5</th>
                            </tr>
                            <tr>
                                <th scope="col">Magnesium(mmol/L)</th>

                                <th scope="col"><?= $row[12] ?></th>
                                <th scope="col">0.7-1.10</th>
                            </tr>
                            <tr>
                                <th scope="col">Albumin(g/L)</th>

                                <th scope="col"><?= $row[13] ?></th>
                                <th scope="col">35-50</th>
                            </tr>
                            <tr>
                                <th scope="col">Haemoglobin(g/L</th>

                                <th scope="col"><?= $row[14] ?></th>
                                <th scope="col">130-180</th>
                            </tr>
                            <tr>
                                <th scope="col">White Cell Count(x100000/L)</th>

                                <th scope="col"><?= $row[15] ?></th>
                                <th scope="col">3.7-9.5</th>
                            </tr>
                            <tr>
                                <th scope="col">Platelets(x100000/L)</th>

                                <th scope="col"><?= $row[16] ?></th>
                                <th scope="col">150-400</th>
                            </tr>
                            <tr>
                                <th scope="col">Thyroid Stimulating Hormone(mIU/L)</th>

                                <th scope="col"><?= $row[17] ?></th>
                                <th scope="col">0.5-4</th>
                            </tr>
                            <tr>
                                <th scope="col">Free triiodothyronine(T3)(PMOL/l)</th>

                                <th scope="col"><?= $row[18] ?></th>
                                <th scope="col">3.2-6.3</th>
                            </tr>

                            <tr>
                                <th scope="col">Follicide stimulating hormone(mIU/mL)</th>

                                <th scope="col"><?= $row[19] ?></th>
                                <th scope="col">
                                    9 </th>
                            </tr>
                            <tr>
                                <th scope="col">Testosterone(nmol/L)</th>

                                <th scope="col"><?= $row[20] ?></th>
                                <th scope="col">9.5-28</th>
                            </tr>
                            <tr>
                                <th scope="col">Blood Glucose(mmol/L)</th>

                                <th scope="col"><?= $row[21] ?></th>
                                <th scope="col">3.5-5.5</th>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xl"><button style="padding:5px;background-color:#00556f;color:white;border-radius:3px;"
            onclick="createpdf()">Print your Test</button>*Bring the test with you when you visit our center</div>
    </div>
    <?php include_once './require/footer.php' ?>
</body>
<script src="./Js/main.js"></script>

</html>