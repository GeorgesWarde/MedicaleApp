<?php

class Ehr
{
    public $id, $firstName, $lastName, $gender, $dateOfBirth, $bloodType, $city, $date, $userId;
    
    public $allergies = [], $problems = [], $medications = [];
    

    public function __construct($id, $firstName, $lastName, $gender, $dateOfBirth, $bloodType, $city, $date, $userId)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->gender = $gender;
        $this->dateOfBirth = $dateOfBirth;
        $this->bloodType = $bloodType;
        $this->city = $city;
        $this->date = $date;
        $this->userId = $userId;
    }

    public function create($mysqli)
    {
        $query = "insert into ehr_patients (firstname, lastname, gender, dateofbirth, bloodtype, city, date, userid) values('"
            . $this->firstName . "', '" . $this->lastName . "', '" . $this->gender . "', '" . $this->dateOfBirth . "', '"
            . $this->bloodType . "', '" . $this->city . "', '" . $this->date . "', '" . $this->userId . "');";
        if (mysqli_query($mysqli, $query)) return true;
        return false;
    }

    public function edit($mysqli)
    {
        $query = "update ehr_patients set first_name='" . $this->firstName . "', last_name='" . $this->lastName . "', date_of_birth='"
            . $this->dateOfBirth . "', gender='" . $this->gender . "', blood_type='" . $this->bloodType . "', city='"
            . $this->city . "', date='" . $this->date . "' where id = " . $this->id . ";";
        if (mysqli_query($mysqli, $query)) return true;
        return false;
    }

    public function delete($mysqli)
    {
        $query = "delete from ehr_patients where id = " . $this->id . ";";
        if (mysqli_query($mysqli, $query)) return true;
        return false;
    }

    
    public static function getAll($mysqli,$id)
    {
        $ehrs = array();
        $query = "select * from ehr_patients where userid=$id;";
        $result = mysqli_query($mysqli, $query);
        if (mysqli_num_rows($result) > 0) {
            $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
            foreach ($result as $r) {
                array_push($ehrs, new Ehr(
                    $r["id"],
                    $r["firstname"],
                    $r["lastname"],
                    $r["gender"],
                    $r["dateofbirth"],
                    $r["bloodtype"],
                    $r["city"],
                    $r["date"],
                    $r["userid"]
                ));
            }
        }
        return $ehrs;
    }
    public static function getEhrById($mysqli,$id)
    {
        $ehrs = array();
        $query = "select * from ehr_patients where id=$id;";
        $result = mysqli_query($mysqli, $query);
        if (mysqli_num_rows($result) > 0) {
            $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
            foreach ($result as $r) {
                array_push($ehrs, new Ehr(
                    $r["id"],
                    $r["firstname"],
                    $r["lastname"],
                    $r["gender"],
                    $r["dateofbirth"],
                    $r["bloodtype"],
                    $r["city"],
                    $r["date"],
                    $r["userid"]
                ));
            }
        }
        return $ehrs;
    }
      
    public static function getAllPatients($mysqli)
    {
        $ehrs = array();
        $query = "select * from ehr_patients ;";
        $result = mysqli_query($mysqli, $query);
        if (mysqli_num_rows($result) > 0) {
            $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
            foreach ($result as $r) {
                array_push($ehrs, new Ehr(
                    $r["id"],
                    $r["firstname"],
                    $r["lastname"],
                    $r["gender"],
                    $r["dateofbirth"],
                    $r["bloodtype"],
                    $r["city"],
                    $r["date"],
                    $r["userid"]
                ));
            }
        }
        return $ehrs;
    }
    public static function findById($mysqli, $id)
    {
        $query = "select * from ehr_patients where id = '" . $id . "';";
        $result = mysqli_query($mysqli, $query);
        if (mysqli_num_rows($result) > 0) {
            $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
            $result = $result[0];
            return new Ehr(
                $result["id"],
                $result["firstname"],
                $result["lastname"],
                $result["gender"],
                $result["dateofbirth"],
                $result["bloodtype"],
                $result["city"],
                $result["date"],
                $result["userid"]
            );
        }
        return false;
    }


}
