<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lirikzn extends CI_controller {
    function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

    public function zn(){
        if($this->session->userdata('status') != "login"){
			$this->load->view('templates/header');
            $this->load->view('zn');
            $this->load->view('templates/footer');
		} else {
            $this->load->view('templates/header-in');
            $this->load->view('zn');
            $this->load->view('templates/footer');
        }
        // get user input
        
    }
}

?>