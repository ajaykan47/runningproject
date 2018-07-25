<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inquryinbox extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!($this->session->userdata('Registerlogindetails'))) {
            redirect(base_url());
        }

    }
    public function index()
    {
        $data['title'] = "Refrigration Hub";
        $data['author'] = "Refrigration Hub";
        $data['description'] = "Refrigration Hub";
        $data['keywords'] = "Refrigration Hub";
        $this->load->view('user/seller/include/header', $data);
        $this->load->view('user/seller/include/sidebarmenu');
        $this->load->view('user/seller/inquiry-inbox/inbox');
        $this->load->view('user/seller/include/footer');
    }
    public function reply()
    {
        $data['title'] = "Refrigration Hub";
        $data['author'] = "Refrigration Hub";
        $data['description'] = "Refrigration Hub";
        $data['keywords'] = "Refrigration Hub";
        $this->load->view('user/seller/include/header', $data);
        $this->load->view('user/seller/include/sidebarmenu');
        $this->load->view('user/seller/inquiry-inbox/reply');
        $this->load->view('user/seller/include/footer');
    }

}
