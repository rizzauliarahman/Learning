<?php

/**
 * Created by PhpStorm.
 * User: rizzauliarahman
 * Date: 5/31/2017
 * Time: 2:37 PM
 */
class Chapter extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function insert_chapter($data)
    {
        $this->db->insert('chapter', $data);
    }

    function delete_chapter($where)
    {
        $this->db->delete('chapter', $where);
    }

    function update_chapter($data, $where)
    {
        $this->db->set($data);
        $this->db->where($where);
        $this->db->update('chapter', $data);
    }

    function get_chapter($where)
    {
        $query = $this->db->get_where('chapter', $where);
        $row = $query->row();
        return $row;
    }

}