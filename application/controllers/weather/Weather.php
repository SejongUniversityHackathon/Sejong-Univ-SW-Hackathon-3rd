<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Weather extends CI_Controller {

	function __construct () {
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
		$this->data = array();
	}

	public function index()
	{
		// header('Content-Type: application/json'); 
		$this->load->view('layouts/components/header');
		$this->load->view('components/weather/weather');
		$this->load->view('layouts/components/footer');
	}

	public function sunshine() {
		$this->load->model('parking_m');
		$data = $this->parking_m->getPredictData();
		$this->data['predictionData'] = $data[0];
		$this->data['predictionSource'] = $this->parking_m->getPredictFeature();
		$this->load->view('layouts/components/header');
		$this->load->view('components/weather/sunshine', $this->data);
		$this->load->view('layouts/components/footer');
	}
}
