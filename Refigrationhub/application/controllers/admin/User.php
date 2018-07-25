<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
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
        $idG = $this->input->get('id');
        $idG = base64_decode($idG);
        $data['title'] = 'New User';
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/include/sidebar');
        $tableName = "tbl_login";
        $DbKey = "id";
        $data['editResult'] = $this->Setting_model->getListById($idG, $DbKey, $tableName);
        $this->load->view('admin/user/index', $data);
        $this->load->view('admin/include/footer');

    }
    public function addUser()
    {
        $this->form_validation->set_rules('txtName', 'Name', 'trim|required');
        $this->form_validation->set_rules('txtMobile', 'Mobile', 'trim|required');
        $this->form_validation->set_rules('txtPassword', 'New Password', 'required|max_length[15]|min_length[6]|alpha_numeric');
        $this->form_validation->set_rules('txtConfirmPass', 'Re-enter', 'required|matches[txtPassword]');
        if ($this->form_validation->run() == 'FALSE') {
            $this->session->set_flashdata('error', 'Please Enter Required Field...!');
            redirect("admin/User");
        } else {

            $email = $this->input->post('txtMail');
            $select = 'username';
            $tableName = "tbl_login";
            $whereCondition = array('username', $email);
            $returnVal = "username";
            $UserExit = $this->Setting_model->getExitingData($select, $tableName, $whereCondition, $returnVal);
            if ($UserExit == $email) {
                $this->session->set_flashdata('error', ' The E-<b style="color: #076580;">' . $email . '</b> address you have entered is already registered...!');
                redirect("admin/User");
            } else {
                $email = $this->input->post('txtMail');
            }
            $name = $this->input->post('txtName');
            $password = $this->input->post('txtPassword');
            $mobile = $this->input->post('txtMobile');
            $userType = $this->input->post('txtUserType');
            if (!empty($this->input->post('txtPrivilege'))) {
                $privilege = $this->input->post('txtPrivilege');
                $privilege_separated = implode(",", $privilege);
            } else {
                $privilege_separated = '';
            }

            if (!empty($this->input->post('txtStatus'))) {
                $status = $this->input->post('txtStatus');
            } else {
                $status = 'inactive';
            }

            $data = array(
                'name' => $name,
                'mobile' => $mobile,
                'username' => $email,
                'password' => password_hash($password, PASSWORD_DEFAULT),
                'user_type' => $userType,
                'created' => date('Y-m-d H:i:s'),
                'status' => $status,
                'delStatus' => 'no',
                'privilege' => $privilege_separated
            );

            $tableName = "tbl_login";
            $res = $this->Setting_model->insertData($tableName, $data);
            if (!empty($res)) {
                $this->session->set_flashdata('done', '<b style="color:blueviolet"> ' . $name . ' </b> is a New Member Successfully Created Today...!');
                redirect("admin/User");
            } else {
                $this->session->set_flashdata('error', 'Your data not Inserted');
                redirect("admin/User");
            }


        }

    }

    public function listUser()
    {
        $this->load->view('admin/include/header');
        $this->load->view('admin/include/sidebar');
        $tableName = "tbl_login";
        $data['list'] = $this->Setting_model->getList($tableName);
        $this->load->view('admin/user/list', $data);
       // $this->load->view('admin/include/footer');

    }

    public function updateUser()
    {
        $idH = $this->input->post('hidden_id');
        $name = $this->input->post('txtName');
        $email = $this->input->post('txtMail');
        $password = $this->input->post('txtPassword');
        $mobile = $this->input->post('txtMobile');
        $userType = $this->input->post('txtUserType');
        if (!empty($this->input->post('txtPrivilege'))) {
            $privilege = $this->input->post('txtPrivilege');
            $privilege_separated = implode(" , ", $privilege);
        } else {
            $privilege_separated = '';
        }

        if (!empty($this->input->post('txtStatus'))) {
            $status = $this->input->post('txtStatus');
        } else {
            $status = 'inactive';
        }
        $data = array(
            'name' => $name,
            'mobile' => $mobile,
            'username' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'user_type' => $userType,
            'created' => date('Y-m-d H:i:s'),
            'status' => $status,
            'delStatus' => 'no',
            'privilege' => $privilege_separated
        );

        $tableName = "tbl_login";
        $DbKey = "id";
        if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {

            $this->session->set_flashdata('done', 'Successfully updated...!!');
            redirect('admin/User/listUser');
        } else {
            $this->session->set_flashdata('error', 'Record  is not successfully updated...!!');
            redirect('admin/User/listUser');
        }

    }

    public function ChangePassword()
    {

        $idH = $this->input->post('hidden_id');
        $password = $this->input->post('txtPassword');
        $passwordCnf = $this->input->post('txtConfirmPass');
        $username = $this->input->post('username');
        if ($password == $passwordCnf) {
            $password = $passwordCnf;
            $data = array(
                'password' => password_hash($password, PASSWORD_DEFAULT),
                'updated_at' => date('Y-m-d H:i:s'),
            );

            $tableName = "tbl_login";
            $DbKey = "id";
            $this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data);
            $this->session->set_flashdata('done', '<b style="color:yellow;">' . $username . '</b> Password Change Successfully, Thank for Changes the Password Please Update Password Time to Time....!!');
            redirect('admin/User/listUser');
        } else {
            $this->session->set_flashdata('error', 'Password is not successfully Change...!!');
            redirect('admin/User/listUser');
        }

    }

    public function deleteUser()
    {

        $idH = $this->input->get('id');
        $idH = base64_decode($idH);
        $data = array(
            'delStatus' => 'yes'
        );
        $tableName = "tbl_login";
        $DbKey = "id";
        if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {

            $this->session->set_flashdata('done', 'User Delete Successfully ...!!');
            redirect('admin/User/listUser');
        } else {
            $this->sssion->set_flashdata('error', 'User  is not successfully deleted...!!');
            redirect('admin/User/listUser');
        }
    }


}
