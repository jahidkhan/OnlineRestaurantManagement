<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Checkout extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function customer_signup() {
         $this->output->nocache();
        $data = array();
        $data['all_publish_brand'] = $this->super_admin_model->select_all_publish_brand();
        $data['all_featured_product'] = $this->master_model->select_all_featured_product();
        $data['maincontent'] = $this->load->view('customer_signup', $data, true);
        $this->load->view('master', $data);
    }

    public function save_customer() {
        $data = array();
        $data['first_name'] = $this->input->post('first_name', true);
        $data['last_name'] = $this->input->post('last_name', true);
        $data['email_address'] = $this->input->post('email_address', true);
        $data['password'] = md5($this->input->post('password', true));
        $data['company_name'] = $this->input->post('company_name', true);
        $data['address'] = $this->input->post('address', true);
        $data['gender'] = $this->input->post('gender', true);
        $data['city'] = $this->input->post('city', true);
        $data['mobile'] = $this->input->post('mobile', true);

        $this->checkout_model->save_customer_info($data);
        $sdata = array();
        $sdata['customer_name'] = $data['first_name'] . ' ' . $data['last_name'];
        $this->session->set_userdata($sdata);
        
         $mdata = array();
        $mdata['from_address'] = 'sales@mobileshopbd.com';
        $mdata['admin_full_name'] = 'mobileshopbd';
        $mdata['to_address'] = $data['email_address'];
        $mdata['subject'] = 'Account Activation Email';
        $mdata['full_name'] = $data['first_name'] . '' . $data['last_name'];
        $mdata['customer_id'] = $this->session->userdata('customer_id');
        $mdata['password'] = $this->input->post('password', true);
        $this->mailer_model->sendEmail2($mdata, 'activation_email');
        
        

        redirect('checkout/shipping_address');
    }

    public function check_customer_email($email_address) {
        $result = $this->checkout_model->check_email_address($email_address);

        if ($result) {
            echo 'Email Address Alredy Exists !';
        } else {
            echo 'Email Address Avilable';
        }
    }

    public function new_customer_signup() {
        $data = array();
        $data['all_publish_brand'] = $this->super_admin_model->select_all_publish_brand();
        $data['all_featured_product'] = $this->master_model->select_all_featured_product();

        $data['maincontent'] = $this->load->view('new_customer_signup', $data, true);
        $this->load->view('master', $data);
    }

    public function new_customer() {
        $data = array();
        $data['first_name'] = $this->input->post('first_name', true);
        $data['last_name'] = $this->input->post('last_name', true);
        $data['email_address'] = $this->input->post('email_address', true);
        $data['password'] = md5($this->input->post('password', true));
        $data['company_name'] = $this->input->post('company_name', true);
        $data['address'] = $this->input->post('address', true);
        $data['gender'] = $this->input->post('gender', true);
        $data['city'] = $this->input->post('city', true);
        $data['mobile'] = $this->input->post('mobile', true);

        $this->checkout_model->save_new_customer_info($data);

//        $sdata=array();
//        $sdata['message']='Successfuly registered';
//        $this->session->set_userdata($sdata);
        /*
         * Start Send Customer Activation Email
         */
        $mdata = array();
        $mdata['from_address'] = 'sales@mobileshopbd.com';
        $mdata['admin_full_name'] = 'mobileshopbd';
        $mdata['to_address'] = $data['email_address'];
        $mdata['subject'] = 'Account Activation Email';
        $mdata['full_name'] = $data['first_name'] . '' . $data['last_name'];
        $mdata['customer_id'] = $this->session->userdata('customer_id');
        $mdata['password'] = $this->input->post('password', true);
        $this->mailer_model->sendEmail($mdata, 'activation_email');
        /*
         * End Send Customer Activation Email
         */
        redirect('master');
    }

    public function shipping_address() {
        $data = array();
        $data['all_publish_brand'] = $this->super_admin_model->select_all_publish_brand();
        $data['all_featured_product'] = $this->master_model->select_all_featured_product();

        $data['maincontent'] = $this->load->view('shipping_form', $data, true);
        $this->load->view('master', $data);
    }

    public function save_shipping_address() {
        $data['full_name'] = $this->input->post('full_name', true);
        $data['mobile_no'] = $this->input->post('mobile_no', true);
        $data['email_address'] = $this->input->post('email_address', true);
        $data['company_name'] = $this->input->post('company_name', true);
        $data['address'] = $this->input->post('address', true);
        $data['city'] = $this->input->post('city', true);

        $this->checkout_model->save_shipping_info($data);
        redirect('checkout/payment_method');
    }

    public function payment_method() {
        $data = array();
        $data['all_publish_brand'] = $this->super_admin_model->select_all_publish_brand();
        $data['all_featured_product'] = $this->master_model->select_all_featured_product();

        $data['maincontent'] = $this->load->view('payment_method', $data, true);
        $this->load->view('master', $data);
    }

    public function confirm_order() {
        $data = array();
        $payment_type = $this->input->post('payment_type', true);
//        $order_comments=$this->input->post('order_comments',true);
        if ($payment_type == 'cash_on_delivery') {
            $data['payment_type'] = $payment_type;
            $this->checkout_model->save_payment_info($data);
            $this->checkout_model->save_order_info();
            /*
             * Email From Here....
             */
            $this->cart->destroy();
            redirect('checkout/order_successfull');
        }
        if ($payment_type == 'paypal') {
            $data['payment_type'] = $payment_type;
            $this->checkout_model->save_payment_info($data);
            $this->checkout_model->save_order_info();
            /*
             * Email From Here....
             */
//            $this->cart->destroy();
            $this->load->view('htmlWebsiteStandardPayment');
        }
    }

    public function order_successfull() {
        $data = array();
        $data['all_publish_brand'] = $this->super_admin_model->select_all_publish_brand();
        $data['all_featured_product'] = $this->master_model->select_all_featured_product();


        $data['maincontent'] = $this->load->view('order_successfull', $data, true);
        $this->load->view('master', $data);
    }

    public function update_customer_status($customer_enc_id) {

        $id = str_replace("%F2", "/", $customer_enc_id);

        $customer_id = $this->encrypt->decode($id);
        $this->checkout_model->update_customer_activation_status($customer_id);
//         $data['all_publish_brand'] = $this->super_admin_model->select_all_publish_brand();
//        $data['all_featured_product'] = $this->master_model->select_all_featured_product();
//        
//        $this->load->view('mailScripts/success_activation','$data', true);
        $this->load->view('mailScripts/success_activation');
        $this->session->unset_userdata('customer_id');
    }
       public function update_customer_status2($customer_enc_id) {

        $id = str_replace("%F2", "/", $customer_enc_id);

        $customer_id = $this->encrypt->decode($id);
        $this->checkout_model->update_customer_activation_status($customer_id);
//         $data['all_publish_brand'] = $this->super_admin_model->select_all_publish_brand();
//        $data['all_featured_product'] = $this->master_model->select_all_featured_product();
//        
//        $this->load->view('mailScripts/success_activation','$data', true);
        $this->load->view('mailScripts2/success_activation');
       $sdata=array();
        $sdata['customer_id']=$customer_id;
        $this->session->set_userdata($sdata);
    }

    public function logout() {
        $this->session->unset_userdata('customer_name');
        $this->session->unset_userdata('customer_id');
        $this->session->unset_userdata('message');
        $this->cart->destroy();
//        $sdata=array();
//        $sdata['message']='You are Successfully Logout !';
//        $this->session->set_userdata($sdata);
        redirect('master');
    }
//
//    public function customer_login() {
//        $data = array();
//        $data['all_publish_brand'] = $this->super_admin_model->select_all_publish_brand();
//        $data['all_featured_product'] = $this->master_model->select_all_featured_product();
//
//        $data['maincontent'] = $this->load->view('customer_login', $data, true);
//        $this->load->view('master', $data);
//    }

    

    public function check_customer_login_email($email_address) {
        $result = $this->checkout_model->check_email_address($email_address);

        if ($result) {
            echo 'Email Address Match';
        } else {
            echo 'Email Address is not Avilable';
        }
    }

    public function check_user_login() {
        $email_address = $this->input->post('email_address');
        $password = $this->input->post('password');

        $result = $this->checkout_model->check_user_login_info($email_address, $password);
        $sdata = array();
        if ($result) {
            $sdata['customer_name'] = $result->first_name . ' ' . $result->last_name;

            $sdata['email_address'] = $result->email_address;
            $sdata['customer_id'] = $result->customer_id;
            $this->session->set_userdata($sdata);
            redirect('welcome');
        } else {
            $sdata['message'] = 'Invalide Password ';
            $this->session->set_userdata($sdata);
            redirect('checkout/customer_login');
        }
    }
    
    

}
