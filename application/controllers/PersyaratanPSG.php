<?php

class PersyaratanPSG extends CI_Controller {
	public function _construct()
	{
		parent::_construct();
	}
	
	public function index()
	{
		$this->load->view("psg/v_PersyaratanUmum");
		
	}
	
}