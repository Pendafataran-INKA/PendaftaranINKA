<?php

class Periode_Kuota extends CI_Controller {
	public function _construct()
	{
		parent::_construct();
	}
	
	public function Master_PeriodePSG()
	{
		//load view admin/overview.php
		$this->load->view("admin/Master_Periode/admin_MasterPeriodePSG");
	}
	public function Master_PeriodePKL()
	{
		//load view admin/overview.php
		$this->load->view("admin/Master_Periode/admin_MasterPeriodePKL");
	}
	public function KuotaPSG()
	{
		//load view admin/overview.php
		$this->load->view("admin/Kuota/admin_KuotaPSG");
	}
	public function KuotaPKL()
	{
		//load view admin/overview.php
		$this->load->view("admin/Kuota/admin_KuotaPKL");
	}
	public function PeriodePSG_Ubah()
	{
		//load view admin/overview.php
		$this->load->view("admin/Master_Periode/admin_MasterPeriodePSGUbah");
	}
	public function PeriodePSG_Tambah()
	{
		//load view admin/overview.php
		$this->load->view("admin/Master_Periode/admin_MasterPeriodePSGTambah");
	}
	public function PeriodePKL_Ubah()
	{
		//load view admin/overview.php
		$this->load->view("admin/Master_Periode/admin_MasterPeriodePKLUbah");
	}
	public function PeriodePKL_Tambah()
	{
		//load view admin/overview.php
		$this->load->view("admin/Master_Periode/admin_MasterPeriodePKLTambah");
	}
	public function KuotaPSG_Ubah()
	{
		//load view admin/overview.php
		$this->load->view("admin/Kuota/admin_KuotaPSGUbah");
	}
	public function KuotaPSG_Tambah()
	{
		//load view admin/overview.php
		$this->load->view("admin/Kuota/admin_KuotaPSGTambah");
	}
	public function KuotaPKL_Ubah()
	{
		//load view admin/overview.php
		$this->load->view("admin/Kuota/admin_KuotaPKLUbah");
	}
	public function KuotaPKL_Tambah()
	{
		//load view admin/overview.php
		$this->load->view("admin/Kuota/admin_KuotaPKLTambah");
	}
}