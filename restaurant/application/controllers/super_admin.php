<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
session_start();

class Super_Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $admin_id = $this->session->userdata('admin_id');
        if ($admin_id == NULL) {
            redirect('admin', 'refresh');
        }
    }

    public function index() {
        $data = array();
        $data['maincontent'] = $this->load->view('admin/admin_dashboard', '', true);
        $this->load->view('admin/admin_master', $data);
    }

    public function add_brand() {

        $data = array();
        $data['maincontent'] = $this->load->view('admin/add_brand', '', true);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_brand() {
        $data = array();
        $data['brand_name'] = $this->input->post('brand_name', true);
        $data['brand_description'] = $this->input->post('brand_description', true);
        $data['publication_status'] = $this->input->post('publication_status', true);

        $this->super_admin_model->save_brand_info($data);
        $sdata = array();
        $sdata['message'] = 'Save Category Information Successfully !';
        $this->session->set_userdata($sdata);

        redirect('super_admin/add_brand');
    }

    public function manage_brand() {
        $data = array();
        $data['all_brand'] = $this->super_admin_model->select_all_brand();
        $data['maincontent'] = $this->load->view('admin/manage_brand', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function published_brand($brand_id) {

        $this->super_admin_model->update_publication_status_by_id($brand_id);
        redirect('super_admin/manage_brand');
    }

    public function unpublished_brand($brand_id) {

        $this->super_admin_model->update_unpublication_status_by_id($brand_id);
        redirect('super_admin/manage_brand');
    }

    public function edit_brand($brand_id) {
        $data = array();
        $data['brand_info'] = $this->super_admin_model->select_brand_info_by_id($brand_id);
        $data['maincontent'] = $this->load->view('admin/edit_brand', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_brand() {
        $data = array();
        $brand_id = $this->input->post('brand_id');
        $data['brand_name'] = $this->input->post('brand_name');
        $data['brand_description'] = $this->input->post('brand_description');
        $data['publication_status'] = $this->input->post('publication_status');
        $this->super_admin_model->update_brand_info($data, $brand_id);
        redirect('super_admin/manage_brand');
    }

    public function delete_brand($brand_id) {
        $this->super_admin_model->delete_brand_by_id($brand_id);
        redirect('super_admin/manage_brand');
    }

    public function logout() {
        $this->session->unset_userdata('admin_full_name');
        $this->session->unset_userdata('admin_id');
        $sdata = array();
        $sdata['message'] = 'You are successfully logout';
        $this->session->set_userdata($sdata);
        
        redirect('admin');
    }

    public function add_product() {

        $data = array();
        $data['all_publish_brand'] = $this->super_admin_model->all_publish_brand();

        $data['maincontent'] = $this->load->view('admin/add_product',$data, true);
        $this->load->view('admin/admin_master', $data);
    }
    public function save_product()
    {
      $data=array();
      $data['product_name']=$this->input->post('product_name',true);
      $data['brand_id']=$this->input->post('brand_id',true);
      $data['product_description']=$this->input->post('product_description',true);
      $data['product_price']=$this->input->post('product_price',true);
      $data['old_price']=$this->input->post('old_price',true);
      $data['product_quantity']=$this->input->post('product_quantity',true);
      $data['featured_product']=$this->input->post('featured_product',true);
      if($data['featured_product']=='on')
      {
        $data['featured_product']=1;  
      }
      $data['publication_status']=$this->input->post('publication_status',true); 
      
       $config['upload_path'] = './admin_doc/product_images/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']	= '2048';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error='';
        $fdata=array();
        if ( ! $this->upload->do_upload('product_image'))
        {
                $error =  $this->upload->display_errors();
                echo $error;
                exit();
        }
        else
        {
                $fdata = $this->upload->data();
                $data['product_image']=$config['upload_path'] .$fdata['file_name'];
        }
       
      $this->super_admin_model->save_product_info($data);  
      redirect('super_admin/add_product');
    }
    
    public function booking()
    {
      $data=array();
      $data['full_name']=$this->input->post('full_name',true);
      $data['mobile_no']=$this->input->post('mobile_no',true);
      $data['email_address']=$this->input->post('email_address',true);
      $data['time']=$this->input->post('time',true);
      $data['date']=$this->input->post('date',true);
      $data['company_name']=$this->input->post('company_name',true);
      $data['person_no']=$this->input->post('person_no',true);
      $data['address']=$this->input->post('address',true);
      $this->super_admin_model->booking($data);
      $sdata = array();
      $sdata['message'] = 'You booking has been submitted';
      $this->session->set_userdata($sdata);
      $this->load->view('master/booking',$data);
    }
    
    public function manage_product()
    {
        $data=array();
        $data['all_product']=$this->super_admin_model->select_all_product();
        $data['maincontent']=$this->load->view('admin/manage_product',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
     public function published_product($product_id)
    {
       
        $this->super_admin_model->update_publication_product_by_id($product_id);
        redirect('super_admin/manage_product');
    }
     public function unpublished_product($product_id)
    {
       
        $this->super_admin_model->update_unpublication_product_by_id($product_id);
        redirect('super_admin/manage_product');
    }
    
     public function featured_product($product_id)
    {
       
        $this->super_admin_model->update_featured_product_by_id($product_id);
        redirect('super_admin/manage_product');
    }
    
    public function unfeatured_product($product_id)
    {
       
        $this->super_admin_model->update_unfeatured_product_by_id($product_id);
        redirect('super_admin/manage_product');
    }
    
     public function edit_product($product_id)
    {
        $data=array();
         
        $data['all_published_brand']=$this->super_admin_model->select_all_publish_brand();
        $data['product_info']=$this->super_admin_model->select_product_info_by_id($product_id);
        $data['maincontent']=$this->load->view('admin/edit_product',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
     public function update_product(){
        
      $data=array();
      $product_id=$this->input->post('product_id',TRUE);
      $data['product_name']=$this->input->post('product_name',true);
      $data['brand_id']=$this->input->post('brand_id',true);
      $data['product_description']=$this->input->post('product_description',true);
      $data['product_price']=$this->input->post('product_price',true);
      $data['old_price']=$this->input->post('old_price',true);
      $data['product_quantity']=$this->input->post('product_quantity',true);
      $data['featured_product']=$this->input->post('featured_product',true);
        if($featured_product=='on')
        {
             $data['featured_product']=1;
        }
        else{
            $data['featured_product']=0;
        }

        /*
         * ------- Start Image Upload---------
         */
        
//        if($this->input->post('featured_image')){
        $config['upload_path'] = './admin_doc/product_images/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']	= '';
        $config['max_width']  = '';
        $config['max_height']  = '';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error='';
        $fdata=array();
        if ($this->upload->do_upload('product_image'))
        {
                 $fdata = $this->upload->data();
                $data['product_image']=$config['upload_path'] .$fdata['file_name'];
        }
        
        
        /*
         * --------End Image Upload---------
         */
//        }
        $data['publication_status']=$this->input->post('publication_status');
//        echo '<pre>';
//        print_r($data);
//        exit();
        
        $this->super_admin_model->update_product_by_id($data,$product_id);
        redirect('super_admin/manage_product');
    }
    public function delete_product($product_id)
    {
        $this->super_admin_model->delete_product_by_id($product_id);
        redirect('super_admin/manage_product');
    }
     public function delete_image($product_id)
    {
         $data=array();
        $data['img']=$this->super_admin_model->delete_image_by_id($product_id);
    
         $data['all_published_brand']=$this->super_admin_model->select_all_publish_brand();
        
        $data['product_info']=$this->super_admin_model->select_product_info_by_id($product_id);
        $data['maincontent']=$this->load->view('admin/edit_product',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
           public function manage_order()
    {
        $data=array();
        $data['all_order']=$this->super_admin_model->select_all_order();
        $data['maincontent']=$this->load->view('admin/manage_order',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
           public function manage_booking()
    {
        $data=array();
        $data['all_booking']=$this->super_admin_model->select_all_booking();
        $data['maincontent']=$this->load->view('admin/manage_booking',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
    
    public function view_invoice($order_id)
    {
        $data=array();
        $data['order_info']=$this->super_admin_model->select_order_by_id($order_id);
//        echo '<pre>';
//        print_r($order_info);
//        exit();
        $customer_id=$data['order_info']->customer_id;
        $shipping_id=$data['order_info']->shipping_id;
        $data['billing_info']=$this->super_admin_model->select_customer_info_by_id($customer_id);
        $data['shipping_info']=$this->super_admin_model->select_shipping_info_by_id($shipping_id);
        $data['cart_contents']=$this->super_admin_model->select_order_details_info($data['order_info']->order_id);
        $data['maincontent']=$this->load->view('admin/invoice',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    public function download($order_id)
    {
        $data=array();
        $data['order_info']=$this->super_admin_model->select_order_by_id($order_id);
//        echo '<pre>';
//        print_r($order_info);
//        exit();
        $customer_id=$data['order_info']->customer_id;
        $shipping_id=$data['order_info']->shipping_id;
        $data['billing_info']=$this->super_admin_model->select_customer_info_by_id($customer_id);
        $data['shipping_info']=$this->super_admin_model->select_shipping_info_by_id($shipping_id);
        $data['cart_contents']=$this->super_admin_model->select_order_details_info($data['order_info']->order_id);
        
        $this->load->helper('dompdf');
        $view_file=$this->load->view('admin/invoice', $data, true);
        $file_name=pdf_create($view_file, 'inv-'.$data['order_info']->order_id);
        echo $file_name;
    }
    
    public function confirm_booking($booking_id){
        
        $this->super_admin_model->confirm_booking_by_id($booking_id);
        redirect('super_admin/manage_booking');
    }
    
    
    public function pending_booking($booking_id){
        
        $this->super_admin_model->pending_booking_by_id($booking_id);
           redirect('super_admin/manage_booking');
    }
    
    public function delete_booking($booking_id){
        
           $this->super_admin_model->delete_booking_by_id($booking_id);
           redirect('super_admin/manage_booking');
    }
    
   



}
