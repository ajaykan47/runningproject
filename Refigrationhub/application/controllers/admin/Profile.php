<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if (!($this->session->userdata('logindetails'))) {
            redirect('admin/Auth');
        }
        $this->load->model('Setting_model');
    }


    public function index()
    {

        $this->load->view('admin/include/header');
        $this->load->view('admin/include/sidebar');
        $data['value'] = $this->session->userdata('logindetails');
        $idLoginSession = $data['value']['uid'];
        $data['editResult']=$this->Setting_model->getadminDetailBySessionId($idLoginSession);
        $this->load->view('admin/profile/index',$data);
        $this->load->view('admin/include/footer');

    }

    public function changeProfile()
    {
        $data['value'] = $this->session->userdata('logindetails');
        $idLoginSession = $data['value']['uid'];
        $name = $this->input->post('txtName');
        $email = $this->input->post('txtEmail');
        $mobile = $this->input->post('txtMobile');

        if(!empty($this->input->post('txtDob'))){
            $dob = $this->input->post('txtDob');
        }else{
            $dob ='';
        }
        if(!empty($this->input->post('txtEducation'))){
            $education = $this->input->post('txtEducation');
        }else{
            $education ='';
        }
        if(!empty($this->input->post('txtLocation'))){
            $location = $this->input->post('txtLocation');
        }else{
            $location ='';
        }
        if(!empty($this->input->post('txtSkill'))){
            $skill = $this->input->post('txtSkill');
        }else{
            $skill ='';
        }
        if(!empty($this->input->post('txtNote'))){
            $note = $this->input->post('txtNote');
        }else{
            $note ='';
        }

        $data = array(
            'name' => $name,
            'username' => $email,
            'mobile' => $mobile,

        );
        $dataArr = array(
            'admin_dob' => $dob,
            'admin_education' => $education,
            'admin_location' => $location,
            'admin_skill' => $skill,
            'admin_note' => $note,
            'created_at' => date('Y-m-d H:i:s'),
            'login_id' => $idLoginSession

        );
        $tableName = "tbl_login";
        $DbKey = 'id';
        $idSessin = $idLoginSession;
        $insertId = $this->Setting_model->updateRecord($DbKey, $idSessin, $tableName, $data);
        $loginId = $this->Setting_model->getadminDetailBySessionId($idLoginSession);
        if(empty($loginId)){
            $this->db->insert('tbl_adminlogindetail', $dataArr);
        }else{
            $tableName = "tbl_adminlogindetail";
            $DbKey = 'aid_detail';
            $idSessin = $idLoginSession;
            $insertId = $this->Setting_model->updateRecord($DbKey, $idSessin, $tableName, $dataArr);
        }
        if ($insertId > 0) {
            $this->session->set_flashdata('done', "Your Information is Successfully Saved...!");
            redirect("admin/Profile");
        } else {
            $this->session->set_flashdata('error', "Your Information is Not Saved...!");
            redirect("admin/Profile");

        }


    }


}
