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

function makerequest(given_text)
 {
//	alert(given_text);
        //var obj = document.getElementById(objID);
                serverPage='<?php echo base_url();?>checkout/check_person/'+given_text;
	xmlhttp.open("GET", serverPage);
	xmlhttp.onreadystatechange = function()
	 {
//	alert(xmlhttp.readyState);
//	alert(xmlhttp.status);
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
		 {
//			alert(xmlhttp.responseText);
//                                        document.getElementById(objID).innerHTML = xmlhttp.responseText;
			//document.getElementById(objcw).innerHTML = xmlhttp.responseText;
                                        if(xmlhttp.responseText== 'a')
                                        {
                                             document.getElementById('sbtn').disabled=false;
                                             document.getElementById('res').innerHTML = '<p style="color:green;">Seat available</p>'
                                        }
                                         if(xmlhttp.responseText== 'b')
                                        {
                                          document.getElementById('sbtn').disabled=true;
                                            document.getElementById('res').innerHTML = '<p style="color:red;">This amount of seat is not available</p>'
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
        <div class="breadcrumb"> <a href="<?php echo base_url();?>master">Home</a> » <a href="<?php echo base_url();?>booking"></a>  Booking </div>
        <h2 class="heading-title"><span>Booking</span></h2>
        <div id="content"> 

            
             <h3 style="color:green">
            <?php
            $alert = $this->session->userdata('message');
            if ($alert) {
                echo $alert;
                $this->session->unset_userdata('message');
            }
            ?>  
        </h3>
            
             <h3 style="color:red">
            <?php
            $alert = $this->session->userdata('message2');
            if ($alert) {
                echo $alert;
                $this->session->unset_userdata('message2');
            }
            ?>  
        </h3>
            
            
            <!-- ACCORDION -->
            <div id="accordion" class="checkout">
                <h2><a href="#">Booking Details</a></h2>
                <div>
                    <form action="<?php echo base_url(); ?>master/confirm_booking" method="post">
                        <table class="form">
                            <tbody>
                                <tr>
                                    <td><span class="required">*</span> Full Name:</td>
                                    <td><input type="text" class="large-field" value="<?php if(array_key_exists('full_name', $_POST)){echo $_POST['full_name'] ;}?>" name="full_name" required=""/></td>
                                </tr>

                                <tr>
                                    <td><span class="required">*</span> Mobile number:</td>
                                    <td><input type="text" class="large-field" value="<?php if(array_key_exists('mobile_no', $_POST)){echo $_POST['mobile_no'] ;}?>" name="mobile_no" required=""/></td>
                                </tr>

                                <tr>
                                    <td><span class="required">*</span> Email address:</td>
                                    <td><input type="email" class="large-field" value="<?php if(array_key_exists('email_address', $_POST)){echo $_POST['email_address'] ;}?>" name="email_address" required=""/></td>
                                </tr>
<tr>
                                    <td><span class="required">*</span> Time:</td>
                                    <td><input type="time" class="large-field" value="<?php if(array_key_exists('time', $_POST)){echo $_POST['time'] ;}?>" name="time" required=""/></td>
                                </tr>
                                <tr>
                                    <td><span class="required">*</span> Date:</td>
                                    <td><input type="date" class="large-field" value="<?php if(array_key_exists('date', $_POST)){echo $_POST['date'] ;}?>" name="date" required=""/></td>
                                </tr>
                                
                                <tr>
                                    <td>Company:</td>
                                    <td><input type="text" class="large-field" value="<?php if(array_key_exists('company_name', $_POST)){echo $_POST['company_name'] ;}?>" name="company_name" /></td>
                                </tr>
                                <tr>
                                    <td><span class="required">*</span> Person No:</td>
                                    <td><input type="text" id="person_no" class="large-field" value="<?php if(array_key_exists('person_no', $_POST)){echo $_POST['person_no'] ;}?>"  name="person_no"  required=""/>&nbsp&nbsp <span style="color:green">Todays available seat <?php echo $available_seat ?></span></td>
                                </tr>

                                <tr>
                                    <td><span class="required">*</span> Address :</td>
                                    <td><input type="text" class="large-field" value="<?php if(array_key_exists('address', $_POST)){echo $_POST['address'] ;}?>" name="address" required=""/></td>
                                </tr>
                                
                                <tr>
                                    <td></td>
                                    <td><input type="submit" id="sbtn" class="large-field" value="Booking" name="btn"/></td>
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

    <script>
    
    
    
    function check_seat(input_seat){
        
        
    
        var available=<?php echo $available_seat ?>;
        if(input_seat>available){
             alert('Sorry, you cant select more than available seat!');
            document.getElementById('person_no').value='';
        
    }
    
    }
    </script>