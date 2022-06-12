<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    <title>Admin</title>

</head>

<body>

    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/"
                        class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">Admin</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                        id="menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link align-middle px-0 text-white" onclick="infoShow()">
                                <i class="fa-solid fa-house"></i> <span class="ms-1 d-none d-sm-inline">All info</span>
                            </a>
                        </li>
                        <li>
                            <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-white"
                                onclick="showMenu()">
                                <i class="fa-solid fa-plus dash"></i> <span
                                    class="ms-1 d-none d-sm-inline ">Labs/Medical</span> </a>
                            <ul class="collapse  nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0" onclick="medShow()"> <span
                                            class="d-sm-inline">Medical </a>
                                </li>
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
                        <li>
                            <a href="#" class="nav-link px-0 align-middle text-white" onclick="docShow()">
                                <i class="fa-solid fa-user-doctor"></i> <span class="ms-1 d-none d-sm-inline">Add
                                    doctor</span></a>
                        </li>
                        <li>
                            <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-white"
                                onclick="nurShow()">
                                <i class="fa-solid fa-user-nurse"></i> <span class="ms-1 d-none d-sm-inline">Add
                                    nurse</span></a>

                        </li>

                        <li>
                            <a href="#" class="nav-link px-0 align-middle  text-white" onclick="statShow()">
                                <i class="fa-solid fa-stairs"></i><span
                                    class="ms-1 d-none d-sm-inline">Statistics</span> </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0 align-middle  text-white" onclick="newshow()">
                                <i class="fa-solid fa-newspaper"></i><span class="ms-1 d-none d-sm-inline">Add
                                    news</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0 align-middle  text-white" onclick="adshow()">
                                <i class="fa-solid fa-hammer"></i><span class="ms-1 d-none d-sm-inline">Add admin</span>
                            </a>
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

                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col table" style="overflow-x:auto ;">
                <div class="" id="allInfo" style="display: block;">
                    <table class="table">
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
                    <table class="table">
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
                    <table class="table">
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
                    <table class="table">
                        <thead>
                            <th>News</th>
                            <th>Title</th>
                            <th>Date published</th>
                            <th>Published by</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>med</td>
                                <td>2-2-8000</td>
                                <td>anthony</td>
                                <td><a href="">Edit</a> <a href="">Delete</a></td>
                            </tr>
                        </tbody>
                    </table>
                    <div>Total number of patients:<span>4</span></div>

                    <div>Total number of doctor:<span>4</span></div>
                    <div>Total number of nurse:<span>4</span></div>
                </div>

                <div class="" id="Medical" style="display: none;">
                    <table class="table">
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
                <div id="statistics" style="display:none ;">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Symptoms</th>
                                <th scope="col">Nbr patients</th>
                                <th scope="col">Percentage</th>


                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Diabets</th>
                                <td>40</td>
                                <td>35%</td>
                            </tr>

                        </tbody>
                    </table>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Gender</th>
                                <th scope="col">Percentage</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">Male</td>
                                <td>90%</td>
                            </tr>
                            <tr>
                                <td scope="row">Female</td>
                                <td>90%</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <form id="blood" method="post" enctype="multipart/form-data" style="display:none ;">
                    <div class="row">
                        <div class="col-md-6">
                            Patient:
                            <input type="text" name="patient" id="" style="width:100% ;" placeholder="Name">
                        </div>
                        <div class="col-md-6">
                            Sodium (mmol/L):
                            <input type="text" name="sodium" id="" style="width:100% ;" placeholder="mmol/L">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            Chloriode(mmol/L):
                            <input type="text" name="chloriode" id="" style="width:100% ;" placeholder="mmol/L">
                        </div>
                        <div class="col-md-6">
                            Bicarbonate(mmol/L):
                            <input type="text" name="bicarbonate" id="" style="width:100% ;" placeholder="mmol/L">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            Urea(mmol/L):
                            <input type="text" name="urea" id="" style="width:100% ;" placeholder="mmol/L">
                        </div>
                        <div class="col-md-6">
                            Creatinine(nmol/L):
                            <input type="text" name="creatinine" id="" style="width:100% ;" placeholder="mmol/L">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            eGFR(mL/min/1.73m*m):
                            <input type="text" name="egfr" id="" style="width:100% ;"
                                placeholder="eGFR(mL/min/1.73m*m)">
                        </div>
                        <div class="col-md-6">
                            Corrected Calcium(mmol/L):
                            <input type="text" name="calcium" id="" style="width:100% ;"
                                placeholder="Corrected Calcium(mmol/L)">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            Potasium(mmol/L):
                            <input type="text" name="potasium" id="" style="width:100% ;" placeholder="mmol/L">
                        </div>
                        <div class="col-md-6">
                            Blood Glucose(mmol/L):
                            <input type="text" name="glucose" id="" style="width:100% ;"
                                placeholder="Blood Glucose(mmol/L)">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            Phosphate(mmol/L):
                            <input type="text" name="phosphate" id="" style="width:100% ;"
                                placeholder="Phosphate(mmol/L)">
                        </div>
                        <div class="col-md-6">
                            Magnesium(mmol/L):
                            <input type="text" name="magnesium" id="" style="width:100% ;"
                                placeholder="Magnesium(mmol/L)">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            Albumin(g/L):
                            <input type="text" name="albumin" id="" style="width:100% ;" placeholder="Albumin(g/L)">
                        </div>
                        <div class="col-md-6">
                            Haemoglobin(g/L):
                            <input type="text" name="haemoglobin" id="" style="width:100% ;"
                                placeholder="Haemoglobin(g/L)">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            White Cell Count(x100000/L):
                            <input type="text" name="white" id="" style="width:100% ;"
                                placeholder="White Cell Count(x100000/L)">
                        </div>
                        <div class="col-md-6">
                            Platelets(x100000/L):
                            <input type="text" name="platelets" id="" style="width:100% ;"
                                placeholder="Platelets(x100000/L)">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            Thyroid Stimulating Hormone(mIU/L):
                            <input type="text" name="thyroid" id="" style="width:100% ;"
                                placeholder="Thyroid Stimulating Hormone(mIU/L)">
                        </div>
                        <div class="col-md-6">
                            Free triiodothyronine(T3)(PMOL/l):
                            <input type="text" name="triiodothyronine" id="" style="width:100% ;"
                                placeholder="Free triiodothyronine(T3)(PMOL/l)">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            Follicide stimulating hormone(mIU/mL):
                            <input type="text" name="follicide" id="" style="width:100% ;"
                                placeholder="Follicide stimulating hormone(mIU/mL)">
                        </div>
                        <div class="col-md-6">
                            Testosterone(nmol/L):
                            <input type="text" name="testosterone" id="" style="width:100% ;"
                                placeholder="Testosterone(nmol/L)">
                        </div>
                    </div>
                    <input type="submit" value="add result" name="addresultBlood" class="btn btn-primary">
                </form>
                <form id="dexa" method="post" enctype="multipart/form-data" style="display:none ;">
                    <div class="row">
                        <div class="col-md-6">
                            Patient:
                            <input type="text" name="patientDexa" id="" required style="width:100% ;">
                        </div>
                        <div class="col-md-6">
                            BMC(g):
                            <input type="text" name="bmc" id="" required style="width:100% ;">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            Area(cm*cm):
                            <input type="text" name="area" id="" required style="width:100% ;">
                        </div>
                        <div class="col-md-6">
                            Z-score:
                            <input type="text" name="zscore" id="" required style="width:100% ;">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            BMD(g/cm*cm):
                            <input type="text" name="bmd" id="" required style="width:100% ;">
                        </div>
                        <div class="col-md-6">
                            T-score:
                            <input type="text" name="tscore" id="" required style="width:100% ;">
                        </div>
                    </div>
                    <input type="submit" value="add result" name="addresultDexa" class="btn btn-primary">

                </form>
                <form id="lunge" method="post" enctype="multipart/form-data" style="display:none ;">
                    Scan 1:
                    <input type="file" name="pic1" id="">
                    Scan 2:
                    <input type="file" name="pic2">
                    <input type="submit" value="add scan" name="addlungescan" class="btn btn-primary"
                        style="text-transform:uppercase ;">

                </form>
                <form id="ct" method="post" enctype="multipart/form-data" style="display:none ;">
                    Scan 1:
                    <input type="file" name="pic1" id="">
                    Scan 2:
                    <input type="file" name="pic2"><br>
                    Scan 3:
                    <input type="file" name="pic3">
                    Scan 4:
                    <input type="file" name="pic4"><br><br>
                    <input type="submit" value="add scan" name="addctscan" class="btn btn-primary"
                        style="text-transform:uppercase ;">

                </form>
                <form method="post" id="ad" enctype="multipart/form-data" style="text-align:center ;display:none">
                    <div class="form-floating inputs">
                        <input type="text" class="form-control borders" id="floatingInput" placeholder="Username"
                            required>
                        <label for="floatingInput">Username</label>
                    </div>
                    <div class="form-floating inputs">
                        <input type="text" class="form-control borders" id="floatingInput"
                            placeholder="name@example.com" required>
                        <label for="floatingInput">First name</label>
                    </div>
                    <div class="form-floating inputs">
                        <input type="text" class="form-control borders" id="floatingInput"
                            placeholder="name@example.com" required>
                        <label for="floatingInput">Last name</label>
                    </div>
                    <div class="form-floating inputs">
                        <input type="date" class="form-control borders" id="floatingInput" required>
                        <label for="floatingInput">Date of birth</label>
                    </div>
                    <div class="form-floating inputs">
                        <select name="gender" id="floatingInput" class="form-control borders" required>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>

                        </select>
                        <label for="floatingInput">Gender</label>
                    </div>
                    <div class="form-floating inputs">
                        <input type="email" class="form-control borders" id="floatingPassword" placeholder="Email"
                            required>
                        <label for="floatingPassword">Email</label>
                    </div>
                    <div class="form-floating inputs">
                        <input type="password" class="form-control borders" id="floatingPassword" placeholder="Password"
                            required>
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="form-floating inputs ">
                        <input type="password" class="form-control borders" id="floatingPassword" placeholder="Password"
                            required>
                        <label for="floatingPassword">Confirm Password</label>
                    </div>

                    <button class="w-100 btn btn-lg btn-primary" type="submit"
                        style="background-color:#000000 ;">Add</button>
                </form>
                <form action="" method="post" id="new" style="display:none ;">
                    Title:
                    <input type="text" name="title" id="" style="width:100% ;" placeholder="Title" required>
                    Content:
                    <textarea name="content" id="" cols="30" rows="10" style="width:100% ;" required
                        placeholder="body"></textarea>
                    Image:
                    <input type="file" name="image" id=""><br>
                    <input type="submit" value="add news" name="addnews" class="btn btn-primary"
                        style="margin-top: 10px;">
                </form>
            </div>
        </div>
    </div>
</body>
<script src="Js/admin.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</html>