<?php

/**
 * Created by PhpStorm.
 * User: rizzauliarahman
 * Date: 5/31/2017
 * Time: 10:58 AM
 */
class Course extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function cek_course($where){
        return $this->db->get_where('course', $where);
    }

    function insert_course($data){
        $this->db->insert('course', $data);
    }

    function delete_course($where){
        $this->db->delete('course', $where);
    }

    function update_course($data, $where){
        $this->db->set($data);
        $this->db->where($where);
        $this->db->update('course', $data);
    }

    function get_course($where){
        $query = $this->db->get_where('course', $where);
        $row = $query->row();
    }

}