<?php

if ( ! defined('BASEPATH'))
    exit('No direct script access allowed');

class Master extends CI_Controller
{

    public function index()
    {
        $data = array();
        $data['all_publish_brand'] = $this->super_admin_model->select_all_publish_brand();
        $data['all_featured_product'] = $this->master_model->select_all_featured_product();

        $data['maincontent'] = $this->load->view('home_page', $data, true);
        $this->load->view('master', $data);
    }



    public function about_us()
    {
        $data = array();
        $data['all_publish_brand'] = $this->super_admin_model->select_all_publish_brand();
        $data['all_featured_product'] = $this->master_model->select_all_featured_product();

        $data['maincontent'] = $this->load->view('about_us', $data, true);
        $this->load->view('master', $data);
    }

    public function contact_us()
    {
        $data = array();
        $data['all_publish_brand'] = $this->super_admin_model->select_all_publish_brand();
        $data['all_featured_product'] = $this->master_model->select_all_featured_product();

        $data['maincontent'] = $this->load->view('contact_us', $data, true);
        $this->load->view('master', $data);
    }

    public function booking()
    {

        $taken_seat = $this->master_model->check_available_person();

        $data = array();

        $data['all_publish_brand'] = $this->super_admin_model->select_all_publish_brand();
        $taken_seat = $this->master_model->check_available_person();
        $data['available_seat'] = 200 - $taken_seat->total;
        $data['all_featured_product'] = $this->master_model->select_all_featured_product();

        $data['maincontent'] = $this->load->view('booking', $data, true);
        $this->load->view('master', $data);
    }

    public function confirm_booking()
    {
        $data = array();
        $data['person_no'] = $this->input->post('person_no', true);
        $data['date'] = $this->input->post('date', true);

        $input_date = $data['date'];

        date_default_timezone_set("Asia/Dhaka");
        $now = date("Y-m-d");


        $request_person = $data['person_no'];
        $booked_person = $this->master_model->check_available_person_by_date($input_date);
        $available_person = 200 - $booked_person->total;
        $total = $booked_person->total + $request_person;


        if ($input_date < $now) {


            $sdata = array();
            $sdata['message2'] = "Sorry!! You cant select previous date! ";
            $this->session->set_userdata($sdata);

            $taken_seat = $this->master_model->check_available_person();
            $data['available_seat'] = 200 - $taken_seat->total;
            $data['all_publish_brand'] = $this->super_admin_model->select_all_publish_brand();
            $data['all_featured_product'] = $this->master_model->select_all_featured_product();
            $data['maincontent'] = $this->load->view('booking', $data, true);
            $this->load->view('master', $data);

        } elseif ($total > 200) {


            $sdata = array();
            $sdata['message2'] = "Sorry!! We have only $available_person seats left at $input_date . ";
            $this->session->set_userdata($sdata);

            $taken_seat = $this->master_model->check_available_person();
            $data['available_seat'] = 200 - $taken_seat->total;
            $data['all_publish_brand'] = $this->super_admin_model->select_all_publish_brand();
            $data['all_featured_product'] = $this->master_model->select_all_featured_product();
            $data['maincontent'] = $this->load->view('booking', $data, true);
            $this->load->view('master', $data);


        } else {


            $data['full_name'] = $this->input->post('full_name', true);
            $data['mobile_no'] = $this->input->post('mobile_no', true);
            $data['email_address'] = $this->input->post('email_address', true);
            $data['time'] = $this->input->post('time', true);

            $data['company_name'] = $this->input->post('company_name', true);

            $data['address'] = $this->input->post('address', true);
            $this->master_model->booking($data);
            $sdata = array();
            $sdata['message'] = 'You booking has been submitted';
            $this->session->set_userdata($sdata);

            $sdata = array();
            $sdata['message'] = 'Booking successfully submitted !';
            $this->session->set_userdata($sdata);

            redirect('master/booking');
        }
    }

    public function product_details($product_id)
    {

        $data = array();

        $data['all_publish_brand'] = $this->super_admin_model->select_all_publish_brand();
        $data['all_featured_product'] = $this->master_model->select_all_featured_product();
        $data['product_info'] = $this->master_model->select_product_by_product_id($product_id);
        $data['maincontent'] = $this->load->view('product_details', $data, true);
        $this->load->view('master', $data);
    }

    public function brand_product($brand_id)
    {

        $data = array();

        $data['all_publish_brand'] = $this->super_admin_model->select_all_publish_brand();
        $data['all_featured_product'] = $this->master_model->select_all_featured_product();
        $data['brand_product'] = $this->master_model->select_brand_product_by_brand_id($brand_id);
//       echo '<pre>';
//        print_r($result);
//        exit();
        $data['maincontent'] = $this->load->view('brand_page_content', $data, true);
        $this->load->view('master', $data);
    }

    public function customer_info()
    {
        $data = array();
        $customer_id = $this->session->userdata('customer_id');
        $data['all_publish_brand'] = $this->super_admin_model->select_all_publish_brand();
        $data['all_featured_product'] = $this->master_model->select_all_featured_product();
        $data['customer_info'] = $this->master_model->select_all_customer_info($customer_id);
        $data['maincontent'] = $this->load->view('customer_info', $data, true);
        $this->load->view('master', $data);
    }

    public function edit_customer_info()
    {
        $data = array();
        $customer_id = $this->session->userdata('customer_id');
        $data['all_publish_brand'] = $this->super_admin_model->select_all_publish_brand();
        $data['all_featured_product'] = $this->master_model->select_all_featured_product();
        $data['customer_info'] = $this->master_model->select_all_customer_info($customer_id);
        $data['maincontent'] = $this->load->view('edit_customer_info', $data, true);
        $this->load->view('master', $data);
    }

    public function change_customer_password()
    {

        $data = array();
//        $customer_id=$this->session->userdata('customer_id');
        $data['all_publish_brand'] = $this->super_admin_model->select_all_publish_brand();
        $data['all_featured_product'] = $this->master_model->select_all_featured_product();
//        $data['customer_info']=$this->master_model->select_all_customer_info($customer_id);
        $data['maincontent'] = $this->load->view('change_customer_password', $data, true);
        $this->load->view('master', $data);
    }

    public function update_password()
    {

        $customer_id = $this->session->userdata('customer_id');

        $password_1 = $this->input->post('password_1', true);
        $password_2 = $this->input->post('password_2', true);
        $password = MD5($password_2);
        if ($password_1 == $password_2) {
            $this->master_model->update_customer_password_by_customer_id($password, $customer_id);
            $data = array();
            $data['alert'] = 'Your successfully changed your password !';
            $this->session->set_userdata($data);
            redirect('master/change_customer_password');
        } else {
            $data = array();
            $data['alert'] = 'Your password doesnot match !';
            $this->session->set_userdata($data);
            redirect('master/change_customer_password');
        }
    }

    public function update_customer()
    {

        $data = array();
        $customer_id = $this->input->post('customer_id', true);
        $data['first_name'] = $this->input->post('first_name', true);
        $data['last_name'] = $this->input->post('last_name', true);

        $data['company_name'] = $this->input->post('company_name', true);
        $data['address'] = $this->input->post('address', true);
        $data['gender'] = $this->input->post('gender', true);
        $data['city'] = $this->input->post('city', true);
        $data['mobile'] = $this->input->post('mobile', true);
        $this->master_model->update_customer_info_by_customer_id($data, $customer_id);

        $sdata = array();
        $sdata['message'] = 'Update Your Information Successfully !';
        $this->session->set_userdata($sdata);

        redirect('master/customer_info');
    }

    public function forgot_password()
    {

        $data = array();

        $data['all_publish_brand'] = $this->super_admin_model->select_all_publish_brand();
        $data['all_featured_product'] = $this->master_model->select_all_featured_product();

        $data['maincontent'] = $this->load->view('forgot_password', $data, true);
        $this->load->view('master', $data);
    }

    public function recover_password()
    {
        $email_address = $this->input->post('email_address', true);
        $result = $this->master_model->select_email_address($email_address);
//       echo'pre';
//       print_r($result);
//       exit();

        if ( ! $result) {
            $sdata = array();
            $sdata['message'] = 'Your email enterred does not match..please enter correct email...  ';
            $this->session->set_userdata($sdata);
            redirect('master/forgot_password');
        } else {
            $mdata = array();
            $mdata['from_address'] = 'sales@mobileshopbd.com';
            $mdata['admin_name'] = 'mobileshopbd';
            $mdata['to_address'] = $email_address;
            $mdata['subject'] = 'Password Recover Email';
            $mdata['last_name'] = $result->first_name . ' ' . $result->last_name;
            $mdata['admin_id'] = $result->customer_id;

            $this->mailer_model->send_password_Email($mdata, 'forget_password_email');

            redirect('master');
        }
    }

    public function check_customer_email($email_address)
    {
        $result = $this->checkout_model->check_email_addfdress($email_address);

        if ($result) {
            echo 'Email Address Alredy Exists !';
        } else {
            echo 'Email Address Avilable';
        }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */