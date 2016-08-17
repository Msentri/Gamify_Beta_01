<?php

/**
 * Created by PhpStorm.
 * User: sandilemazibuko
 * Date: 2016/08/15
 * Time: 12:23 PM
 */
class Admin extends DatabaseManipulation
{

    public function __construct()
    {
        parent::__construct();
    }

    function get_what_to_assign(){
        $results = parent::select("ga_badges GROUP BY type ORDER BY type ASC","*",null);
        return $results;
    }

    function get_category($catID){
        $condition = "type='$catID'";
        return parent::select("ga_categories","*",$condition);
    }
    function get_category_two($catID){
        $condition = "id='$catID'";
        return parent::select("ga_categories","*",$condition);
    }

    function get_category_based_on_type_and_id($type,$category_id){
        $condition = "type='$type' AND category_id=$category_id";
        return parent::select("ga_badges","*",$condition);
    }

    function assign_number_of_comments($what_element,$what_element_category,$action_emelement_id,$rule,$type){

        $columns = "what_element,what_element_category,action_emelement_id,rule,type";
        $values = "'$what_element','$what_element_category','$action_emelement_id','$rule','$type'";
        return parent::insert("assign",$columns,$values);

    }






}