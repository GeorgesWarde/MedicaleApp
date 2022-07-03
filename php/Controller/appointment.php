<?php

class appointment extends Model
{
    protected $table_department = "department";
    protected $created = "created_at";

    public function findDepartments()
    {
        $query = parent::Read('*', $this->table_department, '');
        $res = mysqli_query(parent::getConnection(), $query);
        return $res;
    }
    public function findByDepartments($id)
    {
        $query = parent::Read('*', $this->table_department, 'id=' . $id);
        $res = mysqli_query(parent::getConnection(), $query);
        return $res;
    }
}
