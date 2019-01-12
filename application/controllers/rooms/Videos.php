<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Videos extends CI_Controller {

	function __construct () {
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('layouts/components/header');
		$this->load->view('components/rooms/videos');
		$this->load->view('layouts/components/footer');
	}
}
