<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Applicant extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('applicant_model');
		
		$this->load->helper('form');
	}

	public function index()
	{
		$data = array(
				'title'    => 'List of Applicant',
				'content'  => 'applicants/list',
				'entities' => $this->applicant_model->fetch()
			);

		$this->load->view('partials/template', $data);
	}

	// Applicant form
	public function form()
	{
		$data = array(
				'title'   => 'Applicant Details',
				'content' => 'applicants/form'
			);

		$this->load->view('partials/template', $data);
	}

	// Store new resource
	public function store()
	{
		$thumbnail = $this->_handleUpload();
		$id = $this->_preparePersonalInfo($thumbnail);
		$this->_prepareEducation($id);
		$this->_prepareEmployment($id);

		$this->session->set_flashdata('message', '<div class="alert alert-success">New applicant has been added!</div>');

		redirect(base_url('applicant'));
	}

	protected function _preparePersonalInfo($params)
	{
		$personal = array(
				'thumbnail'          => count($params) ? $params['file_name'] : '',
				'position_applied'   => $this->input->post('position_applied'),
				'fullname'           => $this->input->post('fullname'),
				'birthdate'          => date('Y-m-d', strtotime($this->input->post('birthdate'))),
				'birthplace'         => $this->input->post('birthplace'),
				'height'             => $this->input->post('height'),
				'weight'             => $this->input->post('weight'),
				'religion'           => $this->input->post('religion'),
				'civil_status'       => $this->input->post('civil_status'),
				'gender'             => $this->input->post('gender'),
				'father_name'        => $this->input->post('father_name'),
				'mother_name'        => $this->input->post('mother_name'),
				'spouse'             => $this->input->post('spouse'),
				'primary_address'    => $this->input->post('primary_address'),
				'provincial_address' => $this->input->post('provincial_address'),
				'email'              => $this->input->post('email_address'),
				'home_phone'         => $this->input->post('home_phone'),
				'mobile_number'      => $this->input->post('mobile_number'),
				'skype_account'      => $this->input->post('skype_account'),
				'contact_person'     => $this->input->post('contact_person'),
				'relation'           => $this->input->post('relation'),
				'contact_address'    => $this->input->post('contact_address'),
				'contact_number'     => $this->input->post('contact_number'),
			);

		return $this->applicant_model->storePersonalInfo($personal);
	}

	protected function _prepareEducation($p_id)
	{
		$data = array();

		for ($i=0; $i < count($this->input->post('level')); $i++)
		{
			$data = array(
					'level'       => $this->input->post('level')[$i],
					'school'      => $this->input->post('school')[$i],
					'degree'      => $this->input->post('degree')[$i],
					'school_year' => $this->input->post('school_year')[$i],
					'p_id'        => $p_id
				);

			$this->applicant_model->storeEducation($data); 
		}

		return $this;
	}

	protected function _prepareEmployment($p_id)
	{
		$data = array();

		for ($i=0; $i < count($this->input->post('company_name')); $i++)
		{ 
			$data = array(
					'company_name'    => $this->input->post('company_name')[$i],
					'company_address' => $this->input->post('company_address')[$i],
					'agency'          => $this->input->post('agency')[$i],
					'position'        => $this->input->post('position')[$i],
					'dates'           => $this->input->post('dates')[$i],
					'p_id'            => $p_id
				);

			$this->applicant_model->storeEmployment($data);
		}
	}

	protected function _handleUpload()
	{
		$config = array(
				'upload_path'   => './resources/images',
				'allowed_types' => 'gif|jpg|png',
				'max_size'      => 100
			);

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('thumbnail'))
		{
			$error = array('error' => $this->upload->display_errors());

			return $this->upload->display_errors();
		}

		return $this->upload->data();
	}

}