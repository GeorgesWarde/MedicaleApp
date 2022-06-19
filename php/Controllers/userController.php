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
       
        $_SESSION["firstname"]=$user->firstName;
        $_SESSION["id"]=$user->id;

        if($user->roleId==2){
            header('location:././doctor.php');
        }
        if($user->roleId==3){
            header('location:././nurse.php');
        }
        if($user->roleId==1){
            header('location:././admin.php');

           
        }
    }}}
   




function getAllUsers()
{   
    $mysqli = connect();

   
   
    $users = User::getAll($mysqli);
    foreach ($users as $u) {
        $u->roleName = Role::getRoleById($mysqli, $u->roleId)->name;
        $u->password = "";
        echo '<p>'.$u->roleName.'</p>';
    }
   
}
function createDoctor()
{    // requires token in header, and all user info
    $mysqli = connect();
    if(isset($_POST['FName'])&&isset($_POST['LName'])&&isset($_POST['year'])&&isset($_POST['gender'])&&isset($_POST['userName'])&&isset($_POST['password'])){
    $user = new User(
        -1,
        $_POST['FName'],
        $_POST['LName'],
        $_POST['year'],
        $_POST['gender'],
        $_POST['userName'],
        $_POST['password'],
        2
    );
    $user->create($mysqli);
}


}
function createNurse()
{    // requires token in header, and all user info
    $mysqli = connect();
    if(isset($_POST['FName'])&&isset($_POST['LName'])&&isset($_POST['year'])&&isset($_POST['gender'])&&isset($_POST['userName'])&&isset($_POST['password'])){
    $user = new User(
        -1,
        $_POST['FName'],
        $_POST['LName'],
        $_POST['year'],
        $_POST['gender'],
        $_POST['userName'],
        $_POST['password'],
        3
    );
    $user->create($mysqli);
}



}



?>