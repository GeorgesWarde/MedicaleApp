<?php
require_once('./php/Connection.php');

require_once('./php/Models/preExam.php');
require_once('./php/Models/painType.php');
require_once('./php/Models/ehr.php');



// authorized for admins and nurses only
function getAllPreExams()
{   // returns list of pre exams
    $mysqli = connect();
   
    $preExams = PreExam::findById($mysqli,$_SESSION['id']);
    foreach($preExams as $p){
      $ehr=Ehr::findById($mysqli,$p->ehrId);
      $p->firstName = $ehr->firstName;
      $p->lastName = $ehr->lastName;

        echo "<tr><th>".$p->id."</th><th>".$p->firstName."</th><th>".$p->lastName."</th><th>".$p->date."</th><th>".$p->temperature."</th><th>".$p->pulseRate."</th><th>".$p->bloodPressure."</th></tr>";
    
      }
    }
   


// authorized for nurses and admins only
function createPreExam()
{     // token in header required, and pre-exam data required, useerId not sent in request
    $mysqli = connect();
   if(isset($_POST['date']) && isset($_POST['Temperature']) && isset($_POST['PulseRate']) && isset($_POST['BloodPressure']) && isset($_POST['PainType'])){
    
   
    
    $preExam = new PreExam(
        -1,
        $_POST['date'],
        $_POST['Temperature'],
        $_POST['PulseRate'],
        $_POST['BloodPressure'],
        $_SESSION["id"],
        $_GET["ehrId"],
        4
    );    // userId = user logged in
    $preExam->create($mysqli);
}
}




// authorized for admins and nurses only
function getPreExamsForEhr($data)
{   // returns list of pre exams, requires id of ehr
    $mysqli = connect();
    $response = new stdClass();
    $auth = authenticate($mysqli, getallheaders()['token']);
    if (!$auth) {
        $response->error = 'Log in first';
        echo json_encode($response);
        $mysqli->close();
        exit(0);
    }
    $ALLOWED_ROLES = ["Admin", "Nurse"];
    if (!in_array($auth->roleName, $ALLOWED_ROLES)) {
        $response->error = 'You must be an admin or a nurse';
        echo json_encode($response);
        $mysqli->close();
        exit(0);
    }
    $preExams = PreExam::getByEhrId($mysqli, $data->ehrId);
    $ehr = Ehr::findById($mysqli, $data->ehrId);
    if (sizeof($preExams) > 0) {
        foreach ($preExams as $p) {
            $painType = PainType::getPainTypeById($mysqli, $p->painTypeId);
            $p->painTypeName = $painType->name;
            $p->painTypeDesc = $painType->desc;
            $p->firstName = $ehr->firstName;
            $p->lastName = $ehr->lastName;
        }
    }
    $response->preExams = $preExams;
    echo json_encode($response);
    $mysqli->close();
}
