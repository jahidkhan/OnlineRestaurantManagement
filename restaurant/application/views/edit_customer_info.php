
  <!-- CONTENT -->
  <div id="content_holder" class="fixed">
    <div class="inner">
      <div class="breadcrumb"> <a href="index.html">Home</a> » <a href="cart.html">Cart</a> » Checkout </div>
      <h2 class="heading-title"><span>Create an account</span></h2>
      <div id="content"> 
        
        <!-- ACCORDION -->
        <div id="accordion" class="checkout">
          <h2><a href="#">Edit account</a></h2>
          <div>
              <form action="<?php echo base_url();?>master/update_customer" method="post">
            <table class="form">
              <tbody>
                <tr>
                  <td><span class="required"></span> First name:</td>
                  <td><input type="text" class="large-field" value="<?php echo $customer_info->first_name?>" name="first_name"/></td>
                  <td><input type="hidden" class="large-field" value="<?php echo $customer_info->customer_id?>" name="customer_id"/></td>
                </tr>
                <tr>
                  <td><span class="required"></span> Last name:</td>
                  <td><input type="text" class="large-field" value="<?php echo $customer_info->last_name?>" name="last_name"/></td>
                </tr>
                <tr>
                  <td><span class="required"></span> Gender:</td>
                  <?php 
                  if($customer_info=='male')
                  {
                  
                  
                  ?>
                  <td>
                      <input type="radio" class="large-field" checked="checked" value="male" name="gender"/>Male
                      <input type="radio" class="large-field" value="female" name="gender"/>Female
                  </td>
                  <?php
                  }
                  else
                      {
                  
                  
                  ?>
                  <td>
                      <input type="radio" class="large-field" value="male" name="gender"/>Male
                      <input type="radio" class="large-field" checked="checked" value="female" name="gender"/>Female
                  </td>
                  <?php } ?>
                </tr>
                <tr>
                  <td><span class="required"></span> Mobile No.:</td>
                  <td><input type="text" class="large-field" value="<?php echo $customer_info->mobile?>" name="mobile"/></td>
                </tr>
                
                
                <tr>
                  <td>Company:</td>
                  <td><input type="text" class="large-field" value="<?php echo $customer_info->company_name?>" name="company_name"/></td>
                </tr>
                <tr>
                  <td><span class="required"></span> Address :</td>
                  <td><input type="text" class="large-field" value="<?php echo $customer_info->address?>" name="address"/></td>
                </tr>
               
                <tr>
                  <td><span class="required"></span> City:</td>
                  <td><input type="text" class="large-field" value="<?php echo $customer_info->city?>" name="city"/></td>
                </tr>
                
                
                 <tr>
                  <td></td>
                  <td><input type="submit" class="large-field" value=" Update Customer" id="sbtn" name="btn"/></td>
                </tr>
                
              </tbody>
            </table>
                      </form>
              

          </div>
         
      
      
        
      </div>
    </div>
  </div>
      </div>
  <!-- END OF CONTENT --> 
  
 