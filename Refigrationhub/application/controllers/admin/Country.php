<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Country extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();

        if (!($this->session->userdata('logindetails'))) {
            redirect('admin/Auth');
        }
        $this->load->model('Setting_model');
        $this->load->model('Country_model');
    }

    public function index()
    {
        $idG = $this->input->get('id');
        $idG = base64_decode($idG);
        $data['title'] = 'Add Country';
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/include/sidebar');
        $tableName = "mast_tbl_countries";
        $DbKey = "country_id";
        $data['editResult'] = $this->Setting_model->getListById($idG, $DbKey, $tableName);
        // print_r( $data['editResult']); die;
        $this->load->view('admin/country/country-index', $data);
        $this->load->view('admin/include/footer');

    }

    public function addCountry()
    {

        $countryName = $this->input->post('txtCountryName');
        $data['dataexist'] = $this->Country_model->getExistingData($countryName);
        $existVal = "";
        foreach ($data['dataexist'] as $existVal) {
            $existVal = $existVal->country_name;
        }
        if ($existVal == $countryName) {
            $this->session->set_flashdata('error', 'Country Name is Already Exist....');
            redirect('admin/Country');
        } else {
            $countryName = $this->input->post('txtCountryName');
        }

        if (!empty($this->input->post('txtStatus'))) {
            $status = $this->input->post('txtStatus');
        } else {
            $status = 'inactive';
        }

        $data = array(
            'country_name' => $countryName,
            'created_at' => date('Y-m-d H:i:s'),
            'status' => $status,
            'delStatus' => 'no'
        );

        $tableName = "mast_tbl_countries";
        $res = $this->Setting_model->insertData($tableName, $data);
        if (!empty($res)) {
            $this->session->set_flashdata('done', 'Your data successfully Save');
            redirect("admin/Country");
        } else {
            $this->session->set_flashdata('error', 'Your data not Inserted');
            redirect("admin/Country");
        }


    }

    public function listCountry()
    {
        $data['title'] = 'List Country';
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/include/sidebar');
        $tableName = "mast_tbl_countries";
        $data['list'] = $this->Country_model->getListByUserType($tableName);
        $this->load->view('admin/country/list-country', $data);

    }

    public function updateCountry()
    {
        $idH = $this->input->post('hidden_id');
        $countryName = $this->input->post('txtCountryName');
        if (!empty($this->input->post('txtStatus'))) {
            $status = $this->input->post('txtStatus');
        } else {
            $status = 'inactive';
        }
        $data = array(
            'country_name' => $countryName,
            'updated_at' => date('Y-m-d H:i:s'),
            'status' => $status,
            'delStatus' => 'no'
        );
        $tableName = "mast_tbl_countries";
        $DbKey = "country_id";
        if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {
            $this->session->set_flashdata('done', 'Successfully updated...!!');
            redirect('admin/Country/listCountry');
        } else {
            $this->session->set_flashdata('error', 'Record  is not successfully updated...!!');
            redirect('admin/Country/listCountry');
        }

    }


    public function Restore()
    {
        $idH = $this->input->get('id');
        $idH = base64_decode($idH);
        $data = array(
            'delStatus' => 'no'
        );
        $tableName = "mast_tbl_countries";
        $DbKey = "country_id";
        if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {

            $this->session->set_flashdata('done', 'Country Restore Successfully ...!!');
            redirect('admin/Country/listCountry');
        } else {
            $this->session->set_flashdata('error', 'Country  is Already Restore...!!');
            redirect('admin/Country/listCountry');
        }
    }

    public function deleteCountry()
    {

        $data['value'] = $this->session->userdata('logindetails');
        $user_type = $data['value']['user_type'];
        $idH = $this->input->get('id');
        $idH = base64_decode($idH);

        if ($user_type == 2) {
            $data = array(
                'delStatus' => 'yes',

            );
            $tableName = "mast_tbl_countries";
            $DbKey = "country_id";
            if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {

                $this->session->set_flashdata('done', 'Country Info Delete Successfully ...!!');
                redirect('admin/Country/listCountry');
            } else {
                $this->session->set_flashdata('error', 'Country  is not successfully deleted...!!');
                redirect('admin/Country/listCountry');
            }

        } else {

            $tableName = "mast_tbl_countries";
            $DbKey = "country_id";
            if ($this->Setting_model->deleteRecord($DbKey, $idH, $tableName)) {

                $this->session->set_flashdata('done', 'Country Info Restore Successfully ...!!');
                redirect('admin/Country/listCountry');
            } else {
                $this->session->set_flashdata('error', 'Country is Already Restore...!!');
                redirect('admin/Country/listCountry');
            }
        }


    }

    /*********States***************************/
    public function State()
    {
        $idG = $this->input->get('id');
        $idG = base64_decode($idG);
        $data['title'] = 'Add State';
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/include/sidebar');
        $tableName = "mast_tbl_states";
        $DbKey = "state_id";
        $data['editResult'] = $this->Setting_model->getListById($idG, $DbKey, $tableName);
        $data['ddlCountry'] = $this->Country_model->getCountryDDlList();
        $this->load->view('admin/country/state-index', $data);
        $this->load->view('admin/include/footer');

    }

    public function addState()
    {

        $this->form_validation->set_rules('txtCountryId', 'State Name ', 'required');
        $this->form_validation->set_rules('txtStateName', 'State Name ', 'required');
        if (($this->form_validation->run() == FALSE)) {
            $this->session->set_flashdata('error', "Every Field is Required Please Fill...!");
            redirect('admin/Country/State');
        } else {
            $stateName = $this->input->post('txtStateName');
            $CountryId = $this->input->post('txtCountryId');
            $data['dataexist'] = $this->Country_model->getExistingStateData($stateName);
            $existVal = "";
            foreach ($data['dataexist'] as $existVal) {
                $existVal = $existVal->state_name;
            }
            if ($existVal == $stateName) {
                $this->session->set_flashdata('error', 'State Name is Already Exist....');
                redirect('admin/Country/State');
            } else {
                $stateName = $this->input->post('txtStateName');
            }

            if (!empty($this->input->post('txtStatus'))) {
                $status = $this->input->post('txtStatus');
            } else {
                $status = 'inactive';
            }

            $data = array(
                'country_id' => $CountryId,
                'state_name' => $stateName,
                'created_at' => date('Y-m-d H:i:s'),
                'status' => $status,
                'delStatus' => 'no'
            );
            $tableName = "mast_tbl_states";
            $res = $this->Setting_model->insertData($tableName, $data);
            if (!empty($res)) {
                $this->session->set_flashdata('done', 'Your data successfully Save');
                redirect("admin/Country/State");
            } else {
                $this->session->set_flashdata('error', 'Your data not Inserted');
                redirect("admin/Country/State");
            }
        }
    }

    public function listState()
    {

        $data['title'] = 'List State';
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/include/sidebar');
        $data['list'] = $this->Country_model->getListByUserTypeJoin();

        $this->load->view('admin/country/list-state', $data);
    }

    public function updateState()
    {


        $idH = $this->input->post('hidden_id');
        $stateName = $this->input->post('txtStateName');
        $CountryId = $this->input->post('txtCountryId');

        if (!empty($this->input->post('txtStatus'))) {
            $status = $this->input->post('txtStatus');
        } else {
            $status = 'inactive';
        }
        $data = array(
            'country_id' => $CountryId,
            'state_name' => $stateName,
            'updated_at' => date('Y-m-d H:i:s'),
            'status' => $status,
            'delStatus' => 'no'
        );
        $tableName = "mast_tbl_states";
        $DbKey = "state_id";
        if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {
            $this->session->set_flashdata('done', 'Successfully updated...!!');
            redirect('admin/Country/listState');
        } else {
            $this->session->set_flashdata('error', 'Record  is not successfully updated...!!');
            redirect('admin/Country/listState');
        }

    }

    public function stateRestore()
    {

        $idH = $this->input->get('id');
        $idH = base64_decode($idH);
        $data = array(
            'delStatus' => 'no'
        );
        $tableName = "mast_tbl_states";
        $DbKey = "state_id";
        if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {

            $this->session->set_flashdata('done', 'State Restore Successfully ...!!');
            redirect('admin/Country/listState');
        } else {
            $this->session->set_flashdata('error', 'State is Already Restore...!!');
            redirect('admin/Country/listState');
        }


    }

    public function deleteState()
    {

        $data['value'] = $this->session->userdata('logindetails');
        $user_type = $data['value']['user_type'];
        $idH = $this->input->get('id');
        $idH = base64_decode($idH);

        if ($user_type == 2) {
            $data = array(
                'delStatus' => 'yes',

            );
            $tableName = "mast_tbl_states";
            $DbKey = "state_id";
            if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {

                $this->session->set_flashdata('done', 'State Info Delete Successfully ...!!');
                redirect('admin/Country/listState');
            } else {
                $this->session->set_flashdata('error', 'Category  is not successfully deleted...!!');
                redirect('admin/Country/listState');
            }

        } else {

            $tableName = "mast_tbl_states";
            $DbKey = "state_id";
            if ($this->Setting_model->deleteRecord($DbKey, $idH, $tableName)) {

                $this->session->set_flashdata('done', 'State Info Delete Successfully ...!!');
                redirect('admin/Country/listState');
            } else {
                $this->session->set_flashdata('error', 'State is not successfully deleted...!!');
                redirect('admin/Country/listState');
            }
        }

    }

    /*********States*******End Here**************/
    /*********City***************Start ***********/
    public function City()
    {

        $idG = $this->input->get('id');
        $idG = base64_decode($idG);
        $data['title'] = 'Add City';
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/include/sidebar');
        $data['editResult'] = $this->Country_model->getCityListbyJoining($idG);
        $data['ddlCountry'] = $this->Country_model->getCountryDDlList();
        $data['ddlState'] = $this->Country_model->getStateDDlList();
        $this->load->view('admin/country/city-index', $data);
        $this->load->view('admin/include/footer');

    }

    public function addCity()
    {

        $this->form_validation->set_rules('txtCountryId', 'State Name ', 'trim');
        $this->form_validation->set_rules('txtStateId', 'State Name ', 'trim');
        $this->form_validation->set_rules('txtCityName', 'State Name ', 'required');
        if (($this->form_validation->run() == FALSE)) {
            $this->session->set_flashdata('error', "Every Field is Required Please Fill...!");
            redirect('admin/Country/City');
        } else {
            $CountryId = $this->input->post('txtCountryId');
            $StateId = $this->input->post('txtStateId');
            $cityName = $this->input->post('txtCityName');

            $data['dataexist'] = $this->Country_model->getExistingCityData($cityName);
            $existVal = "";
            foreach ($data['dataexist'] as $existVal) {
                $existVal = $existVal->city_name;
            }
            if ($existVal == $cityName) {
                $this->session->set_flashdata('error', 'City Name is Already Exist Please Enter Correct Name....');
                redirect('admin/Country/City');
            } else {
                $stateName = $this->input->post('txtStateName');
            }

            if (!empty($this->input->post('txtStatus'))) {
                $status = $this->input->post('txtStatus');
            } else {
                $status = 'inactive';
            }

            $data = array(
                'country_id' => $CountryId,
                'state_id' => $StateId,
                'city_name' => $cityName,
                'created_at' => date('Y-m-d H:i:s'),
                'status' => $status,
                'delStatus' => 'no'
            );
            $tableName = "mast_tbl_cities";
            $res = $this->Setting_model->insertData($tableName, $data);
            if (!empty($res)) {
                $this->session->set_flashdata('done', 'Your data successfully Save');
                redirect("admin/Country/City");
            } else {
                $this->session->set_flashdata('error', 'Your data not Inserted');
                redirect("admin/Country/City");
            }
        }

    }


    public function getStatebyCountry()
    {

        $id = $this->input->post('country_id');
        $tableName = 'mast_tbl_states';
        $where = array('status' => 'Active', 'delStatus' => 'no', 'country_id' => $id);
        $data['state'] = $this->Country_model->getListByID($tableName, $where);
        echo '<div class="stateList">';
        echo '<select name="txtStateId" id="txtStateId" class="form-control">';
        echo '<option value="">---Select State---</option>';
        foreach ($data['state'] as $valState) {
            echo '<option value="' . $valState->state_id . '">' . $valState->state_name . '</option>';
        }
        echo '</select>';
        echo '</div>';

    }

    public function listCity()
    {
        $data['title'] = 'List City';
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/include/sidebar');
        $data['list'] = $this->Country_model->getListByUserTypeJoinCity();
        $this->load->view('admin/country/list-city', $data);
        //$this->load->view('admin/include/footer-list');

    }

    public function updateCity()
    {
       // print_r($_POST); die;
        $idH = $this->input->post('hidden_id');
        $CountryId = $this->input->post('txtCountryId');
        $StateId = $this->input->post('txtStateId');
        $cityName = $this->input->post('txtCityName');

        if (!empty($this->input->post('txtStatus'))) {
            $status = $this->input->post('txtStatus');
        } else {
            $status = 'inactive';
        }
        $data = array(
            'country_id' => $CountryId,
            'state_id' => $StateId,
            'city_name' => $cityName,
            'updated_at' => date('Y-m-d H:i:s'),
            'status' => $status,
            'delStatus' => 'no'
        );
        $tableName = "mast_tbl_cities";
        $DbKey = "city_id";
        if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {
            $this->session->set_flashdata('done', 'Successfully updated...!!');
            redirect('admin/Country/listCity');
        } else {
            $this->session->set_flashdata('error', 'Record  is not successfully updated...!!');
            redirect('admin/Country/listCity');
        }

    }

    public function deleteCity()
    {

        $data['value'] = $this->session->userdata('logindetails');
        $user_type = $data['value']['user_type'];
        $idH = $this->input->get('id');
        $idH = base64_decode($idH);

        if ($user_type == 2) {
            $data = array(
                'delStatus' => 'yes',

            );
            $tableName = "mast_tbl_cities";
            $DbKey = "city_id";
            if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {

                $this->session->set_flashdata('done', 'City Info Delete Successfully ...!!');
                redirect('admin/Country/listCity');
            } else {
                $this->session->set_flashdata('error', 'City  is not successfully deleted...!!');
                redirect('admin/Country/listCity');
            }

        } else {

            $tableName = "mast_tbl_cities";
            $DbKey = "city_id";
            if ($this->Setting_model->deleteRecord($DbKey, $idH, $tableName)) {

                $this->session->set_flashdata('done', 'City Info Delete Successfully ...!!');
                redirect('admin/Country/listCity');
            } else {
                $this->session->set_flashdata('error', 'City is not successfully deleted...!!');
                redirect('admin/Country/listCity');
            }
        }

    }

    public function cityRestore(){

        $idH = $this->input->get('id');
        $idH = base64_decode($idH);
        $data = array(
            'delStatus' => 'no'
        );
        $tableName = "mast_tbl_cities";
        $DbKey = "city_id";
        if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {

            $this->session->set_flashdata('done', 'City Restore Successfully ...!!');
            redirect('admin/Country/listCity');
        } else {
            $this->session->set_flashdata('error', 'City is Already Restore...!!');
            redirect('admin/Country/listCity');
        }

    }


    /*********City********End Here*******************/


}
