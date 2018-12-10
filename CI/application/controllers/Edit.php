<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_controller {
    function __construct(){
		parent::__construct();
        $this->load->helper('url');
        $this->load->model('m_data');
	}
    
    public function index(){
        if($this->session->userdata('status') != "login"){
			$this->load->view('templates/header');
            $this->load->view('editpage');
            $this->load->view('templates/footer');
		} else {
            $this->load->view('templates/header-in');
            $this->load->view('editpage');
            $this->load->view('templates/footer');
        }
        // get user input
        
    }
    
    function edit($id){
        $where = array('id' => $id);
        $data['user'] = $this->m_data->edit_data($where,'user')->result();
        $this->load->view('v_edit',$data);
    }
}

?>