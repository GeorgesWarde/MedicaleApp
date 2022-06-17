<?php

class Token
{
    public $username, $token;


    public function __construct($username, $token)
    {
        $this->username = $username;
        $this->token = $token;
    }

    public function create($mysqli)
    {
        $query = "insert into tokens (username, token) values('" . $this->username . "', '" . $this->token . "')";
        if (mysqli_query($mysqli, $query)) return true;
        return false;
    }

    public static function findByToken($mysqli, $token)
    {
        $query = "select * from tokens where token = '" . $token . "';";
        $result = mysqli_query($mysqli, $query);
        if (mysqli_num_rows($result) < 1) return false;
        $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $result = $result[0];
        return new Token($result["username"], $result["token"]);
    }

    public static function findByUsername($mysqli, $username)
    {
        $query = "select * from tokens where username = '" . $username . "';";
        $result = mysqli_query($mysqli, $query);
        if (mysqli_num_rows($result) < 1) return false;
        $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $result = $result[0];
        return new Token($result["username"], $result["token"]);
    }
}
