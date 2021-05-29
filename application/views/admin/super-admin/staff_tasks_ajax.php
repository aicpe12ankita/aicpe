                        <table class='custom_table table ' id='empTable' >
                                <thead>
                                   <tr>
                                        <th>Sr. No.</th>
                                        <th><a class="sorting" sort-by="st_task" sort-order="desc"  href="javascript:void(0)">Task Title</a></th>
                                        <th>Description</th>
                                        <th>Staff Name</th>
                                        <th>Institution Name</th>
                                        <th>Institution Email & Mobile</th>
                                        <th>Task Assign Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php $i=$from_records; foreach ($data as $row) { ?>   
                                      <tr>
                                        <td>
                                            <p class="list-item-heading"><?php echo $i; ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo ucfirst($row->st_task); ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted">
                                                <?php echo ucfirst($row->st_description); ?>
                                            </p>
                                        </td>
                                         <td>
                                            <p class="text-muted">
                                                <?php echo ucfirst($row->as_firstName." ".$row->as_lastName); ?>
                                            </p>
                                        </td>
                                        <td>
                                            <p class="text-muted">
                                                <?php echo ucfirst($row->inst_name); ?>
                                            </p>
                                        </td>
                                        <td>
                                            <p class="text-muted">
                                                <?php echo ucfirst($row->email); ?>
                                            </p>
                                            <p class="text-muted">
                                                <?php echo ucfirst($row->mobile_1); ?>
                                            </p>
                                        </td>
                                        <td>
                                            <p class="text-muted">
                                                <?php echo date('d-m-Y H:ia',strtotime($row->st_publish_date)); ?>
                                            </p>
                                        </td>
                                        <td>
                                            <?php if($row->st_status==0){
                                                echo '<span class="badge badge-pill badge-primary">Pending</span>';
                                            }else{
                                                echo '<span class="badge badge-pill badge-success">Completed</span>';
                                            } ?>
                                        </td>
                                        <td>
                                          
                                            <a href="javascript:void(0);" class="btn btn-xs btn-primary mb-1" onclick="get_task_byId('edit','<?php echo $row->st_id; ?>');"><i class="simple-icon-note"></i></a>
                                            <span class="btn btn-xs btn-warning mb-1" onclick="delete_task_byId('<?php echo $row->st_id; ?>');"><i class="simple-icon-trash"></i></span>

                                            
                                        </td>
                                    </tr>
                                    <?php $i++; } ?>  
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
