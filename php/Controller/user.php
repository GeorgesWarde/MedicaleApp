<?php
include_once '../Models/model.php';
class user extends model
{
    protected $table = "user";
    public static function findByUsername($username, $password)
    {
        $query = "select * from users where username = " . $username . " and password= " . $password;
        $result = mysqli_query(self::getConnection(), $query);
        if (mysqli_num_rows($result) > 0) {
            header("location:user.php");
        }
        return false;
    }
}