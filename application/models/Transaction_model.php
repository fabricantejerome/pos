<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction_Model extends CI_Model {
	
	public function __construct()
	{
		$this->load->database();
	}

	/*
	 * @args array
	 */
	public function store($args)
	{
		$trans = array(
			'trans_total' => $args['trans_total'] ? $args['trans_total'] : 0,
			'cash'        => $args['cash']	 ? $args['cash'] : 0,
			'change'      => $args['change'] ? $args['change'] : 0,
			'cashier_id'  => $this->session->userdata('id') ? $this->session->userdata('id') : 0
		);

		$this->db->trans_begin();
		$this->db->insert('transaction_tbl', $trans);

		if ($this->db->trans_status() == FALSE) {
			$this->db->trans_rollback();

			return 0;
		}
		else {
			$id = $this->db->insert_id();

			$this->db->trans_commit();

			return $id;
		}
	}

	/*
	 * @args array
	 */
	public function storeItems($args)
	{
		$this->db->trans_begin();
		$this->db->insert_batch('transaction_item_tbl', $args);

		if ($this->db->trans_status() == FALSE) {
			$this->db->trans_rollback();

			return false;
		}
		else {
			$this->db->trans_commit();

			return true;
		}
	}

	public function fetchSales()
	{
		$query = $this->db->query('SELECT tit.trans_id, tit.price, tit.quantity, tit.total, tit.created_at, it.product_line, pit.fullname as cashier
					FROM transaction_item_tbl AS tit
					INNER JOIN items_tbl AS it ON tit.item_id= it.id
					INNER JOIN transaction_tbl AS tt ON tt.id = tit.trans_id
					INNER JOIN users_tbl AS ut ON ut.id = tt.cashier_id
					INNER JOIN personal_info_tbl AS pit ON pit.id = ut.p_id;');

		return $query->result();
	}
}