<?php
	class Employee_model extends CI_Model{

		public function get_index(){
			$this->db->order_by("Emp_NO", "asc");
			$query=$this->db->get('employee');
			return $result=$query->result();
		}
	
		public function search_emp($empNo){
			$query=$this->db->get_where('employee',array('Emp_No'=>$empNo));
			return $result=$query->result();
		}

		public function form_insert($data){
			$this->db->insert('employee',$data);
		}

		public function view_emp(){
			$query=$this->db->get('employee');
			return $result=$query->result();
		}

		public function view_event(){
			$this->db->order_by("Emp_No", "asc");
			$query=$this->db->get('employee');
			return $result=$query->result();
		}

		public function update_emp($data,$empNo){
			$this->db->where('Emp_No', $empNo);
			$this->db->update('employee',$data);
		}

		public function remove_emp($empNo){
			$this->db->where('Emp_No', $empNo);
			$this->db->delete('employee');
		}

	}
?>