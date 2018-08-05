<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Item extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$models = ['items_model', 'category_model'];

		$this->load->model($models);

		$this->twig->addGlobal('session', $this->session);
	}

	public function index()
	{
		$data = [
			'title'    => 'List of Products',
			'entities' => $this->items_model->fetch()
		];

		$this->twig->display('items/list_view', $data);
	}

	public function create()
	{
		$data = [
			'title'      => 'Create New Product',
			'categories' => $this->category_model->fetch()
		];

		$this->twig->display('items/form_view', $data);
	}

	public function store()
	{
		$data = array_map('trim', $this->input->post());

		$this->items_model->store($data);

		redirect(base_url('item'));
	}

	public function upload()
	{
		$data = array(
			'title'   => 'Upload Items',
		);

		$this->twig->display('items/upload_view', $data);
	}
}