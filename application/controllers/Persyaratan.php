<?php

class Persyaratan extends CI_Controller {
	public function _construct()
	{
		parent::_construct();
	}
	
	public function index()
	{
		$this->load->view("psg/v_Persyaratan");
		
	}
	public function kp()
	{
		$this->load->view("kp/v_Persyaratan");
		
	}
	
}