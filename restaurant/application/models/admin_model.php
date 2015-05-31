<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_Model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    public function check_admin_login_info($admin_email_address,$admin_password)
    {
       $this->db->select('*'); 
       $this->db->from('tbl_admin'); 
       $this->db->where('admin_email_address',$admin_email_address); 
       $this->db->where('admin_password',MD5($admin_password));
       $query_result=$this->db->get();
       $result=$query_result->row();
       return $result;
        
    }
   
    
    
    
}