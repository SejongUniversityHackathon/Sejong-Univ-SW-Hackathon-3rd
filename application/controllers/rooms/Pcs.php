<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pcs extends CI_Controller {

	function __construct () {
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('layouts/components/header');
		$this->load->view('components/rooms/pcs');
		$this->load->view('layouts/components/footer');
	}

	public function get()
	{
		$this->load->view('layouts/components/header');
		$this->load->view('components/rooms/pc');
		$this->load->view('layouts/components/footer');
	}
}