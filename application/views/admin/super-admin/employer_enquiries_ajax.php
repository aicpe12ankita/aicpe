                        <table class='custom_table table ' id='empTable' >
                                <thead>
                                   <tr>
                                        <th>Sr. No.</th>
                                        <th><a class="sorting" sort-by="eq_name" sort-order="desc"  href="javascript:void(0)">Employer Name </a></th>
                                        <th>Email </th>
                                        <th>Mobile</th>
                                        <th>City</th>
                                        <th>District</th>
                                        <th>State</th>
                                        <th>Country</th>
                                        <th>Date of Enquiry</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="list" data-check-all="checkAll">  
                                    <?php $i=$from_records; foreach ($data as $row) { ?>  
                                    <tr>
                                        <td>
                                            <p class="list-item-heading"><?php echo $i; ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo ucfirst($row->eq_name); ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo $row->eq_email; ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo $row->eq_mobile; ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo ucfirst($row->ci_name); ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo ucfirst($row->d_district_name); ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo ucfirst($row->s_name); ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo ucfirst($row->c_name); ?></p>
                                        </td>
                                         <td>
                                            <p class="text-muted"><?php echo date('d-m-Y h:ia',strtotime($row->eq_date_of_enquiry)); ?></p>
                                        </td>
                                        <td>
                                            
                                            <button type="button" class="btn btn-xs btn-warning mb-1" onclick="delete_employer_enquiry(<?php echo $row->eq_id; ?>)"><i class="simple-icon-trash"></i></button>
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
