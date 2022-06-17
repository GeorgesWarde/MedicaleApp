<?php
require_once('./php/Connection.php');
require_once('./php/aunthentication.php');



function getAllRoles($data)
{  
    $mysqli = connect();
    $response = new stdClass();
    if (!isset(getallheaders()['token'])) {
        echo password_hash("admin", PASSWORD_DEFAULT);
        $response->error = 'Log in first';
        echo json_encode($response);
        $mysqli->close();
        exit(0);
    }
    $auth = authenticate($mysqli, getallheaders()['token']);
    if (!$auth) {
        $response->error = 'Log in first';
        echo json_encode($response);
        $mysqli->close();
        exit(0);
    }
    if ($auth->roleName != "Admin") {
        $response->error = 'You must be an admin';
        echo json_encode($response);
        $mysqli->close();
        exit(0);
    }
    $response->roles = Role::getAll($mysqli);
    echo json_encode($response);
    $mysqli->close();
}
