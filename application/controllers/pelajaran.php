<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 14/06/2017
 * Time: 13:29
 */
class Pelajaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    function index(){
        if ($this->session->userdata("nama") != ""){
            $this->load->view('pelajaran');
        }else{
            redirect('home');
        }

    }
}