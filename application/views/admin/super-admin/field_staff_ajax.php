                    <table class='custom_table table ' id='empTable'>
                                <thead>
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Photo</th>
                                        <th><a class="sorting" sort-by="asso_name" sort-order="desc"  href="javascript:void(0)">Staff Name</a></th>
                                        <th>Mobile No.</th>
                                        <th>Email</th>
                                        <th>Designation</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Eligibility For Incentive</th>
                                        <th>Total Institutes Alloted</th>
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
                                            <?php if($data!=""){ if($row->as_user_photo!=""){ ?>
                                            <img src="<?php echo base_url(); ?>uploads/admin_staff/<?php echo $row->as_user_photo; ?>" class="img-thumbnail border-0 list-thumbnail table_img">
                                        <?php } } ?>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?= $data!="" ? $row->as_firstName." ".$row->as_lastName : "" ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?= $data!="" ? $row->as_mobile_1 : "" ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?= $data!="" ? $row->as_email : "" ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?= $data!="" ? $row->asd_title : "" ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?= $data!="" ? $row->as_email : "" ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?= $data!="" ? $row->as_password : "" ?></p>
                                        </td>
                                        <td>
                                            <?php if($data!=""){
                                                if($row->as_incentive_eligibility==0){
                                                    echo '<p class="badge badge-info">Yes</p>';
                                                }else{
                                                    echo '<p class="badge badge-secondary">No</p>';
                                                }
                                            } ?>
                                            
                                        </td>
                                        <td>
                                            <p class="badge badge-outline-secondary">Not dynamic</p>
                                        </td>
                                         <td>
                                            <?php if($data!=""){
                                                if($row->as_status==0){
                                                    echo '<p class="badge badge-success">Active</p>';
                                                }else{
                                                    echo '<p class="badge badge-danger">Inactive</p>';
                                                }
                                            } ?>
                                           
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="btn btn-xs btn-primary mb-1" onclick="get_staff_byId('edit','<?= $row->as_id; ?>');"><i class="simple-icon-note"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-xs btn-warning mb-1" onclick="delete_staff_byId('<?= $row->as_id; ?>');"><i class="simple-icon-trash"></i></a>
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