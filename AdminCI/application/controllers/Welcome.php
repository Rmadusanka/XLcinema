<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function _construct(){
		parent::_construct();
		//$this->load->model();
		$this->load->helper('url');
	}

	public function index(){
		$this->load->view('php/addEmp');
	}

	public function add_Emp(){
		$this->load->view('php/addEmp');
	}
}
