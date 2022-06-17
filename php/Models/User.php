<?php

class User
{
    public $id, $firstName, $lastName, $yearOfBirth, $gender, $username, $password, $roleId, $roleName = "";


    public function __construct($id, $firstName, $lastName, $yearOfBirth, $gender, $username, $password, $roleId)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->yearOfBirth = $yearOfBirth;
        $this->gender = $gender;
        $this->username = $username;
        $this->password = $password;
        $this->roleId = $roleId;
    }

    public function create($mysqli)
    {
        $query = "insert into users (first_name, last_name, year_of_birth, gender, username, password, role_id) values('"
            . $this->firstName . "', '" . $this->lastName . "', " . $this->yearOfBirth . ", '" . $this->gender . "', '"
            . $this->username . "', '" . $this->password . "', " . $this->roleId . ");";
        if (mysqli_query($mysqli, $query)) return true;
        return false;
    }

    public function edit($mysqli)
    {
        $query = "update users set first_name='" . $this->firstName . "', last_name='" . $this->lastName . "', year_of_birth="
            . $this->yearOfBirth . ", gender='" . $this->gender . "', username='" . $this->username . "', password='"
            . $this->password . "', role_id=" . $this->roleId . " where id = " . $this->id . ";";
        if (mysqli_query($mysqli, $query)) return true;
        return false;
    }

    public function delete($mysqli)
    {
        $query = "delete from users where id = " . $this->id . ";";
        if (mysqli_query($mysqli, $query)) return true;
        return false;
    }

    public static function findByUsername($mysqli, $username)
    {
        $query = "select * from users where username = '" . $username . "';";
        $result = mysqli_query($mysqli, $query);
        if (mysqli_num_rows($result) > 0) {
            $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
            $result = $result[0];
            return new User(
                $result["id"],
                $result["first_name"],
                $result["last_name"],
                $result["year_of_birth"],
                $result["gender"],
                $result["username"],
                $result["password"],
                $result["role_id"]
            );
        }
        return false;
    }

    public static function findById($mysqli, $id)
    {
        $query = "select * from users where id = " . $id . ";";
        $result = mysqli_query($mysqli, $query);
        if (mysqli_num_rows($result) > 0) {
            $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
            $result = $result[0];
            return new User(
                $result["id"],
                $result["first_name"],
                $result["last_name"],
                $result["year_of_birth"],
                $result["gender"],
                $result["username"],
                $result["password"],
                $result["role_id"]
            );
        }
        return false;
    }

    public static function getAll($mysqli)
    {
        $users = array();
        $query = "select * from users;";
        $result = mysqli_query($mysqli, $query);
        $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
        foreach ($result as $r) {
            array_push($users, new User(
                $r["id"],
                $r["first_name"],
                $r["last_name"],
                $r["year_of_birth"],
                $r["gender"],
                $r["username"],
                $r["password"],
                $r["role_id"]
            ));
        }
        return $users;
    }
}
