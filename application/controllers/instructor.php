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

        $this->load->model('course');


        if (($this->session->userdata('status') != "login") and ($this->session->userdata('akun') != "instructor")) {
            redirect(base_url("login"));
        }

    }
    
    function index()
    {
        $this->load->view('instructor');
    }

    function get_instructor_course()
    {
        $where = array('instructor_id' => $this->session->userdata('id'));

        $result = $this->course->get_instructor_course($where);
        return $result;
    }

}