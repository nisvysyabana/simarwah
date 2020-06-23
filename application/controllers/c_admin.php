<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_admin extends CI_Controller
{
    function __construct(){
        parent::__construct();	
            $this->load->model('M_data');
            
            $data['user'] = $this->db->get_where('user', ['username'=> $this->session->userdata('user')])->row_array();
            if($this->session->userdata('status') == "login"){
                redirect('c_home/login');
            }
	}

    public function index()
    {
            $data['title'] = 'Dashboard';
            $this->load->view('templates/headeradm', $data);
            $this->load->view('templates/sidebaradm', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/index', $data);
            $this->load->view('templates/footeradm');
    }
    public function Edit_Pagu()
    {
        $data['title'] = 'Edit Pagu Anggaran';
        $this->load->view('templates/headeradm', $data);
        $this->load->view('templates/sidebaradm', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/editpagu', $data);
        $this->load->view('templates/footeradm');
    }
    public function Data_Pagu()
    {
        $data['title'] = 'Data Pagu Anggaran';
        $this->load->view('templates/headeradm', $data);
        $this->load->view('templates/sidebaradm', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/datapagu', $data);
        $this->load->view('templates/footeradm');
    }
    public function Cek_Pagu()
    {
        $data['title'] = 'Cek Pengajuan';
        $this->load->view('templates/headeradm', $data);
        $this->load->view('templates/sidebaradm', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/cekpagu', $data);
        $this->load->view('templates/footeradm');
    }
    public function Laporan_Kegiatan()
    {
        $data['title'] = 'Cek Laporan Kegiatan';
        $this->load->view('templates/headeradm', $data);
        $this->load->view('templates/sidebaradm', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/laporan', $data);
        $this->load->view('templates/footeradm');
    }
    public function Cek_Surat()
    {
        $data['title'] = 'Cek Surat Izin';
        $this->load->view('templates/headeradm', $data);
        $this->load->view('templates/sidebaradm', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/suratizin', $data);
        $this->load->view('templates/footeradm');
    }
    public function Data_Pinjam()
    {
        $data['title'] = 'Data Peminjaman';
        $this->load->view('templates/headeradm', $data);
        $this->load->view('templates/sidebaradm', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/datapinjam', $data);
        $this->load->view('templates/footeradm');
    }
    public function Data_Ormawa()
    {
        $data['title'] = 'Data Ormawa';
        $this->load->view('templates/headeradm', $data);
        $this->load->view('templates/sidebaradm', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/dataormawa', $data);
        $this->load->view('templates/footeradm');
    }
    public function Keluhan()
    {
        $data['title'] = 'Keluhan';
        $this->load->view('templates/headeradm', $data);
        $this->load->view('templates/sidebaradm', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/keluhan', $data);
        $this->load->view('templates/footeradm');
    }
    public function Edit_Profil()
    {
        $data['title'] = 'Edit Profil';
        $this->load->view('templates/headeradm', $data);
        $this->load->view('templates/sidebaradm', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/editprofil', $data);
        $this->load->view('templates/footeradm');
    }
    public function Profil()
    {
        $data['title'] = 'Profil Admin';
        $this->load->view('templates/headeradm', $data);
        $this->load->view('templates/sidebaradm', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/profil', $data);
        $this->load->view('templates/footeradm');
    }
    public function Password()
    {
        $data['title'] = 'Edit Password';
        $this->load->view('templates/headeradm', $data);
        $this->load->view('templates/sidebaradm', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/editpass', $data);
        $this->load->view('templates/footeradm');
    }
    public function Cek_Data_Pengajuan(){
        $data['title'] = 'Cek Data';
        $this->load->view('templates/headeradm', $data);
        $this->load->view('templates/sidebaradm', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/cekdatapagu', $data);
        $this->load->view('templates/footeradm');
    }
}
