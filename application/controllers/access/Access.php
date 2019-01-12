<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Access extends CI_Controller {

	function __construct () {
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
		$this->data = array();
	}

	public function index()
	{
		$this->load->view('layouts/components/header');
		$this->load->view('components/access/access', $this->data);
		$this->load->view('layouts/components/footer');
	}

	public function professors()
	{
		$this->load->model('access_m');
		$this->data['professors'] = $this->access_m->getData();
		$this->load->view('layouts/components/header');
		$this->load->view('components/access/professors', $this->data);
		$this->load->view('layouts/components/footer');
	}
}
