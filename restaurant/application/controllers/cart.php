<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cart extends CI_Controller
{
    
    public function add_to_cart()
    {
        $product_id=$this->input->post('product_id',true);
        $qty=$this->input->post('quantity',true);
        $product_info=$this->master_model->select_product_by_product_id($product_id);
//        echo '<pre>';
//        print_r($product_info);
//        exit();
        $data = array(
               'id'      => $product_info->product_id,
               'qty'     => $qty,
               'price'   => $product_info->product_price,
               'name'    => $product_info->product_name,
               'image' => $product_info->product_image
            );

            $this->cart->insert($data); 
            redirect('cart/show_cart');
    }
    public function add_carts($product_id)
    {
      $product_info=$this->master_model->select_product_by_product_id($product_id);  
        
//        echo '<pre>';
//        print_r($product_info);
//        exit();
        $qty=1;
         $data = array(
               'id'      => $product_info->product_id,
               'qty'     => $qty,
               'price'   => $product_info->product_price,
               'name'    => $product_info->product_name,
               'image' => $product_info->product_image
            );

            $this->cart->insert($data); 
            redirect('cart/show_cart');
    }
       
    public function update_cart()
    {
        $quantity=$this->input->post('qty',true);
        $rowid=$this->input->post('rowid',true);
        $data = array(
               'rowid' => $rowid,
               'qty'   => $quantity
            );

$this->cart->update($data); 
redirect('cart/show_cart');
    }

    public function show_cart()
    {
        $data = array();
        $data['all_publish_brand'] = $this->super_admin_model->select_all_publish_brand();
        $data['all_featured_product'] = $this->master_model->select_all_featured_product();
        
        $data['maincontent'] = $this->load->view('cart_view', $data, true);
        $this->load->view('master', $data);
    }
    public function delete_to_cart($rowid)
    {
        
        $data = array(
               'rowid' => $rowid,
               'qty'   => 0
            );

$this->cart->update($data); 
redirect('cart/show_cart');
    }
    
}

