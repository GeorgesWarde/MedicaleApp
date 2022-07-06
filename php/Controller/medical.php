<?php

class medical extends Model
{
    protected $table = "medications";
    protected $created = "arrived_at";

    public function AddMedical(array $field)
    {
        $query = parent::insert($field, $this->table);
        $res = mysqli_query($this->getConnection(), $query);
        if ($res) {
            echo "<script>alert('Medical added Successfully!')</script>";
        } else {
            echo "error occured";
        }
    }
    public function findMed(){
        $query=parent::Read('*',$this->table,'');
        $res=mysqli_query($this->getConnection(),$query);
        return $res;
    }
}