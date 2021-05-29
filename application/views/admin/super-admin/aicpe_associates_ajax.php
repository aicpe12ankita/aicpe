                        <table class='custom_table table ' id='empTable' >
                                <thead>
                                   <tr>
                                        <th>Sr. No.</th>
                                        
                                        <th>Associate Logo</th>
                                        <th>Associate Code</th>
                                        <th><a class="sorting" sort-by="asso_name" sort-order="desc"  href="javascript:void(0)">Associate Name </a></th>
                                        <th>No. Of Courses</th>
                                        <th>Total Admissions</th>
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
                                        
                                        <td><?php if($row->asso_logo!=""){ ?>
                                            <img src="<?php echo base_url();?>uploads/associates/<?php echo $row->asso_logo; ?>" class="img-thumbnail border-0 list-thumbnail table_img">
                                        <?php }else { echo '<span class="simple-icon-picture table_img_icon"></span>'; } ?>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo $row->asso_code; ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo ucfirst($row->asso_name); ?></p>
                                        </td>
                                       
                                        <td>
                                            <p class="text-muted">no dynamic content </p>
                                        </td>
                                        <td>
                                            <p class="text-muted">no dynamic content </p>
                                        </td>
                                        <td>
                                            <span id="change_block_status_<?php echo $row->asso_id; ?>">
                                            <?php if($row->asso_status=="0"){ ?>
                                                <a href="javascript:void(0)" onclick="change_asso_status('<?php echo $row->asso_id; ?>');"><span class="badge badge-warning">Block</span></a>
                                            <?php }else{ ?>
                                                <a href="javascript:void(0)" onclick="change_asso_status('<?php echo $row->asso_id; ?>');"><span class="badge badge-danger">Unblock</span></a>
                                            <?php } ?>
                                            </span>
                                        </td>
                                        <td>
                                          <a href="javascript:void(0);" class="btn btn-xs btn-success mb-1" onclick="view_associate_byId('<?php echo $row->asso_id; ?>');"><i class="simple-icon-eye"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-xs btn-primary mb-1" onclick="get_associate_byId('edit','<?php echo $row->asso_id; ?>');"><i class="simple-icon-note"></i></a>
                                            <span class="btn btn-xs btn-warning mb-1" onclick="delete_associate_byId('<?php echo $row->asso_id; ?>');"><i class="simple-icon-trash"></i></span>

                                            
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
