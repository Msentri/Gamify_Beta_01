<?php

/**
 * Created by PhpStorm.
 * User: sandilemazibuko
 * Date: 2016/08/10
 * Time: 1:12 PM
 */
class UserManipulation extends DatabaseManipulation
{
    public function __construct()
    {
        parent::__construct();
    }

    public function addComments($comment,$user_id){
        $tableName = "comments";
        $columns  = "user_id,comment,date_added";
        $date_added = parent::getDateBasic();

        $values = "'$user_id','$comment','$date_added'";

        $results = parent::insert($tableName,$columns,$values);

        if($results){
            return true;
        }else{
            return false;
        }

    }

    public function checkNumberOfComment($user_id){

        $tableName = "comments";
        $columns = "*";
        $condition = "user_id='$user_id'";
        $results = parent::select($tableName,$columns,$condition);

        return mysqli_num_rows($results);

    }

//    public function awardPoint($user_id){
//        $obj = new ga_points_item_events();
//        $obj->trigger_item_44($user_id);
//    }

//    public function awardLevel($user_id){
//        $obj = new ga_level_item_events();
//        $obj->trigger_item_45($user_id);
//    }

    public function getType($type){

        $condition = "type='$type'";
        return parent::select("assign","*",$condition);
    }

    public function awardBadge($user_id,$type,$comment){


        $results = $this->getType($type);

        if($this->addComments($comment,$user_id)) {

            while ($row = mysqli_fetch_assoc($results)) {

                $type_assign_at = $row['rule'];
                $action_id = $row['action_emelement_id'];

                if ($this->checkNumberOfComment($user_id) == $type_assign_at) {
                    $obj = new ga_badge_item_events();
                    $obj->award_badge($user_id, $action_id);
                }

            }
        }
    }

    public function getUserPoints($user_id){

        $tableName = "ga_user_levels";
        $columns = "*";
        $condition = "userid='$user_id'";
        $results = parent::select($tableName,$columns,$condition);

        $row = mysqli_fetch_assoc($results);
        return $row['points'];

    }

}