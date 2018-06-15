<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DisplayNewProducts extends CI_Controller {

	public function index()
	{
        $data['title']="Refrigration Hub";
        $data['author']="Refrigration Hub";
        $data['description']="Refrigration Hub";
        $data['keywords']="Refrigration Hub";
        $this->load->view('site/include/header',$data);
		$this->load->view('site/display-new-products/index');
        $this->load->view('site/include/footer');
	}
}
