<div id="content" class="fixed">
    <div class="box featured-box">
        <h2 class="heading-title"><span>Featured Menus</span></h2>
        <div class="box-content">
            <ul id="myRoundabout">
                <?php
                foreach ($all_featured_product as $v_product) {
                    ?>
                    <li>

                        <div align="center" class="prod_holder"> <a href="<?php echo base_url(); ?>master/product_details/<?php echo $v_product->product_id ?>"> <img src="<?php echo $v_product->product_image ?>" alt="Spicylicious store" /> </a>
                            <h3>Name-<?php echo $v_product->product_name ?></h3>
                        </div>
                        <span class="pricetag">BDT-<?php echo $v_product->product_price ?></span> 
                    </li>
                <?php } ?>

            </ul>
            <a href="#" class="previous_round">Previous</a> <a href="#" class="next_round">Next</a> </div>
    </div>


    <div class="box">
        <h2 class="heading-title"><span>Latest Menus</span></h2>
        <div class="box-content">
            <div class="box-product fixed">
                <?php
                foreach ($all_featured_product as $v_product) {
                    ?>  
                    <div align="center" class="prod_hold"> <a class="wrap_link" href="<?php echo base_url(); ?>master/product_details/<?php echo $v_product->product_id ?>"> <span class="image"><img src="<?php echo $v_product->product_image ?>" /></span> </a>
                        <div class="pricetag_small"> <span class="old_price">BDT-<?php echo $v_product->old_price ?></span> <span class="new_price">BDT-<?php echo $v_product->product_price ?></span> </div>
                        <div class="info">
                            <h3>Name-<?php echo $v_product->product_name ?></h3>
                            <p><?php echo $v_product->product_description ?></p>
                           
                            <a class="add_to_cart_small" href="<?php echo base_url(); ?>cart/add_carts/<?php echo $v_product->product_id ?>">Add to cart</a>

                        </div>
                    </div>

<?php } ?>
               

            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
