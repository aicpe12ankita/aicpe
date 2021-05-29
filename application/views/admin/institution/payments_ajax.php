<table class='custom_table table' id='empTable'>
    <thead>
        <tr>
            <th>Sr. No.</th>
            <th>Photo </th>
            <th>Student ID </th>
            <th>Student Name </th>
            <th>Course & Duration</th>
            <th>Course Fees </th>
            <th>Paid Fees</th>
            <th>Balance Fees</th>
            <th>Payment History</th>
            <!-- <th>Action</th> -->
        </tr>
    </thead>
    <tbody>
        <?php if($data!=""){ 
            $i=$from_records; 
            foreach ($data as $row) { ?>  
                <tr>
                    <td>
                        <p class="list-item-heading"><?php echo $i; ?></p>
                    </td>
                    <td>
                        <img src="<?php echo base_url();?>assets/img/profiles/l-2.jpg" class="img-thumbnail border-0 rounded-circle list-thumbnail table_img">
                    </td>
                    <td>
                        <p class="text-muted"><?= get_value($row,'student_id','-'); ?></p>
                    </td>
                    <td>
                        <p class="text-muted"><?= get_value($row,'student_name','-'); ?></p>
                    </td>
                    <td>
                        <p class="text-muted"><?= isset($row['course_duration']) && $row['course_duration']!=='' ? get_value($row,'course_duration','6 Month') : '6 Months'; ?></p>
                    </td>
                    <td>
                        <p class="text-muted"><?= currency_symbol_icon().currency_format(get_value($row,'course_fee','0.00')); ?></p>
                    </td>
                    <td>
                        <p class="text-muted"><?= currency_symbol_icon().currency_format(get_value($row,'paid_fee','0.00')); ?></p>
                    </td>
                   
                   
                    <td>
                        <p class="text-muted"><?= currency_symbol_icon().currency_format(get_value($row,'balance_fee','0.00')); ?></p>
                       <button class="btn btn-xs btn-danger">Pay Now</button>
                    </td>
                    <td>
                         <p class="badge badge-pill badge-warning">
                        <a href="#" class="btn btn-xs btn-primary mb-1" onclick="get_payment_history(<?=$row['aicpe_student_id'] ?>)">
                           Payment History
                        </a>
                        </p>
                    </td>
                    <td>
                         <button class="btn btn-xs btn-info"><i class="simple-icon-trash"></i></button></button>
                    </td>
                </tr>
                <?php $i++; } } 
                else
                    { ?>
                        <tr><td colspan="100%" style="text-align:center">No Records Found.</td></tr>
                    <?php   }
                    ?>
    </tbody>
</table>

    <div class="col-12 text-left">
        <?php if($total_records > 0) { ?>
            Showing <?php echo $from_records; ?> to <?php echo $to_records; ?> of <?php echo $total_records; ?>
        <?php } else echo '&nbsp'; ?>
    </div>
    <div class="col-12 text-right">
        <nav aria-label="Page navigation">
            <?php echo $pagination; ?> 
        </nav>
        <input type="hidden" id="pagination_url" value="<?php echo $paging_url; ?>" />
        <input type="hidden" id="pagination_page" value="<?php echo $page; ?>" />
        <input type="hidden" id="per_page_value" value="<?php echo $per_page; ?>" />
        <input type="hidden" id="pagination_sort_by" value="<?php echo $sort_by; ?>" />
        <input type="hidden" id="pagination_sort_direction" value="<?php echo $sort_direction; ?>" />

    </div>
                <!-- END PAGINATION --> 