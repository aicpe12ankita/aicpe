<div class="col-12 mb-4 data-table-rows data-tables-hide-filter">
    <table  class="custom_table table">
        <thead>
           <tr>
                <th>Sr. No.</th>
                <th>Logo</th>
                <th>Employer Code </th>
                <th>Employer Name </th>
                <th>Company Name</th>
                <th>Designation  </th>
                <th>Mobile NO</th>
                <!-- <th>Username</th> -->
                <th>No. Of Jobs Posted</th>
                <th>Verified</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
           <?php if($data != ""){
                $i=$from_records;
                foreach($data as $row){?>   
            <tr>
                <td>
                    <p class="list-item-heading"><?php echo $i; ?></p>
                </td>
                <td>
                  <img src="<?php echo base_url().$row['logo']?>" class="img-thumbnail border-0 rounded-circle list-thumbnail table_img" alt="logo" style="height:50px;width:50px">
                </td>
                <td>
                    <p class="text-muted"><?= get_value($row,'employer_code','-'); ?></p>
                </td>
                <td>
                    <p class="text-muted"><?= get_value($row,'employer_name','-'); ?></p>
                </td>
                <td>
                    <p class="text-muted"><?= get_value($row,'company_name','-'); ?></p>
                </td>
                <td>
                    <p class="text-muted"><?= get_value($row,'designation','-'); ?></p>
                </td>
                <td>
                    <p class="text-muted"><?= get_value($row,'mobile_no','-'); ?></p>
                </td>
                <!-- <td>
                    <p class="text-muted"><?= get_value($row,'username','-'); ?></p>
                </td> -->
                 <td>
                    <p class="badge badge-outline-success"><?= get_value($row,'no_of_job_posted','-'); ?></p>
                </td>
                 <td>
                    <?php if($row['verified'] == '0'){?>
                    <p class="badge badge-success">YES</p>
                    <?php } else {?>
                    <p class="badge badge-warning">NO</p>
                <?php }?>
                </td>
                <td>
                    <?php if($row['status'] == '0'){?>
                    <p class="badge badge-success">Enable</p>
                    <?php } else {?>
                    <p class="badge badge-warning">Disable</p>
                    <?php } ?>
                </td>
                <td>
                    <a href="javascript:void(0);" class="btn btn-xs btn-primary mb-1" onclick="edit_employers_by_id(<?php echo $row['id']?>);"><i class="simple-icon-note"></i></a>
                    <a href="javascript:void(0);" class="btn btn-xs btn-warning mb-1" onclick="delete_employers_by_id(<?php echo $row['id'] ?>);"><i class="simple-icon-trash"></i></a>
                </td>
            </tr>
           
            <?php $i++; } } else{ 
            ?>    
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
</div>