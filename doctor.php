<?php
include_once './php/Models/model.php';
include_once './php/Controller/user.php';
if (!isset($_SESSION['doctorfname'])) {
    header("location:login");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">

    <title>Welcome Dr.
        <?php if ($_SESSION['doctorfname']) {
            echo  $_SESSION['doctorfname'];
        } ?>
    </title>
</head>

<body>
    <?php include_once './require/header.php'; ?>
    <div class="doctors dr">
        <div class="container-xl">
            <div class="row ">

                <div class="col-12 text">
                    Welcome Dr.<?php if ($_SESSION['doctorfname']) {
                                    echo $_SESSION['doctorfname'];
                                } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="doctor">
        <div class="container-xl">
            <div class="row">
                <h2 class="text">Our Patients</h2>
                <div class="col-md-3 patient">
                    <div class="info">
                        Patients 14

                    </div>
                </div>
                <div class="col-md-3 patient">
                    <div class="info">
                        Man 5

                    </div>
                </div>
                <div class="col-md-3 patient">
                    <div class="info">
                        Women 5

                    </div>
                </div>
                <div class="col-md-3 patient">
                    <div class="info">
                        Child 4

                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="ourPatient">
        <div class="container-xl">
            <div class="row">
                <div class="col-12">

                    <table class="table" style="overflow-x:auto ;">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Date of birth</th>
                                <th scope="col">Test</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Phone number</th>
                                <th scope="col">Date visit</th>

                                <th scope="col">Allergy</th>
                                <th scope="col">Symptoms</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>2022</td>
                                <td>PCR</td>
                                <td>Male</td>
                                <td>878</td>
                                <td>1-9-8006</td>

                                <td>Common cold</td>
                                <td>a blocked or runny nose,a sore throat.,headaches.</td>
                                <td><a href="ehrfiles.php" style="font-size:12px ;">EHR e-file</a>
                                    <a href="preexam.php" style="font-size:12px ;">View preexam</a>
                                    < </td>

                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php include_once './require/footer.php'; ?>

</body>

</html>