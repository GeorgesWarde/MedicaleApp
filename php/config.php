<?php
session_start();
define('HOSTNAME','localhost');
define('ROOTNAME','root');
define('PASSWORD','');
define('DBNAME','medicalcenter');
$con=mysqli_connect(HOSTNAME,ROOTNAME,PASSWORD,DBNAME) or die('connection error');
