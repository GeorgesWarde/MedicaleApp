<?php

class result extends Model
{
    protected $table = "results";
    protected $table_user = "users";
    protected $created = "created_at";

    public function addresult(array $field)
    {
        $query = parent::insert($field, $this->table);
        // die($query
        $res = mysqli_query($this->getConnection(), $query);
        if ($res) {
            echo "<script>alert('Added successfully');</script>";
        } else {
            echo "<script>alert('error occured')</script>";
        }
    }
    public function findusers()
    {
        $query = parent::Read('id,first_name,last_name', $this->table_user, 'role_id=4');
        $res = mysqli_query($this->getConnection(), $query);
        return $res;
    }
    public function findLabsById($id)
    {
        $query = parent::Read('lab_id', $this->table, 'user_id=' . $id);
        // die($query);
        $res = mysqli_query($this->getConnection(), $query);
        return $res;
    }
    public function findAll($idU, $idL)
    {
        $query = parent::Read('*', $this->table, 'user_id=' . $idU . ' and lab_id=' . $idL);
        // die($query);
        $res = mysqli_query($this->getConnection(), $query);
        return $res;
    }
}