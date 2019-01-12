<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Access_m extends CI_Model
{
	public function getData() {
		$query = $this->db->get('propessor_room_check');

		return $query->result();
	}
}
