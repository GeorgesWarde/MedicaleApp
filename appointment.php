<?php
session_start();
include_once './php/Models/model.php';
include_once './php/Controller/appointment.php';

$appointment = new appointment;
$dep = $appointment->findDepartments();



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment</title>
    <link rel="stylesheet" href="./style/style.css">
</head>

<body>
    <?php include_once './require/header.php' ?>
    <div class="appointment">
        <div class="container-xl">
            <div class="row">
                <div class="col-12 ">
                    <div class="top">
                        <h1>Make an appointment</h1>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-3 ">
                    <div class="list" id="boxapp">
                        <div>
                            <a href="#existing" class="existing">Existing Patient</a><br>
                        </div>
                        <div>
                            <a href="#New" class="existing">Our Service</a><br>
                        </div>
                        <div>
                            <a href="#department" class="existing">Department List</a><br>
                        </div>
                        <div>
                            <a href="#prepare" class="existing">Prepare for your visit</a>
                        </div>
                    </div>

                </div>
                <div class="col-md-9 block" style="overflow-x:auto ;">
                    <div class="row block1" id="existing">
                        <h2>Existing patients</h2>
                        <p>In-person and virtual appointments are both available for our patients.<a
                                href="infoCovid.php">Learn more about coming to LMC, and book an appointment below.</a>
                        </p>
                        <h3>Make an Appointment by Phone</h3>
                        <p>See our department listings to find the direct contact number for the department you wish to
                            make an appointment with. If you need help finding a phone number, call us at
                            +961.03.299.000
                        </p>
                    </div>
                    <div class="block1" id="New">
                        <h2>Our Service</h2>
                        <img src="./images/Screen Shot 2021-07-28 at 2.58.55 PM.webp" width="100%">
                    </div>
                    <div class="block1" id="department">
                        <h2>List of department</h2>
                        <table align="left" style="width:100% ;" border="1px">
                            <thead>
                                <tr>
                                    <th scope="col">Department</th>
                                    <th scope="col">PhoneNumber</th>
                                    <th scope="col">created</th>
                                    <th scope="col">Action</th>


                                </tr>

                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_assoc($dep)) {
                                ?>
                                <tr>
                                    <td><?= $row['name'] ?></td>
                                    <td><?= $row['phone'] ?></td>
                                    <td><?= $row['created_at'] ?></td>
                                    <td><a href="department?id=<?= $row['id'] ?>">visit</a></td>

                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>

                    </div>
                    <div class="block1" id="prepare">
                        <h2>Prepare for Your Visit</h2>
                        <p>Thank you for choosing Boston Medical Center for your care. Here are a few tips to keep in
                            mind when you arrive for your appointment:
                        <ul>
                            <li>Please bring all insurance information with you when you come for your scheduled
                                appointment.</li>
                            <li>If you are uninsured or underinsured, please bring three of the most current paystubs
                                from either yourself or a nearest family member who is currently employed.</li>
                            <li>Know the name of your doctor or referring physician or reason for appointment.</li>
                            <li>Please have your referral number with you.</li>
                        </ul>

                        </p>
                        <a href="#department">Prepare for your visit</a>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once './require/footer.php' ?>
</body>
<script>
window.onscroll = function() {
    myFunction2()
};
var box2 = document.getElementById("boxapp");

var sticky2 = 200;

function myFunction2() {
    if (window.pageYOffset > sticky2 && window.pageYOffset < 729.41) {
        box2.classList.add("sticky");
    } else {
        box2.classList.remove("sticky")
    }
}
</script>

</html>