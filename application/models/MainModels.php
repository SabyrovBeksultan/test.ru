<?php
class MainModels extends CI_Model{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }

    //========================= Authors ==========================//
    public function get_authors()
    {
        $select = $this->db->get('authors');
        $authors = $select->result();
        return $authors;
    }

//========================= CATALOG ONE ==========================//
    public function get_cat_one($id_cat)
    {
        $this->db->where('id_author', $id_cat);
        $select = $this->db->get('books');
        $cat_one = $select->result();
        return $cat_one;
    }


}
