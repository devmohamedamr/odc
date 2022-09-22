<?php
namespace Odc\Mvc\core;

class DB{
    private $sql;
    private $connection;

    public function __construct()
    {
        $this->connection = mysqli_connect("localhost","root","","odccrud");   
    }
    protected function select($table,$columns){
        $this->sql = "SELECT $columns FROM `$table`";
        return $this;
    }
    protected function first(){
        $query = mysqli_query($this->connection,$this->sql);
       return mysqli_fetch_assoc($query);
    }

    protected function all(){
        $query = mysqli_query($this->connection,$this->sql);
        return mysqli_fetch_all($query,MYSQLI_ASSOC);
    }
    protected function delete($table){
        $this->sql = "DELETE FROM `$table`";
        return $this;
    }

    protected function where($column,$operator,$value){
        $this->sql .= "WHERE `$column` $operator '$value'";
        return $this;
    }

    protected function update($table,$data){
        $rows = "";
        foreach($data as $key => $value){
            $rows .= "`$key`= '$value',";
        }
        $rows =  rtrim($rows,",");

        $this->sql = "UPDATE `$table` SET $rows";
        return $this;
    }

    protected function insert($table,$data){
        $columns = "";
        $values = "";
        foreach($data as $key => $value){
            $columns .= "`$key`,";
            $values .= "'$value',";
        }
        $columns =  rtrim($columns,",");
        $values = rtrim($values,",");
        $this->sql = "INSERT INTO `$table` ($columns) VALUES  ($values)";
        return $this;
    }

    protected function excute(){
        mysqli_query($this->connection,$this->sql);
       return mysqli_affected_rows($this->connection);
    }
}


