<?php
class Outlet extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    function gets(){
        $sql = "select id,name,address,cp,phone from locations ";
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        return array('res'=>$que->result(),'cnt'=>$que->num_rows());
    }
}