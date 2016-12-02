<?php
class user extends CI_Controller{


    function user(){
        parent::__construct();
        $this->view_data['base_url'] = base_url();

        $this->load->model('user_model');


    }

    function  index(){
        $this->register();
    }

    function register(){

        $this->load->library('form_validation');

        $this->form_validation->set_rules('username','Username','trim|required|alpha_numeric|min_length[6]|xss_clean|strtolower|callback_username_not_exists');
        $this->form_validation->set_rules('fname','First Name','trim|required|alpha_numeric|min_length[3]|xss_clean');
        $this->form_validation->set_rules('lname','Last Name','trim|required|alpha_numeric|min_length[5]|xss_clean');
        $this->form_validation->set_rules('mobile','Mobile','trim|required|min_length[10]|xss_clean');
        $this->form_validation->set_rules('email','Email','trim|required|min_length[6]|xss_clean|valid_email');
        $this->form_validation->set_rules('password','Password','trim|required|alpha_numeric|min_length[6]|xss_clean');
        $this->form_validation->set_rules('cpassword','Confirm Password','trim|required|alpha_numeric|min_length[6]|matches[password]|xss_clean');



        if($this->form_validation->run() == FALSE){

            //hasn't been run or there are validation errors
            $this->load->helper('url');
            $this->load->view('container/header');
            $this->load->view('container/menubar');
            $this->load->view('pages/view_register',$this->view_data);
            $this->load->view('container/footer');


        }else{

            //everything is good-process the form- write the data into the registration database
            $title = $this->input->post('title');
            $fname = $this->input->post('fname');
            $lname = $this->input->post('lname');
            $gender = $this->input->post('gender');
            $city = $this->input->post('city');
            $mobile = $this->input->post('mobile');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $email = $this->input->post('email');


            $activation_code = $this->_random_string(10);



            $this->user_model->register_user($username,$password,$email,$activation_code,$title,$fname,$lname,$gender,$city,$mobile);


            //echo $username;

            //email confirmation
            $this->load->library('email');
            $this->email->from('nadeesenavirathna@gmail.com','Al');
            $this->email->to($email);
            $this->email->subject('Registation Confirmation');
            $this->email->message('Please click this link to confirm your registration' . anchor('http://localhost/XLcinema/ciphp/user/register_confirm/'.$activation_code,'Confirm Registration'));

            echo 'Please click this link to confirm your registration' . anchor('http://localhost/XLcinema/ciphp/user/register_confirm/'.$activation_code,'Confirm Registration');



        }


        // $this->load->view('view_register',$this->view_data);
    }

    function  register_confirm(){
        $registration_code = $this->uri->segment(3);

        if($registration_code == ''){
            echo "Error no registration code in URL";
            exit();

        }

        $registration_confirmed = $this->user_model->confirm_registration($registration_code);

        if($registration_confirmed){
            echo "You have successfully registered";

        }else{
            echo "You have failed to register- no record found for that activation code";

        }
    }







    function  username_not_exists($username){
        $this->form_validation->set_message('username_not_exists','That %s already exits.please choose different username');

        if($this->user_model->check_exists_username($username)){
            return false;
        }else{
            return true;
        }

    }

    function _random_string($length){
        $len = $length;
        $base = 'ABCDEFGHIJKLMNOPQRSTWXYZabcdefghijklmnopqrstwxyz123456789';
        $max = strlen($base)-1;
        $activatecode='';
        mt_srand((double)microtime()*1000000);
        while(strlen($activatecode)<$len +1)
            $activatecode.=$base{mt_rand(0,$max)};

        return $activatecode;
    }


}
?>