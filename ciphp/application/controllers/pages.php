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
}
?>