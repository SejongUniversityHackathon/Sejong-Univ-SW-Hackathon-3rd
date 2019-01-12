<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Parking extends CI_Controller {

	function __construct () {
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
		$this->data = array();
	}

	public function index()
	{
		// header('Content-Type: application/json'); 
		$this->load->model('parking_m');
		$data = $this->parking_m->getParkingData();
		$this->data['parkingData'] = json_encode($data);
		$this->load->view('layouts/components/header');
		$this->load->view('components/parking/entireParkingData', $this->data);
		$this->load->view('layouts/components/footer');
	}

	public function prediction() {
		$this->load->model('parking_m');
		$data = $this->parking_m->getPredictData();
		$this->data['predictionData'] = $data[0];
		$this->data['predictionSource'] = $this->parking_m->getPredictFeature();
		$this->load->view('layouts/components/header');
		$this->load->view('components/parking/predictionParkingData', $this->data);
		$this->load->view('layouts/components/footer');
	}
}