<?php
class base_produit extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function get_all_produit()
    {
        $query = $this->db->get('produit');
        return $query->result();
    }
}
?>