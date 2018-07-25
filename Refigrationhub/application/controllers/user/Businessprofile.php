<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Businessprofile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!($this->session->userdata('Registerlogindetails'))) {
            redirect(base_url());
        }
        $this->load->model('Bussinessprofile_model');
        $this->load->model('Setting_model');
        $this->load->model('Country_model');
    }

    public function index()
    {
        $data['title'] = "Refrigration Hub";
        $data['author'] = "Refrigration Hub";
        $data['description'] = "Refrigration Hub";
        $data['keywords'] = "Refrigration Hub";
        $this->load->view('user/seller/include/header', $data);
        $this->load->view('user/seller/include/sidebarmenu');
        $data['ddlOwnership'] = $this->Bussinessprofile_model->getDDlOwnertype();
        $data['ddlModePayment'] = $this->Bussinessprofile_model->getDDlModePayment();
        $data['ddlCountry'] = $this->Country_model->getCountryDDlList();
        $data['ddlFrequency'] = $this->Bussinessprofile_model->getFrequency();
        $data['ddlQuantityUnit'] = $this->Bussinessprofile_model->getQuanityUnit();
        $data['value'] = $this->session->userdata('Registerlogindetails');
        $reguser_id = $data['value']['reguser_id'];
        $reguser_type = $data['value']['reguser_type'];
        $whereCondition = array('reguser_id' => $reguser_id, 'reguser_type' => $reguser_type,);
        $data['editResult'] = $this->Bussinessprofile_model->getBusinessDetailBySellerId($whereCondition);
        $data['editAdDetail'] = $this->Bussinessprofile_model->getAdditionalDetailBySellerId($whereCondition);
        $data['listRequirement'] = $this->Bussinessprofile_model->getRequirementBySellerId($whereCondition);
        $data['listAwrd'] = $this->Bussinessprofile_model->getCertificateAwardBySellerId($whereCondition);
        //print_r($data['listAwrd']); die;
        $this->load->view('user/seller/business-profile/index', $data);
        $this->load->view('user/seller/include/footer');
    }

    public function addBussiness()
    {
        /************Businesss Detail Save*************/
        if (!empty($this->input->post('btnBusinessDetail'))) {

            $this->form_validation->set_rules('txtAddress', 'Subject', 'trim|required');
            $this->form_validation->set_rules('txtCityId', 'Name', 'trim|required');
            $this->form_validation->set_rules('txtLocality', 'E-mail', 'trim|required');
            $this->form_validation->set_rules('txtPostal', 'Product Name', 'trim|required');
            $this->form_validation->set_rules('txtPhone', 'Company Name', 'trim|required');
            $this->form_validation->set_rules('txtAltWebsite', 'Mobile', 'trim');
            $this->form_validation->set_rules('txtYearsEst', 'Message', 'trim');
            $this->form_validation->set_rules('txtEmployee', 'Message', 'trim');
            $this->form_validation->set_rules('txtAnnual', 'Message', 'trim');
            $this->form_validation->set_rules('txtOwnershipTYpe', 'Message', 'trim');
            if ($this->form_validation->run() == false) {
                $this->session->set_flashdata('error', 'Business Detail are Missing Please Fill All Required Field...!');
                redirect('user/BusinessProfile');
            } else {

                $txtAddress = $this->input->post('txtAddress');
                $txtCountryId = $this->input->post('txtCountryId');
                $txtStateId = $this->input->post('txtStateId');
                $txtCity = $this->input->post('txtCityId');
                $txtLocality = $this->input->post('txtLocality');
                $txtPostal = $this->input->post('txtPostal');
                $txtPhone = $this->input->post('txtPhone');
                $txtAltWebsite = $this->input->post('txtAltWebsite');
                $txtYearsEst = $this->input->post('txtYearsEst');
                $txtEmployee = $this->input->post('txtEmployee');
                $txtAnnual = $this->input->post('txtAnnual');
                $txtOwnershipTYpe = $this->input->post('txtOwnershipTYpe');

                $data['value'] = $this->session->userdata('Registerlogindetails');
                $reguser_id = $data['value']['reguser_id'];
                $reguser_type = $data['value']['reguser_type'];

                $dataBussiness = array(
                    'reguser_id' => $reguser_id,
                    'reguser_type' => $reguser_type,
                    'address' => $txtAddress,
                    'country_id' => $txtCountryId,
                    'state_id' => $txtStateId,
                    'city_id' => $txtCity,
                    'locality' => $txtLocality,
                    'zip_code' => $txtPostal,
                    'phone_number' => $txtPhone,
                    'alt_website' => $txtEmployee,
                    'alt_website' => $txtAltWebsite,
                    'yearofestablishment' => $txtYearsEst,
                    'nofemployees' => $txtEmployee,
                    'annualturnover' => $txtAnnual,
                    'ownershipype' => $txtOwnershipTYpe,
                    'status' => 'Active',
                    'created_at' => date('Y-m-d H:i:s')
                );
                $tableName = "tbl_businessdetail";
                $checkUsernType = $this->Bussinessprofile_model->getUserIdandType($reguser_id, $tableName);
                if ($checkUsernType < 1) {
                    $tableName = "tbl_businessdetail";
                    $res = $this->Setting_model->insertData($tableName, $dataBussiness);
                    if (!empty($res)) {
                        $this->session->set_flashdata('done', 'Business Record  has been saved Successfully Please Fill the Other Information !');
                        redirect('user/BusinessProfile');
                    } else {
                        $this->session->set_flashdata('error', 'You are Missing Something  Please Try Again ...!');
                        redirect('user/BusinessProfile');
                    }
                } else {
                    $tableName = "tbl_businessdetail";
                    $DbKey = 'businessdetail_id';
                    $idSessin = $reguser_id;
                    $insertId = $this->Setting_model->updateRecord($DbKey, $idSessin, $tableName, $dataBussiness);
                }
                if ($insertId > 0) {
                    $this->session->set_flashdata('done', "Your Information is Successfully Updated...!");
                    redirect('user/BusinessProfile');
                } else {
                    $this->session->set_flashdata('error', "Your Information is Not Updated Please try Again...!");
                    redirect('user/BusinessProfile');

                }
            }


        } /************Additional Detail Save********/
        else if (!empty($this->input->post('btnAdditional'))) {

            $txtCmyDescription = $this->input->post('txtCmyDescription');
            $txtModePaymentId = $this->input->post('txtModePaymentId');
            $paymentmode = implode(',', $txtModePaymentId);

            $txtWorkingDays = $this->input->post('txtWorkingDays');
            $txtBusinessStates = $this->input->post('txtBusinessStates');
            $txtBusinessCity = $this->input->post('txtBusinessCity');

            $data['value'] = $this->session->userdata('Registerlogindetails');
            $reguser_id = $data['value']['reguser_id'];
            $reguser_type = $data['value']['reguser_type'];

            $data = array();
            $config['upload_path'] = './uploads/seller/logo';
            $config['allowed_types'] = 'jpg|png';
            $config['max_size'] = 0;
            $config['height'] = 0;
            $config['width'] = 0;
            // $config['encrypt_name'] = false;
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('filenameLogo')) {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('error', 'please select Logo...!!');
                redirect(base_url() . "user/Businessprofile");
            } else {
                $fileData = $this->upload->data();
                $data['userfile'] = $fileData['file_name'];
            }

            if (!$this->upload->do_upload('filenameCompanyPic')) {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('error', 'please select Company  Image...!!');
                redirect(base_url() . "user/Businessprofile");
            } else {
                $fileData = $this->upload->data();
                $data['userfile1'] = $fileData['file_name'];
            }

            $dataBussiness = array(
                'reguser_id' => $reguser_id,
                'reguser_type' => $reguser_type,
                'companylogo' => $data['userfile'],
                'companyphoto' => $data['userfile1'],
                'companydescription' => $txtCmyDescription,
                'modeofpayment' => $paymentmode,
                'workingdays' => $txtWorkingDays,
                'businessstate' => $txtBusinessStates,
                'businesscitie' => $txtBusinessCity,
                'status' => 'Active',
                'created_at' => date('Y-m-d H:i:s')
            );
           // print_r($dataBussiness);
            $tableName = "tbl_additionaldetail";
            $checkUsernType = $this->Bussinessprofile_model->getUserIdandType($reguser_id, $tableName);
            if ($checkUsernType < 1) {
                $tableName = "tbl_additionaldetail";
                $res = $this->Setting_model->insertData($tableName, $dataBussiness);
                if (!empty($res)) {
                    $this->session->set_flashdata('done', 'Additional Information has been saved Successfully Please Fill the Other Information !');
                    redirect('user/BusinessProfile');
                } else {
                    $this->session->set_flashdata('error', 'You are Missing Something  Please Try Again ...!');
                    redirect('user/BusinessProfile');
                }
            } else {
                $tableName = "tbl_additionaldetail";
                $DbKey = 'additionaldetail_id';
                $idSessin = $reguser_id;
                $insertId = $this->Setting_model->updateRecord($DbKey, $idSessin, $tableName, $dataBussiness);
            }
            if ($insertId > 0) {
                $this->session->set_flashdata('done', "Your Information is Successfully Updated...!");
                redirect('user/BusinessProfile');
            } else {
                $this->session->set_flashdata('error', "Your Information is Not Updated Please try Again...!");
                redirect('user/BusinessProfile');

            }
        } /************Certificate detail*************/
        else
            if (!empty($this->input->post('btnCertificate'))) {

                $txtCertification = $this->input->post('txtCertification');
                $txtMembership = $this->input->post('txtMembership');
                $txtAward = $this->input->post('txtAward');
                $data['value'] = $this->session->userdata('Registerlogindetails');
                $reguser_id = $data['value']['reguser_id'];
                $reguser_type = $data['value']['reguser_type'];

                $data = array();
                $config['upload_path'] = './uploads/seller/certificate';
                $config['allowed_types'] = 'jpg|png';
                $config['max_size'] = 0;
                $config['height'] = 0;
                $config['width'] = 0;
                // $config['encrypt_name'] = false;
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('filenameCertificate')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('error', 'please select Certificate...!!');
                    redirect(base_url() . "user/Businessprofile");
                } else {
                    $fileData = $this->upload->data();
                    $data['userfile'] = $fileData['file_name'];
                }

                if (!$this->upload->do_upload('filenameAward')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('error', 'please select Award Certificate...!!');
                    redirect(base_url() . "user/Businessprofile");
                } else {
                    $fileData = $this->upload->data();
                    $data['userfile1'] = $fileData['file_name'];
                }

                $dataBussiness = array(
                    'reguser_id' => $reguser_id,
                    'reguser_type' => $reguser_type,
                    'standardcertification' => $txtCertification,
                    'membershipaffilliation' => $txtMembership,
                    'uploadcertification' => $data['userfile'],
                    'uploadawardimage' => $data['userfile1'],
                    'awardrecognition' => $txtAward,
                    'status' => 'Active',
                    'created_at' => date('Y-m-d H:i:s')
                );
                $tableName = "tbl_certificationaward";
                $checkUsernType = $this->Bussinessprofile_model->getUserIdandType($reguser_id, $tableName);
                if ($checkUsernType < 1) {
                    $tableName = "tbl_certificationaward";
                    $res = $this->Setting_model->insertData($tableName, $dataBussiness);
                    if (!empty($res)) {
                        $this->session->set_flashdata('done', 'Certification and Award Information has been saved Successfully Please Fill the Other Information !');
                        redirect('user/BusinessProfile');
                    } else {
                        $this->session->set_flashdata('error', 'You are Missing Something  Please Try Again ...!');
                        redirect('user/BusinessProfile');
                    }
                } else {
                    $tableName = "tbl_certificationaward";
                    $DbKey = 'certificationaward_id';
                    $idSessin = $reguser_id;
                    $insertId = $this->Setting_model->updateRecord($DbKey, $idSessin, $tableName, $dataBussiness);
                }
                if ($insertId > 0) {
                    $this->session->set_flashdata('done', "Your Information is Successfully Updated...!");
                    redirect('user/BusinessProfile');
                } else {
                    $this->session->set_flashdata('error', "Your Information is Not Updated Please try Again...!");
                    redirect('user/BusinessProfile');

                }


            } /************Certificate detail end here *************/
            else if (!empty($this->input->post('btnProductBuy'))) {

                $this->form_validation->set_rules('txtRequirement', 'Company Description', 'trim|required');
                $this->form_validation->set_rules('txtfrequenyId', 'Mode of Payment', 'trim|required');
                $this->form_validation->set_rules('txtQuantity', 'Working Days', 'trim|required');
                $this->form_validation->set_rules('txtQtyUnit', 'Business Type', 'trim|required');

                if ($this->form_validation->run() == false) {
                    $this->session->set_flashdata('error', 'Please Fill All Required Field...!');
                    redirect('user/BusinessProfile');
                } else {
                    $txtRequirement = $this->input->post('txtRequirement');
                    $txtfrequenyId = $this->input->post('txtfrequenyId');
                    $txtQuantity = $this->input->post('txtQuantity');
                    $txtQtyUnit = $this->input->post('txtQtyUnit');

                    $data['value'] = $this->session->userdata('Registerlogindetails');

                    $reguser_id = $data['value']['reguser_id'];
                    $reguser_type = $data['value']['reguser_type'];

                    $dataWeBy = array(
                        'reguser_id' => $reguser_id,
                        'reguser_type' => $reguser_type,
                        'requirement' => $txtRequirement,
                        'frequency_id' => $txtfrequenyId,
                        'quantity' => $txtQuantity,
                        'quantityunit' => $txtQtyUnit,
                        'created_at' => date('Y-m-d H:i:s')
                    );

                    $tableName = "tbl_productwebuy";
                    $res = $this->Setting_model->insertData($tableName, $dataWeBy);
                    if (!empty($res)) {
                        $this->session->set_flashdata('done', 'Your Request  has been saved Successfully !');
                        redirect('user/BusinessProfile');
                    } else {
                        $this->session->set_flashdata('error', 'You are Missing Something  Please Try Again ...!');
                        redirect('user/BusinessProfile');
                    }
                }

            }
    }

    /************Product detail end here ********************/


    /*$CI =& get_instance(); $CI->load->library('email');
    $config['protocol']    = 'smtp';
    $config['smtp_host']    = 'mail.******.com';
    $config['smtp_timeout'] = '7';
    $config['smtp_user']    = 'abctest@test.in';
    $config['smtp_pass']    = '*******';
    $config['charset']    = 'utf-8';
    $config['newline']    = "\r\n";
    $config['mailtype'] = 'html'; // or html
    $config['validation'] = TRUE; // bool whether to validate email or not

    $CI->email->initialize($config);

    $CI->email->from('test.test@test.in', 'Test');
    $CI->email->to('abctest123@test.in');
    $CI->email->cc('rec_ccc@test.com');
    $CI->email->bcc('rec_bcc@test.com');
        // EXP. $CI->email->bcc('t111@test.in,ttt2222@test.in');
    $CI->email->subject('email subject');
    $CI->email->message('message body');
    $CI->email->send();
        //echo $this->email->print_debugger();*/

    /****************City Get*************************/

    public function getStatebyCountry()
    {

        $id = $this->input->post('country_id');
        $tableName = 'mast_tbl_states';
        $where = array('status' => 'Active', 'delStatus' => 'no', 'country_id' => $id);
        $data['state'] = $this->Country_model->getListByID($tableName, $where);
        echo '<div class="stateList">';
        echo '<select name="txtStateId" id="txtStateId" class="form-control" onchange="getCity(this.value)">';
        echo '<option value="">---Select State---</option>';
        foreach ($data['state'] as $valState) {
            echo '<option value="' . $valState->state_id . '">' . $valState->state_name . '</option>';
        }
        echo '</select>';
        echo '</div>';

    }

    public function getCitybyState()
    {
        $id = $this->input->post('state_id');
        $tableName = 'mast_tbl_cities';
        $where = array('status' => 'Active', 'delStatus' => 'no', 'state_id' => $id);
        $data['city'] = $this->Country_model->getListByID($tableName, $where);
        echo '<div class="cityList">';
        echo '<select name="txtCityId" id="txtCityId" class="form-control">';
        echo '<option value="">---Select City---</option>';
        foreach ($data['city'] as $valCity) {
            echo '<option value="' . $valCity->city_id . '">' . $valCity->city_name . '</option>';
        }
        echo '</select>';
        echo '</div>';

    }

    /****************Country Search*************************/
    /****************Requirement Delete *************************/
    public function deleteRequiremnet(){
        echo '<pre>';
        print_r($_POST); die;
    }

    /****************Requirement Delete *************************/







}
