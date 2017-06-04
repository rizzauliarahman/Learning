<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 29/05/2017
 * Time: 10:18
 */
    class User extends CI_Model{

        function __construct()
        {
            parent::__construct();
        }


        function cek_login($table, $where){
            return $this->db->get_where($table, $where);
        }

        function insert_user($table, $data)
        {
            return $this->db->insert($table, $data);
        }

        function delete_user($table, $where)
        {
            return $this->db->delete($table, $where);
        }

        function update_user($table, $where, $data)
        {
            $this->db->set($data);
            $this->db->where($where);
            $this->db->update($table, $data);
        }

        function get_student($table, $where)
        {
            $query = $this->db->get_where($table, $where);
            $row = $query->row();
            return $row;
        }

        function get_course($id)
        {
            $query = $this->db->get_where('course', 'Instructor_ID = '.$id);
            $records = $query->result();
            return $records;
        }

        function get_all($table){
            return $this->db->get($table);
        }

    }