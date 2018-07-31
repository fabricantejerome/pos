<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function fetch()
	{
		return $this->db->get('category_tbl')->result();
	}

	public function store($params)
	{
		$this->db->insert('category_tbl', $params);
	}

	public function delete($params)
	{
		$this->db->delete('category_tbl', $params);
	}
}