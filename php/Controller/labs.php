<?php


class Labs extends Model{
    protected $table="labs";
    public function findLabs(){
        $query=parent::Read('id,name',$this->table,'');
        $res=mysqli_query($this->getConnection(),$query);
        return $res;
    }
}