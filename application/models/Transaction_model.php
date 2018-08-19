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
}