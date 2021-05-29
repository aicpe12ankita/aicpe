<table class='custom_table table' id='empTable'>
                                <thead>
                                   <tr>                                       
                                        <th>Sr. No.</th>
                                        <th>Course Type</th>
                                        <th>Course Name</th>
                                        <th>Duration </th>
                                        <th>Certifying Authority</th>
                                        <th>AICPE Fees</th>
                                        <th>Course Fees</th>
                                        <th>Status </th>
                                       
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
                                            <p class="text-muted"><?php echo $row->crs_stream; ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo $row->crs_name; ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo $row->crs_duration; ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo $row->crs_stream; ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo $row->crs_exam_fees; ?></p>
                                        </td>
                                        <td>
                                           <p class="text-muted"><?php echo $row->crs_marksheet_fees; ?></p>
                                        </td>
                                       
                                        <td>
                                            <span id="change_status_<?php echo $row->crs_id; ?>">
                                                <?php if($row->crs_status=='1'){ ?>
                                                <a href="javascript:void(0)"><span class="badge badge-success" style="border-radius: 12px;height:25px;">Approved</span></a>
                                            <?php }else{ ?>
                                                <a href="javascript:void(0)"><span class="badge badge-warning" style="border-radius: 12px;height:25px;">Unapproved</span></a>
                                            <?php } ?>
                                            </span>
                                           
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