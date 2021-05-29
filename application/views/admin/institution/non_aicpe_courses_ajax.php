<table class='custom_table table' id='empTable'>
    <thead>
       <tr>
            <th>Sr. No.</th>
            <th>Course Code  </th>
            <th>Course Name </th>
            <th>Duration </th>
            <th>Certified Authority </th>
            <th>Exam fees to be paid</th>
            <th>Course Fees</th>
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
                <p class="text-muted"><?= get_value($row,'no_code','-')?> </p>
            </td> 
            <td>
                <p class="text-muted"><?= get_value($row,'no_name','-')?> </p>
            </td>
            
            <td>
                <p class="text-muted"><?= get_value($row,'no_duration','-')?> </p>
            </td>
            <td>
                <span class="badge badge-pill badge-outline-theme-2">ATC</span>
               <span class="badge badge-pill badge-outline-theme-2"> ABC</span>
            </td>
            <td>
                <p class="text-muted"><?php echo currency_symbol_icon().currency_format(get_value($row,'no_exam_fees','0.00')); ?></p>
            </td>
            <td>
                <p class="text-muted"><?php echo currency_symbol_icon().currency_format(get_value($row,'no_course_fees','0.00')); ?></p>
            </td>

             <td>
                <a href="#" class="btn btn-xs btn-primary mb-1" onclick="add_non_aicpe_course(<?=$row['no_id'] ?>)"><i class="simple-icon-note"></i></a>
                <a href="#" class="btn btn-xs btn-warning mb-1" onclick="delete_record(<?=$row['no_id'] ?>)"><i class="simple-icon-trash"></i></a>
                
            </td>
           
        </tr>
       <?php $i++;  }} else
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