<?php

class ehrfiles extends Model
{
    protected $table = "ehr_patients";
    protected $table_user = "users";
    protected $table_med = "medications";
    protected $created = "created_at";

    public function addehr(array $field)
    {
        $query = parent::insert($field, $this->table);
        // die($query);
        $res = mysqli_query($this->getConnection(), $query);
        return $res;
    }
    public function readehr($id)
    {
        $query = parent::Read(
            'blood_type,payment,' . $this->table . '.created_at,users.first_name,users.last_name,medications.name',
            $this->table . "," . $this->table_med . "," . $this->table_user,
            'user_id=' . $id . ' and medications.id=ehr_patients.med_id and users.id=ehr_patients.doctor_id'
        );
        // die($query);
        $res = mysqli_query($this->getConnection(), $query);
        return $res;
    }
}