<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Manage Booking</a>
        </li>
    </ul>
</div>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Manage Booking</h2>

            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>


        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th> Booking Id</th>
                        <th>Full Name</th>
                        <th>Mobile No</th>
                        <th>Email Address</th>
                        <th>Person No</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Action</th>







                    </tr>
                </thead>   
                <tbody>
                    <?php
                    foreach ($all_booking as $v_order) {
                        ?>
                        <tr>
                            <td><?php echo $v_order->booking_id ?></td>
                            <td class="center"><?php echo $v_order->full_name ?></td>
                            <td class="center"><?php echo $v_order->mobile_no ?></td>
                            <td class="center"><?php echo $v_order->email_address ?></td>
                            <td class="center"><?php echo $v_order->person_no ?></td>
                            <td class="center"><?php echo $v_order->date ?></td>
                            <td class="center"><?php
                    if ($v_order->booking_status == 0) {
                        echo 'Pending';
                    } else {
                        echo 'Comfirm';
                    }
                        ?></td>
                            
                            <td class="center">
                    <?php
                        if($v_order->booking_status==0)
                        {
                    ?>
                    <a class="btn btn-success" href="<?php echo base_url();?>super_admin/confirm_booking/<?php echo $v_order->booking_id?>" title="Confirm">
                        <i class="icon-arrow-up icon-white"></i>  
                                                              
                    </a>
                        <?php }
                        
                        else{
                        ?>
                        <a class="btn btn-danger" href="<?php echo base_url();?>super_admin/pending_booking/<?php echo $v_order->booking_id?>" title="Pending">
                        <i class="icon-arrow-down icon-white"></i>  
                                                              
                    </a>
                        <?php } ?>
                                
                                 <a class="btn btn-danger" href="<?php echo base_url();?>super_admin/delete_booking/<?php echo $v_order->booking_id ?>" title="Delete" onclick="return check_delete();">
                        <i class="icon-trash icon-white"></i> 
                       
                    </a>
                        </td>













                        </tr>
<?php } ?>
                </tbody>
            </table>            
        </div>


