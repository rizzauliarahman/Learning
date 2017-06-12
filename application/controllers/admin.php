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
        $this->load->model('course');
        $this->load->model('kategori');
        
        if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }
    }

    function index(){
        $this->load->helper('url');
        $this->load->view('admin');
        
    }

    function get_all_user($table){
        return $this->user->get_all($table);
    }

    function delete_user($table, $id){
        $identifier = $table.'_id';
        $where = array($identifier => $id);

        $this->user->delete_user($table, $where);
    }

    function get_user($table, $id){
        $identifier = $table.'_id';
        $where = array($identifier => $id);

        return $this->user->get_user($table, $where);
    }

    function get_kategori(){
        $query = $this->kategori->get_all_kategori();
        $row = $query->result();

        return $row;
    }

    function insert_kategori(){
        $nama = $this->input->post('nama');

        $data = array('kategori_name' => $nama);
        $this->kategori->insert_kategori($data);
    }

    function delete_kategori($id){
        $where = array('kategori_id' => $id);

        $this->kategori->delete_kategori($where);
    }

}