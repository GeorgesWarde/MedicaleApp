<?php

class appointment extends Model
{
    protected $table_department = "department";
    protected $table_user = "users";
    protected $created = "created_at";
    protected $table_app="appointment";

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
    public function findDoctorBydepartment($id)
    {
        $query = parent::Read('first_name,last_name,studies', $this->table_department . ',' . $this->table_user, 'department.id=' . $id . ' and department.id=users.dep_id');

        $res = mysqli_query($this->getConnection(), $query);
        return $res;
    }
    public function findDoctorByAvailability($id){
        $query = parent::Read('first_name,last_name,studies,specialist', $this->table_department . ',' . $this->table_user, 'department.id=' . $id . ' and department.id=users.dep_id and users.available='."'available'");
        $res = mysqli_query($this->getConnection(), $query);
        return $res;
    }
    public function findDoctorByAvailabilityIdName($id){
        $query = parent::Read('users.id,first_name,last_name', $this->table_department . ',' . $this->table_user, 'department.id=' . $id . ' and department.id=users.dep_id and users.available='."'available'");
        $res = mysqli_query($this->getConnection(), $query);
        return $res;
    }
    public function AddAppointment(array $field){
        $query=parent::insert($field,$this->table_app);
        $res=mysqli_query($this->getConnection(),$query);
        return $res;
    }
    public function findPatientByDocId(){
        
    }
}