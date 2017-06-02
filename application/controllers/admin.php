<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 29/05/2017
 * Time: 10:21
 */
class Admin extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('user');
        
        if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }
    }

    function index(){
        $this->load->helper('url');
        $this->load->view('admin');
        
    }
    
}