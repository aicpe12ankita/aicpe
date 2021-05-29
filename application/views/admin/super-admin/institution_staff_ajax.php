<?php //print_r($data); ?>
<table class='custom_table table' id='empTable'>
                                <thead>
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Photo</th>
                                        <th><a class="sorting" sort-by="st_name" sort-order="desc"  href="javascript:void(0)">Staff Name</a></th>
                                        <th>Mobile 1</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Password</th>
                                        <th>Eligibility For Incentive</th>
                                        <th>Assigned Institution </th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php $i=$from_records; if($data!=""){ foreach ($data as $row) { ?>   
                                    <tr>
                                        <td>
                                            <p class="list-item-heading"><?php echo $i; ?></p>
                                        </td>
                                        <td>
                                            <img src="<?php echo base_url();?>uploads/institution_staff/<?= $row->st_photo; ?>" class="img-thumbnail border-0 list-thumbnail table_img">
                                        </td>
                                        <td>
                                            <p class="text-muted"><?= ucwords($row->st_name); ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?= $row->st_mobile_1; ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?= $row->st_email; ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?= ucwords($row->isd_title); ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?= $row->st_paaword; ?></p>
                                        </td>
                                        <td>
                                            <?php if($row!=""){ if($row->st_incentives_eligibility==0){ echo '<span class="badge badge-success">Yes</span>'; }else{ echo '<span class="badge badge-danger">No</span>'; }} ?>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?= $row->inst_name; ?></p>
                                        </td>
                                        <td>
                                           <?php if($row!=""){ if($row->st_status==0){ echo '<span class="badge badge-success">Active</span>'; }else{ echo '<span class="badge badge-danger">Inactive</span>'; }}  ?>
                                        </td>
                                        <td>
                                           <!--  <a href="#" class="btn btn-xs btn-primary mb-1" onclick="get_staff('<?php echo $row->st_id; ?>');"><i class="simple-icon-note"></i></a>
                                            <a href="#" class="btn btn-xs btn-warning mb-1" onclick="delete_staff('<?php echo $row->st_id; ?>');"><i class="simple-icon-trash"></i></a> -->
                                            <a href="#" class="btn btn-xs btn-warning mb-1">Download Log File</a>
                                            <a href="javascript:void(0)" class="btn btn-xs btn-warning" data-toggle="tooltip" data-placement="top" title="Send Password Recovery Mail" onclick="sendPasswordRecoveryMail('<?php echo $row->st_id; ?>');"><i class="simple-icon-lock"></i> <i class="iconsminds-envelope"></i></a>
                                            <a href="javascript:void(0)" class="btn btn-xs btn-info" data-toggle="tooltip" data-placement="top" title="Send Password Recovery Message" onclick="sendPasswordRecoverySMS('<?php echo $row->st_id; ?>');"><i class="simple-icon-lock"></i> <i class="iconsminds-speach-bubble-dialog"></i></a>
                                        </td>
                                    </tr>
                                   <?php $i++; }} ?>
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

      