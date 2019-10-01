<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lirik extends CI_controller {
    function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

    public function sdj(){
        if($this->session->userdata('status') != "login"){
			$this->load->view('templates/header');
            $this->load->view('sdj');
            $this->load->view('templates/footer');
		} else {
            $this->load->view('templates/header-in');
            $this->load->view('sdj');
            $this->load->view('templates/footer');
        }
        // get user input
        
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
public function KK(){
    if($this->session->userdata('status') != "login"){
        $this->load->view('templates/header');
        $this->load->view('KK');
        $this->load->view('templates/footer');
    } else {
        $this->load->view('templates/header-in');
        $this->load->view('KK');
        $this->load->view('templates/footer');
    }
    // get user input
    
}
public function LOMY(){
    if($this->session->userdata('status') != "login"){
        $this->load->view('templates/header');
        $this->load->view('LOMY');
        $this->load->view('templates/footer');
    } else {
        $this->load->view('templates/header-in');
        $this->load->view('LOMY');
        $this->load->view('templates/footer');
    }
  }
  public function GLY(){
    if($this->session->userdata('status') != "login"){
        $this->load->view('templates/header');
        $this->load->view('GLY');
        $this->load->view('templates/footer');
    } else {
        $this->load->view('templates/header-in');
        $this->load->view('GLY');
        $this->load->view('templates/footer');
    }
  }
  public function YATR(){
    if($this->session->userdata('status') != "login"){
        $this->load->view('templates/header');
        $this->load->view('YATR');
        $this->load->view('templates/footer');
    } else {
        $this->load->view('templates/header-in');
        $this->load->view('YATR');
        $this->load->view('templates/footer');
    }
  }
}
?>