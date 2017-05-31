<?php

/**
 * Created by PhpStorm.
 * User: rizzauliarahman
 * Date: 5/31/2017
 * Time: 4:07 PM
 */
class Task extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function insert_task($data)
    {
        $this->db->insert('task', $data);
    }

    function delete_task($where)
    {
        $this->db->delete('task', $where);
    }

    function update_task($data, $where)
    {
        $this->db->set($data);
        $this->db->where($where);
        $this->db->update('task', $data);
    }

    function get_task($where)
    {
        $query = $this->db->get_where($where);
        $row = $query->row();
        return $row;
    }

}