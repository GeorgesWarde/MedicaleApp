<?php
function connect(){
    if(!isset($_SESSION["id"])){
    session_start();
    }
$host='localhost';
$user='root';
$pass='';
$db='medicalcenter';
$conn=mysqli_connect($host,$user,$pass,$db) or die('No connection');

return $conn;
}
?>