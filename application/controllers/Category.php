<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Category extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('category_model');

		$this->load->library('user_agent');

		$this->twig->addGlobal('session', $this->session);
	}

	public function index()
	{
		$data = [
			'title'    => 'List of Category',
			'entities' => $this->category_model->fetch()
		];

		$this->twig->display('category/list_view', $data);
	}

	public function create()
	{
		$data = [
			'title'   => 'Create new category',
		];

		$this->twig->display('category/form_view', $data);
	}

	public function store()
	{

		$data = [
			'id'   => $this->input->post('id'),
			'name' => strtoupper($this->input->post('category'))
		];

		$this->category_model->store($data);

		if ($this->input->post('id') == 0)
		{
			$this->session->set_flashdata('message', "<div class='alert alert-success'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>Category has been created!</div>");
		}
		else
		{
			$this->session->set_flashdata('message', "<div class='alert alert-success'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>Category has been updated!</div>");
		}

		redirect(base_url('category'));
	}

	public function edit()
	{
		$id = $this->uri->segment(3) ? $this->uri->segment(3): 0;

		$data = [
			'title'  => 'Edit category',
			'entity' => $this->category_model->read($id)
		];

		$this->twig->display('category/form_view', $data);

	}

	public function delete()
	{
		$data = ['id' => $this->uri->segment(3)];

		$this->category_model->delete($data);

		$this->session->set_flashdata('message', "<div class='alert alert-success'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>Category has been deleted!</div>");

		redirect($this->agent->referrer());
	}


}