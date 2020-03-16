<?php

class Perguruan_Tinggi extends CI_Controller {
	public function _construct()
	{
		parent::_construct();
	}
	
	public function index()
	{
		//load view admin/overview.php
		$this->load->view("admin/Perguruan_Tinggi/admin_PerguruanTinggi");
	}
	public function JurusanPKL()
	{
		//load view admin/overview.php
		$this->load->view("admin/Perguruan_Tinggi/admin_JurusanPKL");
	}
	public function Perguruan_Tinggi_Tambah()
	{
		//load view admin/overview.php
		$this->load->view("admin/Perguruan_Tinggi/admin_PerguruanTinggiTambah");
	}
	public function Perguruan_Tinggi_Ubah()
	{
		//load view admin/overview.php
		$this->load->view("admin/Perguruan_Tinggi/admin_PerguruanTinggiUbah");
	}
	public function Jurusan_Ubah()
	{
		//load view admin/overview.php
		$this->load->view("admin/Perguruan_Tinggi/admin_JurusanPKLUbah");
	}
	public function Jurusan_Tambah()
	{
		//load view admin/overview.php
		$this->load->view("admin/Perguruan_Tinggi/admin_JurusanPKLTambah");
	}
}