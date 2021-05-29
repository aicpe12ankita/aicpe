<table class='custom_table table' id='empTable'>
                                <thead>
                                   <tr>
                                        <th>Sr. No.</th>
                                        <th>Course Code</th>
                                        <th>Course Name</th>
                                        <th>Duration</th>
                                        <th>Institution ATC Code</th>
                                        <th>Institution Name</th>
                                        <th>State, District & City</th>
                                        <th>No. Of Students Appeared</th>
                                        <th>Total Admissions</th>
                                        <th>Publish Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php if($data!=""){ $i=$from_records;
                                    foreach ($data as $row) { ?>
                                      
                                      <tr>
                                        <td>
                                            <p class="list-item-heading"><?php echo $i; ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo $row->no_code; ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo ucwords($row->no_name); ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo $row->no_duration; ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo $row->atc_code; ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo ucwords($row->inst_name); ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo ucwords($row->s_name.", ".$row->d_district_name.", ".$row->ci_name); ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted">content not dynamic </p>
                                        </td>
                                        <td>
                                            <p class="text-muted">content not dynamic </p>
                                        </td>
                                         <td>
                                            <p class="text-muted"><?php echo date('d-m-Y',strtotime($row->no_created_date)); ?></p>
                                        </td>
                                         
                                        <td>
                                             <span id="change_status_<?php echo $row->no_id; ?>">
                                                <?php if($row->no_approve=='1'){ ?>
                                                <a href="javascript:void(0)" onclick="change_status('<?php echo $row->no_id; ?>')"><span class="badge badge-success">Approved</span></a>
                                            <?php }else{ ?>
                                                <a href="javascript:void(0)" onclick="change_status('<?php echo $row->no_id; ?>')"><span class="badge badge-warning">Unapproved</span></a>
                                            <?php } ?>
                                            </span>
                                            <?php if($row->no_status==0){
                                                echo '<span class="badge badge-pill badge-primary">Active</span>';
                                            }else{
                                                echo '<span class="badge badge-pill badge-warning">Inactive</span>';
                                            } ?>
                                           
                                            <?php if($row->no_aicpe_course==0){
                                                echo '<span class="badge badge-pill badge-info">Add to AICPE Course</span>';
                                            }else{
                                                echo '<span class="badge badge-pill badge-success">Added to AICPE Course</span>';
                                            } ?>
                                        </td>
                                        <td>
                                            
                                            <a href="javascript:void(0);" class="btn btn-xs btn-warning mb-1"  onclick="delete_non_aicpe_courses('<?php echo $row->no_id;?>');"><i class="simple-icon-trash"></i></a>
                                            
                                        </td>
                                    </tr>
                                   <?php $i++; } } ?>
                                </tbody>
                            </table>
    <!-- START PAGINATION -->
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