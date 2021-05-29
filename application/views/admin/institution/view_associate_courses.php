                    
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header custom-modal">
            <h5 class="modal-title white">Associates Courses</h5>
            <button type="button" class="close white" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="">
                <h6><?= $asso_details['asso_name']?></h6>
            </div>

            <div class="separator mb-2"></div>

            <div id="accordion">
                <?php foreach ($detail as $key => $value) { ?>
                    
                <div class="border mb-2 bg_white">
                    <button class="btn btn-primary default w-100" data-toggle="collapse" data-target="#collapse<?= $value['asc_id']?>" aria-expanded="true" aria-controls="collapse<?= $value['asc_id']?>">
                       <?= $value['asc_name'] ?> <span class="right"><?= $value['asc_duration']?></span>
                    </button>
                    <div id="collapse<?= $value['asc_id']?>" class="collapse show pd-15" data-parent="#accordion">
                        <p class="text-small"><strong>Course Code :</strong>
                            <span class="text-muted"><?= $value['asc_code']?></span>
                        </p>
                        <p class="text-small"><strong>AICPE Fees :</strong>
                            <span class="text-muted"><?= currency_symbol_icon().currency_format($value['asc_aicpe_exam_fees'])?></span>
                        </p>
                        <button class="btn btn-primary btn-xs" type="button" data-toggle="collapse"data-target="#collapseExample<?= $value['mapping_id']?>" aria-expanded="false" aria-controls="collapseExample<?= $value['mapping_id']?>">Add Course</button>
                        <div class="collapse" id="collapseExample<?= $value['mapping_id']?>">
                            <div class="p-4 border mt-4">
                                <form>
                                    <div class="form-group">
                                        <label>Course Fees</label>
                                        <input class="form-control" type="text"  name="add_course_fees<?= $value['mapping_id']?>" id="add_course_fees<?= $value['mapping_id']?>" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="is_data_completed">Viva And Practical Fees Required</label>
                                        <label class="switch">

                                          <input class="switch-input" name="is_viva_and_practical<?= $value['mapping_id']?>"  id= "is_viva_and_practical<?= $value['mapping_id']?>" type="checkbox" />
                                          <span class="switch-label" data-on="On" data-off="Off"></span> <span class="switch-handle"></span> 
                                          
                                        </label>
                                    </div> 
                                    <div class="form-group">                                       
                                        <label for="is_data_completed">Marksheet Fees Required</label>
                                        <label class="switch">                                        
                                          <input class="switch-input" name="is_marksheets_fees<?= $value['mapping_id']?>" id= "is_marksheets_fees<?= $value['mapping_id']?>" type="checkbox" />
                                          <span class="switch-label" data-on="On" data-off="Off"></span> <span class="switch-handle"></span> 

                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <a href="javascript:void(0)" onclick="add_course_fees_details(<?= $value['mapping_id']?>)" class="btn btn-xs btn-primary">Add</a>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
               <!--  <div class="border mb-2 bg_white">
                    <button class="btn btn-primary default w-100" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        Certificate In Tally Erp-09 <span class="right">6 Months</span>
                    </button>
                    <div id="collapseTwo" class="collapse pd-15" data-parent="#accordion">
                        <p class="text-small"><strong>Course Code :</strong>
                            <span class="text-muted">XYZ_89780</span>
                        </p>
                        <p class="text-small"><strong>AICPE Fees :</strong>
                            <span class="text-muted">Rs. 150</span>
                        </p>
                        <button class="btn btn-primary btn-xs" type="button" data-toggle="collapse"data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Add Course</button>
                        <div class="collapse" id="collapseExample">
                            <div class="p-4 border mt-4">
                                <form>
                                    <div class="form-group">
                                        <label>Course Fees</label>
                                        <input class="form-control" type="text" name="add_course" placeholder="">
                                    </div>
                                    <button class="btn btn-xs btn-primary">Add</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border mb-2 bg_white">
                    <button class="btn btn-primary default w-100" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                        Certificate In Computer Based English Typing <span class="right">2 Months</span>
                    </button>
                    <div id="collapseThree" class="collapse pd-15" data-parent="#accordion">
                        <p class="text-small"><strong>Course Code :</strong>
                            <span class="text-muted">XYZ_89780</span>
                        </p>
                        <p class="text-small"><strong>AICPE Fees :</strong>
                            <span class="text-muted">Rs. 150</span>
                        </p>
                        <button class="btn btn-primary btn-xs" type="button" data-toggle="collapse"data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Add Course</button>
                        <div class="collapse" id="collapseExample">
                            <div class="p-4 border mt-4">
                                <form>
                                    <div class="form-group">
                                        <label>Course Fees</label>
                                        <input class="form-control" type="text" name="add_course" placeholder="">
                                    </div>
                                    <button class="btn btn-xs btn-primary">Add</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> -->
                <?php  } ?>
            </div>
        </div>
    </div>
</div>
 
<style>
    .switch {
      position: relative;
      display: block;
      vertical-align: top;
      width: 100px;
      height: 30px;
      padding: 3px;
      margin: 0 10px 10px 0;
      background: linear-gradient(to bottom, #eeeeee, #FFFFFF 25px);
      background-image: -webkit-linear-gradient(top, #eeeeee, #FFFFFF 25px);
      border-radius: 18px;
      box-shadow: inset 0 -1px white, inset 0 1px 1px rgba(0, 0, 0, 0.05);
      cursor: pointer;
    }
    .switch-input {
      position: absolute;
      top: 0;
      left: 0;
      opacity: 0;
    }
    .switch-label {
      position: relative;
      display: block;
      height: inherit;
      font-size: 10px;
      text-transform: uppercase;
      background: #eceeef;
      border-radius: inherit;
      box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.12), inset 0 0 2px rgba(0, 0, 0, 0.15);
    }
    .switch-label:before, .switch-label:after {
      position: absolute;
      top: 50%;
      margin-top: -.5em;
      line-height: 1;
      -webkit-transition: inherit;
      -moz-transition: inherit;
      -o-transition: inherit;
      transition: inherit;
    }
    .switch-label:before {
      content: attr(data-off);
      right: 11px;
      color: #aaaaaa;
      text-shadow: 0 1px rgba(255, 255, 255, 0.5);
    }
    .switch-label:after {
      content: attr(data-on);
      left: 11px;
      color: #FFFFFF;
      text-shadow: 0 1px rgba(0, 0, 0, 0.2);
      opacity: 0;
    }
    .switch-input:checked ~ .switch-label {
      background: #00365a;
      box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.15), inset 0 0 3px rgba(0, 0, 0, 0.2);
    }
    .switch-input:checked ~ .switch-label:before {
      opacity: 0;
    }
    .switch-input:checked ~ .switch-label:after {
      opacity: 1;
    }
    .switch-handle {
      position: absolute;
      top: 4px;
      left: 4px;
      width: 28px;
      height: 28px;
      background: linear-gradient(to bottom, #FFFFFF 40%, #f0f0f0);
      background-image: -webkit-linear-gradient(top, #FFFFFF 40%, #f0f0f0);
      border-radius: 100%;
      box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.2);
    }
    .switch-handle:before {
      content: "";
      position: absolute;
      top: 50%;
      left: 50%;
      margin: -6px 0 0 -6px;
      width: 12px;
      height: 12px;
      background: linear-gradient(to bottom, #eeeeee, #FFFFFF);
      background-image: -webkit-linear-gradient(top, #eeeeee, #FFFFFF);
      border-radius: 6px;
      box-shadow: inset 0 1px rgba(0, 0, 0, 0.02);
    }
    .switch-input:checked ~ .switch-handle {
      left: 74px;
      box-shadow: -1px 1px 5px rgba(0, 0, 0, 0.2);
    }
    /* Transition
        ========================== */
    .switch-label, .switch-handle {
      transition: All 0.3s ease;
      -webkit-transition: All 0.3s ease;
      -moz-transition: All 0.3s ease;
      -o-transition: All 0.3s ease;
    }
    
</style> 
<script type="text/javascript">
   function add_course_fees_details(mapping_id)
   {
        course_fees = $("#add_course_fees"+mapping_id).val();
        if ($("#is_viva_and_practical"+mapping_id).is(':checked')) 
        {
            viva_and_practical = '1';
        }
        else
        {
            viva_and_practical = '0';
        }
        if ($("#is_marksheets_fees"+mapping_id).is(':checked')) 
        {
            marksheets_fees = '1';
        }
        else
        {
            marksheets_fees = '0';
        }
        //marksheets_fees = $("#is_marksheets_fees"+mapping_id).val();
        
        $.ajax({
            url         : '<?php echo base_url(); ?>institution-add-course-fees-details',
            type        : 'POST',
            dataType    : 'json',
            data        : {mapping_id: mapping_id,course_fees:course_fees,viva_and_practical:viva_and_practical,marksheets_fees:marksheets_fees},
            beforeSend: function(){
              
                $(".main-loader").show();
            },
            success:function(data)
            {                 
                if(data.type=='success')
                {
                    toastr[data.type](data.msg);
                }
                else
                {
                    toastr['error']('Something went wrong! Please try again');
                }
                           
            }
        });
       
   }
</script>