<?php

/**
 * Created by $ajaykan47.
 * User: admin
 * Date: 6/5/2018
 * Time: 1:07 PM
 */
class Seller extends CI_Controller
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
        $this->load->view('admin/seller/index', $data);
        $this->load->view('admin/include/footer');

    }


}