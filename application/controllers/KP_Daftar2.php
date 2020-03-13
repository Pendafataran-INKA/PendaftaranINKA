<?php

class KP_Daftar2 extends CI_Controller {
	public function _construct()
	{
		parent::_construct();
	}
	
	public function index()
	{
		$this->load->view("kp/v_Daftar2");
		
	}

	
}