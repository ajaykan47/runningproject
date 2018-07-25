<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personalprofile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!($this->session->userdata('Registerlogindetails'))) {
            redirect(base_url());
        }
        $this->load->model('Bussinessprofile_model');
        $this->load->model('Setting_model');
    }

    public function index()
    {
        $data['title'] = "Refrigration Hub";
        $data['author'] = "Refrigration Hub";
        $data['description'] = "Refrigration Hub";
        $data['keywords'] = "Refrigration Hub";
        $this->load->view('user/seller/include/header', $data);
        $data['editResult'] = $this->Bussinessprofile_model->getProfileDetail();
        $this->load->view('user/seller/include/sidebarmenu');
        $this->load->view('user/seller/personal-profile/index', $data);
        $this->load->view('user/seller/include/footer');
    }

    public function updateProfile()
    {
        if ($_POST['btnSubmit'] == "Update") {
            $data['value'] = $this->session->userdata('Registerlogindetails');
            $reguser_id = $data['value']['reguser_id'];

            if (!empty($this->input->post('txtnameTitle'))) {
                $txtnameTitle = $this->input->post('txtnameTitle');
            } else {
                $txtnameTitle = '';
            }
            if (!empty($this->input->post('txtName'))) {
                $name = $this->input->post('txtName');
            } else {
                $name = '';
            }

            if (!empty($this->input->post('txtDesignation'))) {
                $txtDesignation = $this->input->post('txtDesignation');
            } else {
                $txtDesignation = '';
            }
            if (!empty($this->input->post('txtMobileAlt'))) {
                $txtMobileAlt = $this->input->post('txtMobileAlt');
            } else {
                $txtMobileAlt = '';
            }
            if (!empty($this->input->post('txtAltEmail'))) {
                $reguser_altemail = $this->input->post('txtAltEmail');
            } else {
                $reguser_altemail = '';
            }
            $data = array(
                'reguser_altmobile' => $txtMobileAlt,
                'reguser_title' => $txtnameTitle,
                'reguser_name' => $name,
                'reguser_altemail' => $reguser_altemail,
                'reguser_designation' => $txtDesignation,
            );
            $tableName = "tbl_userregistrationdetail";
            $Wherecondition = array('reguser_id' => $reguser_id,);
            if ($this->Bussinessprofile_model->updateGst($Wherecondition, $tableName, $data)) {
                $this->session->set_flashdata('done', 'Your Profile is Successfully updated...!!');
                redirect('user/Personalprofile');
            } else {
                $this->session->set_flashdata('error', 'Your Profile is not Successfully updated Please try again...!!');
                redirect('user/Personalprofile');
            }
        } else {
            $this->session->set_flashdata("error', 'Sorry !! Are You  Reboot, You can't Access...!!");
            redirect('user/Personalprofile');
        }


    }


}
