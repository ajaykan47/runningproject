<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gstdetail extends CI_Controller
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
        $data['value'] = $this->session->userdata('Registerlogindetails');
        $reguser_id = $data['value']['reguser_id'];
        $reguser_type = $data['value']['reguser_type'];
        $wherecondition = array('reguser_type' => $reguser_type, 'reguser_id' => $reguser_id, 'status' => 'Active');
        $data['title'] = "Refrigration Hub";
        $data['author'] = "Refrigration Hub";
        $data['description'] = "Refrigration Hub";
        $data['keywords'] = "Refrigration Hub";
        $this->load->view('user/seller/include/header', $data);
        $this->load->view('user/seller/include/sidebarmenu');
        $tableName = 'tbl_businessdetail';
        $data['editResult'] = $this->Bussinessprofile_model->getGstbyUsertype($wherecondition, $tableName);
        //  print_r($data['editResult']); die;
        $this->load->view('user/seller/gst-detail/index', $data);
        $this->load->view('user/seller/include/footer');
    }

    public function updateGst()
    {
        if ($_POST['btnSubmit'] == "Update") {
            $data['value'] = $this->session->userdata('Registerlogindetails');
            $reguser_id = $data['value']['reguser_id'];
            $reguser_type = $data['value']['reguser_type'];
            if (!empty($this->input->post('txtGstin'))) {
                $txtGstin = $this->input->post('txtGstin');
            } else {
                $txtGstin = '';
            }
            if (!empty($this->input->post('txtPanno'))) {
                $txtPanno = $this->input->post('txtPanno');
            } else {
                $txtPanno = '';
            }
            $data = array(
                'gstin' => $txtGstin,
                'panno' => $txtPanno,


            );
            $tableName = "tbl_businessdetail";
            $Wherecondition = array('reguser_id' => $reguser_id, 'reguser_type' => $reguser_type);
            if ($this->Bussinessprofile_model->updateGst($Wherecondition, $tableName, $data)) {
                $this->session->set_flashdata('done', 'Your Gstin is Successfully updated...!!');
                redirect('user/Gstdetail');
            } else {
                $this->session->set_flashdata('error', 'Your Record is not Successfully updated...!!');
                redirect('user/Gstdetail');
            }
        }else{

            $this->session->set_flashdata("error', 'Sorry !! Are You  Reboot, You can't Access...!!");
            redirect('user/Gstdetail');
        }


    }


}
