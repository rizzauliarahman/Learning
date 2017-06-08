<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 29/05/2017
 * Time: 10:03
 */
    class Login extends CI_Controller{

        /**
         * Login constructor.
         */
        public function __construct()
        {
            parent::__construct();
            $this->load->model('user');
        }

        function index()
        {
            $this->load->helper('url');
            $this->load->view('login');
        }

        function login(){
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $where = array('Username' => $username,'Password' => $password );
            if($this->user->cek_login("admin",$where)->num_rows() > 0){

                $data_session = array(
                    'nama' => $username,
                    'status' => "login"
                );

                $this->session->set_userdata($data_session);

                redirect(base_url("admin"));
            }else
                if ($this->user->cek_login("instructor",$where)->num_rows() > 0){

                $data_session = array(
                    'nama' => $username,
                    'status' => "login"
                );

                $this->session->set_userdata($data_session);

                redirect(base_url("instructor"));
            }else if ($this->user->cek_login("student",$where)->num_rows() > 0){

                $data_session = array(
                    'nama' => $username,
                    'status' => "login"
                );

                $this->session->set_userdata($data_session);

                redirect(base_url("student"));
            }
            else{
                echo "<script> alert(\"Password Salah\");
                </script>";
                redirect(base_url('login'));
            }
        }

        function logout()
        {
            $this->session->sess_destroy();
            redirect(base_url('home'));
        }
    }