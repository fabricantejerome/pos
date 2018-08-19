<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Transaction extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$models = ['items_model', 'transaction_model'];

		$this->load->model($models);

		$this->twig->addGlobal('session', $this->session);
	}

	public function index()
	{
		$this->twig->display('transactions/index');
	}

	public function fetchItems()
	{
		$this->output->set_content_type('application/json')->set_output(json_encode($this->items_model->fetch()));
	}

	public function store()
	{
		$data = json_decode(file_get_contents("php://input"), true);

		$trans_id = $this->transaction_model->store($data);

		if ($trans_id > 0)
		{
			$items = array();

			foreach ($data['items'] as $row) {
				$items[] = array(
					'trans_id' => $trans_id,
					'item_id'  => $row['id'],
					'price'    => $row['price'],
					'quantity' => $row['quantity'],
					'total'    => $row['total']
				);
			}

			$this->transaction_model->storeItems($items);

			echo 'Transaction done successfully';
		}
		else
		{
			echo 'Transaction failed!';
		}
	}
}