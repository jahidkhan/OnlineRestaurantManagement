<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Customer_login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->output->nocache();
         $customer_id=$this->session->userdata('customer_id');
       if($customer_id !=NULL)
       {
           redirect('master','refresh');
       }
        
        
    }
 
    
     public function new_customer_login() {
     
         $data = array();
        $data['all_publish_brand'] = $this->super_admin_model->select_all_publish_brand();
        $data['all_featured_product'] = $this->master_model->select_all_featured_product();

        $data['maincontent'] = $this->load->view('customer_login', $data, true);
        $this->load->view('master', $data);
    }
    
    
     


    
    
    public function check_customer_login() {
        $email_address = $this->input->post('email_address', true);
        $password = $this->input->post('password', true);

        $result = $this->checkout_model->check_customer_login_info($email_address, $password);
//       echo '<pre>';
//       print_r($result);
//       exit();
        $sdata = array();

        if ($result) {
            $sdata['customer_name'] = $result->first_name . ' ' . $result->last_name;

            $sdata['email_address'] = $result->email_address;
            $sdata['customer_id'] = $result->customer_id;
            $this->session->set_userdata($sdata);
            //$sdata[]
            redirect('customer_login','refresh');
        } else {
            $sdata['message'] = 'Your User Id / Password Invalide !';
            $this->session->set_userdata($sdata);
            redirect('customer_login/new_customer_login');
        }
    }
    
    
    
}