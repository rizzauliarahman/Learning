<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 29/05/2017
 * Time: 14:03
 */
class Student extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('course');
    }

    function index(){
        $this->load->view('student');
    }

    function get_course($id){
        $data = array('Student_ID' => $this->session->userdata('id'), 'Course_ID' => $id);
        $this->course->insert_student_history($data);

        $where = array('course_id' => $id);

        $result = $this->course->get_course($where);
        return $result;
    }

    function buy_course($course_id){
        $data = array('Student_ID' => $this->session->userdata('id'), 'Course_ID' => $course_id);

        return $this->course->insert_student_course($data);
    }

    function download_jawaban($instructor_id, $course_id){
        $dir = $instructor_id . '/' . $course_id;

        $filepath = 'assets/files/' . $dir . '/answer.pdf';

        $this->load->helper('download');

        force_download($filepath, NULL);
    }

    function download_task($instructor_id, $course_id){
        $dir = $instructor_id . '/' . $course_id;

        $filepath = 'assets/files/' . $dir . '/task.pdf';

        $this->load->helper('download');

        force_download($filepath, NULL);
    }

    function download_chapter($course_id, $instructor_id, $chapter_no){
        $dir = $instructor_id . '/' . $course_id ;

        $filepath = 'assets/files/' . $dir . '/Chapter ' . $chapter_no . '.pdf';

        $this->load->helper('download');

        force_download($filepath, NULL);
    }

}