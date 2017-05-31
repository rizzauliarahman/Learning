<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 26/05/2017
 * Time: 15:21
 */
class test extends CI_Controller
{
   public function index(){
       $this->load->helper('url');
       $this->load->view('test');
   }

    public function hello() {
        echo "This is hello function.";
    }
}