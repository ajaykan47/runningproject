<?php

/**
 * Created by PhpStorm.
 * User: admin
 * Date: 6/1/2018
 * Time: 4:13 PM
 */
class OwnershipType extends CI_Controller
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
        $data['title'] = 'Add Ownership Type';
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/include/sidebar');
        $tableName = "mast_tbl_ownershiptype";
        $DbKey = "mast_ownershiptype_id";
        $data['editResult'] = $this->Setting_model->getListById($idG, $DbKey, $tableName);
        $tableName = "mast_tbl_ownershiptype";
        $data['list'] = $this->Setting_model->getList($tableName);
        $this->load->view('admin/ownership-type/index', $data);
        $this->load->view('admin/include/footer');


    }

    public function addOwnType()
    {

        $this->form_validation->set_rules('txtOwntypeName', 'Owner Ship Type', 'trim|required');
        $this->form_validation->set_rules('txtStatus', 'Status', 'trim');

        if (($this->form_validation->run() == FALSE)) {
            $this->session->set_flashdata('error', "Every Field is Required Please Fill...!");
            redirect('admin/OwnershipType');
        } else {

            $OwntypeName = $this->input->post('txtOwntypeName');
            $select = "ownershiptype_name";
            $tableName = "mast_tbl_ownershiptype";
            $whereCondition = array('ownershiptype_name' => $OwntypeName);
            $returnVal = "ownershiptype_name";
            $existVal = $this->Setting_model->getExitingData($select, $tableName, $whereCondition, $returnVal);
            if ($existVal == $OwntypeName) {
                $this->session->set_flashdata('error', 'This <b style="color: greenyellow; ">' . $OwntypeName . ' </b> is Already Exist Please Enter Another Type...!');
                redirect('admin/OwnershipType');
            } else {
                $OwntypeNameVal = $this->input->post('txtOwntypeName');
            }


            if (!empty($this->input->post('txtStatus'))) {
                $status = $this->input->post('txtStatus');
            } else {
                $status = 'Inactive';
            }

            $data = array(
                'ownershiptype_name' => $OwntypeNameVal,
                'created_at' => date('Y-m-d H:i:s'),
                'status' => $status,
                'delStatus' => 'no'
            );
            $tableName = "mast_tbl_ownershiptype";
            $res = $this->Setting_model->insertData($tableName, $data);
            if (!empty($res)) {
                $this->session->set_flashdata('done', 'Your data successfully Save');
                redirect("admin/OwnershipType");
            } else {
                $this->session->set_flashdata('error', 'Your data not Inserted');
                redirect("admin/OwnershipType");
            }
        }


    }

    public function updateOwnType()
    {
        $idH = $this->input->post('hidden_id');
        $OwntypeNameVal = $this->input->post('txtOwntypeName');
        if (!empty($this->input->post('txtStatus'))) {
            $status = $this->input->post('txtStatus');
        } else {
            $status = 'Inactive';
        }
        $data = array(
            'ownershiptype_name' => $OwntypeNameVal,
            'updated_at' => date('Y-m-d H:i:s'),
            'status' => $status,
            'delStatus' => 'no'
        );
        $tableName = "mast_tbl_ownershiptype";
        $DbKey = "mast_ownershiptype_id";
        if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {
            $this->session->set_flashdata('done', 'Record Successfully updated...!!');
            redirect("admin/OwnershipType");
        } else {
            $this->session->set_flashdata('error', 'Record  is not successfully updated...!!');
            redirect("admin/OwnershipType");
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
            $tableName = "mast_tbl_ownershiptype";
            $DbKey = "mast_ownershiptype_id";
            if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {

                $this->session->set_flashdata('done', 'OwnerShip Type Delete Successfully ...!!');
                redirect("admin/OwnershipType");
            } else {
                $this->session->set_flashdata('error', 'OwnerShip Type  is not successfully deleted...!!');
                redirect("admin/OwnershipType");
            }

        } else {

            $tableName = "mast_tbl_ownershiptype";
            $DbKey = "mast_ownershiptype_id";
            if ($this->Setting_model->deleteRecord($DbKey, $idH, $tableName)) {

                $this->session->set_flashdata('done', 'OwnerShip Type Restore Successfully ...!!');
                redirect("admin/OwnershipType");
            } else {
                $this->session->set_flashdata('error', 'OwnerShip Type is Already Restore...!!');
                redirect("admin/OwnershipType");
            }
        }
    }

}