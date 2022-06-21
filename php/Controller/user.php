<?php
session_start();
class user extends model
{
    protected  $table = "users";
    protected $created = 'created_at';
    // public static function findByUsername($username, $password)
    // {
    //     $query = "select * from users where username = " . $username . " and password= " . $password;
    //     $result = mysqli_query(self::getConnection(), $query);
    //     if (mysqli_num_rows($result) > 0) {
    //         header("location:user.php");
    //     }
    //     return false;
    // }
    public function register(array $field)
    {
        $query = parent::insert($field, $this->table);
        $res = mysqli_query($this->getConnection(), $query);
        if ($res) {
            $select = mysqli_query($this->getConnection(), "select * from users");
            $row = mysqli_fetch_assoc($select);
            $_SESSION['fname'] = $row['first_name'];
            header("location:user");
        } else {
            echo "error occured";
        }
    }
}