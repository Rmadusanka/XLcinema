<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Employee_model');
		$this->load->helper('url');
	}

	public function view_add_form(){
		$this->load->helper('url');
		$this->load->view('php/addEmp');
	}		

	public function add_emp(){
		$this->load->helper('url');

		$data=array(
		 'Emp_No'=>$this->input->post('empNo'),
		 'Name'=>$this->input->post('name'),
		 'NIC'=>$this->input->post('nic'),
		 'Address'=>$this->input->post('address'),
		 'Telephone'=>$this->input->post('phone')
		 );
		 
		 $this->Employee_model->form_insert($data);
		 //$this->load->view("php/empDetails");
	}

	public function update_emp(){
		$this->load->helper('url');

		$empNo= $this->input->post('empNo');
		$data=array(
		'Name'=>$this->input->post('name'),
		'NIC'=>$this->input->post('nic'),
		'Address'=>$this->input->post('address'),
		'Telephone'=>$this->input->post('phone')
		);

		$this->Employee_model->update_emp($data,$empNo);
		$data['result']=$this->Employee_model->view_emp();
		$this->load->view("php/empDetails",$data);
	}

	public function view_al_emp(){
		$data['result']=$this->Employee_model->view_emp();
		$this->load->view("php/empDetails",$data);

	}

	public function search_emp(){
		$this->load->helper('url');

		$empNo= $this->input->post('empNo');
		$data['result']=$this->Employee_model->search_emp($empNo);
		$this->load->view("php/modifyEmp",$data);
	}

	public function remove_emp(){
		$this->load->helper('url');

		$empNo= $this->input->post('empNo');
		$data['result']=$this->Employee_model->remove_emp($empNo);
		$this->load->view("php/empDetails",$data);

	}
	
}
?>
