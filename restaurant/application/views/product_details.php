<div class="inner">
    <div class="breadcrumb"> <a href="<?php echo base_url(); ?>master">Home</a>  </div>
    <h2 class="heading-title"><span>Name-<?php echo $product_info->product_name; ?></span></h2>

    <!-- PRODUCT INFO -->
    <div class="product-info fixed">
        <div class="left">
            <div class="image"> <a href="#" class="cloud-zoom" id="zoom1" rel="adjustX: 5, adjustY:0, zoomWidth:550, zoomHeight:400, showTitle: false"> <img src="<?php echo base_url() . $product_info->product_image; ?>" alt='' title="<?php echo $product_info->product_name; ?>" /></a> <span class="pricetag"><?php echo $product_info->product_price; ?></span> </div>
            <div class="image-additional">
                <div class="image_car_holder">
                    <!--              <ul class="jcarousel-skin-opencart">
                                    <li><a href='image/bigimage00.jpg' class='cloud-zoom-gallery' title='Thumbnail 1' rel="useZoom: 'zoom1', smallImage: 'image/smallimage.jpg' "> <img src="image/tiny1.jpg" alt = "Thumbnail 1"/> </a></li>
                                    <li><a href='image/bigimage01.jpg' class='cloud-zoom-gallery' title='Thumbnail 2' rel="useZoom: 'zoom1', smallImage: 'image/smallimage1.jpg'"> <img src="image/tiny2.jpg" alt = "Thumbnail 2"/> </a></li>
                                    <li><a href='image/bigimage02.jpg' class='cloud-zoom-gallery' title='Thumbnail 3' rel="useZoom: 'zoom1', smallImage: 'image/smallimage2.jpg' "> <img src="image/tiny3.jpg" alt = "Thumbnail 3"/> </a></li>
                                    <li><a href='image/bigimage00.jpg' class='cloud-zoom-gallery' title='Thumbnail 1' rel="useZoom: 'zoom1', smallImage: 'image/smallimage.jpg' "> <img src="image/tiny1.jpg" alt = "Thumbnail 1"/> </a></li>
                                    <li><a href='image/bigimage01.jpg' class='cloud-zoom-gallery' title='Thumbnail 2' rel="useZoom: 'zoom1', smallImage: 'image/smallimage1.jpg'"> <img src="image/tiny2.jpg" alt = "Thumbnail 2"/> </a></li>
                                    <li><a href='image/bigimage02.jpg' class='cloud-zoom-gallery' title='Thumbnail 3' rel="useZoom: 'zoom1', smallImage: 'image/smallimage2.jpg' "> <img src="image/tiny3.jpg" alt = "Thumbnail 3"/> </a></li>
                                    <li><a href='image/bigimage01.jpg' class='cloud-zoom-gallery' title='Thumbnail 2' rel="useZoom: 'zoom1', smallImage: 'image/smallimage1.jpg'"> <img src="image/tiny2.jpg" alt = "Thumbnail 2"/> </a></li>
                                    <li><a href='image/bigimage02.jpg' class='cloud-zoom-gallery' title='Thumbnail 3' rel="useZoom: 'zoom1', smallImage: 'image/smallimage2.jpg' "> <img src="image/tiny3.jpg" alt = "Thumbnail 3"/> </a></li>
                                  </ul>-->
                </div>
                <script type="text/javascript"><!--
          $('.image-additional ul').jcarousel({
                        vertical: false,
                        visible: 4,
                        scroll: 1
                    });
                    //--></script> 
            </div>
        </div>
        <div class="right">
            <div class="description"> <span>Menu Category:</span> <a href="#">-<?php echo $product_info->brand_name; ?></a><br/>
                <span>Menu Name:</span> <?php echo $product_info->product_name; ?><br/>
                <span>Availability:
                    <?php
                    if ($product_info->product_quantity > 0) {
                        ?>
                    </span> In Stock 
                <?php } else { ?>
                    </span> Out of Stock
                <?php } ?>
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

            <div class="cart"> <span class="label">Qty:</span>
                <form action="<?php echo base_url(); ?>cart/add_to_cart" method="post">
                    <input type="text" value="1" size="2" name="quantity" id="qty"/>
                    <input type="hidden" name="product_id" value="<?php echo $product_info->product_id; ?>">
                    <input type="submit" value="Add to Cart" >

                </form>
            </div>


        </div>
        <div class="clear"></div>
    </div>
    <!-- END OF PRODUCT INFO -->

    <div id="content">
        <div class="box">
            <h2 class="heading-title"><span>Description</span></h2>
            <div class="box-content">
                <p><?php echo $product_info->product_description ?></p>
            </div>
        </div>


    </div>
</div>

