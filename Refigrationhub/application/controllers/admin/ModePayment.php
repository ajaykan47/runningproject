<?php
/**
 * Created by $ajaykan47.
 * User: admin
 * Date: 6/2/2018
 * Time: 5:47 PM
 */

class ModePayment extends CI_Controller{

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
        $data['title'] = 'Add Ownership Type';
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/include/sidebar');
        $tableName = "mast_tbl_modepayment";
        $DbKey = "mast_modepayment_id";
        $data['editResult'] = $this->Setting_model->getListById($idG, $DbKey, $tableName);
        $tableName = "mast_tbl_modepayment";
        $data['list'] = $this->Setting_model->getList($tableName);
        $this->load->view('admin/mode-payment/index', $data);
        $this->load->view('admin/include/footer');


    }

    public function addMdPayment()
    {
       // print_r($_POST); die;
        $this->form_validation->set_rules('txtPaymentName', 'Owner Ship Type', 'trim|required');
        $this->form_validation->set_rules('txtStatus', 'Status', 'trim');

        if (($this->form_validation->run() == FALSE)) {
            $this->session->set_flashdata('error', "Every Field is Required Please Fill...!");
            redirect('admin/ModePayment');
        } else {

            $paymenyName = $this->input->post('txtPaymentName');
            $select = "modepayment_name";
            $tableName = "mast_tbl_modepayment";
            $whereCondition = array('modepayment_name' => $paymenyName);
            $returnVal = "modepayment_name";
            $existVal = $this->Setting_model->getExitingData($select, $tableName, $whereCondition, $returnVal);
            if ($existVal == $paymenyName) {
                $this->session->set_flashdata('error', 'This <b style="color: greenyellow; ">' . $paymenyName . ' </b> is Already Exist Please Enter Another Type...!');
                redirect('admin/ModePayment');
            } else {
                $paymenyName = $this->input->post('txtPaymentName');
            }


            if (!empty($this->input->post('txtStatus'))) {
                $status = $this->input->post('txtStatus');
            } else {
                $status = 'Inactive';
            }

            $data = array(
                'modepayment_name' => $paymenyName,
                'created_at' => date('Y-m-d H:i:s'),
                'status' => $status,
                'delStatus' => 'no'
            );
            $tableName = "mast_tbl_modepayment";
            $res = $this->Setting_model->insertData($tableName, $data);
            if (!empty($res)) {
                $this->session->set_flashdata('done', 'Your data successfully Save');
                redirect("admin/ModePayment");
            } else {
                $this->session->set_flashdata('error', 'Your data not Inserted');
                redirect("admin/ModePayment");
            }
        }


    }

    public function updateModePayment()
    {

        $idH = $this->input->post('hidden_id');
        $paymenyName = $this->input->post('txtPaymentName');
        if (!empty($this->input->post('txtStatus'))) {
            $status = $this->input->post('txtStatus');
        } else {
            $status = 'Inactive';
        }
        $data = array(
            'modepayment_name' => $paymenyName,
            'updated_at' => date('Y-m-d H:i:s'),
            'status' => $status,
            'delStatus' => 'no'
        );
        $tableName = "mast_tbl_modepayment";
        $DbKey = "mast_modepayment_id";
        if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {
            $this->session->set_flashdata('done', 'Record Successfully updated...!!');
            redirect("admin/ModePayment");
        } else {
            $this->session->set_flashdata('error', 'Record  is not successfully updated...!!');
            redirect("admin/ModePayment");
        }

    }


    public function deleteOwnType()
    {
        $data['value'] = $this->session->userdata('logindetails');
        $user_type = $data['value']['user_type'];
        $idH = $this->input->get('id');
        $idH = base64_decode($idH);

        if ($user_type == 2) {
            $data = array(
                'delStatus' => 'yes',

            );
            $tableName = "mast_tbl_modepayment";
            $DbKey = "mast_modepayment_id";
            if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {

                $this->session->set_flashdata('done', 'OwnerShip Type Delete Successfully ...!!');
                redirect("admin/OwnershipType");
            } else {
                $this->session->set_flashdata('error', 'OwnerShip Type  is not successfully deleted...!!');
                redirect("admin/OwnershipType");
            }

        } else {

            $tableName = "mast_tbl_modepayment";
            $DbKey = "mast_modepayment_id";
            if ($this->Setting_model->deleteRecord($DbKey, $idH, $tableName)) {

                $this->session->set_flashdata('done', 'OwnerShip Type Restore Successfully ...!!');
                redirect("admin/ModePayment");
            } else {
                $this->session->set_flashdata('error', 'OwnerShip Type is Already Restore...!!');
                redirect("admin/ModePayment");
            }
        }
    }

}