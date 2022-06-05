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
    <div class="doctors">
   <div class="row dr">
   
      <div class="col-12 text">
        Welcome Dr.Georges
      </div>
    </div>
    </div>
    <div class="doctor">
        <div class="container-xl">
            <div class="row">
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
                    <h2 class="text">Our Patients</h2>
                <table class="table" style="overflow-x:auto ;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Date of birth</th>
      <th scope="col">Test</th>
      <th scope="col">Gender</th>
      <th scope="col">Phone number</th>
      <th scope="col">Date visit</th>
      <th scope="col">Time</th>
      <th scope="col">Disease</th>
      <th scope="col">Symptoms</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>2022</td>
      <td>PCR</td>
      <td>Male</td>
      <td>878</td>
      <td>1-9-8006</td>
      <td>13:09</td>
      <td>Common cold</td>
      <td>a blocked or runny nose,a sore throat.,headaches.</td>
      <td><a href="medical.php">Fill a medical file</a><a href="ehrfiles.php">Medical e-file</a></td>

    </tr>
    
  </tbody>
</table>
                </div>
            </div>
        </div>
    </div>
    <?php include_once './require/footer.php';?>
    
</body>
</html>