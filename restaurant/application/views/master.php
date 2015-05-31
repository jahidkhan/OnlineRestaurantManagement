!<DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
<!--        <script type="text/javascript">
window.history.forward();
            function noBack() {
                window.history.forward();
            }</script>-->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Spicylicious - Premium HTML template by D.Koev</title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/stylesheet.css" type="text/css" media="screen" />
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>stylesheet/jquery-ui-1.8.9.custom.css" />
        <!-- jQuery and Custom scripts -->
        <script src="<?php echo base_url(); ?>js/jquery-1.5.2.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>js/jquery.cycle.lite.1.0.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>js/custom_scripts.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>js/jquery.roundabout.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-ui-1.8.9.custom.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/tabs.js"></script>
        <!-- Tipsy -->
        <script src="<?php echo base_url(); ?>js/tipsy/jquery.tipsy.js" type="text/javascript"></script>
        <link href="<?php echo base_url(); ?>js/tipsy/css.tipsy.css" rel="stylesheet" type="text/css" />
        <script src="<?php echo base_url(); ?>js/jquery.tweet.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>js/country.js" type="text/javascript"></script>
        <link href="<?php echo base_url(); ?>js/jquery.tweet.css" rel="stylesheet" type="text/css" />
    </head>



    <body>


        <!-- MAIN WRAPPER -->

        <!-- END OF SIDEFEATURES --> 

        <!-- HEADER -->
        <div id="header">
            <div class="inner">
                <ul class="main_menu menu_left">
                    <?php
                    $customer_id = $this->session->userdata('customer_id');
                    if ($customer_id != NULL) {
                        ?>
                        <li><a href="<?php echo base_url(); ?>master/customer_info/<?php echo $customer_id ?>">My Account</a></li>
                    <?php } ?>
                    <li><a href="<?php echo base_url(); ?>master/about_us">About Us</a></li>
                    <li class="">
                        <a href="<?php echo base_url(); ?>master">Home</a>

                    </li>
                </ul>

                <ul class="main_menu menu_right">

                    <li><a href="<?php echo base_url(); ?>cart/show_cart">Home delivary (<?php echo $this->cart->total_items() ?>)</a></li>

                    <li><a href="<?php echo base_url(); ?>checkout/customer_signup">Checkout</a></li>
                    <li><a href="<?php echo base_url(); ?>master/booking">Booking</a></li>
                    <li><a href="<?php echo base_url(); ?>master/contact_us">Contact Us</a></li>
                    <div id="logo"><a href="index.html"><img src="<?php echo base_url(); ?>image/logo.png" width="217" height="141" alt="Spicylicious store" /></a></div>
                </ul>
                <div id="welcome">
                    <?php
                    $message = $this->session->userdata('message');
                    if ($message == NULL) {
                        ?>   

                        Welcome <?php echo $this->session->userdata('customer_name'); ?> you can 
                        <?php
                        $customer_id = $this->session->userdata('customer_id');
                        if ($customer_id != NULL) {
                            ?>   
                            <a href="<?php echo base_url(); ?>checkout/logout">Logout</a> </div>
                        <?php
                    } else {
                        ?>
                        <a href="<?php echo base_url(); ?>customer_login/new_customer_login">login</a> or <a href="<?php echo base_url(); ?>checkout/new_customer_signup">create an account</a>. </div>
                <?php } ?>
                <?php
            } else {
                ?>
                    <?php echo $this->session->userdata('message'); ?> . you can <a href="<?php echo base_url(); ?>checkout/customer_login">login</a> </div>
            <?php } ?>
        <div class="menu">
            <ul id="topnav">
                <?php
                foreach ($all_publish_brand as $v_brand) {
                    ?>
                    <li><a href="<?php echo base_url(); ?>master/brand_product/<?php echo $v_brand->brand_id ?>"><?php echo $v_brand->brand_name ?></a>

                    </li>

                <?php } ?>
            </ul>

        </div>
        <!--        </div>
                </div>-->
        <!-- END OF HEADER --> 

        <!-- CONTENT -->
        <div id="content_holder" class="fixed">
            <div class="inner">
                <?php echo $maincontent; ?>
            </div>
            <!-- END OF CONTENT --> 


            <!-- PRE-FOOTER -->
    <div id="footer">
    <div class="inner">
      <div class="column_big"> 
        <!-- FOOTER MODULES AREA -->
        <div class="footer_modules">
          <h3>About spicylicious</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
        </div>
        <!-- END OF FOOTER MODULES AREA -->
        <div class="footer_social">
          <h3>Spread the word</h3>
          <!-- AddThis Button BEGIN -->
          <div class="addthis_toolbox addthis_default_style "><script type="text/javascript">
      //<![CDATA[
            document.write('<a class="addthis_button_google_plusone" g:plusone:size="medium"></a> <a class="addthis_button_tweet"></a> <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>');
      //]]>
     </script> 
          </div>
          <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4e7280075406aa87"></script> 
          <!-- AddThis Button END --> 
        </div>
      </div>
      
     
      
      <div class="clear"></div>
      <span class="copyright">Spicylicious theme by <a href="http://themeforest.net/user/Koev/portfolio?ref=Koev">Dimitar Koev - theAlThemist</a>. </span> </div>
  </div>
            <!-- END OF FOOTER --> 

        </div>
        <!-- END OF MAIN WRAPPER --> 
        <script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script> 
        <script type="text/javascript" src="http://twitter.com/statuses/user_timeline/d_koev.json?callback=twitterCallback2&amp;count=3"></script> 
        <script type="text/javascript"><!--
        $(document).ready(function () {
                $('#twitter_update_list').cycle({
                    fx: 'fade', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
                    next: '#tweet_next',
                    prev: '#tweet_prev'
                });
            });
            //--></script> 
        <script type="text/javascript">
            $(document).ready(function () {
                var interval;
                $('ul#myRoundabout')
                        .roundabout({
                            'btnNext': '.next_round',
                            'btnPrev': '.previous_round'
                        }
                        )
                        .hover(
                                function () {

                                    clearInterval(interval);
                                },
                                function () {

                                    interval = startAutoPlay();
                                });

                interval = startAutoPlay();
            });
            function startAutoPlay() {
                return setInterval(function () {
                    $('ul#myRoundabout').roundabout_animateToPreviousChild();
                }, 3000);
            }
        </script>
    </body>
</html>

