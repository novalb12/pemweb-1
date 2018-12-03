<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_controller {
    function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
    
    public function index(){
        // get user input
        $this->load->view('templates/header');
        $this->load->view('templates/footer');
    }
}

?>