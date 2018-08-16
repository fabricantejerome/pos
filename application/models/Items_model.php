<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Items_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function fetch()
	{
		$fields = ['it.id', 'it.product_line', 'it.style_number', 'it.size', 'it.color', 'it.quantity', 'it.price', 'it.barcode', 'ct.name AS category'];
		
		$query = $this->db->select($fields)
				->from('items_tbl AS it')
				->join('category_tbl AS ct', 'it.category_id = ct.id', 'INNER')
				->order_by('it.product_line', 'ASC')
				->get();

		return $query->result();
	}

	public function store($params)
	{
		$this->db->insert('items_tbl', $params);
	}

	public function store_batch($args)
	{
		$this->db->insert_batch('items_tbl', $args);

		return $this->db->affected_rows();
	}

}
