<?php
class Flocation extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    function getlocations(){
        $sql = "select * from locations order by createdate desc ";
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        return $que->result();
    }
}