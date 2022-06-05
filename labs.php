<!Doctype html>
<html>

    <head><title>Doctor Page</title>
    <link rel="stylesheet" href="style.css">
    <script src="Js/EHR.js"></script>
    
 
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    
     </head>
   <body>
   <?php include_once 'header.php';  ?>
   <main class="sideBar">
   <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
      <span class="fs-4">Patient Labs History</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item ">
        <button onclick="window.location.href='EhrList'" class="nav-link active" aria-current="page" style="width:100%;">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"/></svg>
          Blood Test
</button>
      </li>
      <li class="doctorOptions">
        <button onclick="window.location.href='AppointmentsList'"  class="nav-link active"style="width:100%";>
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
          Cranial CT Scan
</button>
      </li>
      <li class="doctorOptions">
        <button  onclick="window.location.href='addEHR'" class="nav-link active"style="width:100%";>
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"/></svg>
          Lunges Scan
</button>
      </li>
      <li class="doctorOptions">
        <button onclick="window.location.href='Statistics'" href="#" class="nav-link active"style="width:100%";>
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
          Bone Dexa Scan
</button>
      </li>
      <li class="doctorOptions">
        <button href="#" class="nav-link active"style="width:100%";>
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
          Pcr
</button>
      </li>
    </ul>
    <hr>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong>mdo</strong>
      </a>
      <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
        <li><a class="dropdown-item" href="#">New project...</a></li>
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Sign out</a></li>
      </ul>
    </div>
  </div>
  <div id="EHR" style="width:100%;">
  
  
  </div>



    
  

  


  </body>
</html>
</div>
</main>
  <?php include_once 'footer.php';?>



<script src="Js/main.js"></script>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="Js/dashboard.js"></script>

    </body>
</html>