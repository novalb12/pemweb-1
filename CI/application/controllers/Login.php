<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_controller {
    function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
    
    public function index(){
        // get user input
        $this->load->view('templates/header-login');
        $this->load->view('loginpage');
        $this->load->view('templates/footer');
    }
}

?>