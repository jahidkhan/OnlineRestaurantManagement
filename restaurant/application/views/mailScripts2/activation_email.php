<?php
//$this->load->library('encrypt');
//$en_blogger_id=urlencode($this->encrypt->encode($blogger_id));
//$en_blogger_id= base64_encode($blogger_id);
$en_customer_id=$this->encrypt->encode($customer_id);
$id = str_replace("/","%F2", $en_customer_id );
?>

<h3>Hello, <?php echo $full_name;?></h3>
<span>User Id: <?php echo $to_address;?></span>
<br/>
<span>Password : <?php echo $password;?></span>
<br/>
<span>
    To activate your account click the link bellow:
</span>
<br/>
<span>
    Activation Link: 
    <a href="<?php echo base_url();?>checkout/update_customer_status2/<?php echo $id;?>" >Click Here To Activate Your Account</a>
<!--       <a><?php echo base_url();?>checkout/update_customer_status/<?php echo $id;?></a>-->
 
</span>

<h3>Thank you To Join our community !</h3>

