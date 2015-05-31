<div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable">
        <thead>
            <tr>
                <th>Menu Id</th>
                <th>Menu Name</th>
                <th>Menu Category</th>
                
                <th> Publication Status</th>
                <th> Featured Menu</th>
                <th>Actions</th>
            </tr>
        </thead>   
        <tbody>
            <?php
                foreach($all_product as $v_product)
                {
            ?>
            <tr>
                <td><?php echo $v_product->product_id?></td>
                <td class="center"><?php echo $v_product->product_name?></td>
                <td class="center"><?php echo $v_product->brand_name?></td>
                
                <td class="center"><?php  
                    if($v_product->publication_status==1)
                    {
                        echo 'Published';
                    }
                    else{
                        echo 'Unpublished';
                    }
                ?></td>
                
                
                
                <td class="center"><?php  
                    if($v_product->featured_product==1)
                    {
                        echo 'featured';
                    }
                    else{
                        echo 'Unfeatured';
                    }
                ?></td>
                <td class="center">
                    <?php
                        if($v_product->publication_status==0)
                        {
                    ?>
                    <a class="btn btn-success" href="<?php echo base_url();?>super_admin/published_product/<?php echo $v_product->product_id?>" title="Published">
                        <i class="icon-arrow-up icon-white"></i>  
                                                              
                    </a>
                        <?php }
                        
                        else{
                        ?>
                        <a class="btn btn-danger" href="<?php echo base_url();?>super_admin/unpublished_product/<?php echo $v_product->product_id?>" title="Unpublished">
                        <i class="icon-arrow-down icon-white"></i>  
                                                              
                    </a>
                        <?php } ?>
                     <?php
                        if($v_product->featured_product==0)
                        {
                    ?>
                    <a class="btn btn-success" href="<?php echo base_url();?>super_admin/featured_product/<?php echo $v_product->product_id?>" title="featured">
                        <i class="icon-arrow-up icon-white"></i>  
                                                              
                    </a>
                        <?php }
                        
                        else{
                        ?>
                        <a class="btn btn-danger" href="<?php echo base_url();?>super_admin/unfeatured_product/<?php echo $v_product->product_id?>" title="Unfeatured">
                        <i class="icon-arrow-down icon-white"></i>  
                                                              
                    </a>
                        <?php } ?>
                    
                    
                    <a class="btn btn-info" href="<?php echo base_url();?>super_admin/edit_product/<?php echo $v_product->product_id?>" title="Edit">
                        <i class="icon-edit icon-white"></i>  
                                                                
                    </a>
                    <a class="btn btn-danger" href="<?php echo base_url();?>super_admin/delete_product/<?php echo $v_product->product_id?>" title="Delete" onclick="return check_delete();">
                        <i class="icon-trash icon-white"></i> 
                       
                    </a>
                </td>
            </tr>
                <?php } ?>
        </tbody>
    </table>            
</div>
