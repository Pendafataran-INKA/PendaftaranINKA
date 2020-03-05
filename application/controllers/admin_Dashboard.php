<?php

class admin_Dashboard extends CI_Controller {
	public function _construct()
	{
		parent::_construct();
	}
	
	public function index()
	{
		//load view admin/overview.php
		$this->load->view("admin/admin_Dashboard");
	}
}