<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Master_Model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
   public function select_all_featured_product()
    {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('publication_status',1);
        $this->db->where('featured_product', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }
   public function save_customer_info($data)
   {
       $this->db->INSERT('tbl_customer',$data);
       
       
   }
    public function check_customer_login_info($customer_email,$customer_password)
    {
        
        
         $this->db->select('*'); 
       $this->db->from('tbl_customer'); 
       $this->db->where('customer_email',$customer_email); 
       $this->db->where('customer_password',MD5($customer_password));
       $query_result=$this->db->get();
       $result=$query_result->row();
       return $result;
    }
    public function select_product_by_product_id($product_id)
    {
        
     $sql="SELECT p.*,b.brand_name FROM tbl_product as p,tbl_brand as b WHERE   p.brand_id=b.brand_id AND p.product_id='$product_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();

        return $result;   
    }
    public function select_brand_product_by_brand_id($brand_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('publication_status',1);
        $this->db->where('brand_id',$brand_id);
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }
    public function select_all_customer_info($customer_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_customer');
        $this->db->where('customer_id',$customer_id);
        
        $query_result = $this->db->get();
        $result = $query_result->row();

        return $result;   
        
    }
   public function update_customer_info_by_customer_id($data,$customer_id)
   {
       $this->db->where('customer_id',$customer_id);
        $this->db->update('tbl_customer',$data);
   }
   public function update_customer_password_by_customer_id($password,$customer_id)
   {
       $this->db->set('password',$password);
     $this->db->where('customer_id',$customer_id);
        $this->db->update('tbl_customer');  
       
       
   }
    public function select_email_address($email_address){
        $this->db->select('*');
        $this->db->from('tbl_customer');
        $this->db->where('email_address',$email_address);
        
   
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
        
    }
     public function booking($data)
    {
      $this->db->insert('tbl_booking',$data); 
    }
    
    
    public function check_available_person(){
       date_default_timezone_set("Asia/Dhaka");
        $now = date("Y-m-d");
        $sql = "SELECT  SUM(person_no) AS total FROM tbl_booking  WHERE   date LIKE '%$now%' ";
      $query_result = $this->db->query($sql);
        $result = $query_result->row();

//        echo $result->total;
//        exit();
        return $result;
    }
    
    
    public function check_available_person_by_date($input_date){
       $sql = "SELECT  SUM(person_no) AS total FROM tbl_booking  WHERE   date LIKE '%$input_date%' ";
      $query_result = $this->db->query($sql);
        $result = $query_result->row(); 
         return $result;
    }
    
}