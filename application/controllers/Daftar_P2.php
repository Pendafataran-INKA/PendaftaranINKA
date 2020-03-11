<?php

class Daftar_P2 extends CI_Controller {
	public function _construct()
	{
		parent::_construct();
	}
	
	public function index()
	{
		$this->load->view("v_Daftar_P2");
		
	}
	
}