<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inquryinbox extends CI_Controller {

	public function index()
	{
        $data['title']="Refrigration Hub";
        $data['author']="Refrigration Hub";
        $data['description']="Refrigration Hub";
        $data['keywords']="Refrigration Hub";
        $this->load->view('user/include/header',$data);
        $this->load->view('user/include/sidebarmenu');
		$this->load->view('user/inquiry-inbox/inbox');
        $this->load->view('user/include/footer');
	}
}