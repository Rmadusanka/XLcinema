<?php
class buyTicket extends CI_Controller
{


    public function login()
    {
        $this->load->view('container/header');
        $this->load->view('container/menubar');
        $this->load->view('buyTicket');
    }
}
?>