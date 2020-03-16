<?php

class Sekolah extends CI_Controller {
	public function _construct()
	{
		parent::_construct();
	}
	
	public function index()
	{
		//load view admin/overview.php
		$this->load->view("admin/Sekolah/admin_Sekolah");
	}
	public function JurusanPSG()
	{
		//load view admin/overview.php
		$this->load->view("admin/Sekolah/admin_JurusanPSG");
	}
	public function Jurusan_Ubah()
	{
		//load view admin/overview.php
		$this->load->view("admin/Sekolah/admin_JurusanPSGUbah");
	}
	public function Sekolah_Ubah()
	{
		//load view admin/overview.php
		$this->load->view("admin/Sekolah/admin_SekolahUbah");
	}
	public function Sekolah_Tambah()
	{
		//load view admin/overview.php
		$this->load->view("admin/Sekolah/admin_SekolahTambah");
	}
	public function Jurusan_Tambah()
	{
		//load view admin/overview.php
		$this->load->view("admin/Sekolah/admin_JurusanPSGTambah");
	}
	
}