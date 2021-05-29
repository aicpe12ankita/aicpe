<table class='custom_table table' id='empTable'>
    <thead>
        <tr>
            <th>Sr. No.</th>
            <th>Photo</th>
            <th>Student Name </th>
            <th>Certificate No.</th>
            <th>Mobile </th>
            <th>Username</th>
            <th>Password</th>
            <th>Grade</th>
            <th>Exam Date </th>
            <th>Certificate Date </th>
            <th>Admission Date </th>
            <th>Action</th>
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
                        <p class="text-muted"><?= get_value($row,'student_name','-'); ?></p>
                    </td>
                    <td>
                        <p class="text-muted"><?= get_value($row,'certificate_no','-'); ?></p>
                    </td>
                    <td>
                        <p class="text-muted"><?= get_value($row,'mobile_no','-'); ?></p>
                    </td>
                    <td>
                        <p class="text-muted"><?= get_value($row,'username','-'); ?></p>
                    </td>
                    <td>
                        <p class="text-muted"><?= get_value($row,'password','-'); ?></p>
                    </td>
                    <td>
                        <p class="text-muted"><?= get_value($row,'grade','-'); ?></p>
                    </td>
                    <td>
                        <p class="text-muted"><?=format_date($row['exam_date'])?></p>
                    </td>
                    <td>
                        <p class="text-muted"><?=format_date($row['certificate_date'])?></p>
                    </td>
                    <td>
                        <p class="text-muted"><?=format_date($row['admission_date'])?></p>
                    </td>
                    <td>
                        <a href="#" class="btn btn-xs btn-primary mb-1"><i class="simple-icon-note"></i></a>
                        <a href="javascript:void(0);" class="btn btn-xs btn-warning mb-1"  onclick="delete_old_student_by_id('<?php echo $row['id']; ?>');"><i class="simple-icon-trash"></i></a>
                        <!-- <a href="#" class="btn btn-xs btn-warning mb-1"><i class="simple-icon-trash"></i></a> -->

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