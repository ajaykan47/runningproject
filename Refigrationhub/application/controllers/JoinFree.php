<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JoinFree extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Setting_model');
        $this->load->model('Category_model');
        $this->load->library('user_agent');
    }

    public function index()
    {
        $data['title'] = "Refrigeration Hub";
        $data['author'] = "Refrigeration Hub";
        $data['description'] = "Refrigeration Hub";
        $data['keywords'] = "Refrigeration Hub";
        $this->load->view('site/join-free/header', $data);
        $this->load->view('site/join-free/register');
        $this->load->view('site/include/footer');
    }

    public function registration()
    {


        $this->form_validation->set_rules('txtMail', 'E-mail', 'trim|required');
        $this->form_validation->set_rules('txtNumber', 'Number', 'trim|required');
        $this->form_validation->set_rules('txtName', 'Number', 'trim|required');
        $this->form_validation->set_rules('txtCompanyName', 'Company Name', 'trim|required');
        $this->form_validation->set_rules('txtPinCode', 'Pin Code', 'trim|required');
        $this->form_validation->set_rules('txtCityName', 'Pin Code', 'trim|required');
        $this->form_validation->set_rules('txtRegUserType', 'Type', 'trim|required');
        if ($this->form_validation->run() == false) {
            redirect('JoinFree');
        } else {

            if (!empty($this->input->post('txtRegUserType'))) {
                $ReguserType = $this->input->post('txtRegUserType');
            } else {
                $ReguserType = 1; // Guest User
            }
            $email = $this->input->post('txtMail');
            $select = "reguser_mail";
            $tableName = "tbl_userregistration";
            $whereCondition = array('reguser_mail' => $email);
            $returnVal = "reguser_mail";
            $existVal = $this->Setting_model->getExitingData($select, $tableName, $whereCondition, $returnVal);
            if ($existVal == $email) {
                $this->session->set_flashdata('error', ' <b style="color: #ff2f2f; ">' . $email . ' </b> is Already Exist Please Enter Another E-mail-Address Or Reset Password...!');
                redirect("JoinFree");
            } else {
                $email = $this->input->post('txtMail');
            }
            $number = $this->input->post('txtNumber');
            $name = $this->input->post('txtName');
            $companyname = $this->input->post('txtCompanyName');
            $pincode = $this->input->post('txtPinCode');
            $cityname = $this->input->post('txtCityName');
            $ipAddress = $this->input->ip_address();
            $browser = $this->agent->agent_string();
            $AutoPass = date('Ymdhis');
            $opt = (mt_rand(100000, 999999));
            $resPass = autouser - $AutoPass;
            $data = array(
                'reguser_mail' => $email,
                'resuser_password' => password_hash($resPass, PASSWORD_DEFAULT),
                'reguser_type' => $ReguserType,
                'delStatus' => 'no',
                'status' => 'Active',
                'reguser_opt' => $opt,
                'created_at' => date('Y-m-d H:i:s')
            );
            $RegSsess_data = array(
                'reguser_mail' => $email,
                'reguser_type' => $ReguserType,

            );

            $this->session->set_userdata('Regdetails', $RegSsess_data);
            $tableName = "tbl_userregistration";
            $returnId = $this->Setting_model->insertData($tableName, $data);
            if ($returnId > 0) {
                $dataArray = array(
                    'auto_genratename' => "autouser-$returnId",
                    'auto_genratepass' => "autouser-$AutoPass",
                    'reguser_mobile' => $number,
                    'reguser_name' => $name,
                    'reguser_company' => $companyname,
                    'reguser_pin_code' => $pincode,
                    'reguser_city_name' => $cityname,
                    'reguser_id' => $returnId,
                    'reguser_agent' => $browser,
                    'reguser_ip' => $ipAddress,
                    'created_at' => date('Y-m-d H:i:s')

                );
                $tableName = "tbl_userregistrationdetail";
                $this->Setting_model->insertData($tableName, $dataArray);
                $this->session->set_flashdata('done', 'A confirmation link  code has been sent to ' . $email . ' Please Login and Click Activation Link!');
                redirect("JoinFree/confirmationOtp");
            } else {
                $this->session->set_flashdata('error', 'Your data not saved Please Try Again...!');
                redirect("JoinFree");
            }
        }
    }

    public function confirmationOtp()
    {

        $data['title'] = "Refrigeration Hub";
        $data['author'] = "Refrigeration Hub";
        $data['description'] = "Refrigeration Hub";
        $data['keywords'] = "Refrigeration Hub";
        $this->load->view('site/join-free/header', $data);
        $this->load->view('site/join-free/otp-confirmation-register');
        $this->load->view('site/include/footer');
    }

    public function confirmationOtpSuccess()
    {
        $data['value'] = $this->session->userdata('Regdetails');
        $reguser_mail = $data['value']['reguser_mail'];
        $reguser_type = $data['value']['reguser_type'];
        $otpValidate = $this->input->post('txtVarification');
        $select = "reguser_opt";
        $tableName = "tbl_userregistration";
        $whereCondition = array('reguser_mail' => $reguser_mail, 'reguser_type' => $reguser_type, 'status' => 'Active');
        $returnVal = "reguser_opt";
        $existVal = $this->Setting_model->getExitingData($select, $tableName, $whereCondition, $returnVal);
        if ($existVal !== $otpValidate) {
            $this->session->set_flashdata('error', ' <b style="color: #ff2f2f; ">' . $otpValidate . ' </b>  You OTP is Not Valid Please Enter Correct OTP...!');
            redirect("JoinFree/confirmationOtp");
        } else {
            redirect('JoinFree/consultation');
        }


    }

    public function consultation()
    {

        $data['title'] = "Refrigeration Hub";
        $data['author'] = "Refrigeration Hub";
        $data['description'] = "Refrigeration Hub";
        $data['keywords'] = "Refrigeration Hub";
        $this->load->view('site/join-free/header', $data);
        $this->load->view('site/join-free/consultation');
        $this->load->view('site/include/footer');
    }

    public function setConsultation()
    {
        // print_r($_POST); die;
        // Array ( [txtConsultation] => yes [txtpreferreddate] => 2018-06-19 [txtconsultationtime] => 6 [btnSubmit] => Submit )
        if ($_POST['btnSubmit'] == 'Submit') {
            $this->form_validation->set_rules('txtConsultation', 'Free Consultation', 'trim|required');
            $this->form_validation->set_rules('txtpreferreddate', 'Consultation Time', 'trim|required');
            $this->form_validation->set_rules('txtconsultationtime', 'Consultation Date', 'trim|required');
            if ($this->form_validation->run() == false) {
                redirect('JoinFree/consultation');
            } else {
                if (!empty($this->input->post('txtConsultation'))) {
                    $consulationStatus = $this->input->post('txtConsultation');
                } else {
                    $consulationStatus = 'yes';
                }

                if (!empty($this->input->post('txtpreferreddate'))) {
                    $preferreddate = $this->input->post('txtpreferreddate');
                } else {
                    $preferreddate = 'anydate';
                }

                if (!empty($this->input->post('txtconsultationtime'))) {
                    $preferredTime = $this->input->post('txtconsultationtime');
                } else {
                    $preferredTime = 'anytime';
                }

                $data['value'] = $this->session->userdata('Regdetails');
                $reguser_type = $data['value']['reguser_type'];
                $reguser_mail = $data['value']['reguser_mail'];
                $select = 'reguser_id';
                $tableName = 'tbl_userregistration';
                $whereCondition = array('reguser_type' => $reguser_type, 'reguser_mail' => $reguser_mail);
                $returnVal = "reguser_id";
                $registeredId = $this->Setting_model->getExitingData($select, $tableName, $whereCondition, $returnVal);
                if (!empty($registeredId)) {
                    $registeredId = $this->Setting_model->getExitingData($select, $tableName, $whereCondition, $returnVal);
                } else {
                    $registeredId = 'invalid';
                }
                $data = array(
                    'reguser_id' => $registeredId,
                    'consultation' => $consulationStatus,
                    'consultation_date' => $preferreddate,
                    'consultation_time' => $preferredTime,

                );
                $tableName = "tbl_freeconsultation";
                $returnId = $this->Setting_model->insertData($tableName, $data);
                if ($returnId > 0) {
                    $this->session->set_flashdata('done', 'Your Consultation Time is Set Successfully...Our Team is Reply On Your Selected  Time...');
                    redirect("JoinFree/uploadProduct");
                } else {
                    $this->session->set_flashdata('error', 'Your data not saved Please Try Again...!');
                    redirect("JoinFree/consultation");
                }
            }

        } elseif ($_POST['btnSubmit'] == "Skip") {
            redirect('JoinFree/uploadProduct');
        }

    }

    /*******Upload Product***Start Here***/
    public function uploadProduct()
    {
        // $this->session->sess_destroy();
        $data['title'] = "Refrigeration Hub";
        $data['author'] = "Refrigeration Hub";
        $data['description'] = "Refrigeration Hub";
        $data['keywords'] = "Refrigeration Hub";
        $this->load->view('site/join-free/header', $data);
        $data['ddlCategory'] = $this->Category_model->getddlCategory();
        $this->load->view('site/join-free/upload-product', $data);
        $this->load->view('site/include/footer');

    }

    public function addProduct()
    {

        $this->form_validation->set_rules('txtMail', 'E-mail', 'trim|required');
        $this->form_validation->set_rules('txtCategoryId', 'Number', 'trim|required');
        $this->form_validation->set_rules('txtSubcategoryId', 'Number', 'trim|required');
        $this->form_validation->set_rules('txtProductName', 'Company Name', 'trim|required');
        $this->form_validation->set_rules('txtProductCode', 'Pin Code', 'trim|required');
        $this->form_validation->set_rules('txtProductDescription', 'Pin Code', 'trim|required');
        $this->form_validation->set_rules('txtMinimumOrderQuantity', 'Type', 'trim');
        $this->form_validation->set_rules('txtUnitMeasure', 'Unit Measure', 'trim');
        $this->form_validation->set_rules('txtPriceRange', 'Price Range', 'trim');
        $this->form_validation->set_rules('txtPriceRangeMin', 'Price Rage Min', 'trim');
        $this->form_validation->set_rules('txtPriceRangeMax', 'Price Range Max', 'trim');
        $this->form_validation->set_rules('txtUnit', 'Unit', 'trim');
        $this->form_validation->set_rules('txtFobPort', 'Fob Port', 'trim');
        $this->form_validation->set_rules('txtSupplyAbility', 'Supply Ability', 'trim');
        $this->form_validation->set_rules('txtDeliveryTime', 'Delivery Time', 'trim');
        $this->form_validation->set_rules('txtSampleAvailable', 'Sample Available', 'trim');
        $this->form_validation->set_rules('txtSamplepolicy', 'Sample policy', 'trim');
        if ($this->form_validation->run() == false) {
            redirect('JoinFree/uploadProduct');
        } else {

            $email = $this->input->post('txtMail');
            $select = "reguser_mail";
            $tableName = "tbl_userregistration";
            $whereCondition = array('reguser_mail' => $email);
            $returnVal = "reguser_mail";
            $existVal = $this->Setting_model->getExitingData($select, $tableName, $whereCondition, $returnVal);
            if ($existVal == $email) {
                $this->session->set_flashdata('error', ' <b style="color: #ff2f2f; ">' . $email . ' </b> is Already Exist Please Login Or Reset Password...!');
                redirect('JoinFree/uploadProduct');
            } else {
                $email = $this->input->post('txtMail');
            }

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
                $this->session->set_flashdata('done', 'A confirmation link  code has been sent to ' . $email . ' Please Login and Click Activation Link!');
                redirect("JoinFree/confirmationOtp");
            } else {
                $this->session->set_flashdata('error', 'Your data not saved Please Try Again...!');
                redirect("JoinFree/confirmationOtp");
            }
        }

    }

public function getSubcategory()
{
    echo 'testing sub-category....';
    $id = $this->input->post('cat_id');
    $where = array('status' => 'Active', 'delStatus' => 'no', 'cat_id' => $id);
    $data['subcatResult'] = $this->Country_model->getddlSubCategory($where);
    print_r($data['subcatResult']);
    die;
    echo '<div class="subCatList">';
    echo '<select name="txtStateId" id="txtStateId" class="form-control">';
    echo '<option value="">---Select Sub Category---</option>';
    foreach ($data['subcatResult'] as $valSub) {
        echo '<option value="' . $valSub->subcat_id . '">' . $valSub->subcat_id . '</option>';
    }
    echo '</select>';
    echo '</div>';

}


/*******Upload Product**********end here*****/


}
