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
                serverPage='<?php echo base_url();?>checkout/check_customer_email/'+given_text;
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
                                        if(xmlhttp.responseText=='Email Address Alredy Exists !')
                                        {
                                            document.getElementById('sbtn').disabled=true;
                                        }
                                         if(xmlhttp.responseText=='Email Address Avilable')
                                        {
                                            document.getElementById('sbtn').disabled=false;
                                        }
		 }
	}
xmlhttp.send(null);
}
//-->
</script>

  <!-- CONTENT -->
  <div id="content_holder" class="fixed">
    <div class="inner">
      <div class="breadcrumb"> <a href="index.html">Home</a> » <a href="cart.html">Cart</a> » Checkout </div>
      <h2 class="heading-title"><span>Create an account</span></h2>
      <div id="content"> 
        
        <!-- ACCORDION -->
        <div id="accordion" class="checkout">
          <h2><a href="#">new account</a></h2>
          <div>
              <form action="<?php echo base_url();?>checkout/new_customer" method="post">
            <table class="form">
              <tbody>
                <tr>
                  <td><span class="required">*</span> First name:</td>
                  <td><input type="text" class="large-field" value="" name="first_name"/></td>
                </tr>
                <tr>
                  <td><span class="required">*</span> Last name:</td>
                  <td><input type="text" class="large-field" value="" name="last_name"/></td>
                </tr>
                <tr>
                  <td><span class="required">*</span> email address:</td>
                  <td><input type="email" class="large-field" value="" onblur="makerequest(this.value,'reg')" name="email_address"/>&nbsp;&nbsp;&nbsp;<span style="color:red;" id="reg"></span></td>
                </tr>
                <tr>
                  <td><span class="required">*</span> password:</td>
                  <td><input type="password" class="large-field" value="" name="password"/></td>
                </tr>
                <tr>
                  <td>Company:</td>
                  <td><input type="text" class="large-field" value="" name="company_name"/></td>
                </tr>
                <tr>
                  <td><span class="required">*</span> Address:</td>
                  <td><input type="text" class="large-field" value="" name="address"/></td>
                </tr>
                <tr>
                  <td><span class="required">*</span>Mobile</td>
                  <td><input type="text" class="large-field" value="" name="mobile"/></td>
                </tr>
               <tr>
                  <td><span class="required">*</span> Gender:</td>
                  <td>
                      <input type="radio" class="large-field" value="male" name="gender"/>Male
                      <input type="radio" class="large-field" value="female" name="gender"/>Female
                  </td>
                </tr>
                
                <tr>
                  <td><span class="required">*</span> City :</td>
                  <td><input type="text" class="large-field" value="" name="city"/></td>
                </tr>
                 <tr>
                  <td></td>
                  <td><input type="submit" class="large-field" value="Customer Registration" id="sbtn" name="btn"/></td>
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
  
 