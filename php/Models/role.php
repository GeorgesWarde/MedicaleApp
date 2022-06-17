<?php

class Role
{
    public $id, $name;
    // int, string

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public static function getRoleById($mysqli, $id)
    {
        $query = "select * from roles where id = " . $id . ";";
        $result = mysqli_query($mysqli, $query);
        $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $result = $result[0];
        return new Role($result["id"], $result["name"]);
    }

    public static function getAll($mysqli)
    {
        $roles = array();
        $query = "select * from roles;";
        $result = mysqli_query($mysqli, $query);
        $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
        foreach ($result as $r) {
            array_push($roles, new Role($r["id"], $r["name"]));
        }
        return $roles;
    }
}
