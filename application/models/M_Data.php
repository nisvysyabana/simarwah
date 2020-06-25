<?php 

class M_data extends CI_Model{
	

	function cek_login($table,$where){
		return $this->db->get_where($table,$where);
	} 
	function cek_datahimp($where){
		$query =  $this->db->query('SELECT * FROM himpunan WHERE kode_himp = "'.$where.'"');
		// print_r($query);
		// exit();
		return $query;
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

	//view
	function tampil_anggota($value){
		$query =  $this->db->query('SELECT * FROM anggota WHERE kode_himp = "'.$value.'"');
		return $query;
	}

	function tampil_bidang($value){
		$query =  $this->db->query('SELECT * FROM bidang WHERE kode_himp = "'.$value.'"');
		return $query;
	}

	function tampil_himpunan($value){
		$query =  $this->db->query('SELECT * FROM himpunan WHERE kode_himp = "'.$value.'"');
		return $query;
	}

	function update_himpunan($data,$kode_himp){
    $this->db->where('kode_himp', $kode_himp);
    $this->db->update('himpunan',$data);
    return true;
  }
	

}