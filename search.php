<?php
include_once './php/Models/model.php';
$con = new Model;
$con = $con->getConnection();
$search = $_GET['search'];

$query = "select first_name,last_name,studies,specialist,department.name from users,department where role_id=2 and (first_name like '%{$search}%' or last_name like '%{$search}%') and (users.dep_id=department.id)";

$res = mysqli_query($con, $query);
while ($row = mysqli_fetch_assoc($res)) {

  echo $row['first_name'] . " " . $row['last_name'] ." ".$row['studies'] . " ".$row['specialist']." ".$row['name']. "<br>";
}
// $sql = "SELECT name,price,image,description FROM product,category WHERE product.name = '" . $q . "' and product.cat=category.catid";
// $result = mysqli_query($con, $sql);

// echo "<table border=1>
// <tr>
// <th>Name</th>
// <th>Category</th>
// <th>Price</th>
// <th>Image</th>

// </tr>";
// while ($row = mysqli_fetch_array($result)) {
//     echo "<tr>";
//     echo "<td>" . $row['name'] . "</td>";
//     echo "<td>" . $row['description'] . "</td>";
//     echo "<td>" . $row['price'] . "</td>";
//     echo "<td><img src='./uploads/{$row['image']}' width='200' height='200'></td>";

//     echo "</tr>";
// }
// echo "</table>";