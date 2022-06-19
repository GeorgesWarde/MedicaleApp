<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/department.css">
    <link rel="stylesheet" href="./style/admin.css">
    <link rel="stylesheet" href="./style/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    <title>Welcome Dr.Georges</title>
</head>
<body>
    <?php include_once './require/header.php';?>
    <?php require_once("./php/Controllers/userController.php");?>
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
                                <i class="fa-solid fa-house"></i> <span class="ms-1 d-none d-sm-inline">Check Patients Ehr-Files</span>
                            </a>
                        </li>
                     
                        <li>
                            <a href="#" class="nav-link px-0 align-middle text-white" onclick="preExamShow()">
                                <i class="fa-solid fa-user-doctor"></i> <span class="ms-1 d-none d-sm-inline">Check Pre-Exams</span></a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0 align-middle text-white" onclick="preExamShow()">
                                <i class="fa-solid fa-user-doctor"></i> <span class="ms-1 d-none d-sm-inline"> Appointments Schedule</span></a>
                        </li>
                        <li>
                            <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-white"
                                onclick="showMenu()">
                                <i class="fa-solid fa-plus dash"></i> <span
                                    class="ms-1 d-none d-sm-inline ">Labs Tests</span> </a>
                            <ul class="collapse  nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                               
                                <li>
                                    <a href="#" class="nav-link px-0" onclick="bloodshow()"> <span
                                            class="d-sm-inline">Blood Lab</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0" onclick="dexashow()"> <span
                                            class="d-sm-inline">DexaScan Lab</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0" onclick="lungeshow()"> <span
                                            class="d-sm-inline">LungeScan Lab</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0" onclick="ctshow()"> <span
                                            class="d-sm-inline">ctScan Lab</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                     
                       
                    <hr>
                    <div class="dropdown pb-4">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                            id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="./images/images.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1"><?php echo $_SESSION['firstname'];?></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col">
    
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
            getEhrs($_SESSION["id"]);
            ?>
  </tbody>
                </table>
            </div>
            </div>
            </div>
    </div>

    <button onClick="window.location.href='ehrfiles.php'" style="background-color:lightBlue;border-radius:4px;">Add a EHR</button>
</div>
</div>
</div>

    <?php include_once './require/footer.php';?>
    
</body>
</html>