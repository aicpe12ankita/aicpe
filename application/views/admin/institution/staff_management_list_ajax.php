 <div class="col-12 mb-4 data-table-rows data-tables-hide-filter">
    <table id="dataTableRows01" class="data-table responsive nowrap data-table-standard"
        data-order="[[ 1, &quot;desc&quot; ]]">
        <thead>
            <tr>
                <th>Sr. No.</th>
                <th>Staff Name</th>
                <th>Mobile Number</th>
                <th>Email</th>
                <th>Role</th>
                <th>Username</th>
                <th>Password</th>
                <th>Eligibility For Incentive</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
           <?php if($data != ""){
           $i=$from_records;
           foreach($data as $row){ ?>   
            <tr>
                <td>
                    <p class="list-item-heading"><?php echo $i; ?></p>
                </td>
                <td>
                    <p class="text-muted"><?= get_value($row,'staff_name','-');?></p>
                </td>
                <td>
                    <p class="text-muted"><?= get_value($row,'mobile_no','-');?></p>
                </td>
                <td>
                    <p class="text-muted"><?= get_value($row,'email','-');?></p>
                </td>
                <td>
                    <p class="text-muted"><?= get_value($row,'role','-');?></p>
                </td>
                <td>
                    <p class="text-muted"><?= get_value($row,'username','-');?></p>
                </td>
                <td>
                    <p class="text-muted"><?= get_value($row,'password','-');?></p>
                </td>
                 <td>
                    <?php if($row['eligibility_for_incentives']=='1'){?>
                    <p class="badge badge-info">YES</p>
                    <?php } else {?>
                        <p class="badge badge-warning">NO</p>
                    <?php } ?>
                </td>
                 <td>
                    <?Php if($row['status']== '0'){?>
                    <p class="badge badge-success">Enable</p>
                    <?php } else {?>
                        <p class="badge badge-success">Disable</p>
                    <?php } ?>
                </td>
                <td>
                    <a href="javascript:void(0);" class="btn btn-xs btn-primary mb-1" onclick="edit_staff_managment_list_by_id(<?= $row['id'] ?>);"><i class="simple-icon-note"></i></a>
                    <a href="javascript:void(0);" class="btn btn-xs btn-warning mb-1" onclick="delete_staff_managment_list_by_id(<?= $row['id'] ?>);"><i class="simple-icon-trash"></i></a>
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
</div>