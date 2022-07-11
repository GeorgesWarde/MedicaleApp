<?php
include_once './php/Models/model.php';

include './php/Controller/user.php';
include_once './php/Controller/preexam.php';
if (!isset($_SESSION['nursefname'])) {
    header("location:login");
}
$pre = new Preexams;

$query = "select first_name,last_name from users where id=" . $_GET['id'];
$res = mysqli_query((new Model)->getConnection(), $query);
$row = mysqli_fetch_assoc($res);
if (isset($_POST['submit'])) {
    $field = [
        'temperature' => $_POST['temp'],
        'pulse_rate' => $_POST['pulse'],
        'blood_pressure' => $_POST['blood'],
        'user_id' => $_GET['id'],
    ];
    $query = (new Model)->update('appointment', 'preexam="filled"', 'user_id=' . $_GET['id']);
    // die($query);
    $insert = $pre->insertPre($field);
    if ($insert) {
        $res = mysqli_query((new Model)->getConnection(), $query);
        echo "check the preexam on database";
    } else {
        echo "error occured";
    }
}

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
                    <input type="text" name="fname" id="" value="<?= $row['first_name'] ?>" disabled>
                </div>
                <div class="firstname">
                    Last name:
                    <input type="text" name="lname" id="" value="<?= $row['last_name'] ?>" disabled>
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




                <div class="submit">
                    <input type="submit" name="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
    <?php include './require/footer.php'; ?>
</body>

</html>