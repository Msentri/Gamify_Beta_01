<?php
/**
 * Created by PhpStorm.
 * User: sandilemazibuko
 * Date: 2016/08/10
 * Time: 9:37 AM
 */
include "functions/DatabaseConfig.php";
include "functions/clock.php";
include "functions/DatabaseConnection.php";
include "functions/DatabaseManipulation.php";

$select  = new DatabaseManipulation();

//$tableName = "ga_users";
//$columns = "username,firstname,lastname";
//$condition = "username = 'msentri'";
//
//$results = $select->select($tableName,$columns,$condition);
//
//while($row = $results->fetch_assoc()) {
//    echo $row['username'];
//}




//$tableName = "comments";
//$columns = "user_id,comment";
//$values = "'1','hello Sandile'";
//
//$results = $select->insert($tableName,$columns,$values);
//
//if($results){
//    echo "thanks";
//}else{
//    echo "bad";
//}



$tableName = "comments";
//$columns = "comment='sawubona'";
//$condition = "user_id='1'";
//
//$update = $select->update($tableName,$columns,$condition);
//if($update)
//    echo "sandile";
//else
//    echo "no";


$condition = "user_id='1'";
$delete = $select->delete($tableName,$condition);

if($delete){
    echo "yebo";
}else{
    echo "cha";
}







