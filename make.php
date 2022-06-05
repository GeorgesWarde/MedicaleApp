<!Doctype html>
<html>

    <head><title>Make an appointment Online</title>
    <link rel="stylesheet" href="style.css">
    <script src="Js/EHR.js"></script>
    
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
                  <input type="text" name="patientName" id="" placeholder="Patient name">
                </div>
                <div class="col-md-6">
                  <label for="">Select date</label><br>
                  <input type="date" name="dateAppointment" id="" placeholder="Patient name">
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label for="">Phone number</label><br>
                  <input type="number" name="phoneNumber" id="" placeholder="Patient name">
                </div>
                <div class="col-md-6">
                  <label for="">Select date</label><br>
                  <select name="department" style="width:100% ;">
                    <option value="1">Dentist</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label for="">Email</label><br>
                  <input type="email" name="emailPatient" id="" placeholder="Email">
                </div>
                <div class="col-md-6">
                  <label for="">Gender</label><br>
                  <select name="gender" id="" style="width:100% ;">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label for="">Test</label><br>
                  <select name="test" style="width:100% ;">
                <option value="1">PCR</option>
                </select>
                </div>
                <div class="col-md-6">
                  <label for="">Doctor</label><br>
                  <select name="doctor" id="" style="width: 100%;">
                    <option value="1">Dr.Georges wardeh</option>
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
   

   <?php include_once './require/footer.php';?>
  </body>
    
<script src="Js/main.js"></script>
</html>