<?php

class Pengumuman extends CI_Controller {
	public function _construct()
	{
		parent::_construct();
	}
	
	public function index()
	{
		$this->load->view("psg/v_Pengumuman");
		
	}
	public function kp()
	{
		$this->load->view("kp/v_PengumumanS");
		
	}
	public function psg()
	{
		$this->load->view("psg/v_PengumumanS");
		
	}
	
}