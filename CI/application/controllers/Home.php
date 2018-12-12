<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_controller {
    function __construct(){
		parent::__construct();
        $this->load->helper('url');
        $this->load->model('m_data');
	}
    
    public function index(){
        $this->load->database();
		$jumlah_data_lagu = $this->m_data->jumlah_data_lagu();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'Home/index/';
		$config['total_rows'] = $jumlah_data_lagu;
		$config['per_page'] = 4;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);		
		$data['lagu'] = $this->m_data->data($config['per_page'],$from);
        if($this->session->userdata('status') != "login"){
			$this->load->view('templates/header');
            $this->load->view('homepage',$data);
            $this->load->view('templates/footer');
		} else {
            $this->load->view('templates/header-in');
            $this->load->view('homepage',$data);
            $this->load->view('templates/footer');
        }
        // get user input
        
    }

    function edit($id){
        $where = array('id_lagu' => $id);
        $data['lagu'] = $this->m_data->edit_data($where,'lagu')->result();
        if($this->session->userdata('status') != "login"){
			$this->load->view('templates/header');
            $this->load->view('lirikpage',$data);
            $this->load->view('templates/footer');
		} else {
            $this->load->view('templates/header-in');
            $this->load->view('lirikpage',$data);
            $this->load->view('templates/footer');
        }
    }
}

?>