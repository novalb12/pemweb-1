<?php 
 
class M_data extends CI_Model{
	public function __construct(){
		$this->load->database();
	}

	function tampil_data(){
		return $this->db->get('user');
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function data($number,$offset){
		return $query = $this->db->get('lagu',$number,$offset)->result();		
	}

	function jumlah_data_lagu(){
		return $this->db->get('lagu')->num_rows();
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}