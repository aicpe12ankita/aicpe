<table class='custom_table table' id='empTable'>
      <thead>
        <tr>
          <th>Sr. No.</th>
          <th>Country Flag </th>
          <th><a class="sorting" sort-by="c_name" sort-order="desc"  href="javascript:void(0)"> Country Name </a></th>
          <th>Country Code </th>
          <th>Currency </th>
          <th>Currency Value</th>
          <th>Action</th>
        </tr>
      </thead>
        <tbody> 
         <?php $i=$from_records; foreach ($data as $row) { ?>   
           <tr>
              <td>
                  <p class="list-item-heading"><?php echo $i; ?></p>
              </td>
              <td><?php if($row->c_flag_img!=""){?> 
                  <img src="<?php echo base_url();?>assets/images/countries/<?php echo $row->c_flag_img; ?>" class="img-thumbnail border-0 table_img ">
                <?php }else{ ?> 
                  <span class="simple-icon-picture table_img_icon"></span>
                <?php } ?>
              </td>
              <td>
                  <p class="text-muted"><?php echo $row->c_name; ?></p>
              </td>
              <td>
                  <p class="text-muted"><?php echo $row->c_phone_code; ?></p>
              </td>
              <td>
                  <p class="text-muted"><?php echo $row->c_currency; ?></p>
              </td>
              <td>
                  <p class="text-muted"><?php echo $row->c_indian_value; ?></p>
              </td>
              <td>
                  <button type="button" class="btn btn-xs btn-primary mb-1 edit_country" onclick="get_country('edit',<?php echo $row->c_id; ?>)"><i class="simple-icon-note"></i></button>
                  <button type="button" class="btn btn-xs btn-warning mb-1" onclick="delete_country(<?php echo $row->c_id; ?>)"><i class="simple-icon-trash"></i></button>
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

      