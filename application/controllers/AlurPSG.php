<?php

class AlurPSG extends CI_Controller {
	public function _construct()
	{
		parent::_construct();
	}
	
	public function index()
	{
		$this->load->view("psg/v_Alur");
		
	}
	
	public function kp()
	{
		$this->load->view("kp/v_Alur");
		
	}
}