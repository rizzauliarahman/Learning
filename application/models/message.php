<?php

/**
 * Created by PhpStorm.
 * User: rizzauliarahman
 * Date: 5/31/2017
 * Time: 3:11 PM
 */
class Message extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function insert_message($data)
    {
        $this->db->insert('forum_msg', $data);
    }

    function delete_message($where)
    {
        $this->db->delete('forum_msg', $where);
    }

    function update_message($data, $where)
    {
        $this->db->set($data);
        $this->db->where($where);
        $this->db->update('forum_msg', $data);
    }

    function get_message($where)
    {
        $query = $this->db->get_where('forum_msg', $where);
        $row = $query->row();
        return $row;
    }

}