<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Evacuation extends CI_Controller {

	function __construct () {
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
		$this->data = array();
	}

	public function fire()
	{
		$this->load->view('layouts/components/header');
		$this->load->view('components/evacuation/fire.php', $this->data);
		$this->load->view('layouts/components/footer');
	}

	public function earthquake()
	{
		$this->load->view('layouts/components/header');
		$this->load->view('components/evacuation/earthquake.php', $this->data);
		$this->load->view('layouts/components/footer');
	}
}
