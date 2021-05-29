<table class='custom_table table' id='empTable'>
      <thead>
         <tr>
              <th>Sr. No.</th>
              <th>Book Category </th>
              <th><a class="sorting" sort-by="eb_title" sort-order="desc"  href="javascript:void(0)">Book Name </a></th>
              <th>Auther </th>
              <th>Pages </th>
              <th>Summery </th>
              <th>Link/Download </th>
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
                  <p class="text-muted"><?php echo ucwords($row->category_name); ?></p>
              </td>
              <td>
                  <p class="text-muted"><?php echo ucwords($row->eb_title); ?></p>
              </td>
              <td>
                  <p class="text-muted"><?php echo ucwords($row->eb_auther); ?></p>
              </td>
              <td>
                  <p class="text-muted"><?php echo $row->eb_pages; ?></p>
              </td>
              <td>
                  <p class="text-muted"><?php echo ucfirst($row->eb_summery); ?></p>
              </td>
              <td>
                <?php if($row->eb_status=='0'){ ?><span class="badge badge-success">Active</span> <?php }else{ ?><span class="badge badge-danger">Inactive</span> <?php } ?>
              </td>
              <td>
                  <p class="text-muted mb-1"><?php echo $row->eb_link; ?></p>
                  <?php if($row->eb_file!=""){ ?> 
                    <a href="<?php echo base_url();?>uploads/ebooks/<?php echo $row->eb_file; ?>" class="badge badge-info" download><i class="iconsminds-download"></i> Download Book</a>
                
                <?php } ?>
              </td>
              <td>
                  <button type="button" class="btn btn-xs btn-primary mb-1 " onclick="get_e_book('edit',<?php echo $row->eb_id; ?>)"><i class="simple-icon-note"></i></button>
                  <button type="button" class="btn btn-xs btn-warning mb-1" onclick="delete_e_book(<?php echo $row->eb_id; ?>)"><i class="simple-icon-trash"></i></button>
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

      