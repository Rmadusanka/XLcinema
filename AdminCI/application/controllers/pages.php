<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pages extends CI_Controller {

	public function add()
	{
		$this->load->view('php/addEmp');
	}
}
