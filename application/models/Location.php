<?php
class Location extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    function save($name,$address,$district,$latitude,$longitude){
        $sql = "insert into locations ";
        $sql.= "(name,address,district,latitude,longitude)";
        $sql.= "values ";
        $sql.= "('".$name."','".$address."','".$district."',".$latitude.",".$longitude.")";
        $ci = & get_instance();
        $ci->db->query($sql);
        return $sql;
    }
}