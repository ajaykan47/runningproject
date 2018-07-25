<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productservices extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!($this->session->userdata('Registerlogindetails'))) {
            redirect(base_url());
        }
        $this->load->model('Productservices_model');
        $this->load->model('Bussinessprofile_model');
        $this->load->model('Setting_model');

    }

    public function index()
    {
        $data['title'] = "Refrigeration Hub";
        $data['author'] = "Refrigeration Hub";
        $data['description'] = "Refrigeration Hub";
        $data['keywords'] = "Refrigeration Hub";
        $this->load->view('user/seller/include/header', $data);
        $this->load->view('user/seller/include/sidebarmenu');
        $data['ddlPrimaryBusiness'] = $this->Productservices_model->getDDlPrimaryBusinessType();
        $data['ddlKeyword'] = $this->Productservices_model->getDDlMasterKeyword();
        $data['value'] = $this->session->userdata('Registerlogindetails');
        $reguser_id = $data['value']['reguser_id'];
        $reguser_type = $data['value']['reguser_type'];
        $whereCondition = array('reguser_id' => $reguser_id, 'reguser_type' => $reguser_type,);
        $data['editResult'] = $this->Productservices_model->getProductServicebySessionId($whereCondition);
       // print_r($data['editResult']); die;
        $this->load->view('user/seller/product-services/index', $data);
        $this->load->view('user/seller/include/footer');
    }

    public function add()
    {

        $this->form_validation->set_rules('txtPrimaryBusinessType', 'Primary Business Type', 'trim|required');
        $this->form_validation->set_rules('txtmainProduct[]', 'Main Product', 'trim|required');
        $this->form_validation->set_rules('txtManufacturerKeyword', 'Manufacturer Keyword', 'trim');
        $this->form_validation->set_rules('txtExporterKeyword', 'Main Product', 'trim');
        $this->form_validation->set_rules('txtImporterKeyword', 'Main Product', 'trim');
        $this->form_validation->set_rules('txtDistributorKeyword', 'Main Product', 'trim');
        $this->form_validation->set_rules('txtSupplierKeyword', 'Main Product', 'trim');
        $this->form_validation->set_rules('txtTraderKeyword', 'Main Product', 'trim');
        $this->form_validation->set_rules('txtWholesalerKeyword', 'Main Product', 'trim');
        $this->form_validation->set_rules('txtRetailerKeyword', 'Main Product', 'trim');
        $this->form_validation->set_rules('txtDealerKeyword', 'Main Product', 'trim');
        $this->form_validation->set_rules('txtServiceKeyword', 'Main Product', 'trim');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('error', 'Please Fill All Required Field');
            redirect('user/Productservices');
        } else {

            if (!empty($this->input->post('txtPrimaryBusinessType'))) {
                $primaryBusiness = $this->input->post('txtPrimaryBusinessType');

            } else {
                $primaryBusiness = 'null';
            }

            if (!empty($this->input->post('txtmainProduct[]'))) {
                $mainProduct = $this->input->post('txtmainProduct[]');
                $mainProductImp = implode(',', $mainProduct);
            } else {
                $mainProductImp = 'null';
            }

            if (!empty($this->input->post('txtManufacturerKeyword[]'))) {
                $manufacturer = $this->input->post('txtManufacturerKeyword[]');
                $manufacturerImp = implode(',', $manufacturer);
            } else {
                $manufacturerImp = 'null';
            }

            if (!empty($this->input->post('txtExporterKeyword[]'))) {
                $exporter = $this->input->post('txtExporterKeyword[]');
                $exporterImp = implode(',', $exporter);
            } else {
                $exporterImp = 'null';
            }
            if (!empty($this->input->post('txtImporterKeyword[]'))) {
                $importer = $this->input->post('txtImporterKeyword[]');
                $importerImp = implode(',', $importer);
            } else {
                $importerImp = 'null';
            }
            if (!empty($this->input->post('txtDistributorKeyword[]'))) {
                $distributor = $this->input->post('txtDistributorKeyword[]');
                $distributorImp = implode(',', $distributor);
            } else {
                $distributorImp = 'null';
            }
            if (!empty($this->input->post('txtSupplierKeyword[]'))) {
                $supplier = $this->input->post('txtSupplierKeyword[]');
                $supplierImp = implode(',', $supplier);
            } else {
                $supplierImp = 'null';
            }
            if (!empty($this->input->post('txtTraderKeyword[]'))) {
                $trade = $this->input->post('txtTraderKeyword[]');
                $tradeImp = implode(',', $trade);
            } else {
                $tradeImp = 'null';
            }
            if (!empty($this->input->post('txtWholesalerKeyword[]'))) {
                $wholesaler = $this->input->post('txtWholesalerKeyword[]');
                $wholesalerImp = implode(',', $wholesaler);
            } else {
                $wholesalerImp = 'null';
            }
            if (!empty($this->input->post('txtRetailerKeyword[]'))) {
                $retailer = $this->input->post('txtRetailerKeyword[]');
                $retailerImp = implode(',', $retailer);
            } else {
                $retailerImp = 'null';
            }
            if (!empty($this->input->post('txtDealerKeyword[]'))) {
                $dealer = $this->input->post('txtDealerKeyword[]');
                $dealerImp = implode(',', $dealer);
            } else {
                $dealerImp = 'null';
            }
            if (!empty($this->input->post('txtServiceKeyword[]'))) {
                $services = $this->input->post('txtServiceKeyword[]');
                $servicesImp = implode(',', $services);
            } else {
                $servicesImp = 'null';
            }
            $data['value'] = $this->session->userdata('Registerlogindetails');
            $reguser_id = $data['value']['reguser_id'];
            $reguser_type = $data['value']['reguser_type'];

            $data = array(
                'primarybusinesstype' => $primaryBusiness,
                'mainproduct' => $mainProductImp,
                'manufacturerKeyword' => $manufacturerImp,
                'ExporterKeyword' => $exporterImp,
                'ImporterKeyword' => $importerImp,
                'DistributorKeyword' => $distributorImp,
                'SupplierKeyword' => $supplierImp,
                'TraderKeyword' => $tradeImp,
                'WholesalerKeyword' => $wholesalerImp,
                'RetailerKeyword' => $retailerImp,
                'DealerKeyword' => $dealerImp,
                'ServiceKeyword' => $servicesImp,
                'reguser_id' => $reguser_id,
                'reguser_type' => $reguser_type,
                'created_at' => date('Y-m-d H:i:s')
            );
            $tableName = "tbl_productservicekeyword";
            $checkUsernType = $this->Bussinessprofile_model->getUserIdandType($reguser_id, $tableName);
            if ($checkUsernType < 1) {
                $tableName = "tbl_productservicekeyword";
                $res = $this->Setting_model->insertData($tableName, $data);
                if (!empty($res)) {
                    $this->session->set_flashdata('done', 'Your Product & Service Keyword is Save Successfully. Thanks !');
                    redirect('user/Productservices');
                } else {
                    $this->session->set_flashdata('error', 'Your Product & Service Keyword is Not Save Successfully. Sorry !');
                    redirect('user/Productservices');
                }
            } else {

                $tableName = "tbl_productservicekeyword";
                $DbKey = 'reguser_id';
                $idSessin = $reguser_id;
                $insertId = $this->Setting_model->updateRecord($DbKey, $idSessin, $tableName, $data);
            }
            if ($insertId > 0) {
                $this->session->set_flashdata('done', "Your Information is Successfully Updated...!");
                redirect('user/Productservices');
            } else {
                $this->session->set_flashdata('error', "Your Information is Not Updated Please try Again...!");
                redirect('user/Productservices');

            }
        }
    }


}
