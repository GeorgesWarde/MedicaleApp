<?php

class appointment extends Model
{
    protected $table_department = "department";
    protected $table_user = "users";
    protected $created = "created_at";
    protected $table_app = "appointment";
    protected $table_labs = "labs";

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
    public function findDoctorByAvailability($id)
    {
        $query = parent::Read('first_name,last_name,studies,specialist', $this->table_department . ',' . $this->table_user, 'department.id=' . $id . ' and department.id=users.dep_id and users.available=' . "'available'");
        $res = mysqli_query($this->getConnection(), $query);
        return $res;
    }
    public function findDoctorByAvailabilityIdName($id)
    {
        $query = parent::Read('users.id,first_name,last_name', $this->table_department . ',' . $this->table_user, 'department.id=' . $id . ' and department.id=users.dep_id and users.available=' . "'available'");
        $res = mysqli_query($this->getConnection(), $query);
        return $res;
    }
    public function AddAppointment(array $field)
    {
        $query = parent::insert($field, $this->table_app);
        $res = mysqli_query($this->getConnection(), $query);
        return $res;
    }
    public function findPatientByDocId($id)
    {
        $query = parent::Read('users.*,appointment.*,labs.name,department.name', $this->table_app . "," . $this->table_user . "," . $this->table_labs . "," . $this->table_department, 'doc_id=' . $id . ' and appointment.user_id=users.id and appointment.lab_id=labs.id and appointment.dep_id=department.id');
        // die($query);

        $res = mysqli_query($this->getConnection(), $query);
        return $res;
    }
    public function findPatientByDocIdCount($id)
    {
        $query = parent::Read('count(*)', $this->table_app . "," . $this->table_user . "," . $this->table_labs . "," . $this->table_department, 'doc_id=' . $id . ' and appointment.user_id=users.id and appointment.lab_id=labs.id and appointment.dep_id=department.id');
        // die($query);
        $res = mysqli_query($this->getConnection(), $query);
        return $res;
    }
    public function findPatientByGender($id, $gender)
    {
        $query = parent::Read('count(*)', $this->table_app . "," . $this->table_user . "," . $this->table_labs . "," . $this->table_department, 'doc_id=' . $id . ' and appointment.user_id=users.id and appointment.lab_id=labs.id and appointment.dep_id=department.id and users.gender="' . $gender . '"');
        // die($query);
        $res = mysqli_query($this->getConnection(), $query);
        return $res;
    }
    public function findPatientByApp()
    {
        $query = parent::Read('users.*,appointment.*,labs.name,department.name', $this->table_app . "," . $this->table_user . "," . $this->table_labs . "," . $this->table_department, 'appointment.user_id=users.id and appointment.lab_id=labs.id and appointment.dep_id=department.id');
        // die($query);

        $res = mysqli_query($this->getConnection(), $query);
        return $res;
    }
    public function findLabsByid($id)
    {
        $query = parent::Read('count(id)', $this->table_app, 'lab_id=' . $id);
        $res = mysqli_query($this->getConnection(), $query);
        return $res;
    }
    public function findAllergie()
    {
        $query = parent::Read('count(id)', $this->table_app, 'allergie is not null');
        $res = mysqli_query($this->getConnection(), $query);
        return $res;
    }
    public function findSymptoms()
    {
        $query = parent::Read('count(id)', $this->table_app, 'symptoms is not null');
        $res = mysqli_query($this->getConnection(), $query);
        return $res;
    }
}
