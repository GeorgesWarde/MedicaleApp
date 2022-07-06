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

            if ($row[7] == 1) {
                $_SESSION['adminfname'] = $row[1];
                header("location:admin");
            }
            if ($row[7] == 2) {
                $_SESSION['doctorfname'] = $row[1];
                $_SESSION['id']=$row[0];
                header("location:doctor");
            }
            if ($row[7] == 3) {
                $_SESSION['nursefname'] = $row[1];
                header("location:nurse");
            }
            if ($row[7] == 4) {
                $_SESSION['fname'] = $row[1];
                $_SESSION['id']=$row[0];
                header("location:user");
            }
        } else {
            echo "no user found";
        }
        return $result;
    }
    public function register(array $field)
    {
        $query = parent::insert($field, $this->table);
        $res = mysqli_query($this->getConnection(), $query);
        if ($res) {
            $select = mysqli_query($this->getConnection(), "select * from users");
            $row = mysqli_fetch_assoc($select);
            $_SESSION['fname'] = $row['first_name'];
            header("location:login");
        } else {
            echo "error occured";
        }
    }
    public function registerDoctor(array $field)
    {
        $query = parent::insert($field, $this->table);
        $res = mysqli_query($this->getConnection(), $query);
        if ($res) {


            echo "<script>alert('Doctor added successfully give it the username and password')</script>";
        } else {
            echo "error occured";
        }
    }
    public function registerNurse(array $field)
    {
        $query = parent::insert($field, $this->table);
        $res = mysqli_query($this->getConnection(), $query);
        if ($res) {

            echo "<script>alert('Nurse added successfully give it the username and password')</script>";
        } else {
            echo "error occured";
        }
    }
    public function registerAdmin(array $field)
    {
        $query = parent::insert($field, $this->table);
        $res = mysqli_query($this->getConnection(), $query);
        if ($res) {

            echo "<script>alert('Admin added successfully give it the username and password')</script>";
        } else {
            echo "error occured";
        }
    }
    public function findByEmailUsername($username, $email)
    {
        $query = parent::Read('username,email', $this->table, 'username= "' . $username . '" or email="' . $email . '"');
        $result = mysqli_query(self::getConnection(), $query);
        return $result;
    }
    public function getPatients()
    {
        $query = parent::Read('first_name,last_name,year_of_birth,gender,username,email,created_at', $this->table, 'role_id=4');
        $res = mysqli_query($this->getConnection(), $query);
        return $res;
    }
    public function getDoctors()
    {
        $query = parent::Read('first_name,last_name,year_of_birth,gender,username,email,created_at,available,id', $this->table, 'role_id=2');
        $res = mysqli_query($this->getConnection(), $query);
        return $res;
    }
    public function getNurses()
    {
        $query = parent::Read('first_name,last_name,year_of_birth,gender,username,email,created_at', $this->table, 'role_id=3');
        $res = mysqli_query($this->getConnection(), $query);
        return $res;
    }
    public function countUsers($role)
    {
        $query = "Select count(id) from " . $this->table . " where role_id=" . $role;
        $res = mysqli_query($this->getConnection(), $query);
        $total = mysqli_fetch_assoc($res);
        echo $total['count(id)'];
    }
    public function findBySession($name){
        $query=parent::Read('year_of_birth,gender',$this->table,'first_name="'.$name.'"');
        $res=mysqli_query($this->getConnection(),$query);
        return $res;
    }
    public function countPatientByGender($gender){
        $query=parent::Read('count(*)',$this->table,'role_id=4 and gender="'.$gender.'"');
        $res=mysqli_query($this->getConnection(),$query);
        return $res;
    }
    public function countDoctorByAvailability($av){
        $query=parent::Read('count(*)',$this->table,'role_id=2 and available="'.$av.'"');
        $res=mysqli_query($this->getConnection(),$query);
        return $res;
    }
}