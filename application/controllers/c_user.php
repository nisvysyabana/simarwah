<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_user extends CI_Controller
{
     function __construct(){
        parent::__construct();
        $this->load->model('M_data');
        // if($this->session->userdata('status') != "login"){
        //     redirect(base_url("login"));
        // }
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


    public function ChangePassword()
    {
        $data['title'] = 'Ubah Password';
        $this->load->view('templates/header', $data);
        $this->load->view('user/ubahpassword');
        $this->load->view('templates/sidebaruser');
        $this->load->view('templates/footer');

    }

    public function save_multiple_ormawa()
    {
        $nm_himp = $_POST['nm_himp'];
        $tentang_himp = $_POST['tentang_himp'];
        $visi_himp = $_POST['visi_himp'];
        $misi_himp = $_POST['misi_himp'];
        $ketua_himp = $_POST['ketua_himp'];
        $wakil_himp = $_POST['wakil_himp'];
        $bendahara_himp = $_POST['bendahara_himp'];
        $sekretaris_himp = $_POST['sekretaris_himp'];
        $kode_himp = "HIMATIF";

        //save bidang

        $nm_bidang = $_POST['nm_bidang'];
        $nm_ketua = $_POST['ketua_bidang'];

        //save anggota

        $nm_anggota = $_POST['nm_anggota'];

        $himpunan = array(
            'nm_himp' => $nm_himp,
            'tentang_himp' => $tentang_himp,
            'visi_himp' => $visi_himp,
            'misi_himp' => $misi_himp,
            'ketua_himp' => $ketua_himp,
            'wakil_himp' => $wakil_himp,
            'sekretaris_himp' => $sekretaris_himp,
            'bendahara_himp' => $bendahara_himp,
            'kode_himp' => "HIMATIF"
        );

        $bidang = array();
        $index = 0;
        $index_2 = 0;
        foreach($nm_bidang as $bid){
            array_push($bidang, array(
                'nm_bidang' => $bid,
                'ketua_bidang' => $nm_ketua[$index],
                'kode_bidang' => "PAO",   
            ));
            $index++;
        }
        // foreach ($nm_anggota as $agt){
        //         array_push($anggota, array(
        //             'nm_anggota' => $nm_anggota[$index_2],
        //             'kode_himp' => "HIMATIF",
        //             'kode_bidang' => "kode_bidang"
        //         ));
        //         $index_2++;
        //     }

        $datahimpunan = $this->M_data->save_himpunan($himpunan);
        $bidang = $this->M_data->save_bidang($bidang);
        // $anggota = $this->M_data->save_anggota($anggota);
    if($bidang && $datahimpunan){ // Jika sukses
      echo "<script>alert('Data berhasil disimpan');window.location = '".base_url('c_user/index')."';</script>";
    }else{ // Jika gagal
      echo "<script>alert('Data gagal disimpan');window.location = '".base_url('c_user/index')."';</script>";
    }
    }



}