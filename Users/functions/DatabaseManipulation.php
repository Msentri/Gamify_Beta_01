<?php

/**
 * Created by PhpStorm.
 * User: sandilemazibuko
 * Date: 2016/08/10
 * Time: 9:25 AM
 */
class DatabaseManipulation extends DatabaseConnection
{
    public function __construct()
    {
        parent::__construct();
    }

    public function select($tableName,$columns,$condition= null){
        $sql = "SELECT ". $columns . " FROM ".$tableName;

        if($condition != null || !empty($condition)){
            $sql.= " WHERE ". $condition;
        }

        $results = parent::databaseConnect()->query($sql);
        return $results;

    }

    public function insert($tableName,$columns,$values){

        $sql = "INSERT INTO ".$tableName." (".$columns.") VALUES (".$values.") ";
        if(parent::databaseConnect()->query($sql) === true)
            return true;
        else
            return false;

    }

    public function update($tableName,$columns,$condition){
        $sql = "UPDATE ".$tableName." SET ".$columns." WHERE ".$condition;
        if (parent::databaseConnect()->query($sql) === TRUE) {
            return true;
        } else {
           return false;
        }
    }
    

    public function delete($tableName,$condition = null){

        $sql = "DELETE FROM ".$tableName;

        if ($condition != null || !empty($condition)){
            $sql.= " WHERE ".$condition;
        }

        if (parent::databaseConnect()->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }

    }
}