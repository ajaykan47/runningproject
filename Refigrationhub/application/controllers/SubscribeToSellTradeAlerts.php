<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SubscribeToSellTradeAlerts extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Setting_model');
        $this->load->library('user_agent');
    }

    public function index()
    {
        $data['title'] = "Refrigration Hub";
        $data['author'] = "Refrigration Hub";
        $data['description'] = "Refrigration Hub";
        $data['keywords'] = "Refrigration Hub";
        $this->load->view('site/include/header', $data);
        $this->load->view('site/subscribe-to-trade-alerts/index');
        $this->load->view('site/include/footer');
    }

    public function addSubAlert()
    {
        $this->form_validation->set_rules('txtKeywords', 'E-mail', 'trim|required');
        $this->form_validation->set_rules('txtName', 'Number', 'trim|required');
        $this->form_validation->set_rules('txtMail', 'Number', 'trim|required');
        $this->form_validation->set_rules('txtMobile', 'Number', 'trim|required');
        if ($this->form_validation->run() == false) {
            redirect('SubscribeToSellTradeAlerts');
        } else {

            if (!empty($this->input->post('txtKeywords'))) {
                $keyword = $this->input->post('txtKeywords');
            } else {
                $keyword = '';
            }
            if (!empty($this->input->post('txtName'))) {
                $name = $this->input->post('txtName');
            } else {
                $name = '';
            }
            if (!empty($this->input->post('txtMail'))) {
                $email = $this->input->post('txtMail');
            } else {
                $email = '';
            }
            if (!empty($this->input->post('txtMobile'))) {
                $mobile = $this->input->post('txtMobile');
            } else {
                $mobile = '';
            }
            $data = array(
                'subriSlart_keyword' => $keyword,
                'subriSlart_name' => $name,
                'subriSlart_email' => $email,
                'subriSlart_mob' => $mobile,
                'created_at' => date('Y-m-d H:i:s')
            );
            $tableName = "tbl_subscribetoselltradealerts";
            $returnId = $this->Setting_model->insertData($tableName, $data);
            if ($returnId > 0) {
                $this->session->set_flashdata('done', 'A confirmation link  code has been sent to ' . $email . ' Please Login and Click Subscription Alert !');
                redirect('SubscribeToSellTradeAlerts/sercribealertSuccess');
            } else {
                $this->session->set_flashdata('error', 'Sorry You are Missing Something Please Try Again ...!');
                redirect('SubscribeToSellTradeAlerts/sercribealertSuccess');
            }
        }
    }

    /* public function sendMessage()
     {

         $message = "Dear Ajay Kumar,
             Please click on the below link to activate your Refrigerationalert on refrigerationhub.com.
             https://www.tradeindia.com/utils/activate_trade_alert.html?code=cd1d76bcc548daaabff6226a45dad13b&group_id=719169
             Kindly do not reply to the sender of this email , if you have any queries please
             reply to trademoderator@tradeindia.com

             Regards

             Tradeindia.com Helpdesk";

     }*/

    public function sercribealertSuccess()
    {

        $data['title'] = "Refrigration Hub";
        $data['author'] = "Refrigration Hub";
        $data['description'] = "Refrigration Hub";
        $data['keywords'] = "Refrigration Hub";
        $this->load->view('site/include/header', $data);
        $this->load->view('site/subscribe-to-trade-alerts/success');
        $this->load->view('site/include/footer');

    }


    public function activateAlert()
    {
        $this->session->set_flashdata('done', 'Congratulation Your Account is Activated !');
        redirect("SubscribeToSellTradeAlerts/sercribealertSuccess");


    }


}
