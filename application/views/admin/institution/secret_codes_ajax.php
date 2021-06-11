<table class='custom_table table' id='empTable'>
    <thead>
      <tr>
            <th>Sr. No.</th>
            <th>Photo </th>
            <th>Exam Secret Code </th>
            <th>Student ID </th>
            <th>Student Name </th>
            <th>Email </th>
            <th>Mobile </th>
            <th>Course & Duration</th>
            <th>Username </th>
            <th>Password</th>
            <th>Created On</th>
            <th>Exam Status</th>
            <th>Action</th>
            <th>Send Mail</th>
            <th>Send SMS</th>
            <th>Fee Status</th>
      </tr>
    </thead>
    <tbody>
       <?php if ($data !="") 
       $i=$from_records;
       foreach($data as $row){ ?>   
        <tr>
            <td>
                <p class="list-item-heading"><?php echo $i; ?></p>
            </td>
             <td>
                <img src="<?php echo base_url();?>assets/img/profiles/l-2.jpg" class="img-thumbnail border-0 rounded-circle list-thumbnail table_img">
            </td>
            <td>
                <p class="text-muted"><?=get_value($row,'exam_secret_code','-') ?></p>
            </td>
            <td>
                <p class="text-muted"><?= get_value($row,'master_student_id','-') ?></p>
            </td>
            <td>
                <p class="text-muted"><?= get_value($row,'student_name','-') ?></p>
            </td>
            
            <td>
                <p class="text-muted"><?= get_value($row,'email','-');?></p>
            </td>
            <td>
                <p class="text-muted"><?= get_value($row,'mobile_no','-');?></p>
            </td>
            <td>
                <p class="text-muted"><?= get_value($row,'course_duration'); ?></p>
            </td>
            <td>
                <p class="text-muted"><?= get_value($row,'username','-');?></p>
            </td>
            <td>
                <p class="text-muted"><?= get_value($row,'password','');?></p>
            </td>
            <td>
                <p class="text-muted"><?= format_date($row['inserted_date'])?></p>
            </td>
            <td>
                
            <?php if ($row['exam_status']==0){?>
                <p class="badge badge-success">Success</p>

            <?php } else{?>
                   <p class="badge badge-warning">Error</p>
            <?php }?>
            </td>
            <td><!------helper_encrypt_url_key()-->
              <a href="javascript:void(0);" class="btn btn-xs btn-primary mb-1" data-toggle="modal" data-target="#editSecretCode" onclick="edit_secret_code_by_id(<?=($row['id'])?>)"><i class="simple-icon-note"></i>
              </a>
              <a href="javascript:void(0);" class="btn btn-xs btn-warning mb-1" onclick="delete_secret_code_by_id('<?php echo $row['id'] ?>')";><i class="simple-icon-trash"></i></a>
            </td>
              <td><a href="#" class="btn btn-xs btn-outline-secondary mb-1">Send Mail</a></td>
              <td><a href="#" class="btn btn-xs btn-outline-warning mb-1">Send SMS</a></td>
              <td><a href="#" class="btn btn-xs btn-primary mb-1" data-toggle="modal" data-target="#feesStatus">Fees Status</a></td>
            </td>
        </tr>
       <?php $i++; } ?>
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