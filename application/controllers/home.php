<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 31/05/2017
 * Time: 15:14
 */
class Home extends CI_Controller
{

    /**
     * Home constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    function index(){
        $this->load->view('home');
    }
}