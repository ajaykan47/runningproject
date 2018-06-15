<?php
/**************************************
 * Created By Ajaykan47*******************
 * 09th/June/2018*************************
 * ************FlawlessIndia***********
 * ************************************************/
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Registration_Model');
        $this->load->library('user_agent');
    }

    public function index()
    {
        $data['title'] = "Refrigeration Hub";
        $data['author'] = "Refrigeration Hub";
        $data['description'] = "Refrigeration Hub";
        $data['keywords'] = "Refrigeration Hub";
        $this->load->view('site/include/login-header', $data);
        $this->load->view('site/login/login');
        $this->load->view('site/include/footer');

    }

    public function userLogin()
    {
        // print_r($_POST); die;
        $username = $this->input->post('inputEmail');
        $hash_from_database = $this->Registration_Model->getRegisteredUserPass($username);
        if (!password_verify($this->input->post('inputPass'), $hash_from_database)) {
            $this->session->set_flashdata('error', 'Please Check Your User Name and Password...!');
            redirect('Login');
        } else {
            $password = $hash_from_database;
        }
        $ipAddress = $this->input->ip_address();
        $browser = $this->agent->agent_string();
        $reguserType = $this->Registration_Model->getRegUserType($username);
        if (!empty($userType) && ($userType > 0)) {
            $ddlLoginType = $reguserType;
        } else {
            $this->session->set_flashdata('error', 'Please Check Your User Name and Password');
            redirect('Login');
        }
        $sess_data = array();
        if ($ddlLoginType == 1) {
            $data = array('reguser_name' => $username,
                'password' => $password,
                'user_type' => $ddlLoginType

            );
            $dataRegUserLoginHistory =
                array(
                    'username' => $username,
                    'password' => password_hash($password, PASSWORD_DEFAULT),
                    'user_type' => $ddlLoginType,
                    'user_agent' => $browser,
                    'ip_address' => $ipAddress,
                    'login_time' => date('Y-m-d H:i:s'),
                );

            $this->db->insert('tbl_userregloginhistory', $dataRegUserLoginHistory);
            $tableName = 'tbl_login';
            $this->load->model('Login_Model');
            $usedetails['result'] = $this->Login_Model->getData($tableName, $data);

            if (!empty($usedetails['result'])) {
                $uid = $usedetails['result'][0]->id;
                $name = $usedetails['result'][0]->name;
                $username = $usedetails['result'][0]->username;
                $user_type = $usedetails['result'][0]->user_type;
                $user_status = $usedetails['result'][0]->status;
                $mobile = $usedetails['result'][0]->mobile;
                $privilege = $usedetails['result'][0]->privilege;
                $regUserSess_data = array(
                    'name' => $name,
                    'username' => $username,
                    'user_type' => $user_type,
                    'user_status' => $user_status,
                    'mobile' => $mobile,
                    'privilege' => $privilege,
                    'uid' => $uid,
                );
                $this->session->set_userdata('reguserlogindetails', $regUserSess_data);
                redirect('user/Dashboard');
            } else {

                $this->session->set_flashdata('error', 'Please Check Your User Name,Password and Role Type Or Contact To Administrator');
                redirect('Login');
            }
        } else {

            $data = array('username' => $username, 'password' => $password, 'user_type' => $ddlLoginType);
            $tableName = 'tbl_login';
            $this->load->model('Login_Model');
            $usedetails['result'] = $this->Login_Model->getData($tableName, $data);

            if (!empty($usedetails['result'])) {
                $uid = $usedetails['result'][0]->id;
                $name = $usedetails['result'][0]->name;
                $username = $usedetails['result'][0]->username;
                $user_type = $usedetails['result'][0]->user_type;
                $user_status = $usedetails['result'][0]->status;
                $mobile = $usedetails['result'][0]->mobile;
                $privilege = $usedetails['result'][0]->privilege;
                $sess_data = array(
                    'name' => $name,
                    'username' => $username,
                    'user_type' => $user_type,
                    'user_status' => $user_status,
                    'mobile' => $mobile,
                    'privilege' => $privilege,
                    'uid' => $uid,
                );

                $this->session->set_userdata('logindetails', $sess_data);

                redirect('user/Dashboard');
            } else {

                $this->session->set_flashdata('error', 'Please Check Your User Name,Password and Role Type Or Contact To Administrator');
                redirect('user/Auth');
            }
        }

    }

    public function forgotPass()
    {


        $this->load->view('pages/examples/forgot-password');

    }

    public function uptPassOfUser()
    {
        $useremail = $this->input->post('useremail');
        $this->session->set_userdata('pchangeUemail', $useremail);
        $fromEmail = 'noreply@refrigerationhub.tk';
        $fromName = 'Refrigeration Hub';
        $this->load->library('email');
        $this->email->set_newline("\r\n");
        //$this->email->intialize($config);
        // $nodeRequestEmail=strip_tags($nodeRequestEmail);

        $nodeRequestEmail = '<table cellpadding="0" cellspacing="0">';
        $nodeRequestEmail .= '<tr>';
        $nodeRequestEmail .= '<td class="pattern" width="600">';
        $nodeRequestEmail .= '<table cellpadding="0" cellspacing="0">';
        $nodeRequestEmail .= '<tr>';
        $nodeRequestEmail .= ' <td style="background: #eee; padding: 20px 0;">';
        $nodeRequestEmail .= ' <table cellpadding="0" cellspacing="0">';
        $nodeRequestEmail .= ' <tr>';
        $nodeRequestEmail .= '  <td class="col col1" width="600">';
        $nodeRequestEmail .= '<table cellpadding="0" cellspacing="0">';
        $nodeRequestEmail .= ' <tr>';
        $nodeRequestEmail .= '<td style="padding: 0 10px;">';
        $nodeRequestEmail .= ' <table cellpadding="0" cellspacing="0">';
        $nodeRequestEmail .= ' <tr>';
        $nodeRequestEmail .= ' <td
        style="font-family: arial,sans-serif; font-size: 16px; color: #000; padding-bottom: 8px;">
       <p>  Dear User ,</p>
        </td>';
        $nodeRequestEmail .= ' </tr>';
        $nodeRequestEmail .= ' <tr>';
        $nodeRequestEmail .= '<td class="description"
        style="font-family: arial,sans-serif; font-size: 12px; color: #333; padding-bottom: 8px;">
        
        <span>We sent an email with change password link. Please click on the link and change your password.</span>
        </td>';
        $nodeRequestEmail .= '   </tr>';
        $nodeRequestEmail .= '<tr>';
        $nodeRequestEmail .= '<td 
        style="font-family: arial,sans-serif; font-size: 14px; font-weight: bold; color: #000">
        <strong>Sincerely,</Strong><br/>
        <strong></Strong></br/>
        </td>';
        $nodeRequestEmail .= '<td align="center"
        style="font-family: arial,sans-serif; font-size: 14px; font-weight: bold; color: #000">
        <a href="http://refrigerationhub.tk/Login/changepassword" style="text-decoration: none;">
        Reset Password »</a>
        </td>';
        $nodeRequestEmail .= '</tr>';
        $nodeRequestEmail .= '</table>';
        $nodeRequestEmail .= '</td>';
        $nodeRequestEmail .= '</tr>';
        $nodeRequestEmail .= '</table>';
        $nodeRequestEmail .= '</td>';

        $nodeRequestEmail .= '</tr>';
        $nodeRequestEmail .= '</table>';

        $this->email->set_header('MIME-Version', '1.0; charset=utf-8');
        $this->email->set_header('Content-type', 'text/html');

        $this->email->from($fromEmail, $fromName);
        $this->email->to($useremail);
        //echo $nodeRequestEmail;die;
        $this->email->subject('Reset Password');
        $this->email->message($nodeRequestEmail, TRUE);
        $this->email->send();
        // echo $this->email->print_debugger();die;
        $this->session->set_flashdata('forgetpswd', 'Link for Reset The Password has been sent to your email. Please Check Your Email.');
        redirect('Login');
    }

    public function changepassword()
    {
        $this->load->view('pages/examples/changePasswordusingemail');
    }

    public function forgotPasschange()
    {
        $user_name = $this->input->post('username');
        $password = $this->input->post('password');
        $usertype = $this->input->post('ddlLoginType');
        $this->load->model('Owner_Model');
        if ($usertype == 4) {

            $data = array('owner_email' => $user_name,
                'owner_pass' => $password,
                'updated' => date('Y-m-d H:i:s')
            );
            $tableName = 'tbl_ownerinfo';
            $id = array('owner_email' => $user_name);
            if ($this->Owner_Model->updateById($tableName, $data, $id)) {
                $this->session->set_flashdata('msgupt', 'Your Profile data Successfully updated...!!');
                //;
                $fromEmail = 'noreply@refrigerationhub.tk';
                $fromName = 'Refrigeration Hub';

                $nodeRequestEmail = '<table cellpadding="0" cellspacing="0">';
                $nodeRequestEmail .= '<tr>';
                $nodeRequestEmail .= '<td class="pattern" width="600">';
                $nodeRequestEmail .= '<table cellpadding="0" cellspacing="0">';
                $nodeRequestEmail .= '<tr>';
                $nodeRequestEmail .= ' <td style="background: #eee; padding: 20px 0;">';
                $nodeRequestEmail .= ' <table cellpadding="0" cellspacing="0">';
                $nodeRequestEmail .= ' <tr>';
                $nodeRequestEmail .= '  <td class="col col1" width="600">';
                $nodeRequestEmail .= '<table cellpadding="0" cellspacing="0">';
                $nodeRequestEmail .= ' <tr>';
                $nodeRequestEmail .= '<td style="padding: 0 10px;">';
                $nodeRequestEmail .= ' <table cellpadding="0" cellspacing="0">';
                $nodeRequestEmail .= ' <tr>';

                $nodeRequestEmail .= ' <td
        style="font-family: arial,sans-serif; font-size: 16px; color: #000; padding-bottom: 8px;">
       <p>  Dear User ,</p>
        </td>';
                $nodeRequestEmail .= ' </tr>';
                $nodeRequestEmail .= ' <tr>';
                $nodeRequestEmail .= '<td class="description"
        style="font-family: arial,sans-serif; font-size: 12px; color: #333; padding-bottom: 8px;">
        
        <span>Password has been successfully Updated.</span>
        </td>';
                $nodeRequestEmail .= '   </tr>';
                $nodeRequestEmail .= '<tr>';
                $nodeRequestEmail .= '<td 
        style="font-family: arial,sans-serif; font-size: 14px; font-weight: bold; color: #000">
        <strong>Sincerely,</Strong><br/>
        <strong>Refrigration Hub</Strong></br/>
        </td>';

                $nodeRequestEmail .= '</tr>';
                $nodeRequestEmail .= '</table>';
                $nodeRequestEmail .= '</td>';
                $nodeRequestEmail .= '</tr>';
                $nodeRequestEmail .= '</table>';
                $nodeRequestEmail .= '</td>';
                $nodeRequestEmail .= '</tr>';
                $nodeRequestEmail .= '</table>';
                $fromEmail = 'noreply@refrigerationhub.tk';
                $fromName = 'Refrigeration Hub';
                $this->load->library('email');
                $this->email->set_newline("\r\n");
                $this->email->from($fromEmail, $fromName);
                $this->email->to($user_name);
                $this->email->subject('Reset Password');
                $this->email->message($nodeRequestEmail, TRUE);
                $this->email->set_header('MIME-Version', '1.0; charset=utf-8');
                $this->email->set_header('Content-type', 'text/html');
                $this->email->send();
                //echo $this->email->print_debugger();
                $this->sssion->set_flashdata('msgupter', 'Your Profile data is  successfully updated...!!');
                redirect('Login');

            } else {
                $this->sssion->set_flashdata('msgupter', 'Your Profile data is not successfully updated...!!');
                redirect('Login/changepassword');
            }

        } else {
            $data = array('username' => $user_name,
                'password' => $password,
                'updated_date' => date('Y-m-d H:i:s')
            );
            $tableName = 'tbl_user';
            $id = array('username' => $user_name);
            if ($this->Owner_Model->updateById($tableName, $data, $id)) {
                $this->session->set_flashdata('msgupt', 'Your Profile data Successfully updated...!!');
                //$this->load->library('email');
                $nodeRequestEmail = '<table cellpadding="0" cellspacing="0">';
                $nodeRequestEmail .= '<tr>';
                $nodeRequestEmail .= '<td class="pattern" width="600">';
                $nodeRequestEmail .= '<table cellpadding="0" cellspacing="0">';
                $nodeRequestEmail .= '<tr>';
                $nodeRequestEmail .= ' <td style="background: #eee; padding: 20px 0;">';
                $nodeRequestEmail .= ' <table cellpadding="0" cellspacing="0">';
                $nodeRequestEmail .= ' <tr>';
                $nodeRequestEmail .= '  <td class="col col1" width="600">';
                $nodeRequestEmail .= '<table cellpadding="0" cellspacing="0">';
                $nodeRequestEmail .= ' <tr>';
                $nodeRequestEmail .= '<td style="padding: 0 10px;">';
                $nodeRequestEmail .= ' <table cellpadding="0" cellspacing="0">';
                $nodeRequestEmail .= ' <tr>';
                $nodeRequestEmail .= ' <td
        style="font-family: arial,sans-serif; font-size: 16px; color: #000; padding-bottom: 8px;">
       <p>  Dear User ,</p>
        </td>';
                $nodeRequestEmail .= ' </tr>';
                $nodeRequestEmail .= ' <tr>';
                $nodeRequestEmail .= '<td class="description"
        style="font-family: arial,sans-serif; font-size: 12px; color: #333; padding-bottom: 8px;">
        
        <span>Password has been successfully Updated.</span>
        </td>';
                $nodeRequestEmail .= '   </tr>';
                $nodeRequestEmail .= '<tr>';
                $nodeRequestEmail .= '<td 
        style="font-family: arial,sans-serif; font-size: 14px; font-weight: bold; color: #000">
        <strong>Sincerely,</Strong><br/>
        <strong>FlawlessIndia Info Tech Pvt Ltd.</Strong></br/>
        </td>';

                $nodeRequestEmail .= '</tr>';
                $nodeRequestEmail .= '</table>';
                $nodeRequestEmail .= '</td>';
                $nodeRequestEmail .= '</tr>';
                $nodeRequestEmail .= '</table>';
                $nodeRequestEmail .= '</td>';

                $nodeRequestEmail .= '</tr>';
                $nodeRequestEmail .= '</table>';


                $fromEmail = 'noreply@refrigerationhub.tk';
                $fromName = 'Refrigeration Hub';


                $this->load->library('email');
                $this->email->set_newline("\r\n");


                $this->email->from($fromEmail, $fromName);
                $this->email->to($user_name);

                $this->email->subject('Reset Password');
                $this->email->message($nodeRequestEmail, TRUE);
                $this->email->set_header('MIME-Version', '1.0; charset=utf-8');
                $this->email->set_header('Content-type', 'text/html');
                $this->email->send();
                redirect('Login');

            } else {
                $this->sssion->set_flashdata('msgupter', 'Your Profile data is not successfully updated...!!');
                redirect('Login/changepassword');
            }

        }

    }


}


