<?php
$cart_contents=$this->cart->contents();

//echo '<pre>';
//print_r($cart_contents);
//exit();
?>



<!-- CONTENT -->
  <div id="content_holder" class="fixed">
    <div class="inner">
      <div class="breadcrumb"> <a href="<?php echo base_url();?>master">Home</a> Â» <a href="<?php echo base_url();?>cart/show_cart">Shopping Cart (<?php echo $this->cart->total_items()?>)</a></div>
      <h2 class="heading-title"><span>Shopping Cart</span></h2>
      <div id="content">
        <div class="cart-info">
          <table>
            <thead>
              <tr>
                <td class="remove">Remove</td>
                <td class="image">Image</td>
                <td class="name">Product Name</td>
                
                <td class="quantity">Quantity</td>
                <td class="price">Unit Price</td>
                <td class="total">Total</td>
              </tr>
            </thead>
            <tbody>
                <?php
                foreach($cart_contents as $v_contents )
                {
                ?>
              <tr>
                  <td class="remove"><a href="<?php echo base_url();?>cart/delete_to_cart/<?php echo $v_contents['rowid']?>"><input type="submit" name="btn" value="DLETE" title="Delete Your Quantity"></a></td>
                  <td class="image"><a href="product.html"><img src="<?php echo base_url().$v_contents['image']?>" width="100" height="100" alt="Spicylicious store" /></a></td>
                <td class="name"><a href="product.html"><?php echo $v_contents['name']?></a> <span class="stock"></span>
                  <div> </div></td>
                
                <td class="quantity">
                    <form action="<?php echo base_url();?>cart/update_cart" method="post">
                    <input type="text" size="3" value="<?php echo $v_contents['qty']?>" name="qty"/>
                    <input type="hidden" size="3" value="<?php echo $v_contents['rowid']?>" name="rowid"/>
                    <input type="submit" name="btn" value="UPD" title="Update Your Quantity">
                    </form>
                </td>
                <td class="price">BDT <?php echo $v_contents['price']?></td>
                <td class="total">BDT <?php echo $v_contents['subtotal']?></td>
              </tr>
                <?php } ?>
              
            </tbody>
          </table>
        </div>
        
        <div class="cart-total">
          <table>
            <tbody>
              <tr>
                <td colspan="5"></td>
                <td class="right"><b>Sub-Total:</b></td>
                <td class="right numbers">BDT <?php echo $this->cart->total();?></td>
              </tr>
              <tr>
                <td colspan="5"></td>
                <td class="right"><b>VAT 5%:</b></td>
                <td class="right numbers">
                    <?php
                    $vat=5*$this->cart->total()/100;
                    echo 'BDT '.$vat;
                    
                    ?>
                </td>
              </tr>
              <tr>
                <td colspan="5"></td>
                <td class="right numbers_total"><b>Grand Total:</b></td>
                <td class="right numbers_total">BDT <?php echo $this->cart->total()+$vat?></td>
              </tr>
            </tbody>
          </table>
        </div>
         <div class="buttons">
        <?php
        $customer_id=$this->session->userdata('customer_id');
        $shipping_id=$this->session->userdata('shipping_id');
         if($customer_id !=NULL && $shipping_id !=NULL)
            {
        ?>
          <div class="right"><a class="button" href="<?php echo base_url();?>checkout/payment_method"><span>Checkout</span></a></div>
         
            <?php 
            }
            if($customer_id !=NULL && $shipping_id ==NULL)
            {
            
            ?>
           <div class="right"><a class="button" href="<?php echo base_url();?>checkout/shipping_address"><span>Checkout</span></a></div>
          
            <?php } 
            if($customer_id ==NULL && $shipping_id ==NULL)
            {
            ?>
           <div class="right"><a class="button" href="<?php echo base_url();?>checkout/customer_signup"><span>Checkout</span></a></div>
            <?php } ?>
         
        </div>
      </div>
    </div>
  </div>
<!-- END OF CONTENT -->