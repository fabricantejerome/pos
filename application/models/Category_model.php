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

	public function read($id)
	{
		return $this->db->get_where('category_tbl', array('id' => $id))->row();
	}

	public function store($params)
	{
		if ($params['id'] > 0)
		{
			$this->db->update('category_tbl', $params, array('id' => $params['id']));
		}
		else
		{
			unset($params['id']);
			$this->db->insert('category_tbl', $params);	
		}
	}

	public function delete($params)
	{
		$this->db->delete('category_tbl', $params);
	}
}