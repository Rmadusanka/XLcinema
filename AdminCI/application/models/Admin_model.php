<?php
	class Admin_model extends CI_Model{

		public function view_admin(){
			$query=$this->db->get('admin');
			return $result=$query->result();
		}

		public function form_insert($data){
			$this->db->insert('admin',$data);
		}
	
		public function search_admin($empNo){
			$query=$this->db->get_where('admin',array('Emp_no'=>$empNo));
			return $result=$query->result();
		}

		public function update_admin($data,$empNo){
			$this->db->where('Emp_No', $empNo);
			$this->db->update('admin',$data);
		}

		public function remove_admin($empNo){
			$this->db->where('Emp_No', $empNo);
			$this->db->delete('admin');
		}

		//--------------------------------------------done-------------------------------------------

		public function view_event(){
			$this->db->order_by("Emp_No", "asc");
			$query=$this->db->get('employee');
			return $result=$query->result();
		}
		
	}
?>