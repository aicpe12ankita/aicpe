
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header custom-modal">
                  <h5 class="modal-title white">Payment History</h5>
                  <button type="button" class="close white" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                <div class="">
                  <img src="<?php echo base_url();?>assets/img/profiles/l-2.jpg" class="img-thumbnail border-0 rounded-circle list-thumbnail table_img mr-15">
                  <h6><?= $student_data['student_name'] ?></h6>
                <p class="text-muted">Certification In MS-Office</p>
                </div>
                
                <div class="separator mb-1"></div>
                <p class="">Payment History</p>
                <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Sr. No.</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Receipt No.</th>
                                        <th scope="col">Total Fees</th>
                                        <th scope="col">Paid Fees</th>
                                        <th scope="col">Print Receipt</th>
                                    </tr>
                                </thead>
            <tbody>
                <?php if($get_payments_history!=""){ 
                
                foreach ($get_payments_history as $key => $row) { $i= $key+1;?>  
                    <tr>
                        <td>
                            <p class="list-item-heading"><?php echo $i; ?></p>
                        </td>
                        <td>
                            <p class="text-muted"><?= get_value($row,'inserted_date','-'); ?></p>
                        </td>
                       
                        <td>
                            <p class="text-muted"><?= get_value($row,'receipt_no','-'); ?></p>
                        </td>
                       
                        <td>
                            <p class="text-muted"><?= currency_symbol_icon().currency_format(get_value($row,'course_fee','0.00')); ?></p>
                        </td>
                        <td>
                            <p class="text-muted"><?= currency_symbol_icon().currency_format(get_value($row,'paid_fee','0.00')); ?></p>
                        </td>
                        <td>
                            <a href="#"><i class="iconsminds-download"></i></a>
                        </td>
                       
                    </tr>
                    <?php  } } 
                    else
                        { ?>
                            <tr><td colspan="100%" style="text-align:center">No Records Found.</td></tr>
                        <?php   }
                        ?>
             </tbody>
         </table>
      </div>
  </div>
</div>
