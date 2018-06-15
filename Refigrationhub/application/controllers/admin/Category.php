<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by $ajaykan47.
 * User: admin
 * Date: 5/23/2018
 * Time: 4:01 PM
 */
class Category extends CI_Controller
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
        $data['title'] = 'Add Category';
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/include/sidebar');
        $tableName = "tbl_category";
        $DbKey = "cat_id";
        $data['editResult'] = $this->Setting_model->getListById($idG, $DbKey, $tableName);
        //print_r( $data['editResult']); die;
        $this->load->view('admin/category/index', $data);
        $this->load->view('admin/include/footer');

    }

    public function addCategory()
    {
        if ($_POST['btnSubmit'] == "Add Category") {
            $this->form_validation->set_rules('txtCategoryName', 'Category Name ', 'required|is_unique[tbl_category.cat_name]');
            if (($this->form_validation->run() == FALSE)) {
                $this->session->set_flashdata('error', 'Something Missing Please Try Again or This Record Already Exists !');

                $data['title'] = 'Add Category';
                $this->load->view('admin/include/header', $data);
                $this->load->view('admin/include/sidebar');
                $this->load->view('admin/category/index', $data);
                $this->load->view('admin/include/footer');
            } else {
                $upload_data = "";
                if (!empty($this->input->post('txtCategoryName'))) {
                    $txtCategoryTitle = $this->input->post('txtCategoryName');
                } else {
                    $txtCategoryTitle = '';
                }

                if (!empty($this->input->post('txtSeoTitle'))) {
                    $txtSeoTitle = $this->input->post('txtSeoTitle');
                } else {
                    $txtSeoTitle = '';
                }
                if (!empty($this->input->post('MetaTag'))) {
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
                }


                if (!empty($this->input->post('txtStatus'))) {
                    $txtStatus = $this->input->post('txtStatus');
                } else {
                    $txtStatus = 'Inactive';
                }

                $config['upload_path'] = './uploads/category';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = 0;
                $config['width'] = 258;
                $config['height'] = 172;
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
                    'file_name' => $upload_data['file_name'],
                    'full_path' => $upload_data['full_path'],
                    'cat_name' => $txtCategoryTitle,
                    'cat_url' => createUrl($txtCategoryTitle),
                    'seo_title' => $txtSeoTitle,
                    'meta_tag' => $MetaTag,
                    'meta_descr' => $TxtMetaDescr,
                    'meta_keyword_descr' => $TxtMetaKey,
                    'created_at' => date('Y-m-d H:i:s'),
                    'status' => $txtStatus,
                    'created_by' => $user_type,
                    'delStatus' => 'no'
                );

                $tableName = "tbl_category";
                $lastInsertId = $this->Setting_model->insertData($tableName, $dataArr);

                if (!empty($lastInsertId && ($lastInsertId > 0))) {

                    $dataArrMast = array(
                        'file_name' => $upload_data['file_name'],
                        'full_path' => $upload_data['full_path'],
                        'cat_name' => $txtCategoryTitle,
                        'cat_url' => createUrl($txtCategoryTitle),
                        'seo_title' => $txtSeoTitle,
                        'meta_tag' => $MetaTag,
                        'meta_descr' => $TxtMetaDescr,
                        'meta_keyword_descr' => $TxtMetaKey,
                        'created_at' => date('Y-m-d H:i:s'),
                        'status' => $txtStatus,
                        'created_by' => $user_type,
                        'delStatus' => 'no',
                        'cat_id' => $lastInsertId

                    );
                    $tableName = "mast_tbl_category";
                    $this->Setting_model->insertData($tableName, $dataArrMast);
                    $this->session->set_flashdata('done', 'Your category name  successfully saved...!');
                    redirect("admin/Category");
                } else {

                    $this->session->set_flashdata('error', 'Your data not saved Please Try Again...!');
                    redirect("admin/Category");
                }
            }
        } else {
            $this->session->set_flashdata('error', 'You are not a Human  Please try Again...!');
            redirect("admin/Category");
        }
    }

    public
    function listCategory()
    {

        $data['title'] = 'List Category';
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/include/sidebar');
        $data['list'] = $this->Category_model->getListByUserType();
        $this->load->view('admin/category/list', $data);


    }

    public
    function updateRecord()
    {

        $idH = $this->input->post('hidden_id');
        if (!empty($this->input->post('txtCategoryName'))) {
            $txtCategoryTitle = $this->input->post('txtCategoryName');
        } else {
            $txtCategoryTitle = '';
        }

        if (!empty($this->input->post('txtSeoTitle'))) {
            $txtSeoTitle = $this->input->post('txtSeoTitle');
        } else {
            $txtSeoTitle = '';
        }
        if (!empty($this->input->post('MetaTag'))) {
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
        }

        if (!empty($this->input->post('txtStatus'))) {
            $txtStatus = $this->input->post('txtStatus');
        } else {
            $txtStatus = 'Inactive';
        }

        $data['value'] = $this->session->userdata('logindetails');
        $user_type = $data['value']['user_type'];

        $dataArr = array(
            'cat_name' => $txtCategoryTitle,
            'cat_url' => createUrl($txtCategoryTitle),
            'seo_title' => $txtSeoTitle,
            'meta_tag' => $MetaTag,
            'meta_descr' => $TxtMetaDescr,
            'meta_keyword_descr' => $TxtMetaKey,
            'updated_at' => date('Y-m-d H:i:s'),
            'status' => $txtStatus,
            'created_by' => $user_type,
            'delStatus' => 'no'
        );

        $tableName = "tbl_category";
        $DbKey = "cat_id";
        $updatedId = $this->Setting_model->updateRecord($DbKey, $idH, $tableName, $dataArr);

        if (!empty($updatedId && ($updatedId > 0))) {

            $dataArrMast = array(

                'cat_name' => $txtCategoryTitle,
                'cat_url' => createUrl($txtCategoryTitle),
                'seo_title' => $txtSeoTitle,
                'meta_tag' => $MetaTag,
                'meta_descr' => $TxtMetaDescr,
                'meta_keyword_descr' => $TxtMetaKey,
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => $txtStatus,
                'created_by' => $user_type,
                'delStatus' => 'no',
                'cat_id' => $updatedId

            );
            $tableName = "mast_tbl_category";
            $DbKey = "mast_cat_id";
            $this->Setting_model->updateRecord($DbKey, $idH, $tableName, $dataArrMast);
            $this->session->set_flashdata('done', 'Your category record  successfully change...!');
            redirect("admin/Category");
        } else {

            $this->session->set_flashdata('error', 'Your data not saved Please Try Again...!');
            redirect("admin/Category");
        }

    }

    public function Show()
    {
        $idH = $this->input->get('id');
        $idShow = base64_decode($idH);
        $data['title'] = 'List Category';
        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/include/sidebar');
        $data['list'] = $this->Category_model->getListByUserType();
        $tableName = "tbl_category";
        $DbKey = "cat_id";
        $where = array('cat_id', $idShow, 'delStatus', 'no');
        $data['showResult'] = $this->Category_model->showDataById($DbKey, $where, $tableName);
        // print_r($data['showResult']); die;
        $this->load->view('admin/category/list', $data);
    }

    public function Restore()
    {
        $idH = $this->input->get('id');
        $idH = base64_decode($idH);
        $data = array(
            'delStatus' => 'no'
        );
        $tableName = "tbl_category";
        $DbKey = "cat_id";
        if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {

            $this->session->set_flashdata('done', 'Category Restore Successfully ...!!');
            redirect('admin/Category/listCategory');
        } else {
            $this->session->set_flashdata('error', 'Category  is not successfully Restore...!!');
            redirect('admin/Category/listCategory');
        }
    }


    public function deleteCategory()
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
            $tableName = "tbl_category";
            $DbKey = "cat_id";
            if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {

                $this->session->set_flashdata('done', 'Category Info Delete Successfully ...!!');
                redirect('admin/Category/listCategory');
            } else {
                $this->session->set_flashdata('error', 'Category  is not successfully deleted...!!');
                redirect('admin/Category/listCategory');
            }

        } else {

            $tableName = "tbl_category";
            $DbKey = "cat_id";
            if ($this->Setting_model->deleteRecord($DbKey, $idH, $tableName)) {

                $this->session->set_flashdata('done', 'Category Info Delete Successfully ...!!');
                redirect('admin/Category/listCategory');
            } else {
                $this->session->set_flashdata('error', 'Category  is not successfully deleted...!!');
                redirect('admin/Category/listCategory');
            }
        }

    }
}