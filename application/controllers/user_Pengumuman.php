<?php

class user_pengumuman extends CI_Controller {
	public function _construct()
	{
		parent::_construct();
	}
	
	public function index()
	{
		$this->load->view("user_Pengumuman");
		
	}
	
}