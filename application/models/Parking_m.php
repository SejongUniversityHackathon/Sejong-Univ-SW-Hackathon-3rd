<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Parking_m extends CI_Model
{
	public function getParkingData() {
		$query = $this->db->get('Parking');

		return $query->result();
	}

	public function getPredictData() {
		$query = $this->db->get('Parking_Pre');

		return $query->result();
	}

	public function getPredictFeature() {
		$query = $this->db->get('Parking_Pre_Feature');

		return $query->result();
	}
}