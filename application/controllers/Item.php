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

	public function upload_store()
	{
		$data = json_decode(file_get_contents("php://input"));

		// Convert object to array
		$data = array_map(function($row) {
			return (array)$row;
		}, $data);

		// Get the unique category
		$unique_category = array_unique(array_column($data, 'CATEGORY'));

		// Format category
		$categories = $this->category_model->whereIn($unique_category);

		$options = [];

		foreach ($categories as $category)
		{
			$options[$category->name] = $category->id;
		}

		$config = [];

		foreach ($data as $row)
		{
			$config[] = [
				'product_line' => $row['PRODUCT LINE'],
				'style_number' => $row['STYLE NUMBER'],
				'size'         => $row['SIZE'],
				'color'        => $row['COLOR'],
				'quantity'     => $row['QUANTITY'],
				'price'        => $row['PRICE'],
				'category_id'  => $options[$row['CATEGORY']]
			];
		}

		$this->items_model->store_batch($config);
	}
}