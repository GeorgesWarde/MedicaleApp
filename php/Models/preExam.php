<?php

class PreExam
{
    public $id, $date, $temperature, $pulseRate, $bloodPressure, $userId, $ehrId, $painTypeId;
    // int, date, float, string, string, int, int, int
    public $firstName, $lastName, $painTypeName, $painTypeDesc;
    // string, string, string, string

    public function __construct($id, $date, $temperature, $pulseRate, $bloodPressure, $userId, $ehrId, $painTypeId)
    {
        $this->id = $id;
        $this->date = $date;
        $this->temperature = $temperature;
        $this->pulseRate = $pulseRate;
        $this->bloodPressure = $bloodPressure;
        $this->userId = $userId;
        $this->ehrId = $ehrId;
        $this->painTypeId = $painTypeId;
    }

    public function create($mysqli)
    {
        $query = "insert into pre_exams (date, temperature, pulse_rate, blood_pressure, user_id, ehr_patient_id, pain_type_id) values('"
            . $this->date . "', '" . $this->temperature . "', " . $this->pulseRate . ", '" . $this->bloodPressure . "', '"
            . $this->userId . "', '" . $this->ehrId . "', '" . $this->painTypeId . "');";
        if (mysqli_query($mysqli, $query)) return true;
        return false;
    }

    public function edit($mysqli)
    {
        $query = "update pre_exams set date='" . $this->date . "', temperature=" . $this->temperature . ", pulse_rate='"
            . $this->pulseRate . "', blood_pressure='" . $this->bloodPressure . "', pain_type_id='" . $this->painTypeId
            . "' where id = " . $this->id . ";";
        if (mysqli_query($mysqli, $query)) return true;
        return false;
    }

    public function delete($mysqli)
    {
        $query = "delete from pre_exams where id = " . $this->id . ";";
        if (mysqli_query($mysqli, $query)) return true;
        return false;
    }

    public static function findById($mysqli, $id)
    {
        $query = "select * from pre_exams where id = '" . $id . "';";
        $result = mysqli_query($mysqli, $query);
        if (mysqli_num_rows($result) > 0) {
            $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
            $result = $result[0];
            return new PreExam(
                $result["id"],
                $result["date"],
                $result["temperature"],
                $result["pulse_rate"],
                $result["blood_pressure"],
                $result["user_id"],
                $result["ehr_patient_id"],
                $result["pain_type_id"]
            );
        }
        return false;
    }

    public static function getAll($mysqli)
    {
        $exams = array();
        $query = "select * from pre_exams;";
        $result = mysqli_query($mysqli, $query);
        if (mysqli_num_rows($result) > 0) {
            $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
            foreach ($result as $r) {
                array_push($exams, new PreExam(
                    $r["id"],
                    $r["date"],
                    $r["temperature"],
                    $r["pulse_rate"],
                    $r["blood_pressure"],
                    $r["user_id"],
                    $r["ehr_patient_id"],
                    $r["pain_type_id"]
                ));
            }
        }
        return $exams;
    }

    public static function getByEhrId($mysqli, $ehrId)
    {
        $exams = array();
        $query = "select * from pre_exams where ehr_patient_id=" . $ehrId . ";";
        $result = mysqli_query($mysqli, $query);
        if (mysqli_num_rows($result) > 0) {
            $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
            foreach ($result as $r) {
                array_push($exams, new PreExam(
                    $r["id"],
                    $r["date"],
                    $r["temperature"],
                    $r["pulse_rate"],
                    $r["blood_pressure"],
                    $r["user_id"],
                    $r["ehr_patient_id"],
                    $r["pain_type_id"]
                ));
            }
        }
        return $exams;
    }
}
