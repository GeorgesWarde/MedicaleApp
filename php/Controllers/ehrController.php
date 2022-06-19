<?php

require_once('./php/Models/ehr.php');
require_once('./php/Connection.php');
require_once('./php/Models/blood.php');

// authorized for admins and nurses and doctors
function getEhrs($id){
    $mysqli=connect();
    $EHRs=Ehr::getAll($mysqli,$id);
    foreach($EHRs as $e){
    echo "<tr><th>".$e->id."</th><th>".$e->firstName."</th><th>".$e->lastName."</th><th>".$e->dateOfBirth."</th><th>".$e->bloodType."</th><th>".$e->gender."</th><th>".$e->date."</th><th>".$e->gender."</th><th>".$e->gender."</th></tr>";
    
    }
}
function getAllEhrs(){
    $mysqli=connect();
    $EHRs=Ehr::getAllPatients($mysqli);
    foreach($EHRs as $e){
        echo "<tr><th>".$e->id."</th><th>".$e->firstName."</th><th>".$e->lastName."</th><th>".$e->dateOfBirth."</th><th>".$e->bloodType."</th><th>".$e->gender."</th><th>".$e->date."</th><th>".$e->gender."</th><th>".$e->gender."</th><th><a  href='./addPreExam.php?ehrId=$e->id '>Add PreExam</a></th></tr>";
      
    }
}
function createBlood(){
    $mysqli=connect();
    $EHRs=Ehr::getAllPatients($mysqli);
    foreach($EHRs as $e){
        echo "<tr><th>".$e->id."</th><th>".$e->firstName."</th><th>".$e->lastName."</th><th>".$e->dateOfBirth."</th><th>".$e->bloodType."</th><th>".$e->gender."</th><th>".$e->date."</th><th>".$e->gender."</th><th>".$e->gender."</th><th><a  href='./addBlood.php?ehrId=$e->id '>Add Blood Test</a></th></tr>";
      
    }
}
function createDexa(){
    $mysqli=connect();
    $EHRs=Ehr::getAllPatients($mysqli);
    foreach($EHRs as $e){
        echo "<tr><th>".$e->id."</th><th>".$e->firstName."</th><th>".$e->lastName."</th><th>".$e->dateOfBirth."</th><th>".$e->bloodType."</th><th>".$e->gender."</th><th>".$e->date."</th><th>".$e->gender."</th><th>".$e->gender."</th><th><a  href='./addDexa.php?ehrId=$e->id '>Add Dexa Results</a></th></tr>";
      

    }

}
function createCT(){
    $mysqli=connect();
    $EHRs=Ehr::getAllPatients($mysqli);
    foreach($EHRs as $e){
        echo "<tr><th>".$e->id."</th><th>".$e->firstName."</th><th>".$e->lastName."</th><th>".$e->dateOfBirth."</th><th>".$e->bloodType."</th><th>".$e->gender."</th><th>".$e->date."</th><th>".$e->gender."</th><th>".$e->gender."</th><th><a  href='./addCT.php?ehrId=$e->id '>Add CT Scan Results</a></th></tr>";
      

    }
}
function createLunge(){
    $mysqli=connect();
    $EHRs=Ehr::getAllPatients($mysqli);
    foreach($EHRs as $e){
        echo "<tr><th>".$e->id."</th><th>".$e->firstName."</th><th>".$e->lastName."</th><th>".$e->dateOfBirth."</th><th>".$e->bloodType."</th><th>".$e->gender."</th><th>".$e->date."</th><th>".$e->gender."</th><th>".$e->gender."</th><th><a  href='./addLunge.php?ehrId=$e->id '>Add Lunge Scan</a></th></tr>";
      

    }
}
function addBlood(){
    $mysqli=connect();
    if(isset(  $_POST['sodium'])&& isset(  $_POST['bicarbonate'])&& isset(  $_POST['chloriode'])&& isset(  $_POST['urea'])
    && isset(  $_POST['creatinine'])&& isset(  $_POST['egfr'])&& isset(  $_POST['calcium']) && isset(  $_POST['potasium'])
    && isset(  $_POST['glucose']) && isset(  $_POST['phosphate'])&& isset(  $_POST['magnesium'])&& isset(  $_POST['albumin'])
    && isset(  $_POST['haemoglobin'])&& isset(  $_POST['white'])&& isset(  $_POST['platelets'])&& isset(  $_POST['thyroid'])
    && isset(  $_POST['triiodothyronine'])&& isset(  $_POST['follicide'])&& isset(  $_POST['testosterone']) ){
        $blood=new BloodTest(
            -1,
            $_POST['sodium'],
            $_POST['chloriode'],
            $_POST['bicarbonate'],
            $_POST['urea'],    
            $_POST['creatinine'],
            $_POST['egfr'],
            $_POST['calcium'],
            $_POST['potasium'],
            $_POST['glucose'],
            $_POST['phosphate'],
            $_POST['magnesium'],
            $_POST['albumin'],    
            $_POST['haemoglobin'],
            $_POST['white'],
            $_POST['platelets'],
            $_POST['thyroid'],
            $_POST['triiodothyronine'],
            $_POST['follicide'],
            $_POST['testosterone'] ,
            $_GET['ehrId']

         
        );
        $blood->createBlood($mysqli);

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
function addBloodTest(){
    $mysqli=connect();
    if(isset($_POST['addresultBlood'])){

    }
}