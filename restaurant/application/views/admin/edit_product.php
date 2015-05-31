
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Edit Product</a>
        </li>
    </ul>
</div>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Edit Product</h2>

            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <h3>
            <?php
            $msg = $this->session->userdata('message');
            if ($msg) {
                echo $msg;
                $this->session->unset_userdata('message');
            }
            ?>
        </h3>
        <div class="box-content">
            <form name="edit_product" class="form-horizontal" enctype="multipart/form-data" action="<?php echo base_url(); ?>super_admin/update_product" method="post">
                <fieldset>
                    <legend></legend>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Product Name  </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  name="product_name" value="<?php echo $product_info->product_name; ?>">
                            <input type="hidden" class="span6 typeahead" id="typeahead"  name="product_id" value="<?php echo $product_info->product_id; ?>">

                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Brand Name  </label>
                        <div class="controls">
                            <select name="brand_id" id="brand_id">
                                <option>Select brand Name....</option>
                                <?php
                                foreach ($all_published_brand as $v_brand) {
                                    ?>
                                    <option value="<?php echo $v_brand->brand_id; ?>"><?php echo $v_brand->brand_name; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>


                    <div class="control-group">
                        <label class="control-label" for="textarea2">Product Description</label>
                        <div class="controls">
                            <textarea name="product_description" class="cleditor" id="textarea2" rows="3">
                                <?php echo $product_info->product_description; ?>
                            </textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Product Price  </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  name="product_price" value="<?php echo $product_info->product_price; ?>">

                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Menu Old Price  </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead" value="<?php echo $product_info->old_price; ?>" name="old_price">

                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Product Quantity  </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  name="product_quantity" value="<?php echo $product_info->product_quantity; ?>">

                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Featured Prouduct  </label>
                        <div class="controls">
                            <input type="checkbox" class="span6 "  name="featured_product" >

                        </div>
                    </div>
                    <?php
                    if ($product_info->product_image) {
                        ?>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Prouduct  Image </label>
                            <div class="controls">
                                <img src='<?php echo base_url() . $product_info->product_image; ?>' /> 

                                <a href="<?php echo base_url(); ?>super_admin/delete_image/<?php echo $product_info->product_id ?>">Delete Image</a>

                            </div>  
                            <?php
                        } else {
                            ?>
                            <div class="control-group">
                                <label class="control-label" for="typeahead">Prouduct  Image </label>
                                <div class="controls">
                                    <input type="file" class="span6"   name="product_image" value="product_image">

                                </div>
<?php } ?>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="textarea2"> Publication Status</label>
                            <div class="controls">
                                <select name="publication_status">
                                    <option>Select Publication Status</option>
                                    <option value="1">Published</option>
                                    <option value="0">Unpublished</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Save </button>
                            <button type="reset" class="btn">Cancel</button>
                        </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->
<script type="text/javascript">
    document.forms['edit_product'].elements['publication_status'].value = '<?php echo $product_info->publication_status; ?>';
    document.forms['edit_product'].elements['brand_id'].value = '<?php echo $product_info->brand_id ?>';
    document.forms['edit_product'].elements['featured_product'].checked = '<?php if ($product_info->featured_product == 1) {
    echo true;
} else {
    echo false;
} ?>';
</script>