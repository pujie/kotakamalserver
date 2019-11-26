<?php
class Admin extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    function index(){
        $data = array(
            'title'=>'Yayasan Suara Hati',
            'tablename'=>'Suara Hati',
            'tablenamedescription'=>'Yayasan',
            'tableinfo'=>'Distribusi Kotak'
        );
        $this->load->view('Admin/index',$data);
    }
}