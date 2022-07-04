<?php
session_start();
if (!isset($_SESSION['fname'])) {
    header("location:login");
}
include_once './php/Models/model.php';

include_once './php/Controller/appointment.php';
$appointment = new appointment;
$id = $_GET['id'];
$dep = $appointment->findByDepartments($id);
$row = mysqli_fetch_row($dep);
$cardiology = "A branch of medicine that specializes in diagnosing and treating diseases of the heart, blood vessels, and circulatory system. These diseases include coronary artery disease, heart rhythm problems, and heart failure.";
$family = "General practice / family medicine is defined as the medical specialty that manages common and long-term illnesses in children and adults, focusing on overall health and well-being. ";
$radiology = "Radiology is a branch of medicine that uses imaging technology to diagnose and treat disease. Radiology may be divided into two different areas, diagnostic radiology and interventional radiology. Doctors who specialize in radiology are called radiologists.";
$doc = $appointment->findDoctorBydepartment($id);
$docAvailable=$appointment->findDoctorByAvailability($id);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Doctors</title>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="style/department.css">
</head>

<body style="background-color:#f1f1f1;">
    <?php include_once './require/header.php' ?>

    <h2 style="justify-content:center;display:flex;align-items:center;"><?= $row[1] ?> Department</h2>
    <div style="justify-content:center;display:flex;align-items:center;"><a
            style="background-color:green;color:white;border-radius:3px;height:40px;text-decoration:none;padding:7px 10px"
            href="./make?id=<?= $row[0]; ?>">Request a Appointment</a>
    </div>
    <div style="margin-left:7%;font-size:21px;margin-right:25%;margin-top:30px;">
        <?php if ($row[1] == "Cardiology") {
            echo $cardiology;
        } else if ($row[1] == "Radiology") {
            echo $radiology;
        } else {
            echo $family;
        }
        ?>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="depSide">
                    <div>
                        <h5><?= $row[1] ?></h5>
                    </div>
                    <div class="margin-top:30px;">
                        <p style="color:blue; font-size:18px;">Contact Us</p>
                        <hr>
                        <p style="color:blue; font-size:18px;">Our Doctors</p>
                        <hr>
                        <p style="color:blue; font-size:18px;">Available Doctors this week</p>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-9">
                    <div class="depContent">

                        <div class="container">
                            <div class="row align-items-start">
                                <div class="col">
                                    <h4>Contact Us</h4>
                                    <p><img src="images/depimage1.jpeg" height="200px" width="300px"></p>
                                    <p syle="margin-top:7px;"> <img src="images/depimage2.jpeg" height="200px"
                                            width="300px"></p>


                                </div>
                                <div class="col" style="padding-top:25px;padding-left:25px;">
                                    <h5> Location: Beirut,Lebanon</h5>
                                    <h6>Monday to Friday 8:00 a.m. to 5:00 p. m.</h6>
                                    <h4 style="margin-top:170px;">Here since
                                        <?php
                                        $year = date('Y', strtotime($row[3]));
                                        echo $year;
                                        ?></h4>
                                    <h6>Phone Number: <?= $row[2] ?></h6>
                                    <h6>Email Addres:medical@med.com</h6>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="why">
                        <div class="container">
                            <div class="row align-items-start">
                                <div class="col">

                                    <h4>Our Doctors</h4>

                                    <div class="doctorList" style="width:100%; padding-top:10px;">
                                        <?php while ($row = mysqli_fetch_assoc($doc)) { ?>
                                        <h4> DR <?= $row['first_name'] . " " . $row['last_name'] ?></h4>
                                        <?= $row['studies'] ?>
                                        <?php } ?>



                                        <h4 class="available">Available Doctors this week</h4>
                                        <div>
                                        <?php while($row=mysqli_fetch_assoc($docAvailable)){?>
                                            <div>
                                                <h4>Dr <?=$row['first_name'] ." ". $row['last_name']?></h4>
                                                <h6> <?=$row['specialist']?></h6>
                                            </div>
<?php } ?>
                                        </div>
                                       


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php include_once './require/footer.php' ?>
                <script src="Js/dep.js"></script>
</body>

</html>