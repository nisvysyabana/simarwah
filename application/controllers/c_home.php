<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_home extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('home');
	}
	public function demau()
	{
		$this->load->view('demau');
	}
	public function fakultas()
	{
		$this->load->view('fakultas');
	}
	public function himpunan()
	{
		$this->load->view('himpunan');
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function ormawa()
	{
		$this->load->view('ormawa');
	}
	public function semaun()
	{
		$this->load->view('semaun');
	}
	public function semuaukm()
	{
		$this->load->view('semuaukm');
	}
	public function ukmaja()
	{
		$this->load->view('ukmaja');
	}
	public function tampildata()
	{
		$this->load->view('tampildata');
	}
}
