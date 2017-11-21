<?php

class inicio extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function index(){
		$this->load->view('general/header');
		$this->load->view('general/menu');
		$this->load->view('sign');
		$this->load->view('general/footer');
	}
}