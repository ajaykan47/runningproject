<?php

/**
 * Created by $ajaykan47.
 * User: admin
 * Date: 6/2/2018
 * Time: 5:47 PM
 */
class Frequency extends CI_Controller
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
        $tableName = "mast_tbl_frequency";
        $DbKey = "mast_frequency_id";
        $data['editResult'] = $this->Setting_model->getListById($idG, $DbKey, $tableName);
        $tableName = "mast_tbl_frequency";
        $data['list'] = $this->Setting_model->getList($tableName);
        $this->load->view('admin/frequency/index', $data);
        $this->load->view('admin/include/footer');


    }

    public function addFrequency()
    {

        $this->form_validation->set_rules('txtFrequency', 'Frequency', 'trim|required');
        $this->form_validation->set_rules('txtStatus', 'Status', 'trim');

        if (($this->form_validation->run() == FALSE)) {
            $this->session->set_flashdata('error', "Every Field is Required Please Fill...!");
            redirect('admin/Frequency');
        } else {

            $frequency = $this->input->post('txtFrequency');
            $select = "frequency_name";
            $tableName = "mast_tbl_frequency";
            $whereCondition = array('frequency_name' => $frequency);
            $returnVal = "frequency_name";
            $existVal = $this->Setting_model->getExitingData($select, $tableName, $whereCondition, $returnVal);
            if ($existVal == $frequency) {
                $this->session->set_flashdata('error', 'This <b style="color: greenyellow; ">' . $frequency . ' </b> is Already Exist Please Enter Another Type...!');
                redirect('admin/Frequency');
            } else {
                $frequency = $this->input->post('txtFrequency');
            }


            if (!empty($this->input->post('txtStatus'))) {
                $status = $this->input->post('txtStatus');
            } else {
                $status = 'Inactive';
            }

            $data = array(
                'frequency_name' => $frequency,
                'created_at' => date('Y-m-d H:i:s'),
                'status' => $status,
                'delStatus' => 'no'
            );
            $tableName = "mast_tbl_frequency";
            $res = $this->Setting_model->insertData($tableName, $data);
            if (!empty($res)) {
                $this->session->set_flashdata('done', 'Your data successfully Save');
                redirect("admin/Frequency");
            } else {
                $this->session->set_flashdata('error', 'Your data not Inserted');
                redirect("admin/Frequency");
            }
        }


    }

    public function updateFrequency()
    {

        $idH = $this->input->post('hidden_id');
        $frequency = $this->input->post('txtFrequency');
        if (!empty($this->input->post('txtStatus'))) {
            $status = $this->input->post('txtStatus');
        } else {
            $status = 'Inactive';
        }
        $data = array(
            'frequency_name' => $frequency,
            'updated_at' => date('Y-m-d H:i:s'),
            'status' => $status,
            'delStatus' => 'no'
        );
        $tableName = "mast_tbl_frequency";
        $DbKey = "mast_frequency_id";
        if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {
            $this->session->set_flashdata('done', 'Record Successfully updated...!!');
            redirect("admin/Frequency");
        } else {
            $this->session->set_flashdata('error', 'Record  is not successfully updated...!!');
            redirect("admin/Frequency");
        }

    }


    public function deleteFrequency()
    {
        $data['value'] = $this->session->userdata('logindetails');
        $user_type = $data['value']['user_type'];
        $idH = $this->input->get('id');
        $idH = base64_decode($idH);

        if ($user_type == 2) {
            $data = array(
                'delStatus' => 'yes',

            );
            $tableName = "mast_tbl_frequency";
            $DbKey = "mast_frequency_id";
            if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {

                $this->session->set_flashdata('done', 'Frequency  Delete Successfully ...!!');
                redirect("admin/Frequency");
            } else {
                $this->session->set_flashdata('error', 'Frequency   is not successfully deleted...!!');
                redirect("admin/Frequency");
            }

        } else {

            $tableName = "mast_tbl_frequency";
            $DbKey = "mast_frequency_id";
            if ($this->Setting_model->deleteRecord($DbKey, $idH, $tableName)) {

                $this->session->set_flashdata('done', 'Frequency  Restore Successfully ...!!');
                redirect("admin/Frequency");
            } else {
                $this->session->set_flashdata('error', 'Frequency  is Already Restore...!!');
                redirect("admin/Frequency");
            }
        }
    }

}