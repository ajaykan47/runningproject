<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback extends CI_Controller {

	public function index()
	{
        $data['title']="Refrigration Hub";
        $data['author']="Refrigration Hub";
        $data['description']="Refrigration Hub";
        $data['keywords']="Refrigration Hub";
        $this->load->view('site/include/header',$data);
		$this->load->view('site/feedback/index');
        $this->load->view('site/include/footer');
	}

	public function addFeedBack(){

        $this->form_validation->set_rules('txtSubject', 'Subject', 'trim|required');
        $this->form_validation->set_rules('txtName', 'Name', 'trim|required');
        $this->form_validation->set_rules('txtemail', 'E-mail', 'trim|required');
        $this->form_validation->set_rules('txtProductName', 'Product Name', 'trim|required');
        $this->form_validation->set_rules('txtCompanyname', 'Company Name', 'trim|required');
        $this->form_validation->set_rules('txtMobile', 'Mobile', 'trim|required');
        $this->form_validation->set_rules('txtMessage', 'Message', 'trim');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('error','Please fill Required Field....');
            redirect('Feedback');
        } else {

            $email = $this->input->post('txtMail');
            $txtCategoryId = $this->input->post('txtCategoryId');
            $txtSubcategoryId = $this->input->post('txtSubcategoryId');
            $txtProductName = $this->input->post('txtProductName');
            $txtProductCode = $this->input->post('txtProductCode');
            $productDescription = $this->input->post('txtProductDescription');

            $dataProduct = array(
                'cat_id' => $txtCategoryId,
                'subcat_id' => $txtSubcategoryId,
                'product_name' => $txtProductName,
                'product_name' => $txtProductCode,
                'product_description' => $productDescription,
                'status' => 'Active',
                'created_at' => date('Y-m-d H:i:s')
            );  
            $tableName = "tbl_product";
            $res = $this->Setting_model->insertData($tableName, $dataProduct);
            if (!empty($res)) {
                $this->session->set_flashdata('done', 'Feedback Message has been sent to ' . $email . ' Please Login and Click Activation Link!');
                redirect('Feedback');
            } else {
                $this->session->set_flashdata('error', 'Your data not saved Please Try Again...!');
                redirect('Feedback');
            }
        }

    }

}
