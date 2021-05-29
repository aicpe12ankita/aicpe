<table id='empTable' class='custom_table table'>
                      <thead>
                         <tr>
                            <th>Sr. No.</th>
                            <th>
                            	<a class="sorting" sort-by="stud_firstName" sort-order="asc"  href="javascript:void(0)">
                            	Student Name 
                            	</a>
                        	</th>
                            <th>Course Of Interest</th>
                            <th>Email </th>
                            <th>Mobile 1</th>
                            <th>Whats app No</th>
                            <th>Institute Staff</th>
                            <th>Date of Enquiry</th>
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
                                            <p class="text-muted"><?php echo ucwords($row['stud_firstName']." ".$row['stud_lastName']); ?></p>
                                        </td>
                                         <td>
                                            <p class="text-muted"><?php echo ucwords($row['course_of_interest']); ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo $row['email']; ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo $row['mobile_1']; ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo $row['whatsapp_no']; ?></p>
                                        </td>
                                       
                                        <td>
                                           <p class="text-muted">XYZ ABC </p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo  date('d-m-y',strtotime($row['date_of_enquiry'])); ?></p>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-xs btn-primary mb-1"><i class="simple-icon-note"></i></a>
                                            <a href="#" class="btn btn-xs btn-warning mb-1"><i class="simple-icon-trash"></i></a>
                                            <a href="<?php echo base_url(); ?>/institutions-register-student" class="btn btn-xs btn-danger">Register</a>
                                        </td>
                                    </tr>
                                   <?php $i++; } ?>
                                </tbody>
                  </table>
<!-- START PAGINATION -->
<div class="col-sm-3 text-left">
	<?php if($total_records > 0) { ?>
		Showing <?php echo $from_records; ?> to <?php echo $to_records; ?> of <?php echo $total_records; ?>
	<?php } else echo '&nbsp'; ?>
</div>
<div class="col-sm-9 text-right">
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
<style type="text/css">

	.text {
		overflow: hidden;
		text-overflow: ellipsis;
		display: -webkit-box;
		-webkit-line-clamp: 2; /* number of lines to show */
		-webkit-box-orient: vertical;
	}
</style>
