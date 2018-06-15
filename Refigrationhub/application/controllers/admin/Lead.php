<?php
/**
 * Created by $ajaykan47.
 * User: admin
 * Date: 5/23/2018
 * Time: 4:01 PM
 */

class  Lead extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        if (!($this->session->userdata('logindetails'))) {
            redirect('admin/Auth');
        }
    }

    public function index(){
        echo 'Lead ';

    }
}