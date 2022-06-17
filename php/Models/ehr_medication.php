<?php

class EhrMedication
{
    public $ehrId, $medicationId, $startDate, $endDate, $dosage, $timesPerDay;
    // int, int, date, date, float, int

    public function __construct($ehrId, $medicationId, $startDate, $endDate, $dosage, $timesPerDay)
    {
        $this->ehrId = $ehrId;
        $this->medicationId = $medicationId;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->dosage = $dosage;
        $this->timesPerDay = $timesPerDay;
    }

    public static function findByEhrId($mysqli, $id)
    {
        $ehrs = array();
        $query = "select * from ehr_medication where ehr_id=" . $id . ";";
        $result = mysqli_query($mysqli, $query);
        if (mysqli_num_rows($result) > 0) {
            $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
            foreach ($result as $r) {
                array_push($ehrs, new EhrMedication($r["ehr_id"], $r["medication_id"], $r["start_date"], $r["end_date"], $r["dosage"], $r["times_per_day"]));
            }
        }
        return $ehrs;
    }

    public static function find($mysqli, $ehrId, $medicationId)
    {
        $query = "select * from ehr_medication where ehr_id=" . $ehrId . " and medication_id=" . $medicationId . ";";
        $result = mysqli_query($mysqli, $query);
        if (mysqli_num_rows($result) > 0) {
            $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
            $result = $result[0];
            return new EhrMedication($result["ehr_id"], $result["medication_id"], $result["start_date"], $result["end_date"], $result["dosage"], $result["times_per_day"]);
        }
        return false;
    }

    public function create($mysqli)
    {
        $query = "insert into ehr_medication (ehr_id, medication_id, details, date) values (" . $this->ehrId
            . ", " . $this->medicationId . ", '" . $this->details . "', '" . $this->date . "');";
        if (mysqli_query($mysqli, $query)) return true;
        return false;
    }

    public function delete($mysqli)
    {
        $query = "delete from ehr_medication where ehr_id = " . $this->ehrId
            . "and medication_id = " . $this->medicationId . ";";
        if (mysqli_query($mysqli, $query)) return true;
        return false;
    }
}
