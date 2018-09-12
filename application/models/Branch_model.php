<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Branch_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function fetch()
	{
		return $this->db->get('branch_tbl')->result();
	}

}
