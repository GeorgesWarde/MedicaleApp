<?php
session_start();
include_once './php/Models/model.php';
include_once './php/Controller/appointment.php';
$app = new appointment;
$id = $_GET['id'];
$dep = $app->findByDepartments($id);
$row = mysqli_fetch_row($dep);
?>
<!Doctype html>
<html>

<head>
    <title>Make an appointment Online</title>


    <link rel="stylesheet" href="./style/style.css">


</head>

<body>
    <?php include_once './require/header.php';  ?>
    <div class="doctors">
        <div class="row image">

            <div class="col-12 text">
                A healthy outside start<br> from the inside
            </div>
        </div>
        <div class="container-xl">
            <div class="row">
                <div class="col-12 form">
                    <h2>Medical appointment form</h2>
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Patient name</label><br>
                                <input type="text" name="patientName" id="" placeholder="Patient name" disabled
                                    value="<?= $_SESSION['fname'] ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="">Visit date</label><br>
                                <input type="date" name="dateAppointment" id="" placeholder="Patient name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Phone number</label><br>
                                <input type="number" name="phoneNumber" id="" placeholder="Patient name">
                            </div>
                            <div class="col-md-6">
                                <label for="">Select department</label><br>
                                <select name="department" style="width:100% ;">
                                    <option value="<?= $row[0] ?>"><?= $row[1] ?></option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Birth date</label><br>
                                <input type="text" name="agePatient" id="" value="2022-02-02" disabled>
                            </div>
                            <div class="col-md-6">
                                <label for="">Gender</label><br>
                                <select name="gender" id="" style="width:100% ;">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Allergie</label><br>
                                <input type="text" name="disease" id="" placeholder="Disease">
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="">Symptoms</label><br>
                                <input type="text" name="symptoms" id="" placeholder="Symptoms">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Labs</label><br>
                                <select name="test" style="width:100% ;">
                                    <option value="1">Blood test</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="">Doctor</label><br>
                                <select name="doctor" id="" style="width: 100%;">
                                    <option value="1">Dr.Georges wardeh</option>
                                </select>
                            </div>
                        </div>
                        <div class="row btn">
                            <div class="col-12">
                                <input type="submit" value="Make an appointment" name="submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <?php include_once './require/footer.php'; ?>
</body>

<script src="Js/main.js"></script>

</html>