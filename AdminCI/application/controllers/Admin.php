<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Admin_model');
		$this->load->helper('url');
	}

	public function view_al_admin(){
		$data['result']=$this->Admin_model->view_admin();
		$this->load->view("php/adminDetails",$data);

	}

	public function view_add_form(){
		$this->load->helper('url');
		$this->load->view('php/addAdmin');
	}		

	public function add_admin(){
		$this->load->helper('url');

		$data=array(
		 'Emp_No'=>$this->input->post('empNo'),
		 'Username'=>$this->input->post('uname'),
		 'Password'=>$this->input->post(MD5('password')),
		 'Type'=>$this->input->post('type')
		 );
		 
		$this->Admin_model->form_insert($data);
		$data['result']=$this->Admin_model->view_admin();
		$this->load->view("php/adminDetails",$data);
	}

	public function search_admin(){
		$this->load->helper('url');

		$empNo= $this->input->post('empNo');
		$data['result']=$this->Admin_model->search_Admin($empNo);
		$this->load->view("php/modifyAdmin",$data);
	}

	public function update_admin(){
		$this->load->helper('url');

		$empNo= $this->input->post('empNo');
		$data=array(
		'Username'=>$this->input->post('uname'),
		'Password'=>$this->input->post(MD5('password')),
		'Type'=>$this->input->post('type')
		);

		$this->Admin_model->update_admin($data,$empNo);
		$data['result']=$this->Admin_model->view_admin();
		$this->load->view("php/adminDetails",$data);
	}

	public function remove_admin(){
		$this->load->helper('url');

		$empNo= $this->input->post('empNo');
		$data['result']=$this->Admin_model->remove_admin($empNo);
		$this->load->view("php/adminDetails",$data);

	}
	//--------------------------------------------done-------------------------------------------

	
}
?>
