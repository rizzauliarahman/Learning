<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 29/05/2017
 * Time: 11:45
 */
class Registrasi extends CI_Controller
{

    /**
     * Registrasi constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user');
    }

    function index(){
        $this->load->view('registrasi');
    }

    function regis(){
        $data = array(
            'Name' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            //'email' => $this->input->post('email'),
            'password' => $this->input->post('password')
        );
        
        if ($this->user->insert_user('student',$data))
        {
            redirect('login');
        }
        else
        {
            redirect('registrasi/index');
        }
    }

    function instructor(){
        $this->load->view('registrasi-instructor');
    }

    function regis_instructor(){
        $data = array(
            'Name' => $this->input->post('nama'),
            'Username' => $this->input->post('username'),
            //'email' => $this->input->post('email'),
            'Password' => $this->input->post('password'),
            'Birthday' => $this->input->post('date'),
            'Work_Exp' => $this->input->post('exp')
        );

        if ($this->user->insert_user('instructor',$data))
        {
            redirect('login');
        }
        else
        {
            redirect('registrasi/instructor');
        }
    }
    
    function reg_student_admin(){
        $data = array(
            'Name' => $this->input->post('nama'),
            'Username' => $this->input->post('username'),
            //'email' => $this->input->post('email'),
            'Password' => $this->input->post('password')
        );

        if ($this->user->insert_user('student',$data))
        {
            redirect('admin');
        }
        else
        {
            redirect('registrasi/index');
        }
    }
}