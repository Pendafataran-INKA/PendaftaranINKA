<?php

class Dokumen_Admin extends CI_Controller {
	public function _construct()
	{
		parent::_construct();
	}
	
	public function Pernyataan()
	{
		//load view admin/overview.php
		$this->load->view("admin/Dokumen_Admin/admin_Pernyataan");
	}
	public function Tambah_Admin()
	{
		//load view admin/overview.php
		$this->load->view("admin/Dokumen_Admin/admin_TambahAdmin");
	}
	public function Penempatan()
	{
		//load view admin/overview.php
		$this->load->view("admin/Dokumen_Admin/admin_Penempatan");
	}
	public function Pernyataan_Ubah()
	{
		//load view admin/overview.php
		$this->load->view("admin/Dokumen_Admin/admin_PernyataanUbah");
	}
	public function Penempatan_Ubah()
	{
		//load view admin/overview.php
		$this->load->view("admin/Dokumen_Admin/admin_PenempatanUbah");
	}
	public function Penempatan_Tambah()
	{
		//load view admin/overview.php
		$this->load->view("admin/Dokumen_Admin/admin_PenempatanTambah");
	}
	public function Tambah_Admin_Tambah()
	{
		//load view admin/overview.php
		$this->load->view("admin/Dokumen_Admin/admin_TambahAdminTambah");
	}
}