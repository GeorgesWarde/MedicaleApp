<?php
include_once './php/Models/model.php';
include_once './php/Controller/appointment.php';
include_once './php/Controller/user.php';
if (!isset($_SESSION['nursefname'])) {
    header("location:login");
}
$app = new appointment;
$patient = $app->findPatientByApp();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nurse</title>
    <link rel="stylesheet" href="./style/style.css">
</head>

<body>
    <?php include_once './require/header.php'; ?>
    <div class="nurse">
        <div class="container-xl">
            <div class="row bg">
                <div class="col-md-6">
                    <div class="information">
                        <h2>Nurse</h2>
                        <p>Nurses have many duties, including caring for patients, communicating with doctors,
                            administering medicine and checking vital signs. </p>
                        <br>
                        <h2>Nurse <?php if (isset($_SESSION['nursefname'])) {
                                        echo $_SESSION['nursefname'];
                                    } ?></h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="./images/compressed.jpg" alt="" width="100%" height="100%">
                </div>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-12 case" style="text-align:center ;margin-top:30px;">
            <h2>Appointment patients Case</h2>
        </div>

    </div>
    <div class="row">
        <div class="col-12" style="overflow-x:auto ;">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Date of birth</th>
                        <th scope="col">Lab</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Phone number</th>
                        <th scope="col">Date visit</th>
                        <th>Department</th>
                        <th scope="col">Disease</th>
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
                        <td><a href="preexam?id=<?= $row[0] ?>"><?php if ($row[27] == "filled") {
                                                                        echo "";
                                                                    } else {
                                                                        echo "Fill preexam";
                                                                    } ?></a></td>

                    </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>


    <?php include_once './require/footer.php'; ?>
</body>

</html>