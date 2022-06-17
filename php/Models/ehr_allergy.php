<?php

class EhrAllergy
{
    public $ehrId, $allergyId;
    // int, int

    public function __construct($ehrId, $allergyId)
    {
        $this->ehrId = $ehrId;
        $this->allergyId = $allergyId;
    }

    public static function findByEhrId($mysqli, $id)
    {
        $ehrs = array();
        $query = "select * from ehr_patients_allergies where ehr_patient_id=" . $id . ";";
        $result = mysqli_query($mysqli, $query);
        if (mysqli_num_rows($result) > 0) {
            $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
            foreach ($result as $r) {
                array_push($ehrs, new EhrAllergy($r["ehr_patient_id"], $r["allergy_id"]));
            }
        }
        return $ehrs;
    }

    public function create($mysqli)
    {
        $query = "insert into ehr_patients_allergies (ehr_patient_id, allergy_id) values (" . $this->ehrId
            . ", " . $this->allergyId . ");";
        if (mysqli_query($mysqli, $query)) return true;
        return false;
    }

    public function delete($mysqli)
    {
        $query = "delete from ehr_patients_allergies where ehr_patient_id = " . $this->ehrId
            . "and allergy_id = " . $this->allergyId . ";";
        if (mysqli_query($mysqli, $query)) return true;
        return false;
    }
}
