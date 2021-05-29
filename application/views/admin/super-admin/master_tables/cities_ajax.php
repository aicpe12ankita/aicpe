<table class='custom_table table' id='empTable'>
            <thead>
               <tr>
                    <th>Sr. No.</th>
                    <th>Country</th>
                    <th>State </th>
                    <th>District </th>
                    <th><a class="sorting" sort-by="ci_name" sort-order="asc"  href="javascript:void(0)">City </a></th>
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
                        <p class="text-muted"><?php echo ucwords($row->c_name); ?></p>
                    </td>
                    <td>
                        <p class="text-muted"><?php echo ucwords($row->s_name); ?></p>
                    </td>
                    <td>
                        <p class="text-muted"><?php echo ucwords($row->d_district_name); ?></p>
                    </td>
                    <td>
                        <p class="text-muted"><?php echo ucwords($row->ci_name); ?></p>
                    </td>
                    <td>
                        <button type="button" class="btn btn-xs btn-primary mb-1 " onclick="get_city('edit',<?php echo $row->ci_id; ?>)"><i class="simple-icon-note"></i></button>
                        <button type="button" class="btn btn-xs btn-warning mb-1" onclick="delete_city(<?php echo $row->ci_id; ?>)"><i class="simple-icon-trash"></i></button>
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