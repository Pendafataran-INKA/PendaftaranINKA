<?php

class PSG_Daftar extends CI_Controller {
	public function _construct()
	{
		parent::_construct();
	}
	
	public function index()
	{
		$this->load->view("psg/v_Daftar");
		
	}

	
}