<table class='custom_table table' id='empTable'>
                                <thead>
                                   <tr>
                                        <th>Sr. No.</th>
                                        <th>Course Code</th>
                                        <th>Course Name</th>
                                        <th>Duration</th>
                                        <th>Subjects</th>
                                        <th>Certificate Ordered</th>
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
                                            <p class="text-muted"><?php echo $row->crs_code; ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo $row->crs_name; ?></p>
                                        </td>
                                      
                                        <td>
                                            <p class="text-muted"><?php echo $row->crs_duration; ?></p>
                                        </td>
                                        <td>
                                           <?php $sub=""; if($row->crs_subjects_weightage!=""){
                                            $subject_1 = array_keys(json_decode($row->crs_subjects_weightage, true)); 
                                                if($subjects!=""){
                                                    foreach ($subjects as $subs) { 
                                                        if(in_array($subs->sub_id, $subject_1)){ echo '<span class="badge badge-outline badge-info">'.$subs->sub_title.'</span> ' ;
                                                        }
                                                    }
                                                } }  ?>
                                        </td>
                                        <td>
                                            <p class="text-muted">not yet dynamic</p>
                                        </td>
                                         <td>
                                            <p class="text-muted"><?php echo date('d-m-Y', strtotime($row->crs_publish_date)); ?></p>
                                        </td>
                                        <td>
                                            <?php if($row->crs_status==0){
                                                echo '<span class="badge badge-pill badge-primary">Active</span>';
                                            }else{
                                                echo '<span class="badge badge-pill badge-warning">Inactive</span>';
                                            } ?>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="btn btn-xs btn-primary mb-1" onclick="get_aicpe_course_byId('edit','<?php echo $row->crs_id ;?>');"><i class="simple-icon-note"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-xs btn-warning mb-1"  onclick="delete_aicpe_course_byId('<?php echo $row->crs_id ;?>');"><i class="simple-icon-trash"></i></a>
                                            
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