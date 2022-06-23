<?php
session_start();
class user extends Model
{
    protected  $table = "users";
    protected $created = 'created_at';
    public function findByUsername($username, $password)
    {
        $query = parent::Read('*', $this->table, 'username= "' . $username . '" and password="' . md5($password) . '"');
        $result = mysqli_query(self::getConnection(), $query);
        $row = mysqli_fetch_row($result);
        if ($row > 0) {
            header("location:user");
        } else {
            echo "no user found";
        }
    }
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
