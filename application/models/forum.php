<?php

/**
 * Created by PhpStorm.
 * User: rizzauliarahman
 * Date: 5/31/2017
 * Time: 2:43 PM
 */
class Forum extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function insert_forum($data)
    {
        $this->db->insert('forum', $data);
    }

    function delete_forum($where)
    {
        $this->db->delete('forum', $where);
    }

    function update_forum($data, $where)
    {
        $this->db->set($data);
        $this->db->where($where);
        $this->db->update('forum', $data);
    }

    function get_forum($where)
    {
        $query = $this->db->get_where('forum', $where);
        $row = $query->row();
        return $row;
    }

    function get_forum_message($where)
    {
        $query = $this->db->get_where('forum_msg', $where);
        $records = $query->result();
        return $records;
    }

}