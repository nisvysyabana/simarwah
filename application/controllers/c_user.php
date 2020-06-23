<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_user extends CI_Controller
{
     function __construct(){
        parent::__construct();	
        $this->load->model('M_data');
        $data['user'] = $this->db->get_where('user', ['username'=> $this->session->userdata('user')])->row_array();
    if($this->session->userdata('status')=="login")
    {
        redirect(base_url('c_home/login'));
    }
    }
    
    public function index()
    {
        $data['title'] = 'Edit Profile';
        $this->load->view('templates/header', $data);
        $this->load->view('user/index');
        $this->load->view('templates/sidebaruser');
        $this->load->view('templates/footer');
    }
    public function Pagu_Anggaran()
    {
        $data['title'] = 'Pagu Anggaran';
        $this->load->view('templates/header', $data);
        $this->load->view('user/pengajuanuang');
        $this->load->view('templates/sidebaruser');
        $this->load->view('templates/footer');
    }
    public function Verifikasi_Data()
    {
        $data['title'] = 'Verifikasi Pencairan Dana';
        $this->load->view('templates/header', $data);
        $this->load->view('user/dicekadmindulu');
        $this->load->view('templates/sidebaruser');
        $this->load->view('templates/footer');
    }
    public function Pinjam_Aula()
    {
        $data['title'] = 'Peminjaman Aula SC';
        $this->load->view('templates/header', $data);
        $this->load->view('user/pinjamaula');
        $this->load->view('templates/sidebaruser');
        $this->load->view('templates/footer');
    }
    public function Guide_HMJ()
    {
        $data['title'] = 'Cara menggunakan Website SIMARWAH';
        $this->load->view('templates/header', $data);
        $this->load->view('user/userguide');
        $this->load->view('templates/sidebaruser');
        $this->load->view('templates/footer');
    }
    public function Keluhan()
    {
        $data['title'] = 'Keluhan';
        $this->load->view('templates/header', $data);
        $this->load->view('user/keluhan');
        $this->load->view('templates/sidebaruser');
        $this->load->view('templates/footer');
    }
}
