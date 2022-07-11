<?php

class Preexams extends Model
{
    protected $table = "pre_exams";
    protected $created = "created_at";

    public function insertPre(array $field)
    {
        $query = parent::insert($field, $this->table);
        $res = mysqli_query($this->getConnection(), $query);
        return $res;
    }
    public function readPre($id)
    {
        $query = parent::Read('temperature,pulse_rate,blood_pressure', $this->table, 'user_id=' . $id);
        $res = mysqli_query($this->getConnection(), $query);
        return $res;
    }
}