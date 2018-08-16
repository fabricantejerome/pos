<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction_Model extends CI_Model {
	
	public function __construct()
	{
		$this->load->database();
	}
}