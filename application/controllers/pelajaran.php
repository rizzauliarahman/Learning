<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 14/06/2017
 * Time: 13:29
 */
class Pelajaran extends CI_Controller
{

    public $course_id;
    public $task_id;
    public $answer_id;

    public function __construct()
    {
        parent::__construct();

        $this->load->model('chapter');
        $this->load->model('course');
        $this->load->model('task');
    }

    function index(){
        if ($this->session->userdata("nama") != ""){
            $this->load->view('pelajaran');
        }else{
            redirect('home');
        }

    }

    function set_course_id($course_id){
        $this->course_id = $course_id;
    }

    function get_chapters(){
        $chapters = array();

        $where = array('Course_ID' => $this->course_id);

        $result = $this->course->get_chapter($where);

        foreach ($result as $r) {
            array_push($chapters, $r);
        }

        return $chapters;
    }

    function get_task(){
        $where = array('Course_ID' => $this->course_id);

        $row = $this->task->get_task($where);
        $this->task_id = $row->task_id;
        if ($row->answer_id != NULL){
            $this->answer_id = $row->answer_id;
        }

        return $row;
    }

    function get_answer(){
        $where = array('Answer_ID' => $this->answer_id);

        $result = $this->answer->get_answer($where);
        return $result;
    }

}