<?php 
 
class M_data extends CI_Model{
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
}