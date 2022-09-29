<?php
namespace Odc\Mvc\core;

class DB{
    private $sql;
    private $connection;

    public function __construct()
    {
        $this->connection = mysqli_connect("localhost","root","","odccrud");   
    }
    public function select($table,$columns){
        $this->sql = "SELECT $columns FROM `$table`";
        return $this;
    }
    public function first(){
        $query = mysqli_query($this->connection,$this->sql);
       return mysqli_fetch_assoc($query);
    }

    public function all(){
        // echo $this->sql;die;
        $query = mysqli_query($this->connection,$this->sql);
        return mysqli_fetch_all($query,MYSQLI_ASSOC);
    }
    public function delete($table){
        $this->sql = "DELETE FROM `$table`";
        return $this;
    }

    public function where($column,$operator,$value){
        $this->sql .= "WHERE `$column` $operator '$value'";
        return $this;
    }

    public function andWhere($column,$operator,$value){
        $this->sql .= "AND `$column` $operator '$value'";
        return $this;
    }

    public function orWhere($column,$operator,$value){
        $this->sql .= "OR `$column` $operator '$value'";
        return $this;
    }

    public function join($type,$table,$pk,$fk){
        $this->sql .= "$type JOIN `$table` ON $pk = $fk ";
        return $this;
    }

    public function update($table,$data){
        $rows = "";
        foreach($data as $key => $value){
            $rows .= "`$key`= '$value',";
        }
        $rows =  rtrim($rows,",");

        $this->sql = "UPDATE `$table` SET $rows";
        return $this;
    }

    public function insert($table,$data){
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

    public function excute(){
        mysqli_query($this->connection,$this->sql);
       return mysqli_affected_rows($this->connection);
    }
}


