
<!-- CONTENT -->
<div id="content_holder" class="fixed">
    <div class="inner">

        <h2 class="heading-title"><span>Forgot Password</span></h2>
        <h3 style="color:red">
            <?php
            $alert = $this->session->userdata('alert');
            if ($alert) {
                echo $alert;
                $this->session->unset_userdata('alert');
            }
            ?>  
        </h3>
        <div id="content"> 

            <!-- ACCORDION -->
            <div id="accordion" class="checkout">

                <div>
                    <form action="<?php echo base_url(); ?>master/recover_password" method="post">
                        <table class="form">
                            <tbody>
                                <tr>
                                    <td><span class="required"></span> Customer email:</td>
                                    <td><input type="email" class="large-field"  name="email_address"/></td>

                                </tr>


                                <tr>
                                    <td></td>
                                    <td><input type="submit" class="large-field" value="submit"  name="submit"/></td>
                                </tr> 

                            </tbody>
                        </table>
                    </form>


                </div>




            </div>
        </div>
    </div>
</div>

