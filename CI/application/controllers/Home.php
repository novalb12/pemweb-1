<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_controller {
    function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
    
    public function index(){
        if($this->session->userdata('status') != "login"){
			$this->load->view('templates/header');
            $this->load->view('homepage');
            $this->load->view('templates/footer');
		} else {
            $this->load->view('templates/header-in');
            $this->load->view('homepage');
            $this->load->view('templates/footer');
        }
        // get user input
        
    }
}

?>