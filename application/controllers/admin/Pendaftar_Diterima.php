<?php

class Pendaftar_Diterima extends CI_Controller {
	public function _construct()
	{
		parent::_construct();
	}
	
	public function PendaftarPSG()
	{
		//load view admin/overview.php
		$this->load->view("admin/Pendaftar/admin_PendaftarPSG");
	}
	public function PendaftarPKL()
	{
		//load view admin/overview.php
		$this->load->view("admin/Pendaftar/admin_PendaftarPKL");
	}
	public function DiterimaPSG()
	{
		//load view admin/overview.php
		$this->load->view("admin/Diterima/admin_DiterimaPSG");
	}
	public function DiterimaPKL()
	{
		//load view admin/overview.php
		$this->load->view("admin/Diterima/admin_DIterimaPKL");
	}
	public function VerifikasiPSG()
	{
		//load view admin/overview.php
		$this->load->view("admin/Pendaftar/admin_VerifikasiPSG");
	}
	public function VerifikasiPKL()
	{
		//load view admin/overview.php
		$this->load->view("admin/Pendaftar/admin_VerifikasiPKL");
	}
}