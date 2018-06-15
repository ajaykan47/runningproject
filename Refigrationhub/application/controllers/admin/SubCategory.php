<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by $ajaykan47.
 * User: admin
 * Date: 5/23/2018
 * Time: 4:01 PM
 */
class SubCategory extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!($this->session->userdata('logindetails'))) {
            redirect('admin/Auth');
        }
        $this->load->model('Setting_model');
        $this->load->model('Category_model');
    }

    public function index()
    {

        $idG = $this->input->get('id');
        $idG = base64_decode($idG);
        $data['title'] = 'Add Sub-Category';
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/include/sidebar');
        $tableName = "tbl_subcategory";
        $DbKey = "subcat_id";
        $data['editResult'] = $this->Setting_model->getListById($idG, $DbKey, $tableName);
        //  echo '<pre>';
        //print_r($data['editResult']); die;
        $data['ddlCategory'] = $this->Category_model->getddlCategory();
        //print_r( $data['ddlCategory']); die;
        $this->load->view('admin/sub-category/index', $data);
        $this->load->view('admin/include/footer');

    }

    public function addSubCategory()
    {

        //print_r($_POST); die;
        if ($_POST['btnSubmit'] == "Add Sub-Category") {
            $this->form_validation->set_rules('txtSubCategoryName', 'Sub-Category ', 'required|is_unique[tbl_subcategory.subcat_name]');
            $this->form_validation->set_rules('txtCategoryID', 'Category Id', 'required');
            if (($this->form_validation->run() == FALSE)) {
                $this->session->set_flashdata('error', 'Something Missing Please Try Again or This Record Already Exists !');

                redirect('admin/SubCategory');
            } else {
                $upload_data = "";
                if (!empty($this->input->post('txtCategoryID'))) {
                    $categoryId = $this->input->post('txtCategoryID');
                } else {
                    $categoryId = 'Null';
                }

                if (!empty($this->input->post('txtSubCategoryName'))) {
                    $subCategory = $this->input->post('txtSubCategoryName');
                } else {
                    $subCategory = '';
                }
                if (!empty($this->input->post('txtStatus'))) {
                    $txtStatus = $this->input->post('txtStatus');
                } else {
                    $txtStatus = 'Inactive';
                }


                $config['upload_path'] = './uploads/subcategory';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = 0;
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload()) {

                    $error = array('error' => $this->upload->display_errors());
                    // $this->load->view('Admin/Category/addCategory', $error);

                } else {

                }
                $upload_data = $this->upload->data();

                $data['value'] = $this->session->userdata('logindetails');
                $user_type = $data['value']['user_type'];

                $dataArr = array(
                    'subcat_filename' => $upload_data['file_name'],
                    'subcat_fullpath' => $upload_data['full_path'],
                    'cat_id' => $categoryId,
                    'subcat_name' => $subCategory,
                    'subcat_url' => createUrl($subCategory),
                    'created_at' => date('Y-m-d H:i:s'),
                    'status' => $txtStatus,
                    'created_by' => $user_type,
                    'delStatus' => 'no'
                );

                $tableName = "tbl_subcategory";
                $lastInsertId = $this->Setting_model->insertData($tableName, $dataArr);

                if (!empty($lastInsertId && ($lastInsertId > 0))) {

                    $dataArrMast = array(
                        'subcat_filename' => $upload_data['file_name'],
                        'subcat_fullpath' => $upload_data['full_path'],
                        'cat_id' => $categoryId,
                        'subcat_name' => $subCategory,
                        'subcat_url' => createUrl($subCategory),
                        'created_at' => date('Y-m-d H:i:s'),
                        'status' => $txtStatus,
                        'created_by' => $user_type,
                        'delStatus' => 'no',
                        'subcat_id' => $lastInsertId
                        );
                    $tableName = "mast_tbl_subcategory";
                    $this->Setting_model->insertData($tableName, $dataArrMast);
                    $this->session->set_flashdata('done', 'Your Sub-category record successfully saved...!');
                    redirect("admin/SubCategory");
                } else {

                    $this->session->set_flashdata('error', 'Your data not saved Please Try Again...!');
                    redirect("admin/SubCategory");
                }
            }
        } else {
            $this->session->set_flashdata('error', 'You are not a Human  Please try Again...!');
            redirect("admin/SubCategory");
        }
    }

    public function listSubCategory()
    {

        $data['title'] = 'List Category';
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/include/sidebar');
        $data['list'] = $this->Category_model->getListbyJoining();
        $this->load->view('admin/Sub-Category/list', $data);

    }

    public function updateRecord()
    {

        $idH = $this->input->post('hidden_id');

        $filename = $this->input->post('file_name');
        $fullpath = $this->input->post('full_path');

        if (!empty($this->input->post('txtCategoryID'))) {
            $categoryId = $this->input->post('txtCategoryID');
        } else {
            $categoryId = 'Null';
        }

        if (!empty($this->input->post('txtSubCategoryName'))) {
            $subCategory = $this->input->post('txtSubCategoryName');
        } else {
            $subCategory = '';
        }
        if (!empty($this->input->post('txtStatus'))) {
            $txtStatus = $this->input->post('txtStatus');
        } else {
            $txtStatus = 'Inactive';
        }


        /* if (!empty($this->input->post('MetaTag'))) {
             $MetaTag = $this->input->post('MetaTag');
         } else {
             $MetaTag = '';
         }
         if (!empty($this->input->post('TxtMetaKey'))) {
             $TxtMetaKey = $this->input->post('TxtMetaKey');
         } else {
             $TxtMetaKey = '';
         }
         if (!empty($this->input->post('TxtMetaDescr'))) {
             $TxtMetaDescr = $this->input->post('TxtMetaDescr');
         } else {
             $TxtMetaDescr = '';
         }*/

        if (!empty($_FILES['userfile']['name'])) {

            $config['upload_path'] = './uploads/subcategory';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 0;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload()) {

                $error = array('error' => $this->upload->display_errors());
             /*   $this->load->view('admin/SubCategory/addBanner', $error);*/
             $this->session->set_flashdata('error','Please Select First Image.....');
             redirect('admin/SubCategory');

            } else {

                $upload_data = $this->upload->data();
                $data = array('upload_data' => $this->upload->data());
                $file_name = $upload_data['file_name'];
                $full_path = $upload_data['full_path'];
            }
        } else {

            $file_name = $filename;
            $full_path = $fullpath;
        }
        $data['value'] = $this->session->userdata('logindetails');
        $user_type = $data['value']['user_type'];

        $dataArr = array(
            'subcat_filename' => $file_name,
            'subcat_fullpath' => $full_path,
            'cat_id' => $categoryId,
            'subcat_name' => $subCategory,
            'subcat_url' => createUrl($subCategory),
            'created_at' => date('Y-m-d H:i:s'),
            'status' => $txtStatus,
            'created_by' => $user_type,
            'delStatus' => 'no'
        );

        $tableName = "tbl_subcategory";
        $DbKey = "subcat_id";
        $updatedId = $this->Setting_model->updateRecord($DbKey, $idH, $tableName, $dataArr);

        if (!empty($updatedId && ($updatedId > 0))) {

            $dataArrMast = array(

                'subcat_filename' => $file_name,
                'subcat_fullpath' => $full_path,
                'cat_id' => $categoryId,
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => $txtStatus,
                'created_by' => $user_type,
                'delStatus' => 'no',
                'subcat_id' => $updatedId

            );
            $tableName = "mast_tbl_subcategory";
            $DbKey = "mast_subcat_id";
            $this->Setting_model->updateRecord($DbKey, $idH, $tableName, $dataArrMast);
            $this->session->set_flashdata('done', 'Your category record  successfully change...!');
            redirect("admin/SubCategory");
        } else {

            $this->session->set_flashdata('error', 'Your data not saved Please Try Again...!');
            redirect("admin/SubCategory");
        }

    }

    public function Show()
    {
        $idH = $this->input->get('id');
        $idShow = base64_decode($idH);
        $data['title'] = 'List Sub-Category';
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/include/sidebar');
        $data['list'] = $this->Category_model->getListByUserType();
        $tableName = "tbl_subcategory";
        $DbKey = "subcat_id";
        $where = array('subcat_id', $idShow, 'delStatus', 'no');
        $data['showResult'] = $this->Category_model->showDataById($DbKey, $where, $tableName);
        // print_r($data['showResult']); die;
        $this->load->view('admin/SubCategory/list', $data);
    }

    public function Restore()
    {
        $idH = $this->input->get('id');
        $idH = base64_decode($idH);
        $data = array(
            'delStatus' => 'no',
            'delIp' => ''
        );
        $tableName = "tbl_subcategory";
        $DbKey = "subcat_id";
        if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {

            $this->session->set_flashdata('done', 'Sub-Category Restore Successfully ...!!');
            redirect('admin/SubCategory/listSubCategory');
        } else {
            $this->session->set_flashdata('error', 'Sub-Category  is not successfully Restore...!!');
            redirect('admin/SubCategory/listSubCategory');
        }
    }


    public function deleteSubCategory()
    {

        $data['value'] = $this->session->userdata('logindetails');
        $user_type = $data['value']['user_type'];
        $idH = $this->input->get('id');
        $idH = base64_decode($idH);

        if ($user_type == 2) {
            $data = array(
                'delStatus' => 'yes',
                'delDate' => date('Y-m-d H:i:s'),
                'delIp' => $this->input->ip_address()
            );
            $tableName = "tbl_subcategory";
            $DbKey = "subcat_id";
            if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {

                $this->session->set_flashdata('done', 'Sub-Category Info Delete Successfully ...!!');
                redirect('admin/SubCategory/listSubCategory');
            } else {
                $this->session->set_flashdata('error', 'Sub-Category  is not successfully deleted...!!');
                redirect('admin/SubCategory/listSubCategory');
            }

        } else {

            $tableName = "tbl_subcategory";
            $DbKey = "subcat_id";
            if ($this->Setting_model->deleteRecord($DbKey, $idH, $tableName)) {

                $this->session->set_flashdata('done', 'Category Info Delete Successfully ...!!');
                redirect('admin/SubCategory/listSubCategory');
            } else {
                $this->session->set_flashdata('error', 'Category  is not successfully deleted...!!');
                redirect('admin/SubCategory/listSubCategory');
            }
        }

    }
}