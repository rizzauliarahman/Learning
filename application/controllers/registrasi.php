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

        if ($this->cek_username()) {
            if ($this->user->insert_user('student', $data)) {
                redirect('login');
            } else {
                redirect('registrasi/index');
            }
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

        if ($this->cek_username()) {
            if ($this->user->insert_user('instructor', $data)) {
                redirect('login');
            } else {
                redirect('registrasi/instructor');
            }
        }
    }
    
    function regis_admin(){
        $data = array(
            'Name' => $this->input->post('nama'),
            'Username' => $this->input->post('username'),
            //'email' => $this->input->post('email'),
            'Password' => $this->input->post('password')
        );

        if ($this->cek_username()) {
            if ($this->user->insert_user('admin', $data)) {
                redirect('admin');
            } else {
                redirect('registrasi/index');
            }
        }
    }

    function cek_username(){
        $where = array('Username' => $this->input->post('username'));

        $cek_student = $this->user->get_user('student', $where);
        $cek_instructor = $this->user->get_user('instructor', $where);
        $cek_admin = $this->user->get_user('admin', $where);

        if ((!isset($cek_student)) and (!isset($cek_admin)) and (!isset($cek_instructor))){
            return true;
        } else {
            return false;
        }
    }

}