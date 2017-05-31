<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 29/05/2017
 * Time: 14:03
 */
class Instructor extends CI_Controller
{

    /**
     * Instructor constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }
    
    function index(){
        $this->load->view('instructor');
    }
}