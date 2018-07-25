<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!($this->session->userdata('Registerlogindetails'))) {
            redirect(base_url());
        }
        $this->load->model('Bussinessprofile_model');

    }

    public function index()
    {
        $data['value'] = $this->session->userdata('Registerlogindetails');
        $reguser_id = $data['value']['reguser_id'];
        $reguser_type = $data['value']['reguser_type'];
        $data['value']['reguser_type'];
        $data['title'] = "Refrigeration Hub";
        $data['author'] = "Refrigeration Hub";
        $data['description'] = "Refrigeration Hub";
        $data['keywords'] = "Refrigeration Hub";
        $this->load->view('user/seller/include/header', $data);
        $this->load->view('user/seller/include/sidebarmenu');
        $tableName = "tbl_businessdetail";
        $Wherecondition = array('reguser_id' => $reguser_id, 'reguser_type' => $reguser_type);
        $data['gstDetail']=$this->Bussinessprofile_model->getGstbyUsertype($Wherecondition, $tableName);
        $this->load->view('user/seller/dashboard/index',$data);
        $this->load->view('user/seller/include/footer');
    }

    public function logout(){

        $sessionValue= $this->session->userdata('RegUserlogindetails');
        $currentReguserId=$sessionValue['uid'];
        $data= array(
            'reguser_logouttime'=>date('Y-m-d H:i:s')
        );
        $this->db->where('reguserlh_id', $currentReguserId);
        if($this->db->update('tbl_reguser_loginhistory', $data)){
            $this->session->sess_destroy();
            redirect('Login');
        }else{
            redirect(base_ur(),"user/Dashboard");
        }

    }

}
