<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
       /*  if (!($this->session->userdata('reguserlogindetails'))) {
            redirect(base_url());
        } */
    }


    public function index()
    {
        $data['title'] = "Refrigration Hub";
        $data['author'] = "Refrigration Hub";
        $data['description'] = "Refrigration Hub";
        $data['keywords'] = "Refrigration Hub";
        $this->load->view('user/include/header', $data);
        $this->load->view('user/include/sidebarmenu');
        $this->load->view('user/dashboard/index');
        $this->load->view('user/include/footer');
    }
}
