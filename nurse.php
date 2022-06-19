<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nurse</title>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>
<body>

    <?php include_once './require/header.php';?>
    <?php include_once './php/Controllers/ehrController.php';?>
    <?php include_once './php/Controllers/preExamsController.php';?>
    <?php include_once './php/Controllers/userController.php';?>
    <div class="container-fluid">
        <div class="row flex-nowrap">
    <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/"
                        class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline"><?php echo $_SESSION["firstname"];?></span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                        id="menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link align-middle px-0 text-white" onclick="allInfoShow()">
                                <i class="fa-solid fa-house"></i> <span class="ms-1 d-none d-sm-inline">All info</span>
                            </a>
                        </li>
                     
                        <li>
                            <a href="#" class="nav-link px-0 align-middle text-white" onclick="preExamShow()">
                                <i class="fa-solid fa-user-doctor"></i> <span class="ms-1 d-none d-sm-inline">Check Pre-Exams</span></a>
                        </li>
                       
                    </ul>
                    <hr>
                    <div class="dropdown pb-4">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                            id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="./images/images.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1">anthony</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                            <li><a class="dropdown-item" href="#" >Sign out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
    <div class="col">
        <div id="AllInfo" style="display:block;">
    <div class="row">
                <div class="col-12 case" style="text-align:center ;margin-top:30px;">
                    <h2>Patient Case</h2>
                </div>
            
            </div>
            <div class="row ">
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
</div>
                </div>
            </div>
            <div id="checkPreExams" style="display:none">
            <table class="table" style="overflow-x:auto ;" >
            <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Date</th>
      <th scope="col">Temperature</th>
      <th scope="col">Pulse Rate</th>
    
      <th scope="col">Blood Pressure</th>

     
      

    </tr>
  </thead>
  <tbody>
    <?php getAllPreExams();?>
  </tbody>
</table>

        </div>
</div>
</div>
</div>
    <?php include_once './require/footer.php';?>
<script>function allInfoShow(){
    document.getElementById("AllInfo").style.display="block";
    document.getElementById("checkPreExams").style.display="none";
}</script>
    <script src="Js/nurse.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>