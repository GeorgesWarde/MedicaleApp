<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>

    <title>Admin</title>

</head>
<body>

<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Admin</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="#" class="nav-link align-middle px-0 text-white" onclick="infoShow()">
                        <i class="fa-solid fa-house"></i> <span class="ms-1 d-none d-sm-inline">All info</span>
                        </a>
                    </li>
                    <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-white" onclick="showMenu()">
                        <i class="fa-solid fa-plus dash" ></i> <span class="ms-1 d-none d-sm-inline " >Dashboard</span> </a>
                        <ul class="collapse  nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-0" onclick="medShow()"> <span class="d-sm-inline">Medical </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-sm-inline">Labs</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle text-white" onclick="docShow()">
                        <i class="fa-solid fa-user-doctor"></i> <span class="ms-1 d-none d-sm-inline">Add doctor</span></a>
                    </li>
                    <li>
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-white" onclick="nurShow()">
                        <i class="fa-solid fa-user-nurse"></i> <span class="ms-1 d-none d-sm-inline">Add nurse</span></a>
                        
                    </li>
                    
                    <li>
                        <a href="#" class="nav-link px-0 align-middle  text-white" onclick="statShow()">
                        <i class="fa-solid fa-stairs"></i><span class="ms-1 d-none d-sm-inline">Statistics</span> </a>
                    </li>
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="./images/images.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1">anthony</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col table" >
            <div class="" id="allInfo" style="display: block;">
        <table class="table" >
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Patient name</th>
      <th scope="col">Birth date</th>
      <th scope="col">Medical</th>
      <th scope="col">Diseace</th>
      <th scope="col">Sex</th>
      <th scope="col">Test</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>2000-01-01</td>
      <td>Panadol</td>
      <td>Corona</td>
      <td>Male</td>
      <td>PCR</td>
    </tr>
    
  </tbody>
</table>
<table class="table" >
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Doctor name</th>
      <th scope="col">Age</th>
      <th scope="col">Sex</th>
      <th scope="col">Certificate</th>
      <th scope="col">Shedule</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>2000-01-01</td>
      <td>Panadol</td>
      <td>Corona</td>
      <td>Male</td>
        </tr>
    
  </tbody>
</table>
<table class="table" >
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nurse name</th>
      <th scope="col">Age</th>
      <th scope="col">Sex</th>
      <th scope="col">Certificate</th>
      <th scope="col">Shedule</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>2000-01-01</td>
      <td>Panadol</td>
      <td>Corona</td>
      <td>Male</td>
        </tr>
    
  </tbody>
</table>
<div>Total number of patients:<span>4</span></div>
<div>Total number of tests:<span>4</span></div>
<div>Total number of doctor:<span>4</span></div>
<div>Total number of nurse:<span>4</span></div>
</div>

<div class="" id="Medical" style="display: none;">
        <table class="table" >
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Medical name</th>
      <th scope="col">Price</th>
      <th scope="col">Qty</th>
      <th scope="col">stock Id</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>2000-01-01</td>
      <td>Panadol</td>
      <td>Corona</td>
      
    </tr>
    
  </tbody>
</table>
<div>Total number of medicals:</div>
<div>Total number of tests:</div>
</div>
<form id="addDoctor" style="display:none ;">
  <div class="mb-3">
    <label for="exampleInputName" class="form-label">Doctor name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="doctor" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputGenre" class="form-label">Genre</label><br>
    <select name="genre">
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="exampleInputAge" class="form-label">Age</label>
    <input type="number" name="agedoctor" class="form-control">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputCertificate" class="form-label">Certificate</label><br>
    <select name="certificate">
        <option value="1">Neurology</option>
        <option value="2">Dentistry</option>
        <option value="3">Cardiovascular</option>
        <option value="4">Gastroenterology</option>
        <option value="5">Dermatology</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="exampleInputShedule" class="form-label">Schedule(Day and time)</label>
    <input type="text" name="agedoctor" class="form-control">    
  </div>
  <button type="submit" class="btn btn-primary" name="addDoc">Add</button>
</form>
<form id="addNurse" style="display:none ;">
  <div class="mb-3">
    <label for="exampleInputName" class="form-label">Nurse name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nurse" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputGenre" class="form-label">Genre</label><br>
    <select name="genre">
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="exampleInputAge" class="form-label">Age</label>
    <input type="number" name="agedoctor" class="form-control">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputCertificate" class="form-label">Certificate</label>
    <input type="number" name="certificateNurse" class="form-control">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputShedule" class="form-label">Schedule(shift)</label>
    <select class="form-control" name="shift">
        <option value="Am">AM</option>
        <option value="Pm">PM</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary" name="addNur">Add</button>
</form>
<div id="statistics"  style="display:none ;">
<table class="table" >
  <thead>
    <tr>
      <th scope="col">Disease</th>
      <th scope="col">Percentage/patient</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">corona</th>
      <td>40%</td>
    </tr>
    
  </tbody>
</table>
<table class="table" >
  <thead>
    <tr>
      <th scope="col">Test</th>
      <th scope="col">Percentage/patient</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">corona</th>
      <td>90%</td>
    </tr>
    
  </tbody>
</table>
</div>
        </div>
    </div>
</div>
</body>
<script src="Js/admin.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>

</html>