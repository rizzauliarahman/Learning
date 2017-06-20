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
        $this->load->model('task');
        $this->load->model('answer');

        if (($this->session->userdata('status') != "login") or ($this->session->userdata('akun') != "instructor")) {
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

    function delete_course($id){
        $where = array('course_id' => $id);

        $this->course->delete_course($where);
    }

    function get_course($id){
        $where = array('course_id' => $id);

        $result = $this->course->get_course($where);
        return $result;
    }

    function edit_course($id){
        $where = array('course_id' => $id);

        $new_title = $this->input->post('title');
        $new_price = $this->input->post('price');

        $data = array('Title' => $new_title, 'Price' => $new_price);

        $this->course->update_course($data, $where);
    }

    function insert_course($kategori_id){
        $data = array(
            'Title' => $this->input->post('judul'),
            'Price' => $this->input->post('harga'),
            'Date_created' => date("Y-m-d"),
            'Instructor_ID' => $this->session->userdata('id'),
            'Kategori_ID' => $kategori_id
        );

        $this->course->insert_course($data);
    }

    function upload_chapter($course_id, $chapter_no)
    {
        if ($this->session->userdata('akun') != "admin") {
            $dir = $this->session->userdata('id') . '/' . $course_id;
        }

        $path = 'assets/files/' . $dir . '/';

        if (!is_dir($path)) {
            mkdir($path, 0755, TRUE);
        }

        $config['upload_path'] = FCPATH . $path;
        $config['allowed_types'] = 'pdf|doc|docx';
        $config['file_name'] = 'Chapter ' . $chapter_no;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        $this->upload->do_upload('file');
        echo $this->upload->display_errors();
        $file = $this->upload->data();
        $data_2 = array(
            'Course_ID' => $course_id,
            'Link' => $file['full_path']
        );

        foreach ($file as $item => $value) {
            echo $item . ' : ' . $value . '<br>';
        }

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

    function upload_task($course_id){
        if ($this->session->userdata('akun') != "admin") {
            $dir = $this->session->userdata('id') . '/' . $course_id;
        }

        $path = 'assets/files/' . $dir . '/';

        if (!is_dir($path)) {
            mkdir($path, 0755, TRUE);
        }

        $config['upload_path'] = FCPATH . $path;
        $config['allowed_types'] = 'pdf|doc|docx';
        $config['file_name'] = 'Task';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        $this->upload->do_upload('file');
        echo $this->upload->display_errors();
        $file = $this->upload->data();
        $data_2 = array(
            'Course_ID' => $course_id,
            'Link' => $file['full_path']
        );

        foreach ($file as $item => $value) {
            echo $item . ' : ' . $value . '<br>';
        }

        $this->task->insert_task($data_2);
    }

    function upload_answer($course_id, $task_id){
        if ($this->session->userdata('akun') != "admin") {
            $dir = $this->session->userdata('id') . '/' . $course_id;
        }

        $path = 'assets/files/' . $dir . '/';

        if (!is_dir($path)) {
            mkdir($path, 0755, TRUE);
        }

        $config['upload_path'] = FCPATH . $path;
        $config['allowed_types'] = 'pdf|doc|docx';
        $config['file_name'] = 'Answer';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        $this->upload->do_upload('file');
        echo $this->upload->display_errors();
        $file = $this->upload->data();
        $data = array(
            'Link' => $file['full_path']
        );

        foreach ($file as $item => $value) {
            echo $item . ' : ' . $value . '<br>';
        }

        $answer_id = $this->answer->insert_answer($data);

        $data_2 = array('Answer_ID' => $answer_id);

        $where = array('Task_ID' => $task_id);

        $this->task->update_task($data, $where);
    }

}