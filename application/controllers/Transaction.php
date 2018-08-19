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
}