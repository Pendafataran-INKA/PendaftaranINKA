<?php

class DaftarAcc extends CI_Controller {
	public function _construct()
	{
		parent::_construct();
	}
	
	public function index()
	{
		$this->load->view("v_Daftar");
		
	}
	public function daftar2()
	{
		$this->load->view("v_Daftar_P2");
		
	}
	public function daftar3()
	{
		$this->load->view("v_Daftar_P3");
		
	}
	
}