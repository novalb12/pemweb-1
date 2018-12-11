<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_controller {
    function __construct(){
		parent::__construct();
        $this->load->helper('url');
        $this->load->model('m_data');
	}
    
    public function index(){
        $data['user'] = $this->m_data->tampil_data()->result();
        if($this->session->userdata('status') != "login"){
			$this->load->view('templates/header');
            $this->load->view('listpage',$data);
            $this->load->view('templates/footer');
		} else {
            $this->load->view('templates/header-in');
            $this->load->view('listpage',$data);
            $this->load->view('templates/footer');
        }
        // get user input
    }

    function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'user');
		redirect('Daftar/index');
    }
    
    function edit($id){
        $where = array('id' => $id);
        $data['user'] = $this->m_data->edit_data($where,'user')->result();
        if($this->session->userdata('status') != "login"){
			$this->load->view('templates/header');
            $this->load->view('editpage',$data);
            $this->load->view('templates/footer');
		} else {
            $this->load->view('templates/header-in');
            $this->load->view('editpage',$data);
            $this->load->view('templates/footer');
        }
    }

    function update(){
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
     
        $data = array(
			'username' => $username,
			'password' => md5($password),
			'nama' => $nama,
			'tgl_lahir' => $tgl_lahir
			);
		
        $where = array(
            'id' => $id
        );

        $this->m_data->update_data($where,$data,'user');
        redirect('Daftar/index');
    }
}

?>