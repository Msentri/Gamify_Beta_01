<?php

/**
 * Created by PhpStorm.
 * User: sandilemazibuko
 * Date: 2016/08/10
 * Time: 9:10 AM
 */
class DatabaseConnection extends Clock
{
    public function __construct()
    {
        parent::__construct();
    }

    public function databaseConnect(){

        $conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE_NAME);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }
}