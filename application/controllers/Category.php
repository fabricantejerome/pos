<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Category extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('category_model');

		$this->load->library('user_agent');
	}

	public function index()
	{
		$data = [
			'title'    => 'List of Category',
			'content'  => 'category/list_view',
			'entities' => $this->category_model->fetch()
		];

		$this->load->view('partials/template', $data);
	}

	public function create()
	{
		$data = [
			'title'   => 'Create new category',
			'content' => 'category/form_view'
		];

		$this->load->view('partials/template', $data);
	}

	public function store()
	{
		$data = [
			'name' => strtoupper($this->input->post('category'))
		];

		$this->category_model->store($data);

		$this->session->set_flashdata('message', "<div class='alert alert-success'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>Category has been created!</div>");

		redirect(base_url('category'));
	}

	public function edit()
	{
		// $this->category_model->delete($this->uri)
	}

	public function delete()
	{
		$data = ['id' => $this->uri->segment(3)];

		$this->category_model->delete($data);

		$this->session->set_flashdata('message', "<div class='alert alert-success'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>Category has been deleted!</div>");

		redirect($this->agent->referrer());
	}


}