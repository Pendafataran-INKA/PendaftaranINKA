<?php

class admin_PersyaratanPKL extends CI_Controller {
	public function _construct()
	{
		parent::_construct();
	}
	
	public function index()
	{
		//load view admin/overview.php
		$this->load->view("admin/PKL/admin_PersyaratanPKL");
	}
}