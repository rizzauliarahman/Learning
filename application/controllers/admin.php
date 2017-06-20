<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 29/05/2017
 * Time: 10:21
 */
class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('user');
        $this->load->model('course');
        $this->load->model('kategori');
        $this->load->model('chapter');

        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
    }

    function index()
    {
        if ($this->session->userdata("nama") != "") {
            $this->load->view('admin');
        } else {
            redirect('home');
        }

    }

    function get_all_user($table)
    {
        return $this->user->get_all($table);
    }

    function delete_user($table, $id)
    {
        $identifier = $table . '_id';
        $where = array($identifier => $id);

        $this->user->delete_user($table, $where);
    }

    function get_user($table, $id)
    {
        $identifier = $table . '_id';
        $where = array($identifier => $id);

        return $this->user->get_user($table, $where);
    }

    function get_list_kategori()
    {
        $query = $this->kategori->get_all_kategori();

        return $query;
    }

    function insert_kategori()
    {
        $nama = $this->input->post('nama');

        $data = array('kategori_name' => $nama);
        $this->kategori->insert_kategori($data);
    }

    function delete_kategori($id)
    {
        $where = array('kategori_id' => $id);

        $this->kategori->delete_kategori($where);
    }

    function update_kategori($id)
    {
        $where = array('kategori_id' => $id);
        $data = array('kategori_id' => $id, 'kategori_name' => $this->input->post('nama'));

        $this->kategori->update_kategori($data, $where);
    }

    function get_kategori($name)
    {
        $where = array('kategori_name' => $name);

        $row = $this->kategori->get_kategori($where);
        return $row;
    }

    function get_list_course()
    {
        $kategori = $this->kategori->get_all_kategori();
        $course = array();

        foreach ($kategori as $k) {
            $where_kategori = array('kategori_id' => $k->kategori_id);
            $query = $this->course->get_kategori_course($where_kategori);

            foreach ($query as $q) {
                $where_course = array('course_id' => $q->course_id);
                $course_query = $this->course->get_course($where_course);

                array_push($course, $course_query);
            }
        }

        return course;
    }

    function get_instructor_course($instructor_id)
    {
        $where = array('instructor_id' => $instructor_id);
        $result = $this->course->get_instructor_course($where);

        return $result;
    }

    function get_kategori_course($kategori_id)
    {
        $where_kategori = array('kategori_id' => $kategori_id);
        $course = array();

        $result = $this->course->get_category_course($where_kategori);

        foreach ($result as $r) {
            $where_course = array('course_id' => $r->course_id);

            $row = $this->coourse->get_course($where_course);
            array_push($course, $row);
        }

        return course;
    }

    function insert_pelajaran()
    {
        if ($this->session->userdata('akun') != "admin") {
            $dir = $this->session->userdata('id');
        } else {
            
        }

        $path = 'assets/files/' .

        $config['upload_path'] = FCPATH . 'assets/files/';
        $config['allowed_types'] = 'pdf|doc|docx';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        $data = array(
            'Title' => $this->input->post('judul'),
            'Price' => $this->input->post('harga'),
            'Date_created' => date("Y-m-d"),
            'Instructor_ID' => 1100000,
            'Kategori_ID' => 2800000
        );

        $this->upload->do_upload('file');
        echo $this->upload->display_errors();
        $file = $this->upload->data();
        $data_2 = array(
            'Course_ID' => 2227777,
            'Link' => $file['full_path']
        );

        foreach ($file as $item => $value) {
            echo $item . ' : ' . $value . '<br>';
        }

        $result = $this->course->insert_course($data);
        $result_2 = $this->chapter->insert_chapter($data_2);

        /* if ($result && $result_2){
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