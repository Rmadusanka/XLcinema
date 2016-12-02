<?php
class Pages extends CI_Controller
{

public function view($page = 'home')
{

    $this->load->helper('url');

    if(!file_exists('application/views/pages/'.$page.'.php'))
{
//whoops we don't have a page for that!
show_404();


}


//$this->load->view('templates/header', $data);
//$this->load->view('pages/'.$page, $data);

//$this->load->view('templates/footer', $data);

    $this->load->view('pages/'.$page);
}


    public function about($page = 'about')
    {
        if(!file_exists('application/views/pages/'.$page.'.php'))
        {
//whoops we don't have a page for that!
            show_404();


        }


//$this->load->view('templates/header', $data);
//$this->load->view('pages/'.$page, $data);

//$this->load->view('templates/footer', $data);

        $this->load->view('pages/'.$page);
    }



    public function buyTicket($page = 'buyTicket')
    {

        if(!file_exists('application/views/pages/'.$page.'.php'))
        {
//whoops we don't have a page for that!
            show_404();


        }


//$this->load->view('templates/header', $data);
//$this->load->view('pages/'.$page, $data);

//$this->load->view('templates/footer', $data);

        $this->load->helper('url');
        $this->load->view('container/header');
        $this->load->view('container/menubar');

       // $this->load->view('buyTicket');
        $this->load->view('pages/'.$page);
        $this->load->view('container/footer');
    }






    public function index(){
        $this->load->helper('url');
        $this->load->view('container/header');
        $this->load->view('container/menubar');
        $this->load->view('pages/buyTicket');
        $this->load->view('container/footer');
    }

    //firstly validate data which user enter data
    public function checkLogin(){
        //$shal_password = sha1($password);

        $this->form_validation->set_rules('username','username');
        $this->form_validation->set_rules('password','password','required|callback_verifyUser');

        if($this->form_validation->run() == false){

            $this->load->helper('url');
            $this->load->view('container/header');
            $this->load->view('container/menubar');
            $this->load->view('pages/buyTicket');
            $this->load->view('container/footer');
        }else{
            redirect('index.php/loginHomeController/index');
        }
    }

    //check whether login username & password have an account in database
    public function verifyUser(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $shal_password = sha1($password);



        $this->load->model('loginModel');

        if($this->loginModel->login($username,$shal_password)){
            return true;
        }else{
            $this->form_validation->set_message('verifyUser','Incorrect Username or Password ');
            return false;
        }

    }
}
?>