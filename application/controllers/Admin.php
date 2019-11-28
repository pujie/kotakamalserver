<?php
class Admin extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('flocation');
    }
    function edit(){
        $data = array(
            'title'=>'Yayasan Suara Hati',
            'tablename'=>'Suara Hati',
            'tablenamedescription'=>'Yayasan',
            'tableinfo'=>'Distribusi Kotak',
            'locations'=>$this->flocation->getlocations(),
            'username'=>'Tamu'
        );
        $this->load->view('Admin/edit',$data);
    }
    function index(){
        $data = array(
            'title'=>'Yayasan Suara Hati',
            'tablename'=>'Suara Hati',
            'tablenamedescription'=>'Yayasan',
            'tableinfo'=>'Distribusi Kotak',
            'locations'=>$this->flocation->getlocations(),
            'username'=>'Tamu'
        );
        $this->load->view('Admin/index',$data);
    }
    function login(){
        $data = array(
            'title'=>'Yayasan Suara Hati'
        );
        $this->load->view('Admin/login',$data);
    }
    function loginhandler(){
        redirect("/Admin/index");
    }
}