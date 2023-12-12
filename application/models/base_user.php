<?php
class base_produit extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function get_all_users()
    {
        $query = $this->db->get('users');
        return $query->result
    }

?>