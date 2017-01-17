<?php
Class Login_model extends CI_Model{

 function login($username, $password){
   $this -> db -> select('Emp_no, Username, Password, type');
   $this -> db -> from('admin');
   $this -> db -> where('Username', $username);
   $this -> db -> where('Password', MD5($password));
   $this -> db -> limit(1);
 
   $query = $this -> db -> get();
 
   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
}
?>