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
        if ($this->session->userdata("nama") != ""){
            $this->load->view('admin');
        }else{
            redirect('home');
        }

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

    function insert_pelajaran(){
        $config['upload_path'] = FCPATH.'assets/files/';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        $data = array(
            'Title' => $this->input->post('judul'),
            'Price' => $this->input->post('harga'),
            'Article' => $this->input->post('article')
        );

        $this->upload->do_upload('file');
        echo $this->upload->display_errors();
        $file = $this->upload->data();
        $data_2 = array (
            'Course_ID' => ' ',
            'Link' => $file['full_path']
        );

        foreach ($file as $item => $value){
            echo $item.' : '.$value.'<br>';
        }

            $result = $this->course->insert_course($data);
           /* $result_2 = $this->chapter->insert_chapter($data_2);

            if ($result && $result_2){
                echo '<script language="javascript">alert("Artikel Berhasil Di Post")</script>';
                echo '<script language="javascript">window.location =""'.base_url('admin') ; echo ' </script>';
            }
            else {
                echo '<script language="javascript">alert("Error : Artikel Gagal Di Post")</script>';
                echo '<script language="javascript">window.location =""'.base_url('admin') ; echo ' </script>';
            }
           */

    }
}