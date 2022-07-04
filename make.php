<?php
include_once './php/Models/model.php';
include_once './php/Controller/appointment.php';
include_once './php/Controller/user.php';
include_once './php/Controller/labs.php';
$app = new appointment;
$user=new user;
$lab=new Labs;
$name=$_SESSION['fname'];
$idUser=$_SESSION['id'];
// die($idUser);
$id = $_GET['id'];
$dep = $app->findByDepartments($id);
$row = mysqli_fetch_row($dep);
$user=$user->findBySession($name);
$rowUser=mysqli_fetch_row($user);
$doc=$app->findDoctorByAvailabilityIdName($id);
$lab=$lab->findLabs();
if(isset($_POST['submit'])){
$field=[
    'user_id'=>$_SESSION['id'],
    'visit_at'=>$_POST['dateAppointment'],
    'dep_id'=>$_POST['department'],
    'allergie'=>$_POST['disease'],
    'symptoms'=>$_POST['symptoms'],
    'lab_id'=>$_POST['test'],
    'doc_id'=>$_POST['doctor'],
    'phone'=>$_POST['phoneNumber']
];
$add=$app->AddAppointment($field);
if($add){
echo "<script>alert('Your appointment successfully added we will back to you As Soon As Possible')</script>";
}else{
    echo "<script>alert('Error occured')</script>";

}
}
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
                                <input type="number" name="phoneNumber" id="" placeholder="Your number">
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
                                <input type="text" name="agePatient" id="" value="<?=$rowUser[0]?>" disabled>
                            </div>
                            <div class="col-md-6">
                                <label for="">Gender</label><br>
                                <input type="text" name="gender" id="" value="<?=$rowUser[1]?>" disabled>
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
                                <?php while($row=mysqli_fetch_assoc($lab)){ ?>
                                    <option value="<?=$row['id']?>"><?=$row['name']?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="">Doctor</label><br>
                                <select name="doctor" id="" style="width: 100%;">
                                <?php while($find=mysqli_fetch_row($doc)){ ?>
                                    <option value="<?=$find[0]?>">Dr.<?=$find[1]." ".$find[2]?></option>
                                    <?php } ?>
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