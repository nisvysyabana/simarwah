<?php 

class M_data extends CI_Model{
	

	function cek_login($table,$where){
		return $this->db->get_where($table,$where);
	} 
	function tampil_data(){
		return $this->db->get('user');
	}

	function save_himpunan($data){
		return $this->db->insert('himpunan',$data);
	}
	function save_bidang($data){
		return $this->db->insert_batch('bidang',$data);
	}
	function save_anggota($data){
		return $this->db->insert_batch('anggota',$data);
	}

}