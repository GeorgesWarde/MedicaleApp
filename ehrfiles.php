<?php
include './php/Models/model.php';
include './php/Controller/user.php';
include './php/Controller/appointment.php';
include './php/Controller/ehrfiles.php';
include './php/Controller/medical.php';
if (!isset($_SESSION['doctorfname'])) {
    header("location:login");
}
$med = new medical;
$med = $med->findMed();

$ehr = new ehrfiles;
$quer = "select first_name,last_name,gender,year_of_birth from users where id=" . $_GET['id'];
$res = mysqli_query((new Model)->getConnection(), $quer);
$row = mysqli_fetch_assoc($res);
if (isset($_POST['submit'])) {
    $field = [

        'blood_type' => $_POST['typeBlood'],
        'date' => $_POST['dateVisit'],
        'user_id' => $_GET['id'],
        'doctor_id' => $_SESSION['id'],
        'payment' => $_POST['payment'],
        'med_id' => $_POST['med']
    ];
    $insert = $ehr->addehr($field);
    $query = (new Model)->update('appointment', 'ehrfiles="filled"', 'user_id=' . $_GET['id']);
    // die($query);
    if ($insert) {
        $res = mysqli_query((new Model)->getConnection(), $query);
        echo "check the ehrfile on database";
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
    <title>EHR Files</title>
    <link rel="stylesheet" href="./style/style.css">
</head>

<body>
    <?php include_once './require/header.php'; ?>
    <div class="ehr">
        <div class="container-xl">
            <h2>Patient e-file form</h2>
            <form action="" method="post">

                <div class="firstname">
                    First name:
                    <input type="text" name="fname" id="" placeholder="first name" value="<?= $row['first_name'] ?>"
                        disabled>
                </div>
                <div class="firstname">
                    Last name:
                    <input type="text" name="lname" id="" placeholder="last name" value="<?= $row['last_name'] ?>"
                        disabled>
                </div>

                <div class="firstname">
                    Date of birth:
                    <input type="date" name="dateBirth" id="" value="<?= $row['year_of_birth'] ?>" disabled>
                </div>
                <div class="firstname">
                    Blood Type:
                    <select name="typeBlood" id="">
                        <option value="A+">A+</option>
                        <option value="O-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB">AB</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>

                    </select>
                </div>
                <div class="firstname">
                    Gender:
                    <input type="text" name="gender" id="" value="<?= $row['gender'] ?>" disabled>
                </div>
                <div class="firstname">
                    Date of Visit:
                    <input type="date" name="dateVisit" id="">
                </div>
                <div class="firstname">
                    Test Recomended:
                    <select name="Test" id="">
                        <option value="male">Blood Test</option>
                        <option value="female">Dexa Scan</option>
                        <option value="female">ctscan</option>
                        <option value="female">lunge scan</option>

                    </select>
                </div>
                <div class="firstname">
                    Medication Recomended:
                    <select name="med" id="">
                        <?php while ($row = mysqli_fetch_row($med)) { ?>
                        <option value="<?= $row[0] ?>"><?= $row[1] ?></option>
                        <?php } ?>

                    </select>
                </div>
                <div class="firstname">
                    Payment:
                    <input type="text" name="payment" id="" placeholder="payment in LL">
                </div>
                <div class="submit">
                    <input type="submit" name="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
    <?php include_once './require/footer.php'; ?>
</body>

</html>