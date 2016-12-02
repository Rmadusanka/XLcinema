<?php
class loginHomeController extends CI_Controller{

    public function index(){
        $this->load->helper('url');
        $this->load->view('container/header');
        $this->load->view('container/menubar');
        $this->load->view('pages/buyTicketHome');
        $this->load->view('container/footer');
    }
}
?>