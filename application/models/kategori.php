<?php

/**
 * Created by PhpStorm.
 * User: rizzauliarahman
 * Date: 5/31/2017
 * Time: 3:59 PM
 */
class Kategori extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function insert_kategori($data)
    {
        $this->db->insert('kategori', $data);
    }

    function delete_kategori($where)
    {
        $this->db->delete('kategori', $where);
    }

    function update_kategori($data, $where)
    {
        $this->db->set($data);
        $this->db->where($where);
        $this->db->update('kategori', $where);
    }

    function get_kategori($where)
    {
        $query = $this->db->get_where('kategori', $where);
        $row = $query->row();
        return $row;
    }

    function get_all_kategori(){
        return $this->db->get('kategori');
    }

}