<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Applicant_Model extends CI_Model {
	
	public function __construct()
	{
		$this->load->database();
	}

	public function fetch()
	{
		return $this->db->get('personal_info_tbl')->result();
	}

	public function storePersonalInfo($params)
	{
		$this->db->insert('personal_info_tbl', $params);

		return $this->db->insert_id();
	}

	public function storeEducation($params)
	{
		$this->db->insert('education_tbl', $params);
	}

	public function storeEmployment($params)
	{
		$this->db->insert('employment_tbl', $params);
	}
}