<script type="text/javascript">
<!--
//Create a boolean variable to check for a valid Internet Explorer instance.
var xmlhttp = false;
//Check if we are using IE.
try {
//If the Javascript version is greater than 5.
xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
//alert(xmlhttp);
//alert ("You are using Microsoft Internet Explorer.");
} catch (e) {
  //alert(e);
    
//If not, then use the older active x object.
try {
//If we are using Internet Explorer.
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
//alert ("You are using Microsoft Internet Explorer");
} catch (E) {
   // alert(E);
//Else we must be using a non-IE browser.
xmlhttp = false;
}
}
//If we are using a non-IE browser, create a javascript instance of the object.
if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
xmlhttp = new XMLHttpRequest();
//alert ("You are not using Microsoft Internet Explorer");
}

function makerequest(given_text,objID)
 {
	//alert(given_text);
        //var obj = document.getElementById(objID);
                serverPage='<?php echo base_url();?>checkout/check_customer_login_email/'+given_text;
	xmlhttp.open("GET", serverPage);
	xmlhttp.onreadystatechange = function()
	 {
	//alert(xmlhttp.readyState);
	//alert(xmlhttp.status);
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
		 {
			//alert(xmlhttp.responseText);
                                        document.getElementById(objID).innerHTML = xmlhttp.responseText;
			//document.getElementById(objcw).innerHTML = xmlhttp.responseText;
                                        if(xmlhttp.responseText=='Email Address Match')
                                        {
                                            document.getElementById('sbtn').disabled=false;
                                        }
                                         if(xmlhttp.responseText=='Email Address is not Avilable')
                                        {
                                            document.getElementById('sbtn').disabled=true;
                                        }
		 }
	}
xmlhttp.send(null);
}
//-->
</script>



<div id="content_holder" class="fixed">
    <div class="inner">

        <h2 class="heading-title"><span>Customer Login</span></h2>
        <div id="content"> 

            <!-- ACCORDION -->
            <div id="accordion" class="checkout">

                <div>
                    <form action="<?php echo base_url(); ?>customer_login/check_customer_login" method="post">
                        <div align="center">
                            <?php 
                            $msg=$this->session->userdata('message');
                              if($msg)
                              {
                                  echo $msg;
                                  $this->session->unset_userdata('message');
                              }
                            
                            ?>
                            
                        </div>
                        <table class="form">
                            <tbody>

                                <tr>
                                    <td><span class="required">*</span> email address:</td>
                                    <td><input type="email" class="large-field" value="" onblur="makerequest(this.value,'res')" name="email_address"/>&nbsp;&nbsp;&nbsp;<span style="color:red;" id="res"></span></td>
                                </tr>
                                <tr>
                                    <td><span class="required">*</span> password:</td>
                                    <td><input type="password" class="large-field" value="" name="password"/></td>
                                </tr>


                                <tr>
                                    <td></td>
                                    <td><input type="submit" class="large-field" value="Login" id="sbtn" name="btn"/></td>
                                </tr>

                            </tbody>
                        </table>
                    </form>

                </div>




            </div>
        </div>
    </div>
</div>