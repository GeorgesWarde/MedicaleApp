<?php
include_once './php/Models/model.php';
include_once './php/Controller/appointment.php';
include_once './php/Controller/user.php';
if (!isset($_SESSION['doctorfname'])) {
    header("location:login");
}
$id = $_SESSION['id'];
$app = new appointment;
$patient = $app->findPatientByDocId($id);
$countPatient = $app->findPatientByDocIdCount($id);
$count = mysqli_fetch_row($countPatient);
$genderM = $app->findPatientByGender($id, 'male');
$M = mysqli_fetch_row($genderM);
$genderf = $app->findPatientByGender($id, 'female');
$F = mysqli_fetch_row($genderf);
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
                <h2 class="text">Our Appointments</h2>
                <div class="col-md-3 patient">
                    <div class="info">
                        Appointment <?= $count[0] ?>

                    </div>
                </div>
                <div class="col-md-3 patient">
                    <div class="info">
                        Man <?= $M[0] ?>

                    </div>
                </div>
                <div class="col-md-3 patient">
                    <div class="info">
                        Women <?= $F[0] ?>

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
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Date of birth</th>
                                <th scope="col">Test</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Phone number</th>
                                <th scope="col">Date visit</th>
                                <th scope="col">departmnent</th>
                                <th scope="col">Allergy</th>
                                <th scope="col">Symptoms</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_row($patient)) { ?>
                            <tr>
                                <td><?= $row[1] ?></td>
                                <td><?= $row[2] ?></td>
                                <td><?= $row[3] ?></td>
                                <td><?= $row[28] ?></td>
                                <td><?= $row[4] ?></td>
                                <td><?= $row[24] ?></td>
                                <td><?= $row[18] ?></td>
                                <td><?= $row[29] ?></td>
                                <td><?= $row[20] ?></td>
                                <td><?= $row[21] ?></td>
                                <td><?php if ($row[26] == "filled") { ?><a href="viewehrfiles?id=<?= $row[0] ?>"
                                        style="font-size:12px ;">View ehrfile</a><?php } else { ?>
                                    <a href="ehrfiles?id=<?= $row[0] ?>" style="font-size:12px ;">Ehr-file</a><?php } ?>
                                    <a href="viewpreexam?id=<?= $row[0] ?>" style="font-size:12px ;"><?php if ($row[27] == "filled") {
                                                                                                                echo "View preexam";
                                                                                                            } else {
                                                                                                                echo "";
                                                                                                            } ?></a>
                                </td>

                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php include_once './require/footer.php'; ?>

</body>

</html>