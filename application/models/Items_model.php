<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Items_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function fetch()
	{
		$query = $this->db->query("SELECT it.id, it.product_line, it.style_number, it.size, it.color, it.price, it.barcode,
					CASE 
						WHEN SUM(tit.quantity) > 0 THEN it.quantity - SUM(tit.quantity)
						ELSE it.quantity
					END AS quantity, ct.name AS category
					FROM items_tbl AS it 
					LEFT JOIN transaction_item_tbl AS tit ON it.id = tit.item_id
					INNER JOIN category_tbl AS ct ON it.category_id = ct.id
					GROUP BY it.id, tit.item_id
					ORDER BY it.product_line");

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
