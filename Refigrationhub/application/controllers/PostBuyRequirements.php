<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PostBuyRequirements extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Setting_model');
        $this->load->model('Joinfree_model');
    }

    public function index()
    {
        $data['title'] = "Refrigeration Hub";
        $data['author'] = "Refrigeration Hub";
        $data['description'] = "Refrigeration Hub";
        $data['keywords'] = "Refrigeration Hub";
        $this->load->view('site/include/header', $data);
        $this->load->view('site/post-buy-requirements/index');
        $this->load->view('site/include/footer');
    }

    public function sendRequirement()
    {
        $this->form_validation->set_rules('txtProductName', '"Product"', 'trim|required|min_length[3]|max_length[52]');
        $this->form_validation->set_rules('txtDescRequirement', 'Requirement Description', 'trim');
        $this->form_validation->set_rules('txtEmail', 'State Name ', 'required');
        $this->form_validation->set_rules('txtMobile', 'State Name ', 'required');
        $this->form_validation->set_rules('txtTermCondition', 'State Name ', 'required');
        if (($this->form_validation->run() == FALSE)) {
            $this->session->set_flashdata('error', "Every Field is Required Please Fill...!");
            redirect('PostBuyRequirements');
        } else {
            $productName = $this->input->post('txtProductName');
            $Reqdescription = $this->input->post('txtDescRequirement');
            $email = $this->input->post('txtEmail');
            $mobile = $this->input->post('txtMobile');
            if (!empty($this->input->post('txtTermCondition'))) {
                $termCondition = $this->input->post('txtTermCondition');
            } else {
                $termCondition = '';
            }
            $data = array(
                'pbr_productname' => $productName,
                'pbr_description' => $Reqdescription,
                'pbr_email' => $email,
                'pbr_mobile' => $mobile,
                'pbr_terms' => $termCondition,
                'pbr_ip' => $this->input->ip_address(),
                'created_at' => date('Y-m-d H:i:s'),
            );
            $datapbrSession = array(
                'pbr_email' => $email,
                'pbr_mobile' => $mobile,
            );
            $this->session->set_userdata('postbuyreqSession', $datapbrSession);
            $tableName = "tbl_postbyrequirement";
            $res = $this->Setting_model->insertData($tableName, $data);
            if (!empty($res)) {
                redirect("PostBuyRequirements/Quantity");
            } else {
                $this->session->set_flashdata('error', "You are Missing Something Please Try Again...!");
                redirect("PostBuyRequirements");
            }
        }
    }

    public function Quantity()
    {
        if (!($this->session->userdata('postbuyreqSession'))) {
            $this->session->set_flashdata('error', "Sorry, This URL is being illegally accessed...");
            redirect('PostBuyRequirements/accessDenied');
        }
        $data['title'] = "Refrigeration Hub";
        $data['author'] = "Refrigeration Hub";
        $data['description'] = "Refrigeration Hub";
        $data['keywords'] = "Refrigeration Hub";
        $this->load->view('site/include/header', $data);
        $data['ddlUrgency'] = $this->Joinfree_model->getDDlFrequncy();
        // print_r($data['ddlUrgency']); die;
        $this->load->view('site/post-buy-requirements/quantity', $data);
        $this->load->view('site/include/footer');

    }

    public function addQuantity()
    {

        $this->form_validation->set_rules('txtProductQuanity', '"Quantity"', 'trim');
        $this->form_validation->set_rules('units', '"Quantity"', 'trim');
        $this->form_validation->set_rules('txtordervalueinr', 'Order Value Description', 'trim');
        $this->form_validation->set_rules('txtPrefsupplocation', 'Location', 'trim');
        $this->form_validation->set_rules('txtUrgency', 'Urgency', 'trim');
        if (($this->form_validation->run() == FALSE)) {
            $this->session->set_flashdata('error', "Every Field is Required Please Fill...!");
            redirect('PostBuyRequirements/Quantity');
        } else {
            if (!empty($this->input->post('txtProductQuanity'))) {
                $productQuanity = $this->input->post('txtProductQuanity');
            } else {
                $productQuanity = '';
            }
            if (!empty($this->input->post('units'))) {
                $productUnit = $this->input->post('units');
            } else {
                $productUnit = '';
            }
            if (!empty($this->input->post('txtordervalueinr'))) {
                $OrderVal = $this->input->post('txtordervalueinr');
            } else {
                $OrderVal = '';
            }
            if (!empty($this->input->post('txtPrefsupplocation'))) {
                $location = $this->input->post('txtPrefsupplocation');
            } else {
                $location = '';
            }
            if (!empty($this->input->post('txtUrgency'))) {
                $urgency = $this->input->post('txtUrgency');
            } else {
                $urgency = '';
            }
            if (!empty($this->input->post('txtFrequency'))) {
                $frequency = $this->input->post('txtFrequency');
            } else {
                $frequency = '';
            }

            $data['value'] = $this->session->userdata('postbuyreqSession');
            $postbuyreqemail = $data['value']['pbr_email'];
            $select = "pbr_id";
            $tableName = " tbl_postbyrequirement";
            $whereCondition = array('pbr_email' => $postbuyreqemail);
            $returnVal = "pbr_id";
            $Returnpbr_id = $this->Setting_model->getExitingData($select, $tableName, $whereCondition, $returnVal);
            $data = array(
                'pbrd_quantity' => $productQuanity,
                'pbrd_quantityunit' => $productUnit,
                'pbrd_ordervalue' => $OrderVal,
                'pbrd_suplierlocation' => $location,
                'pbrd_requirementurgency' => $urgency,
                'pbrd_requirementfrequency' => $frequency,
                'created_at' => date('Y-m-d H:i:s'),
                'pbr_id' => $Returnpbr_id
            );
            $tableName = "tbl_postbyrequirementdetail";
            $res = $this->Setting_model->insertData($tableName, $data);
            if (!empty($res)) {
                $this->session->set_flashdata('error', "Thank You ! Your requirements have been posted successfully. We shall get back to your $postbuyreqemail shortly...!");
                redirect("PostBuyRequirements/thankyou");
            } else {
                $this->session->set_flashdata('error', "You are Missing Something Please Try Again...!");
                redirect("PostBuyRequirements/Quantity");
            }
        }
    }

    public function thankyou()
    {
        if (!($this->session->userdata('postbuyreqSession'))) {
            $this->session->set_flashdata('error', "Sorry, This URL is being illegally accessed...");
            redirect('PostBuyRequirements/accessDenied');
        }
        $this->session->sess_destroy();
        $data['title'] = "Refrigeration Hub";
        $data['author'] = "Refrigeration Hub";
        $data['description'] = "Refrigeration Hub";
        $data['keywords'] = "Refrigeration Hub";
        $this->load->view('site/include/header', $data);
        $this->load->view('site/post-buy-requirements/thankyou', $data);
        $this->load->view('site/include/footer');
    }

    public function accessDenied()
    {

        $data['title'] = "Refrigeration Hub";
        $data['author'] = "Refrigeration Hub";
        $data['description'] = "Refrigeration Hub";
        $data['keywords'] = "Refrigeration Hub";
        $this->load->view('site/include/header', $data);
        $this->load->view('site/post-buy-requirements/thankyou', $data);
        $this->load->view('site/include/footer');
    }


}
