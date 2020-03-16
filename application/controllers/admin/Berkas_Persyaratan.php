<?php

class Berkas_Persyaratan extends CI_Controller {
	public function _construct()
	{
		parent::_construct();
	}
	
	public function BerkasPSG()
	{
		//load view admin/overview.php
		$this->load->view("admin/Berkas/admin_BerkasPSG");
	}
	public function BerkasPKL()
	{
		//load view admin/overview.php
		$this->load->view("admin/Berkas/admin_BerkasPKL");
	}
	public function PersyaratanPSG()
	{
		//load view admin/overview.php
		$this->load->view("admin/Persyaratan/admin_PersyaratanPSG");
	}
	public function PersyaratanPKL()
	{
		//load view admin/overview.php
		$this->load->view("admin/Persyaratan/admin_PersyaratanPKL");
	}
	public function PersyaratanPSG_Ubah()
	{
		//load view admin/overview.php
		$this->load->view("admin/Persyaratan/admin_PersyaratanPSGUbah");
	}
	public function PersyaratanPSG_Tambah()
	{
		//load view admin/overview.php
		$this->load->view("admin/Persyaratan/admin_PersyaratanPSGTambah");
	}
	public function PersyaratanPKL_Ubah()
	{
		//load view admin/overview.php
		$this->load->view("admin/Persyaratan/admin_PersyaratanPKLUbah");
	}
	public function PersyaratanPKL_Tambah()
	{
		//load view admin/overview.php
		$this->load->view("admin/Persyaratan/admin_PersyaratanPKLTambah");
	}
}