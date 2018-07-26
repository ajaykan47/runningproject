<?php
/**************************************
 * Created By Ajaykan47*******************
 * 09th/March/2018*************************
 * ************FlawlessIndia Pvt Ltd************
 * ************************************************/
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

          if(!($this->session->userdata('logindetails'))){
           redirect('http://www.flawlessindia.in');
       }
       $this->load->model('Setting_model');
    }


    public function index()
	{	echo 'logout';
            $this->session->sess_destroy();
       redirect('http://www.flawlessindia.in');
        exit();

	}

	
    }
