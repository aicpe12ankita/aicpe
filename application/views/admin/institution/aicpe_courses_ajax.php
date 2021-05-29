<table class='custom_table table' id='empTable'>
                                <thead>
                                   <tr>                                       
                                       <th>Sr. No.</th>
                                        <th>Course Code </th>
                                        <th>Course Name </th>
                                        <th>Duration </th>
                                        <th>Viva & Practical </th>
                                        <th>Marksheet required  </th>
                                        <th>AICPE Fees <p class="text-muted text-small">Exam + Marksheet Fees</p></th>
                                        <th>Status </th>
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
                                            <p class="text-muted"><?= $row->crs_code ?> </p>
                                        </td>
                                        <td>
                                          <p class="text-muted"><?= $row->crs_name ?> </p>
                                        </td>
                                        <td><p class="text-muted"><?= $row->crs_duration ?></p></td>
                                        <td>
                                            <?php echo $row->is_viva_and_practical =='0' ? '<p class="badge badge-pill badge-outline-theme-2">No</p>' : '<p class="badge badge-pill badge-outline-theme-1">Yes</p>' ?>
                                            
                                        </td> 
                                        <td>
                                            <?php echo  $row->crs_no_of_marksheets <= 0  ? '<p class="badge badge-pill badge-outline-theme-2">No</p>' : '<p class="badge badge-pill badge-outline-theme-1">Yes</p>' ?>
                                            
                                        </td>
                                      <!--   <td><p class="badge badge-pill badge-outline-theme-1">Yes</p></td> -->
                                        <td><p class="text-muted"><?php $total_amt = ($row->crs_exam_fees + $row->crs_marksheet_fees); echo currency_symbol_icon().currency_format($total_amt); ?></p></td>
                                        <td>
                                            <?php if($row->crs_status=='1'){ ?>
                                                <a href="javascript:void(0)"><span class="badge badge-success" style="border-radius: 12px;height:25px;">Approved</span></a>
                                            <?php }else{ ?>
                                                <a href="javascript:void(0)"><span class="badge badge-warning" style="border-radius: 12px;height:25px;">Unapproved</span></a>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <button class="btn btn-primary btn-xs" type="button" data-toggle="collapse"data-target="#collapseExample_<?=$i?>" aria-expanded="false" aria-controls="collapseExample">Add Course</button>
                                            <div class="collapse" id="collapseExample_<?=$i?>">
                                          <div class="p-4 border mt-4">
                                            <form>
                                            <div class="form-group">
                                              <label>Course Fees</label>
                                              <input class="form-control" type="text" name="add_course" placeholder="">
                                            </div>
                                            <!-- Checked switch -->
                                           <label class="label-switch switch-primary">
                                                <input type="checkbox" class="switch switch-bootstrap status" name="is_data_completed" id="is_data_completed" value="1">
                                                <span class="lable"></span>
                                            </label>
                                            <label for="is_data_completed">Is Data Completed </label>
                                            <button class="btn btn-xs btn-primary">Add</button>
                                          </form>
                                        </div>
                                      </div>
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