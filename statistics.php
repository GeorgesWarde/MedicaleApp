<?php
include_once './php/Models/model.php';
include_once './php/Controller/user.php';
include_once './php/Controller/appointment.php';
if (!isset($_SESSION['adminfname'])) {
  header("location:login");
}
$user = new user;
$app = new appointment;
$countgenderpatientM = $user->countPatientByGender('male');
$resultM = mysqli_fetch_row($countgenderpatientM);
$countgenderpatientF = $user->countPatientByGender('female');
$resultF = mysqli_fetch_row($countgenderpatientF);
//
$countdocavailable = $user->countDoctorByAvailability('available');
$resultA = mysqli_fetch_row($countdocavailable);
$countdocnotavailable = $user->countDoctorByAvailability('not available');
$resultN = mysqli_fetch_row($countdocnotavailable);
//
$countlab1 = $app->findLabsByid(1);
$countlab2 = $app->findLabsByid(2);
$countlab3 = $app->findLabsByid(3);
$countlab4 = $app->findLabsByid(4);
$res1 = mysqli_fetch_row($countlab1);
$res2 = mysqli_fetch_row($countlab2);
$res3 = mysqli_fetch_row($countlab3);
$res4 = mysqli_fetch_row($countlab4);
//
$allergie = $app->findAllergie();
$symptoms = $app->findSymptoms();
$rowallergie = mysqli_fetch_row($allergie);
$rowsymptoms = mysqli_fetch_row($symptoms);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistic</title>
    <link rel="stylesheet" href="./style/style.css">
</head>

<body>
    <?php include_once './require/header.php'; ?>
    <div class="row">
        <div class="col-6">
            <div id="piechart" style="width: 900px; height: 500px;"></div>
        </div>
        <div class="col-6">
            <div id="piechartDoctor" style="width: 900px; height: 500px;"></div>

        </div>

    </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div id="piechartResult" style="width: 900px; height: 500px;"></div>
        </div>
        <div class="col-6">
            <div id="piechartDS" style="width: 900px; height: 500px;"></div>

        </div>

    </div>
    </div>
    <?php include_once './require/footer.php';  ?>
</body>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script>
google.charts.load('current', {
    'packages': ['corechart']
});
google.charts.setOnLoadCallback(drawChart);
google.charts.setOnLoadCallback(drawChartDoc);
google.charts.setOnLoadCallback(drawChartResult);
google.charts.setOnLoadCallback(drawChartdiseaseSymptoms);


function drawChart() {

    var data = google.visualization.arrayToDataTable([
        ['Patient', '4'],

        ['Man', <?= $resultM[0] ?>],
        ['Women', <?= $resultF[0] ?>],

    ]);

    var options = {
        title: 'Patient Statistics'
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    chart.draw(data, options);
}

function drawChartDoc() {

    var data = google.visualization.arrayToDataTable([
        ['Task', 'Hours per Day'],

        ['Available', <?= $resultA[0] ?>],
        ['Not Available', <?= $resultN[0] ?>],
    ]);

    var options = {
        title: 'Doctor Statistics'
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechartDoctor'));

    chart.draw(data, options);
}

function drawChartResult() {

    var data = google.visualization.arrayToDataTable([
        ['Task', 'Hours per Day'],

        ['Blood Test', <?= $res1[0] ?>],
        ['DexaScan', <?= $res2[0] ?>],
        ['CtScan', <?= $res3[0] ?>],

        ['LungeScan', <?= $res4[0] ?>],


    ]);

    var options = {
        title: 'Labs Statistics'
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechartResult'));

    chart.draw(data, options);
}

function drawChartdiseaseSymptoms() {

    var data = google.visualization.arrayToDataTable([
        ['Task', 'Hours per Day'],

        ['Allergie', <?= $rowallergie[0] ?>],
        ['Symptoms', <?= $rowsymptoms[0] ?>],



    ]);

    var options = {
        title: 'Patient Case Statistics'
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechartDS'));

    chart.draw(data, options);
}
</script>

</html>