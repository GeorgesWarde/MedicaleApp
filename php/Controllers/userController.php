<?php
require_once('./php/aunthentication.php');
require_once('./php/Connection.php');
require_once('./php/Models/User.php');

error_reporting (E_ALL ^ E_NOTICE);
function login(){
       
 $mysqli = connect();
 
if($_POST['username']!=NULL && $_POST['pass']!=NULL){
    $user = User::findByUsername($mysqli, $_POST['username']); 
 
    if ($user->password==$_POST['pass'] &&  $user->username==$_POST['username']){
    
        $_SESSION["firstname"]=$user->username;
        $_SESSION["id"]=$user->id;
         
        if($user->roleId==2){
            header('location:././doctor.php');
        }
        if($user->roleId==3){
            header('location:././nurse.php');
        }
    }}}
    
    




function getAllUsers()
{   
    $mysqli = connect();

   /* $auth = authenticate($mysqli, getallheaders()['token']);
    if (!$auth) {
        $response->error = 'Log in first';
        echo json_encode($response);
        $mysqli->close();
        exit(0);
    }*/
   
    $users = User::getAll($mysqli);
    foreach ($users as $u) {
        $u->roleName = Role::getRoleById($mysqli, $u->roleId)->name;
        $u->password = "";
        echo '<p>'.$u->roleName.'</p>';
    }
   
}





?>