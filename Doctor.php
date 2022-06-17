<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">

    <title>Welcome Dr.Georges</title>
</head>
<body>
    <?php include_once './require/header.php';?>
    <div class="doctors dr">
    <div class="container-xl">
   <div class="row ">
   
      <div class="col-12 text">
        Welcome Dr.
      <?php
      echo   $_SESSION["firstname"] ;
      ?>
      </div>
    </div>
    </div>
    </div>
    <div class="doctor">
        <div class="container-xl">
            <div class="row">
            <h2 class="text">Our Patients</h2>
                <div class="col-md-3 patient" >
                    <div class="info">
                        Patients 14
                       
                    </div>
                </div>
                <div class="col-md-3 patient" >
                    <div class="info">
                        Man 5
                       
                    </div>
                </div>
                <div class="col-md-3 patient" >
                    <div class="info">
                        Women 5
                       
                    </div>
                </div>
                <div class="col-md-3 patient" >
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
            require_once("./php/Controllers/ehrController.php");
            getEhrs();
            ?>
  </tbody>
                </table>
            </div>
            </div>
            </div>
    </div>
    <button onClick="window.location.href='ehrfiles.php'">Add a EHR</button>
    <?php include_once './require/footer.php';?>
    
</body>
</html>