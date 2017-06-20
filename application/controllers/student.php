<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 29/05/2017
 * Time: 14:03
 */
class Student extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    function index(){
        $this->load->view('student');
    }

    function view_course(){

    }

}