<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function fetch()
	{
		return $this->db->get_where('category_tbl', array('is_draft' => 0))->result();
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

	public function draft($params)
	{
		$this->db->update('category_tbl', array('is_draft' => 1), $params);
	}

	public function whereIn($args)
	{
		$query = $this->db->from('category_tbl')
				->where_in('name', $args)
				->get();

		return $query->result();
	}


	public function storeNotExist($args)
	{
		if (count($args))
		{
			foreach ($args as $item)
			{
				$query = $this->db->get_where('category_tbl', array('name' => $item));

				if ($query->num_rows() == 0)
				{
					$this->db->insert('category_tbl', array('name' => $item));
				} 
			}
		}
	}
}