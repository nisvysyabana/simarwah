<?php 

class M_data extends CI_Model{
	

	function cek_login($table,$where){
		return $this->db->get_where($table,$where);
	} 
	
	function tampil_data(){
		return $this->db->get('user');
	}

  
  	public function save_batch($data){
    return $this->db->insert_batch('data_ormawa', $data);
  	}

}