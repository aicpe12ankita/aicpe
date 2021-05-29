<table class='custom_table table' id='empTable'>
    <thead>
       <tr>
            <th>Sr. No.</th>
            <th>Associates Name</th>
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
                <p class="text-muted"><?= get_value($row,'asso_name','-')?> </p>
            </td>
            <!-- <td>
              <ul>
                <li>Certificate In MS- Office And Internet</li>
                <li>Certificate In Tally Erp-09</li>
                <li>Certificate In Computer Based English Typing</li>
                <li>Certificate In Account Expert</li>
                <li>Certificate in information Technology</li>
              </ul>
            </td> -->
            <td>
                <?php if($row['asso_status']=='1'){ ?>
                <p class="badge badge-pill badge-success">Active</p>
            <?php }else{ ?>
                <p class="badge badge-pill badge-warning">Deactive</p>
                
            <?php } ?>
                
            </td>
            <td>
                <a href="javascript:void(0)" onclick="view_assos_course(<?php echo $row['asso_id'] ?>)" class="btn btn-primary btn-xs">View Course</a>
                <!-- <button type="button" class="btn btn-primary btn-xs " data-toggle="modal" data-target="#viewCourse">View Course</button> -->
            </td>
        </tr>
       <?php $i++;  }} else
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