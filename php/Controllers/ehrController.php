<?php

require_once('./php/Models/ehr.php');
require_once('./php/Connection.php');

// authorized for admins and nurses and doctors
function getEhrs(){
    $mysqli=connect();
    $EHRs=Ehr::getAll($mysqli,$_SESSION["id"]);
    foreach($EHRs as $e){
    echo "<tr><th>".$e->id."</th><th>".$e->firstName."</th><th>".$e->lastName."</th><th>".$e->dateOfBirth."</th><th>".$e->bloodType."</th><th>".$e->gender."</th><th>".$e->date."</th><th>".$e->gender."</th><th>".$e->gender."</th></tr>";
    
    }
}
function getAllEhrs(){
    $mysqli=connect();
    $EHRs=Ehr::getAllPatients($mysqli);
    foreach($EHRs as $e){
        echo "<tr><th>".$e->id."</th><th>".$e->firstName."</th><th>".$e->lastName."</th><th>".$e->dateOfBirth."</th><th>".$e->bloodType."</th><th>".$e->gender."</th><th>".$e->date."</th><th>".$e->gender."</th><th>".$e->gender."</th><th><a href='./addPreExam.php'>Add PreExam</a></th></tr>";
    }
}

// authorized for nurses and doctors and admins
function createEhr()
{     // token in header required, and ehr data required, useerId not sent in request
    $mysqli = connect();
  
    if(isset($_POST["firstName"]) && isset($_POST["lastName"]) && isset($_POST["gender"]) && isset($_POST["dateofBirth"] )&&isset($_POST["bloodType"]) && isset($_POST["city"] )&&isset($_POST["date"])){
    $ehr = new Ehr(
        -1,
        $_POST['firstName'],
        $_POST['lastName'],
        $_POST['gender'],
        $_POST['dateofBirth'],
        $_POST['bloodType'],
        $_POST['city'],
        $_POST['date'],
        $_SESSION["id"]
    );    // userId = user logged in
    $ehr->create($mysqli);
    

}}
