<?php
/**************************************
 * Created By Ajaykan47*******************
 * 09th/March/2018*************************
 * ************FlawlessIndia Pvt Ltd************
 * ************************************************/
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function index()
    {

        $this->load->view('admin/login-page/admin-login');

    }

    public function adminLogin()
    {
        $this->load->library('user_agent');
        $this->load->model('Login_Model');
        $username = $this->input->post('inputEmail');
        $hash_from_database = $this->Login_Model->getUserPass($username);
        if (!password_verify($this->input->post('inputPass'), $hash_from_database)) {
            $this->session->set_flashdata('error', 'Please Check Your Password and Role Type...!');
            redirect('admin/Auth');
        } else {
            $password = $hash_from_database;
        }
        $ipAddress = $this->input->ip_address();
        $browser = $this->agent->agent_string();
        $userType = $this->Login_Model->getUserType($username);
        if(!empty($userType) && ($userType > 0)){
            $ddlLoginType=$userType;
        }else{
            $this->session->set_flashdata('error', 'Please Check Your User Name,Password and Role Type Or Contact To Administrator');
            redirect('admin/Auth');
        }
        $sess_data = array();
        if ($ddlLoginType == 1) {
            $data = array('username' => $username,
                'password' => $password,
                'user_type' => $ddlLoginType

            );
            $dataLoginHistory =
                array(
                    'username' => $username,
                    'password' => $password,
                    'user_type' => $ddlLoginType,
                    'user_agent' => $browser,
                    'ip_address' => $ipAddress,
                    'login_time' => date('Y-m-d H:i:s'),
                );

            $this->db->insert('tbl_loginhistory', $dataLoginHistory);
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
                $privilege= $usedetails['result'][0]->privilege;
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

                redirect('admin/Dashboard');
            } else {

                $this->session->set_flashdata('error', 'Please Check Your User Name,Password and Role Type Or Contact To Administrator');
                redirect('admin/Auth');
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

                redirect('admin/Dashboard');
            } else {

                $this->session->set_flashdata('error', 'Please Check Your User Name,Password and Role Type Or Contact To Administrator');
                redirect('admin/Auth');
            }
        }

    }


}
