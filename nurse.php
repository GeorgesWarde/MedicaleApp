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

    <?php include_once './require/header.php';?>
    <?php include_once './php/Controllers/ehrController.php';?>
    <div class="nurse">
        <div class="container-xl">
            <div class="row bg">
                <div class="col-md-6">
                    <div class="information">
                        <h2>Nurse</h2>
                        <p>Nurses have many duties, including caring for patients, communicating with doctors, administering medicine and checking vital signs. </p>
                        <br>
                        <h2>Nurse:<?php echo $_SESSION["firstname"]?></h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <img style="border-radius:8px;" src="./images/compressed.png" alt="" width="100%" height="100%">
                </div>
            </div>
            
        </div>
    </div>
    
    <div class="row">
                <div class="col-12 case" style="text-align:center ;margin-top:30px;">
                    <h2>Patient Case</h2>
                </div>
            
            </div>
            <div class="row">
                <div class="col-12"  style="overflow-x:auto ;">
                       
                <table class="table" style="overflow-x:auto ;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Date of birth</th>
      <th scope="col">BloodType</th>
      <th scope="col">Gender</th>
    
      <th scope="col">Date visit</th>

      <th scope="col">Disease</th>
      <th scope="col">Symptoms</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    <?php
getAllEhrs()?>
  </tbody>
</table>
<button onClick="window.location.href='./preExams.php'">Add PreExam</button>
                </div>
            </div>
    
    
    <?php include_once './require/footer.php';?>
</body>
</html>