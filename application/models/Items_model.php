<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Items_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function fetch()
	{
		$query = $this->db->query("SELECT it.id, it.product_line, it.style_number, it.size, it.color, it.price, it.original_price, it.barcode,
					CASE 
						WHEN SUM(tit.quantity) > 0 THEN it.quantity - SUM(tit.quantity)
						ELSE it.quantity
					END AS quantity, ct.name AS category
					FROM items_tbl AS it 
					LEFT JOIN transaction_item_tbl AS tit ON it.id = tit.item_id
					INNER JOIN category_tbl AS ct ON it.category_id = ct.id
					WHERE it.is_draft = 0
					GROUP BY it.id, tit.item_id
					ORDER BY it.product_line");

		return $query->result();
	}

	public function store($params)
	{
		$this->db->insert('items_tbl', $params);
	}

	public function setAsDraft($args)
	{
		$this->db->update('items_tbl', array('is_draft' => 1), array('id' => $args));
	}

	public function store_batch($args)
	{
		if (count($args))
		{
			foreach ($args as $row)
			{
				$query = $this->db->get_where('items_tbl', array('product_line' => $row['product_line']));

				if ($query->num_rows() > 0)
				{
					$data = $query->row_array();

					$row['quantity'] = $row['quantity'] + $data['quantity'];

					$this->db->update('items_tbl', $row, array('id' => $data['id']));
				}
				else
				{
					$this->db->insert("items_tbl", $row);
				}
			}
		}
	}

}
