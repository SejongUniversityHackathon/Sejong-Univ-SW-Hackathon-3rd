<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct () {
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('layouts/components/header');
		$this->load->view('components/dashboard/default');
		//$this->load->view('components/rooms/pcs');
		$this->load->view('layouts/components/footer');
	}
}
