<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leakages extends CI_Controller {

	function __construct () {
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
		$this->data = array();
	}

	public function water()
	{
		$this->load->model('leakage_m');
		$this->data['leakageData'] = $this->leakage_m->getWaterLeakages();
		$this->load->view('layouts/components/header');
		$this->load->view('components/leakages/waterLeakages.php', $this->data);
		$this->load->view('layouts/components/footer');
	}

	public function electric()
	{
		$this->load->model('leakage_m');
		$this->data['leakageData'] = $this->leakage_m->getElectricLeakages();
		$this->load->view('layouts/components/header');
		$this->load->view('components/leakages/electricLeakages.php', $this->data);
		$this->load->view('layouts/components/footer');
	}
}
