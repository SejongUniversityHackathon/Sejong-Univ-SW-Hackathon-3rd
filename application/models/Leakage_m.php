<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Leakage_m extends CI_Model
{
	public function getWaterLeakages() {
		$query = $this->db->get_where('loss', array('type' => 'w'));

		return $query->result();
	}

	public function getElectricLeakages() {
		$query = $this->db->get_where('loss', array('type' => 'e'));

		return $query->result();
	}
}
