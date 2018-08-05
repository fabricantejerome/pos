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
			'content'  => 'items/list_view',
			'entities' => $this->items_model->fetch()
		];

		$this->load->view('partials/template', $data);
	}

	public function create()
	{
		$data = [
			'title'      => 'Create New Product',
			'content'    => 'items/form_view',
			'categories' => $this->category_model->fetch()
		];

		$this->load->view('partials/template', $data);
	}

	public function store()
	{
		$data = array_map('trim', $this->input->post());

		$this->items_model->store($data);

		redirect(base_url('item'));
	}
}