
<h3 style="color:red">
      <?php
      
      $smg=$this->session->userdata('message');
      if($smg)
      {
        echo $smg;
        $this->session->unset_userdata('message');
          
      }
      
      
      ?>  
        
        
    </h3>

<div class="inner">
   
    
      <h2 class="heading-title"><span>Customer Information</span></h2>
      
      <!-- PRODUCT INFO -->
      <div class="product-info fixed">
       
        <div class="right">
          <div class="description"> 
              <table>
                  <tr>
                      <td>First Name:</td>
                 
                      <td><?php echo $customer_info->first_name;?></td>
                  </tr>
              <tr>
                  <td>Last Name:</td>
                  <td> <?php echo $customer_info->last_name;?>
                  </td>
              </tr>
              <tr>
                  <td>Gender:</td>
                  <td> <?php echo $customer_info->gender;?>
                  </td>
              </tr>
              <tr>
                  <td>Mobile No.:</td>
                  <td> <?php echo $customer_info->mobile;?>
                  </td>
              </tr>
              <tr>
                  <td>Company Name:</td>
                  <td> 
                      <?php echo $customer_info->company_name;?>
                  </td>
              </tr>
              <tr>
                  <td>Address:</td>
                  <td> <?php echo $customer_info->address;?>
                  </td>
              </tr>
              <tr>
                  <td>City:</td>
                  <td>
                  
                  <?php echo $customer_info->city;?>
                  </td> 
              </tr>
              <tr>
                  <td>
             <a href="<?php echo base_url();?>master/edit_customer_info">Edit Profile</a>
                  </td>
                       <td>
             <a href="<?php echo base_url();?>master/change_customer_password">Change Password</a>
                  </td>
                  
              </tr>
        
              </table>
          </div>
          
         
            
         
        </div>
        
      </div>
      <!-- END OF PRODUCT INFO -->
      
      
        </div>
        
     