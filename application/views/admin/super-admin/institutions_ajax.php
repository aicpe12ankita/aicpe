<table class='custom_table table' id='empTable'>
                                <thead>
                                   <tr>
                                        <th>Sr. No.</th>
                                        <th>Logo</th>
                                        <th><a class="sorting" sort-by="ci_name" sort-order="desc"  href="javascript:void(0)">Institution Name </a></th>
                                        <th>ATC Code</th>
                                        <th>Email </th>
                                        <th>Mobile No.</th>
                                        <th>Username </th>
                                        <th>Password </th>
                                        <th>AICPE Staff</th>
                                        <th>Wallet Balance</th>
                                        <th>Direct Login</th>
                                        <th>Status</th>
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
                                        <td><?php if($row->inst_logo!=""){?> 
                                            <img src="<?php echo base_url();?>uploads/institution_files/<?php echo $row->inst_logo; ?>" class="img-thumbnail border-0 table_img ">
                                            <?php }else{ ?> 
                                            <span class="simple-icon-picture table_img_icon"></span>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo $row->inst_name; ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo $row->atc_code; ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo $row->email; ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo $row->mobile_1; ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo $row->inst_code; ?></p>
                                        </td>
                                        <td>
                                           <p class="text-muted"><?php echo $row->password; ?></p>
                                        </td>
                                        <td>
                                           <p class="text-muted"><?php echo ucwords($row->as_firstName." ".$row->as_lastName); ?></p>
                                        </td>
                                        <td>
                                           <p class="text-muted"><?php echo "Not Yet Dynamic"; ?></p>
                                        </td>
                                        
                                        <td>
                                            <a class="btn btn-outline-dark btn-xs" href="<?php echo base_url(); ?>institute-login/<?php echo $row->id; ?>"target="_blank">Institute Panel</a>
                                        </td>
                                        <td>
                                            <span id="change_status_<?php echo $row->id; ?>">
                                                <?php if($row->approve_status=='1'){ ?>
                                                <a href="javascript:void(0)"><span class="badge badge-success">Approved</span></a>
                                            <?php }else{ ?>
                                                <a href="javascript:void(0)" onclick="change_status('<?php echo $row->id; ?>')"><span class="badge badge-warning">Unapproved</span></a>
                                            <?php } ?>
                                            </span>
                                            <span id="change_hold_status_<?php echo $row->id; ?>">
                                            <?php if($row->hold_status=='Hold'){ ?>
                                                <a href="javascript:void(0)" onclick="change_hold_status('<?php echo $row->id; ?>');"><span class="badge badge-warning">Hold</span></a>
                                            <?php }else{ ?>
                                                <a href="javascript:void(0)" onclick="change_hold_status('<?php echo $row->id; ?>');"><span class="badge badge-danger">Unhold</span></a>
                                            <?php } ?>
                                        </span>
                                        <span id="change_active_status_<?php echo $row->id; ?>">
                                            <?php if($row->active_status=='Active'){ ?>
                                                <a href="javascript:void(0)" onclick="change_active_status('<?php echo $row->id; ?>');"><span class="badge badge-success">Active</span></a>
                                            <?php }else{ ?>
                                                <a href="javascript:void(0)" onclick="change_active_status('<?php echo $row->id; ?>');"><span class="badge badge-danger">Inactive</span></a>
                                            <?php } ?>
                                        </span>
                                        <span id="change_block_status_<?php echo $row->id; ?>">
                                            <?php if($row->status=='Block'){ ?>
                                                <a href="javascript:void(0)" onclick="change_block_status('<?php echo $row->id; ?>');"><span class="badge badge-warning">Block</span></a>
                                            <?php }else{ ?>
                                                <a href="javascript:void(0)" onclick="change_block_status('<?php echo $row->id; ?>');"><span class="badge badge-danger">Unblock</span></a>
                                            <?php } ?>
                                        </span>
                                        </td>
                                        
                                        <td>
                                            <button class="btn btn-xs btn-primary mb-1" onclick="get_institute_byId('edit','<?php echo $row->id; ?>');"><i class="simple-icon-note"></i></button>

                                            <button class="btn btn-xs btn-danger mb-1" onclick="delete_institute_byId('<?php echo $row->id; ?>');"><i class="simple-icon-trash"></i></button>

                                            <a href="javascript:void(0)" class="btn btn-xs btn-dark" data-toggle="modal" data-target="#sendSMS"onclick="sendSMS('<?php echo $row->id; ?>')"> 
                                                <i class="iconsminds-speach-bubble-dialog"></i>
                                            </a>

                                            <a href="javascript:void(0)" class="btn btn-xs btn-warning" data-toggle="tooltip" data-placement="top" title="Send Password Recovery Mail" onclick="sendPasswordRecoveryMail('<?php echo $row->id; ?>')"><i class="simple-icon-lock"></i> <i class="iconsminds-envelope"></i></a>

                                            <a href="javascript:void(0)" class="btn btn-xs btn-info" data-toggle="tooltip" data-placement="top" title="Send Password Recovery Message" onclick="sendPasswordRecoverySMS('<?php echo $row->id; ?>')"><i class="simple-icon-lock"></i> <i class="iconsminds-speach-bubble-dialog"></i></a>
                                        </td>
                                    </tr>
                                   <?php $i++; } } ?>
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