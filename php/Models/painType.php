<?php

class PainType
{
    public $id, $name, $desc;
    // int, string, string

    public function __construct($id, $name, $desc)
    {
        $this->id = $id;
        $this->name = $name;
        $this->desc = $desc;
    }

    public static function getPainTypeById($mysqli, $id)
    {
        $query = "select * from pain_types where id = " . $id . ";";
        $result = mysqli_query($mysqli, $query);
        $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $result = $result[0];
        return new PainType($result["id"], $result["name"], $result["description"]);
    }

    public static function getAll($mysqli)
    {
        $types = array();
        $query = "select * from pain_types;";
        $result = mysqli_query($mysqli, $query);
        $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
        foreach ($result as $r) {
            array_push($types, new PainType($r["id"], $r["name"], $r["description"]));
        }
        return $types;
    }
    public static function getPainTypeByName($mysqli, $name)
    {
        $query = "select * from pain_types where name = " . $name . ";";
        $result = mysqli_query($mysqli, $query);
        $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $result = $result[0];
        return new PainType($result["id"], $result["name"], $result["description"]);
    }

}
