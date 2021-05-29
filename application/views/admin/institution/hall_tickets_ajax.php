<table class='custom_table table' id='empTable'>
    <thead>
         <tr>
            <th>Sr. No.</th>
            <th>Course Name </th>
            <th>
              <a class="sorting" sort-by="student_name" sort-order="asc" href="javascript:void(0)">Student Name </a>
            </th>
            <th>Exam Date </th>
            <th>Center Code </th>
            <th>Center Name </th>
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
                        <p class="text-muted"><?= get_value($row,'course_name','-'); ?></p>
                    </td>
                    <td>
                        <p class="text-muted"><?= get_value($row,'student_name','-'); ?></p>
                    </td>
                    <td>
                        <p class="text-muted"><?= get_value($row,'exam_date','-'); ?></p>
                    </td>
                    <td>
                        <p class="text-muted"><?= get_value($row,'center_code','-'); ?></p>
                    </td>
                    <td>
                        <p class="text-muted"><?= get_value($row,'center_name','-'); ?></p>
                    </td>
                    <td>
                        
                        <a href="javascript:void(0);" class="btn btn-xs btn-warning mb-1"  onclick="delete_hall_tickets_by_id('<?php echo $row['id']; ?>');"><i class="simple-icon-trash"></i></a>
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