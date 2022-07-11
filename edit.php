<?php
include_once './php/Models/model.php';
include_once './php/Controller/user.php';
if (!isset($_SESSION['adminfname'])) {
    header("location:index");
}
$query = "select available from users where id=" . $_GET['id'];
$res = mysqli_query((new Model)->getConnection(), $query);
$row = mysqli_fetch_row($res);
if (isset($_POST['update'])) {
    $update = (new Model)->update('users', 'available="' . $_POST['av'] . '"', 'id=' . $_GET['id']);
    // die($update);
    $result = mysqli_query((new Model)->getConnection(), $update);
    if ($result) {
        header("location:admin");
    }
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

            <?php
            $available = '';
            $not = '';
            if ($row[0] == "available") {
                $available = 'selected';
            } else if ($row[0] == "not available") {
                $not = "selected";
            } ?>
            <option value="available" <?= $available ?>>Available</option>
            <option value="not available" <?= $not ?>>Not available</option>
        </select>
        <input type="submit" value="Update" name="update">
    </form>
</body>

</html>