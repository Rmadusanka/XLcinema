<?php
class user_model extends CI_Model{

    function user_model(){
        parent::__construct();
    }

    function register_user($username,$password,$email,$activation_code,$title,$fname,$lname,$gender,$city,$mobile){
        $shal_password = sha1($password);

        $query_str = "INSERT INTO members(username,password,email,activation_code,title,fname,lname,gender,city,mobile)VALUES (?,?,?,?,?,?,?,?,?,?)";

        $this->db->query($query_str,array($username,$shal_password,$email,$activation_code,$title,$fname,$lname,$gender,$city,$mobile));
    }


    function confirm_registration($registration_code){
        $query_str = "SELECT  id from  members WHERE activation_code = ?";

        $result = $this->db->query($query_str,$registration_code);

        if($result->num_rows() == 1){
            $query_str = "UPDATE  members SET activated = 1 WHERE activation_code = ?";

            $this->db->query($query_str,$registration_code);
            return true;

        }else{
            return false;
        }



    }





    function check_exists_username($username){
        $query_str = "SELECT username from members where username = ?";

        $result = $this->db->query($query_str,$username);

        if($result->num_rows()> 0){
            return true;

        }else{
            return false;
        }
    }
}