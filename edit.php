<?php
include_once './php/Models/model.php';
include_once './php/Controller/user.php';
if(!isset($_SESSION['adminfname'])){
    header("location:index");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <form action="" method="post">
        <select name="av">
            <option value="available" >Available</option>
            <option value="not available" selected>Not available</option>
        </select>
        <input type="submit" value="Update" name="update">
    </form>
</body>
</html>