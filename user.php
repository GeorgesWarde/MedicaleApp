<?php
session_start();
if (!isset($_SESSION['fname'])) {
    header("location:login");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Anthony</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <?php include_once 'require/header.php'; ?>
    <div class="user">
        <div class="container-xl">
            <div class="row">

                <div class="col-md-6">
                    <h1>Health Care Solution</h1>
                    <h2>Welcome <?php
                                if (isset($_SESSION['fname'])) {
                                    echo $_SESSION['fname'];
                                }
                                ?></h2>
                    <div class="txt">
                        <div>We take care Of</div>
                        <p>Your healthy <br>health</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="./images/medical.jpg" alt="" width="100%">
                </div>
            </div>
            <div class="row" style="margin-top:30px ;">
                <div class="col-md-3">
                    <div class="box" id="box">
                        <a href="#labs">Our labs</a>
                        <a href="#make">Make appointment</a>
                        <a href="#check">Check labs result</a>

                    </div>
                </div>
                <div class="col-md-9">
                    <div class="ourlabs" id="labs">
                        <div class="row" style="margin-top: 20px;">
                            <div class="col-sm-6">
                                <div class="box">
                                    <img src="./images/bloodtests.jpg" alt="" width="100%">
                                    <div class="txt">
                                        Blood test:<br>
                                        A blood test is a laboratory analysis performed on a blood sample that is
                                        usually extracted from a vein in the arm using a hypodermic needle, or via
                                        fingerprick.
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="box">
                                    <img src="./images/abdominal.jpg" alt="" width="100%">
                                    <div class="txt">
                                        CtScan<br>
                                        A CT scan, also known as computed tomography scan is a medical imaging technique
                                        used in radiology to obtain detailed internal images of the body noninvasively
                                        for diagnostic purposes.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 20px;">
                            <div class="col-sm-6">
                                <div class="box">
                                    <img src="./images/lung.webp" alt="" width="100%">
                                    <div class="txt">
                                        LungeScan<br>
                                        A lung scan is an imaging test to look at your lungs and help diagnose certain
                                        lung problems.
                                    </div>
                                </div>
                            </div><br>
                            <div class="col-sm-6">
                                <div class="box">
                                    <img src="./images/what-is-a-dexa-scan.jpg" alt="" width="100%">
                                    <div class="txt">
                                        DexaScan<br>
                                        A procedure that measures the amount of calcium and other minerals in a bone by
                                        passing x-rays with two different energy levels through the bone. </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="make">
                        <div class="row" style="margin-top:30px ;">
                            <div class="col-md-6">
                                to make an appointment: to arrange, to organize a visit, a date
                            </div>
                            <div class="col-md-6">
                                <a href="make">Make an appointment</a>
                            </div>
                        </div>
                    </div>
                    <div id="check">
                        <div class="row" style="margin-top: 30px;">
                            <h3 align="center">Results</h3>
                            <div class="col-3">
                                <a href="bloodresult">Blood Result</a>
                            </div>
                            <div class="col-3">
                                <a href="lungescan">Lunge scan Result</a>
                            </div>
                            <div class="col-3">
                                <a href="dexascanresult">Dexa Scan Result</a>
                            </div>
                            <div class="col-3">
                                <a href="ctscanresult">Ct Scan Result</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once 'require/footer.php'; ?>
</body>
<script src="./Js/main.js"></script>

</html>