<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Super_Admin_Model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    public function save_brand_info($data)
    {
      $this->db->insert('tbl_brand',$data); 
    }
    public function select_all_brand() {
        $this->db->select('*');
        $this->db->from('tbl_brand');
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }
    public function update_publication_status_by_id($brand_id)
    {
       $this->db->set('publication_status',1);
        $this->db->where('brand_id',$brand_id); 
        $this->db->update('tbl_brand'); 
        
    }
     public function update_unpublication_status_by_id($brand_id)
    {
       $this->db->set('publication_status',0);
        $this->db->where('brand_id',$brand_id); 
        $this->db->update('tbl_brand'); 
        
    }
    public function select_brand_info_by_id($brand_id)
    {
      $this->db->select('*');
        $this->db->from('tbl_brand');
        $this->db->where('brand_id',$brand_id);
        
        $query_result = $this->db->get();
        $result = $query_result->row();

        return $result;  
    }
    public function update_brand_info($data,$brand_id)
    {
        $this->db->where('brand_id',$brand_id);
        $this->db->update('tbl_brand',$data);
    }
   
    public function delete_brand_by_id($brand_id)
    {
       $this->db->where('brand_id',$brand_id);
        $this->db->delete('tbl_brand'); 
        
    }
    
    public function all_publish_brand()
    {
        
       $this->db->select('*');
        $this->db->from('tbl_brand');
        
        
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;    
        
    }
     public function save_product_info($data)
    {
      $this->db->insert('tbl_product',$data); 
    }
    
     public function booking($data)
    {
      $this->db->insert('tbl_booking',$data); 
    }
    public function select_all_product(){
        
         $sql="SELECT p.*,b.brand_name FROM tbl_product as p,tbl_brand as b WHERE p.brand_id=b.brand_id ";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();

        return $result;
    }
     
     public function select_all_publish_brand()
    {
        $this->db->select('*');
        $this->db->from('tbl_brand');
        $this->db->where('publication_status',1);
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }
    
    
    public function update_publication_product_by_id($product_id){
        $this->db->set('publication_status', 1);
        $this->db->where('product_id', $product_id);
        $this->db->update('tbl_product');
    }
    
    public function update_unpublication_product_by_id($product_id) {

        $this->db->set('publication_status', 0);
        $this->db->where('product_id', $product_id);
        $this->db->update('tbl_product');
    }
    
    public function update_featured_product_by_id($product_id){
        $this->db->set('featured_product', 1);
        $this->db->where('product_id', $product_id);
        $this->db->update('tbl_product');
    }
    
    public function update_unfeatured_product_by_id($product_id) {

        $this->db->set('featured_product', 0);
        $this->db->where('product_id', $product_id);
        $this->db->update('tbl_product');
    }
    public function select_product_info_by_id($product_id) {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('product_id', $product_id);
        $query_result = $this->db->get();
        $result = $query_result->row();

        return $result;
    }
    
    public function update_product_by_id($data,$product_id){


     $this->db->where('product_id',$product_id);
        $this->db->update('tbl_product',$data);
    } 
    
    public function delete_product_by_id($product_id){
         $sql="SELECT * FROM tbl_product WHERE product_id='$product_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
       
        
        unlink("$result->product_image");
        $this->db->where('product_id', $product_id);
        $this->db->delete('tbl_product');
    }


    public function delete_image_by_id($product_id){
         $sql="SELECT * FROM tbl_product WHERE product_id='$product_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
       
        
        unlink("$result->product_image");
        
        
        $this->db->set('product_image', '');
        $this->db->where('product_id', $product_id);
        $this->db->update('tbl_product');
        
        return $result;
        
        
    }
     public function select_all_order() {
         $sql="SELECT o.*,c.first_name,c.last_name,p.payment_type FROM tbl_order as o,tbl_customer as c, tbl_payment as p  WHERE  (o.customer_id=c.customer_id AND o.payment_id=p.payment_id )";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();

        return $result;
    }
      public function select_all_booking() {
         $sql="SELECT * FROM tbl_booking";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();

        return $result;
    }
      public function select_order_by_id($order_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_order');
        $this->db->where('order_id', $order_id);
        $query_result = $this->db->get();
        $result = $query_result->row();

        return $result;
    }
    
       public function select_customer_info_by_id($customer_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_customer');
        $this->db->where('customer_id', $customer_id);
        $query_result = $this->db->get();
        $result = $query_result->row();

        return $result;
    }
    public function select_shipping_info_by_id($shipping_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_shipping');
        $this->db->where('shipping_id', $shipping_id);
        $query_result = $this->db->get();
        $result = $query_result->row();

        return $result;
    }
    public function select_order_details_info($order_id)
    {
        
        $this->db->select('*');
        $this->db->from('tbl_order_details');
        $this->db->where('order_id', $order_id);
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }
    
     public function confirm_booking_by_id($booking_id){
        
      $this->db->set('booking_status', 1);
        $this->db->where('booking_id', $booking_id);
        $this->db->update('tbl_booking');
        
        
        
    }
    
    
    public function pending_booking_by_id($booking_id){
        $this->db->set('booking_status', 0);
        $this->db->where('booking_id', $booking_id);
        $this->db->update('tbl_booking');
    }
    
    
    public function delete_booking_by_id($booking_id){
        $this->db->where('booking_id',$booking_id);
        $this->db->delete('tbl_booking');
        
    }
}