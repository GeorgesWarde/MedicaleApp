<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>Fill pre exam</title>
</head>

<body>
    <?php include './require/header.php'; ?>
    <div class="ehr">
        <div class="container-xl">
            <h2>Patient PreExam form</h2>
            <form action="" method="post">

                <div class="firstname">
                    First name:
                    <input type="text" name="fname" id="">
                </div>
                <div class="firstname">
                    Last name:
                    <input type="text" name="lname" id="">
                </div>

                <div class="firstname">
                    Temperature
                    <input type="number" name="temp" id="">
                </div>
                <div class="firstname">
                    pulse_rate
                    <input type="number" name="pulse" id="">
                </div>

                <div class="firstname">
                    Blood_pressure
                    <input type="number" name="blood" id="">
                </div>

                <div class="firstname">
                    Symptoms
                    <input type="text" name="symptoms" id="">
                </div>

                <div class="firstname">
                    Allergie
                    <input type="text" name="allergie" id="">
                </div>


                <div class="submit">
                    <input type="submit" name="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
    <?php include './require/footer.php'; ?>
</body>

</html>