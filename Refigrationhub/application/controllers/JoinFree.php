<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JoinFree extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Setting_model');
        $this->load->library('user_agent');
    }

    public function index()
    {
        $data['title'] = "Refrigeration Hub";
        $data['author'] = "Refrigeration Hub";
        $data['description'] = "Refrigeration Hub";
        $data['keywords'] = "Refrigeration Hub";
        $this->load->view('site/join-free/header', $data);
        $this->load->view('site/join-free/register');
        $this->load->view('site/include/footer');
    }

    public function registration()
    {
        // print_r($_POST);die;
        $this->form_validation->set_rules('txtMail', 'E-mail', 'trim|required');
        $this->form_validation->set_rules('txtNumber', 'Number', 'trim|required');
        $this->form_validation->set_rules('txtName', 'Number', 'trim|required');
        $this->form_validation->set_rules('txtCompanyName', 'Company Name', 'trim|required');
        $this->form_validation->set_rules('txtPinCode', 'Pin Code', 'trim|required');
        $this->form_validation->set_rules('txtCityName', 'Pin Code', 'trim|required');
        $this->form_validation->set_rules('txtRegUserType', 'Type', 'trim|required');
        if ($this->form_validation->run() == false) {
            redirect('JoinFree');
        } else {

            $email = $this->input->post('txtMail');
            $select = "reguser_mail";
            $tableName = "tbl_userregistration";
            $whereCondition = array('reguser_mail' => $email);
            $returnVal = "reguser_mail";
            $existVal = $this->Setting_model->getExitingData($select, $tableName, $whereCondition, $returnVal);
            if ($existVal == $email) {
                $this->session->set_flashdata('error', ' <b style="color: #ff2f2f; ">' . $email . ' </b> is Already Exist Please Enter Another E-mail-Address Or Reset Password...!');
                redirect("JoinFree");
            } else {
                $email = $this->input->post('txtMail');
            }
            $number = $this->input->post('txtNumber');
            $name = $this->input->post('txtName');
            $companyname = $this->input->post('txtCompanyName');
            $pincode = $this->input->post('txtPinCode');
            $cityname = $this->input->post('txtCityName');
            $ipAddress = $this->input->ip_address();
            $browser = $this->agent->agent_string();
           // $AutoGenUser =
            $AutoPass = date('Ymdhis');
            if (!empty($this->input->post('txtRegUserType'))) {
                $ReguserType = $this->input->post('txtRegUserType');
            } else {
                $ReguserType = 1; // Guest User
            }
            $opt = (mt_rand(100000, 999999));
            $resPass= autouser-$AutoPass;
            $data = array(
                'reguser_mail' => $email,
                'reguser_mobile' => $number,
                'reguser_name' => $name,
                'reguser_company' => $companyname,
                'reguser_pin_code' => $pincode,
                'reguser_city_name' => $cityname,
                'resuser_password' => password_hash($resPass, PASSWORD_DEFAULT),
                'auto_genratename' => "autouser-$AutoGenUser",
                'auto_genratepass'=>"autouser-$AutoPass",
                'reguser_agent' => $browser,
                'reguser_ip' => $ipAddress,
                'reguser_type' => $ReguserType,
                'delStatus' => 'no',
                'status' => 'Active',
                'reguser_opt' => $opt,
                'created_at' => date('Y-m-d H:i:s')
            );

            $RegSsess_data = array(
                'reguser_mail' => $email,
                'reguser_type' => $ReguserType,

            );
            $this->session->set_userdata('Regdetails', $RegSsess_data);
            $tableName = "tbl_userregistration";
            $returnId = $this->Setting_model->insertData($tableName, $data);
            if ($returnId > 0) {
                $this->session->set_flashdata('done', 'A confirmation link  code has been sent to ' . $email . ' Please Login and Click activation Link!');
                redirect("JoinFree/confirmationOtp");
            } else {
                $this->session->set_flashdata('error', 'Your data not saved Please Try Again...!');
                redirect("JoinFree");
            }
        }
    }

    public function confirmationOtp()
    {

        $data['title'] = "Refrigeration Hub";
        $data['author'] = "Refrigeration Hub";
        $data['description'] = "Refrigeration Hub";
        $data['keywords'] = "Refrigeration Hub";
        $this->load->view('site/join-free/header', $data);
        $this->load->view('site/join-free/otp-confirmation-register');
        $this->load->view('site/include/footer');
    }

    public function confirmationOtpSuccess()
    {
        $data['value'] = $this->session->userdata('Regdetails');
        $reguser_type = $data['value']['reguser_type'];
        $reguser_mail = $data['value']['reguser_mail'];
        $otpValidate = $this->input->post('txtVarification');
        $select = "reguser_opt";
        $tableName = "tbl_userregistration";
        $whereCondition = array('reguser_mail' => $reguser_mail, 'reguser_type' => $reguser_type, 'status' => 'Active');
        $returnVal = "reguser_opt";
        $existVal = $this->Setting_model->getExitingData($select, $tableName, $whereCondition, $returnVal);
        if ($existVal !== $otpValidate) {
            $this->session->set_flashdata('error', ' <b style="color: #ff2f2f; ">' . $otpValidate . ' </b>  You OTP is Not Valid Please Enter Correct OTP...!');
            redirect("JoinFree/confirmationOtp");
        } else {
            redirect('user/Dashboard');
        }


    }

}
