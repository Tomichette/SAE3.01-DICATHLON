<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Page extends CI_Controller {
    public function construct(){
    parent::construct();

}
    public function produit(){
        $data['content']="produit";
        $this->load->vars($data);
        $this->load->view('template');
    }

    public function connexion(){
    $data['content']="connexion";
    $this->load->vars($data);
    $this->load->view('template');
}
}
?>