<?php

/**
 * Created by PhpStorm.
 * User: rizzauliarahman
 * Date: 5/31/2017
 * Time: 2:18 PM
 */
class Answer extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function insert_answer($data)
    {
        $this->db->insert('answer', $data);
    }

    function delete_answer($where)
    {
        $this->db->delete('answer', $where);
    }

    function update_answer($data, $where)
    {
        $this->db->set($data);
        $this->db->where($where);
        $this->db->update('answer', $data);
    }

    function get_answer($where)
    {
        $query = $this->db->get_where('answer', $where);
        $row = $query->row();
        return $row;
    }

}