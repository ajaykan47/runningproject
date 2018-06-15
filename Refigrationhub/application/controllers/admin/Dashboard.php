<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	 function __construct()
    {
        parent::__construct();
        if (!($this->session->userdata('logindetails'))) {
            redirect('admin/Auth');
        }
        
    }

	public function index()
	{
		//echo 'Ajay'; 
		
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/sidebar');
		$this->load->view('admin/dashboard/index');
		$this->load->view('admin/include/footer');
		
	}
	public function logout(){
		
		$sessionValue= $this->session->userdata('logindetails');
		$currentuserId=$sessionValue['uid'];
		$data= array(
		'logout_time'=>date('Y-m-d H:i:s')
		);
		$this->db->where('logh_id', $currentuserId);
		if($this->db->update('tbl_loginhistory', $data)){
		$this->session->sess_destroy();
		 redirect('admin/Auth');
		}else{
			redirect(base_ur(),"admin/Dashboard");
		}
		 
		 
        
		
	}
	
	
}
