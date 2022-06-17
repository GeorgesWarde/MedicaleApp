<?php
require_once('./php/Models/painType.php');

require_once('./php/Models/preExam.php');
require_once('./php/Models/painType.php');
require_once('./php/Models/ehr.php');



// authorized for admins and nurses only


// authorized for nurses and admins only
function createPreExam()
{     // token in header required, and pre-exam data required, useerId not sent in request
    $mysqli = connect();
    
       
    $preExam = new PreExam(
       -1,
       1,
       1,
       1,
       1,
       1,
       1,
       1
    );    // userId = user logged in
     $preExam->create($mysqli);

}



function editPreExam($data)
{
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
        $response->error = 'You must be a nurse or a doctor';
        echo json_encode($response);
        $mysqli->close();
        exit(0);
    }
    $preExam = PreExam::findById($mysqli, $data->id);
    $preExam->date = $data->date;
    $preExam->temperature = $data->temperature;
    $preExam->pulseRate = $data->pulseRate;
    $preExam->bloodPressure = $data->bloodPressure;
    $preExam->painTypeId = $data->painTypeId;
    if ($preExam->edit($mysqli)) $response->success = "Pre-exam updated";
    else $response->error = "Could not update pre-exam";
    echo json_encode($response);
    $mysqli->close();
}

function deletePreExam($data)
{
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
        $response->error = 'You must be a nurse or a doctor';
        echo json_encode($response);
        $mysqli->close();
        exit(0);
    }
    $preExam = PreExam::findById($mysqli, $data->id);
    if ($preExam->delete($mysqli)) $response->success = "Pre-exam deleted";
    else $response->error = "Could not delete pre-exam";
    echo json_encode($response);
    $mysqli->close();
}

// authorized for admins and nurses only
