<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Transaction extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('items_model');

		$this->twig->addGlobal('session', $this->session);
	}

	public function index()
	{
		$this->twig->display('transactions/index');
	}

	public function fetchItems()
	{
		echo json_encode($this->items_model->fetch());
	}
}