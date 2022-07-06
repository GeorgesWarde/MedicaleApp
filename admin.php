<?php


include_once './php/Models/model.php';
include_once './php/Controller/news.php';
include_once './php/Controller/file.php';
include_once './php/Controller/user.php';
include_once './php/Controller/medical.php';
include_once './php/Controller/appointment.php';
if (!isset($_SESSION['adminfname'])) {
    header("location:login");
}
$news = new news;
$file = new file;
$user = new user;
$dep = new appointment;
if (isset($_POST['addnews'])) {

    $field = [
        'title' => $_POST['title'],
        'content' => $_POST['content'],
        'published_by' => 'anthony',
        'image' => $file->getFile('file')
    ];
    $news->insert_news($field);
}

//Read news
$resNews = $news->getNews();

//
if (isset($_POST['addDoc'])) {
    $field = [
        'first_name' => $_POST['fdoctor'],
        'last_name' => $_POST['ldoctor'],
        'year_of_birth' => $_POST['agedoctor'],
        'gender' => $_POST['genre'],
        'username' => $_POST['udoctor'],
        'password' => md5($_POST['pdoctor']),
        'role_id' => 2,
        'email' => $_POST['edoctor'],
        'creator' => $_SESSION['adminfname'],
        'creator_ip' => gethostbyname(gethostname()),
        'dep_id' => $_POST['dep'],
        'studies' => $_POST['studies'],
        'available'=>$_POST['av'],
        'specialist'=>$_POST['specialist']
    ];
    $result = $user->findByEmailUsername($_POST['udoctor'], $_POST['edoctor']);
    $row = mysqli_fetch_row($result);
    if ($row) {
        if ($field['email'] == $row[1]) {
            echo "email already exist";
        } else if ($field['username'] == $row[0]) {
            echo "username already exist";
        }
    } else {
        $user->registerDoctor($field);
    }
}
if (isset($_POST['addNur'])) {
    $field = [
        'first_name' => $_POST['fnurse'],
        'last_name' => $_POST['lnurse'],
        'year_of_birth' => $_POST['agenurse'],
        'gender' => $_POST['genre'],
        'username' => $_POST['unurse'],
        'password' => md5($_POST['pnurse']),
        'role_id' => 3,
        'email' => $_POST['enurse'],
        'creator' => $_SESSION['adminfname'],
        'creator_ip' => gethostbyname(gethostname()),
    ];
    $result = $user->findByEmailUsername($_POST['unurse'], $_POST['enurse']);
    $row = mysqli_fetch_row($result);
    if ($row) {
        if ($field['email'] == $row[1]) {
            echo "email already exist";
        } else if ($field['username'] == $row[0]) {
            echo "username already exist";
        }
    } else {
        $user->registerNurse($field);
    }
}
if (isset($_POST['addadmin'])) {
    $field = [
        'first_name' => $_POST['fadmin'],
        'last_name' => $_POST['ladmin'],
        'year_of_birth' => $_POST['ageadmin'],
        'gender' => $_POST['genre'],
        'username' => $_POST['uadmin'],
        'password' => md5($_POST['padmin']),
        'role_id' => 1,
        'email' => $_POST['eadmin'],
        'creator' => $_SESSION['adminfname'],
        'creator_ip' => gethostbyname(gethostname()),
    ];
    $result = $user->findByEmailUsername($_POST['uadmin'], $_POST['eadmin']);
    $row = mysqli_fetch_row($result);
    if ($row) {
        if ($field['email'] == $row[1]) {
            echo "email already exist";
        } else if ($field['username'] == $row[0]) {
            echo "username already exist";
        }
    } else {
        $user->registerAdmin($field);
    }
}
$med = new medical;
if (isset($_POST['addMedical'])) {
    $field = [
        'name' => $_POST['medname'],
        'description' => $_POST['meddesc'],
        'qty' => $_POST['qtymed'],
        'stockId' => rand(),
        'price' => $_POST['price'] . "LL"
    ];
    $med->AddMedical($field);
}
$dep = $dep->findDepartments();
$med=$med->findMed();
?>
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
                            <a href="statistics" class="nav-link px-0 align-middle  text-white" onclick="statShow()">
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
                            <span class="d-none d-sm-inline mx-1"><?= $_SESSION['adminfname'] ?></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">

                            <li><a class="dropdown-item" href="logout">Sign out</a></li>
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
                                <th scope="col">Gender</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Joined_at</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $res = $user->getPatients();
                            $i = 1;
                            while ($row = mysqli_fetch_row($res)) {

                            ?>
                            <tr>
                                <th scope="row"><?= $i ?></th>
                                <td><?= $row[0] . " " . $row[1] ?></td>
                                <td><?= $row[2] ?></td>
                                <td><?= $row[3] ?></td>
                                <td><?= $row[4] ?></td>
                                <td><?= $row[5] ?></td>
                                <td><?= $row[6] ?></td>
                            </tr>
                            <?php $i++;
                            } ?>
                        </tbody>
                    </table>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Doctor name</th>
                                <th scope="col">Birth year</th>
                                <th scope="col">Email</th>
                                <th scope="col">Joined_at</th>
                                <th>Availability</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $res = $user->getDoctors();
                            $i = 1;
                            while ($row = mysqli_fetch_row($res)) {

                            ?>
                            <tr>
                                <th scope="row"><?= $i ?></th>
                                <td><?= $row[0] . " " . $row[1] ?></td>
                                <td><?= $row[2] ?></td>
                                <td><?= $row[5] ?></td>
                                <td><?= $row[6] ?></td>
                                <td><?=$row[7]?></td>
                                <td><a href="edit?id=<?=$row[8]?>">Edit</a></td>
                            </tr>
                            <?php $i++;
                            } ?>
                        </tbody>
                    </table>
                    <?php
                    $nurse = $user->getNurses();
                    $i = 1;
                    $query = "Select id from users where role_id=3";
                    $model = new Model;
                    $res = mysqli_query($model->getConnection(), $query);
                    $row = mysqli_fetch_row($res);
                    if ($row != null) { ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nurse name</th>
                                <th scope="col">Birth date</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Joined_at</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while ($rows = mysqli_fetch_assoc($nurse)) {

                                ?>
                            <tr>

                                <th scope="row"><?= $i ?></th>
                                <td><?= $rows['first_name'] . " " . $rows['last_name'] ?></td>
                                <td><?= $rows['year_of_birth'] ?></td>
                                <td><?= $rows['gender'] ?></td>
                                <td><?= $rows['username'] ?></td>
                                <td><?= $rows['email'] ?></td>
                                <td><?= $rows['created_at'] ?></td>
                            </tr>
                            <?php $i++;
                                } ?>
                        </tbody>
                    </table>
                    <?php } ?>
                    <div>Total number of patients:<span><?php $user->countUsers(4) ?></span></div>

                    <div>Total number of doctor:<span><?php $user->countUsers(2) ?></span></div>
                    <div>Total number of nurse:<span><?php $user->countUsers(3) ?></span></div>
                </div>

                <div class="" id="Medical" style="display: none;">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Medical name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Qty</th>
                                <th scope="col">stock Id</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($row=mysqli_fetch_assoc($med)){ ?>
                    
                            <tr>
                                <td><?=$row['name']?></td>
                                <td><?=$row['price']?></td>
                                <td><?=$row['qty']?></td>
                                <td><?=$row['stockId']?></td>

                            </tr>
<?php } ?>
                        </tbody>
                    </table>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="exampleInputName" class="form-label">Medical name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="medname" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputName" class="form-label">Description</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="meddesc" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-lable">Quantity</label>

                            <input type="range" name="qtymed" min="1" max="100" value="50" class="slider" id="myRange">
                            <span id="demo"></span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-lable">Price</label>

                            <input type="number" class="price" name="price">

                        </div>

                        <button type="submit" name="addMedical">Add Medical</button>
                    </form>
                    <script>
                    var slider = document.getElementById("myRange");
                    var output = document.getElementById("demo");
                    output.innerHTML = slider.value;

                    slider.oninput = function() {
                        output.innerHTML = this.value;
                    }
                    </script>
                </div>
                <form id="addDoctor" style="display:none ;" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Doctor name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="fdoctor" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Last name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="ldoctor" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="edoctor" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Username</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="udoctor" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputEmail1" name="pdoctor" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputGenre" class="form-label">Gender</label><br>
                        <select name="genre">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputAge" class="form-label">Birth</label>
                        <input type="date" name="agedoctor" class="form-control">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputAge" class="form-label">Studied at</label>
                        <input type="text" name="studies" class="form-control">

                    </div>

                    <div class="mb-3">
                        Department:
                        <select name="dep">
                            <?php while ($row = mysqli_fetch_assoc($dep)) { ?>
                            <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
                            <?php } ?>
                        </select>

                    </div>
                    <div class="mb-3">
                        Available:
                        <select name="av">
                            
                            <option value="available">Available</option>
                            <option value="not available">Not Available</option>

                        </select>

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputAge" class="form-label">Specialist</label>
                        <input type="text" name="specialist" class="form-control">

                    </div>

                    <button type="submit" class="btn btn-primary" name="addDoc">Add</button>
                </form>
                <form id="addNurse" style="display:none ;" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Nurse name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="fnurse" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Last name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="lnurse" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="enurse" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Username</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="unurse" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputEmail1" name="pnurse" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputGenre" class="form-label">Gender</label><br>
                        <select name="genre">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputAge" class="form-label">Birth</label>
                        <input type="date" name="agenurse" class="form-control">

                    </div>

                    <button type="submit" class="btn btn-primary" name="addNur">Add</button>
                </form>
                <div id="statistics" style="display:none ;">
                <div class="row">
                    <div class="col-12">
                    <div id="piechart" style="width: 900px; height: 500px;"></div>

                    </div>
                </div>

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
                            name="uadmin" required>
                        <label for="floatingInput">Username</label>
                    </div>
                    <div class="form-floating inputs">
                        <input type="text" class="form-control borders" id="floatingInput" name="fadmin"
                            placeholder="name@example.com" required>
                        <label for="floatingInput">First name</label>
                    </div>
                    <div class="form-floating inputs">
                        <input type="text" class="form-control borders" id="floatingInput" name="ladmin"
                            placeholder="name@example.com" required>
                        <label for="floatingInput">Last name</label>
                    </div>
                    <div class="form-floating inputs">
                        <input type="date" class="form-control borders" id="floatingInput" required name="ageadmin">
                        <label for="floatingInput">Date of birth</label>
                    </div>
                    <div class="form-floating inputs">
                        <select name="genre" id="floatingInput" class="form-control borders" required>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>

                        </select>
                        <label for="floatingInput">Gender</label>
                    </div>
                    <div class="form-floating inputs">
                        <input type="email" class="form-control borders" id="floatingPassword" placeholder="Email"
                            name="eadmin" required>
                        <label for="floatingPassword">Email</label>
                    </div>
                    <div class="form-floating inputs">
                        <input type="password" class="form-control borders" id="floatingPassword" placeholder="Password"
                            name="padmin" required>
                        <label for="floatingPassword">Password</label>
                    </div>



                    <button class="w-100 btn btn-lg btn-primary" type="submit" name="addadmin"
                        style="background-color:#000000 ;">Add Admin</button>
                </form>
                <form action="" method="post" id="new" style="display:none ;" enctype="multipart/form-data">
                    Title:
                    <input type="text" name="title" id="" style="width:100% ;" placeholder="Title" required>
                    Content:
                    <textarea name="content" id="" cols="30" rows="10" style="width:100% ;" required
                        placeholder="body"></textarea>
                    Image:
                    <input type="file" name="file" accept="image/*" id=""><br>
                    <input type="submit" value="add news" name="addnews" class="btn btn-primary"
                        style="margin-top: 10px;">
                </form>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script src="Js/admin.js"></script>
<script src="js/chart.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</html>