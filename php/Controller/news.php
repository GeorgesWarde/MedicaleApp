<?php

class news extends Model
{
    protected $table = 'news';
    protected $created = 'created_at';

    public function insert_news(array $field)
    {
        $query = parent::insert($field, $this->table);
        // die($query);
        $res = mysqli_query(parent::getConnection(), $query);
        if ($res) {
            echo "<script>alert('News added successfully to the database')</script>";
        } else {
            echo "<script>alert('Errotr occured please try again')</script>";
        }
    }
    public function getNews()
    {
        $query = parent::Read('*', $this->table, '');
        $res = mysqli_query($this->getConnection(), $query);
        return $res;
    }
    public function getLatestNews()
    {
        $now = date("Y-m-d", time());
        $query = parent::Read('*', $this->table, "created_at like '%{$now}%'");
        $res = mysqli_query($this->getConnection(), $query);
        return $res;
    }
}
