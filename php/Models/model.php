<?php

class Model
{
    private $connection;

    public function getConnection()
    {
        $this->connection = mysqli_connect('localhost', 'root', '', 'medicalcenter') or die('connection error');
        return $this->connection;
    }
    function Read($object, $table, $order)
    {
        $sql = "";
        if ($order == '') {
            $sql = "select " . $object . " from " . $table;
        } else {
            $sql = "select " . $object . " from " . $table . " where " . $order;
        }
        return $sql;
    }
    function insert(array $fields, $table)
    {
        $this->_escape($fields);
        if (isset($this->created)) $fields[$this->created] = date("Y-m-d H:i:s", time());

        $sql = "insert into {$table} ";
        // $field = array_keys($fields);

        foreach ($fields as $key => $value) {

            $field[] = " $key='$value'  ";
        }
        $sql .= " SET " . implode(" , ", $field);
        /*   $sql .= implode(",", $field);              
                  $sql .= ") values ('";
                  $sql .= implode("','", $fields);
                  $sql .= "');";*/
        return $sql;

        //  }



    }
    private function _escape($fields)
    {
        foreach ($fields as &$value) {
            $value = mysqli_real_escape_string(self::getConnection(), $value);
        }

        return $fields;
    }
    public function delete($table, $where)
    {
        $sql = "";
        if ($where = '') {
            $sql = "delete from " . $table;
        } else {
            $sql = "delete from " . $table . " where " . $where;
        }
        return $sql;
    }
    function update($table, $newSet, $where)
    {
        $sql = "update " . $table . " set " . $newSet . " where " . $where;
        return $sql;
    }
}
