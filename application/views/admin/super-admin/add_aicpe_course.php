 
 <div class="modal-dialog" role="document">
          <div class="modal-content">
            
              <div class="modal-header custom-modal">
                  <h5 class="modal-title white"><?= isset($id) && $id!='' ? 'Edit AICPE Course':'Add AICPE Course' ?></h5>
                  <button type="button" class="close white" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>

              <div class="modal-body">
                <?= isset($id) && $id!='' ? '<form method="post" enctype="multipart/form-data" id="edit_aicpe_course" onsubmit="return false;">' : '<form method="post" enctype="multipart/form-data" id="add_aicpe_course" onsubmit="return false;">' ?>
                
                  <div class="form-group">
                      <label>Course Code</label>
                      <input type="text" class="form-control" name="crs_code" value="<?= isset($id) && $id!='' ? $data->crs_code : '' ?>" required>
                  </div>
                  <div class="form-group">
                      <label>Course Name</label>
                      <input type="text" class="form-control" name="crs_name" value="<?= isset($id) && $id!='' ? $data->crs_name : '' ?>" required>
                  </div>
                  <div class="form-group">
                      <label>Course Duration</label>
                      <input type="text" class="form-control" name="crs_duration" value="<?= isset($id) && $id!='' ? $data->crs_duration : '' ?>" required>
                  </div>
                  <div class="form-group">
                      <label>Course Stream </label>
                      <select class="form-control select2-single" name="crs_stream" required>
                        <option value="">&nbsp;</option>
                        <?php if($streams!=""){
                          foreach ($streams as $stream) { ?>
                            <option value="<?php echo $stream->ct_id; ?>" <?php if(isset($id) && $id!=''){ if($data->crs_stream==$stream->ct_id){ echo "selected"; }} ?>><?php echo $stream->ct_title; ?></option>
                          <?php } } ?>
                      </select>
                  </div>
                  
                  <div class="form-group">
                      <label>Course Award</label>
                     <textarea class="form-control" name="crs_awards" id="editor03"><?= isset($id) && $id!='' ? $data->crs_awards : '' ?></textarea>
                  </div>
                  <div class="form-group">
                      <label>Eligibility</label>
                      <textarea class="form-control" name="crs_eligibility" id="editor02"><?= isset($id) && $id!='' ? $data->crs_eligibility : '' ?></textarea>
                  </div>
                  <div class="form-group">
                    <label>Syllabus Pattern </label>
                    <div class="row">
                      <div class="col-lg-4 col-xs-4">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="semester" name="crs_pattern"
                                class="custom-control-input" value="0" <?php if(isset($id) && $id!=''){ if($data->crs_pattern==0){ echo "checked"; }} ?>>
                            <label class="custom-control-label" for="semester"> Semester </label>
                        </div>
                      </div>
                      <div class="col-lg-4 col-xs-4">
                        <div class="custom-control custom-radio">
                          <input type="radio" id="yearly" name="crs_pattern"
                              class="custom-control-input" value="1" <?php if(isset($id) && $id!=''){ if($data->crs_pattern==1){ echo "checked"; }} ?>>
                          <label class="custom-control-label" for="yearly">Yearly</label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group mb-1" id="anni_type">
                    <label> No. of Semester</label> 
                      <input type="number" class="form-control" placeholder="" name="crs_no_of_semester" value="<?= isset($id) && $id!='' ? $data->crs_no_of_semester : '' ?>">
                  </div>
                  <div class="form-group">
                      <label>No. Of Marksheeks </label>
                      <input type="number" class="form-control" name="crs_no_of_marksheets" value="<?= isset($id) && $id!='' ? $data->crs_no_of_marksheets : '' ?>">
                  </div>
                  <div class="form-group">
                      <label>Demo Exams Count</label>
                      <input type="number" class="form-control" name="crs_demo_exam_count" value="<?= isset($id) && $id!='' ? $data->crs_demo_exam_count : '' ?>">
                  </div>
                  <div class="form-group">
                      <label>Exam Fees</label>
                      <input type="text" class="form-control" name="crs_exam_fees" value="<?= isset($id) && $id!='' ? $data->crs_exam_fees : '' ?>">
                  </div>
                  
                  <div class="form-group">
                      <label>Marksheet Fees</label>
                      <input type="text" class="form-control" name="crs_marksheet_fees" value="<?= isset($id) && $id!='' ? $data->crs_marksheet_fees : '' ?>">
                  </div>
                  <div class="form-group">
                     <label>Course Syllabus</label>
                    <textarea name="crs_syllabus" id="editor01" class="form-control"><?= isset($id) && $id!='' ? $data->crs_syllabus : '' ?></textarea>
                  </div>
                  <div class="form-group">
                    <label>Subjects and Weightage</label>
                     <div class="input_fields_wrap">
                        
                       
                        <?php if(isset($data) && $data!=""){ $i=0; 
                          $subs = json_decode($data->crs_subjects_weightage,true);
                          foreach ($subs as $key => $weightage) {  ?>
                          
                        <div>
                         <select class="form-control select2-single mb-2" name="subjects[]" id="subject<?= $i; ?>">
                          <option>&nbsp;</option>
                           <?php if($subjects!=""){
                            foreach ($subjects as $sub) { ?>
                              <option value="<?php echo $sub->sub_id; ?>" <?php if($data!=""){ if($key==$sub->sub_id){ echo "selected"; }} ?>>
                                <?php echo $sub->sub_title." (".$sub->sub_code.")"; ?>
                              </option>
                            <?php  } } ?>
                         </select>
                         <div class="input-group">
                          <input type="text" name="topics[]" placeholder="Weightage" class="form-control mb-1 weightage_class" id="topics<?= $i; ?>" value="<?php echo $weightage; ?>">
                          <div class="input-group-append mr-b-4"><span class="input-group-text">%</span>
                          </div>
                        </div>
                        <?php if($i>0){ ?>
                          <a href="#" class="btn btn-outline-danger btn-xs mb-2 remove_field"><i class="simple-icon-minus"></i></a>
                         <?php } ?>
                        </div>
                      <?php $i++; }}else{  ?>
                          <div> 
                            <select class="form-control select2-single mb-2" name="subjects[]" id="subject0">
                              <option>Select Subject</option>
                             <?php if($subjects!=""){
                              foreach ($subjects as $sub) { ?>
                                <option value="<?php echo $sub->sub_id; ?>">
                                  <?php echo $sub->sub_title." (".$sub->sub_code.")"; ?>
                                </option>
                              <?php  } } ?>
                            </select>
                            <div class="input-group">
                              <input type="text" name="topics[]" placeholder="Weightage" class="form-control mb-1 weightage_class" id="topics0">
                              <div class="input-group-append mr-b-4">
                                <span class="input-group-text">%</span>
                              </div>
                            </div>
                        </div>
                      <?php } ?>
                        
                    </div>
                    
                    <button class="btn btn-xs btn-outline-primary add_field_button mb-2"><i class="simple-icon-plus"></i></button>
                  </div>
                  <div class="form-group">
                      <label>Course Image</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile02" name="crs_image">
                            <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                        </div>
                    </div>
                  </div>
                  <div class="form-group">
                      <label>Marketing Material</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile01" name="crs_marketing_image">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
                  </div>
                 
                  <div class="form-group">
                      <label>Institutes </label>
                      <select class="form-control select2-multiple" multiple name="crs_publish_for[]">
                        <option>&nbsp;</option>
                        <?php if($institutions!=""){ 
                          $inst = json_decode($data->crs_publish_for,true);
                          foreach ($institutions as $institution) { ?>
                            <option value="<?php echo $institution->id; ?>" <?php if($id!=""){ if( in_array($institution->id, $inst)){ echo "selected"; }} ?>><?php echo $institution->inst_name; ?></option>
                          <?php } } ?>
                      </select>
                  </div>
                  <div class="form-group">
                    <label>Publish Date</label>
                    <input type="text" class="form-control datepicker" name="crs_publish_date" value="<?= isset($id) && $id!='' ? date('m/d/Y',strtotime($data->crs_publish_date)) : '' ?>">
                  </div>
                  <div class="form-group">
                    <label>Status </label>
                    <div class="row">
                      <div class="col-lg-4 col-xs-4">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="Active" name="crs_status"
                                class="custom-control-input" value="0" <?php if(isset($id) && $id!=""){ if($data->crs_status==0){ echo "checked"; }} ?>>
                            <label class="custom-control-label" for="Active"> Active </label>
                        </div>
                      </div>
                      <div class="col-lg-4 col-xs-4">
                        <div class="custom-control custom-radio">
                          <input type="radio" id="Inactive" name="crs_status"
                              class="custom-control-input" value="1" <?php if(isset($id) && $id!=""){ if($data->crs_status==1){ echo "checked"; }} ?>>
                          <label class="custom-control-label" for="Inactive">Inactive</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <input type="hidden" name="id" value="<?= isset($data) && $data!="" ? $data->crs_id  : "" ?>">
                  <input type="hidden" id="pattern" value="<?= isset($data) && $data!="" ? $data->crs_pattern : "" ?>">
                  <?= isset($id) && $id!="" ? '<button type="submit" class="btn btn-primary">Update</button>' : '<button type="submit" class="btn btn-primary">Submit</button>' ?>
                  
                <button type="button" class="btn btn-outline-primary"
                      data-dismiss="modal">Cancel</button>
              
                </form>
              </div>
              <div class="modal-footer">
                
          </div>
      </div>

<script type="text/javascript">
  $(document).ready(function(){

    $('#add_aicpe_course').validate({

      rules:{
        "crs_code":{
          required:true
        },
        "crs_name":{
          required:true
        },
        "crs_duration":{
          required:true
        },
        "crs_stream":{
          required:true
        },
       
        "crs_status":{
          required:true
        }
      },
      messages:{
        "crs_code":{
          required:'Please enter course code!'
        },
        "crs_name":{
          required:'Please enter course name!'
        },
        "crs_duration":{
          required:'Please enter course duration!'
        },
        "crs_stream":{
          required:'Please select course stream!'
        },
      
        "crs_status":{
          required:'Please select status!'
        }
      },
      submitHandler: function(form){
        var formdata = new FormData(form);

        $.ajax({
          url: '<?php echo base_url(); ?>add-aicpe-courses',
          type:'post',
          dataType : 'json',
          data:formdata,
          processData: false,
          contentType: false,
          success:function(data){ 

            $('#addAssociateCourse').modal('hide');
            toastr[data.type](data.msg);
            $("#add_aicpe_course")[0].reset();
            page_update();
          }   
        });
      } 
    });

</script>
<script type="text/javascript">
  $(document).ready(function(){

    $('#edit_aicpe_course').validate({

      rules:{
        "crs_code":{
          required:true
        },
        "crs_name":{
          required:true
        },
        "crs_duration":{
          required:true
        },
        "crs_stream":{
          required:true
        },
       
        "crs_status":{
          required:true
        }
      },
      messages:{
        "crs_code":{
          required:'Please enter course code!'
        },
        "crs_name":{
          required:'Please enter course name!'
        },
        "crs_duration":{
          required:'Please enter course duration!'
        },
        "crs_stream":{
          required:'Please select course stream!'
        },
      
        "crs_status":{
          required:'Please select status!'
        }
      },
      submitHandler: function(form){
        var formdata = new FormData(form);

        $.ajax({
          url: '<?php echo base_url(); ?>edit-aicpe-courses',
          type:'post',
          dataType : 'json',
          data:formdata,
          processData: false,
          contentType: false,
          success:function(data){ 

            $('#addAssociateCourse').modal('hide');
            toastr[data.type](data.msg);
            $("#edit_aicpe_course")[0].reset();
            page_update();
          }   
        });
      } 
    });
});
</script>

<script type="text/javascript">
   $(".select2-single, .select2-multiple").select2({
        theme: "bootstrap",
       // dir: direction,
        placeholder: "",
        //maximumSelectionSize: 6,
        containerCssClass: ":all:"
      });
</script>

<script type="text/javascript">
  ClassicEditor.create(document.querySelector("#editor01")).catch(function (error) { console.log(error); });
  ClassicEditor.create(document.querySelector("#editor02")).catch(function (error) { console.log(error); });
  ClassicEditor.create(document.querySelector("#editor03")).catch(function (error) { console.log(error); });
</script>
<script type="text/javascript">
  $(document).ready(function(){
    var pattern = $('#pattern').val();
   if(pattern!="" && pattern==0){ 
      $('#anni_type').show();
     }else{ 
    $('#anni_type').hide();
    }
  });
  $('#semester').change(function(){
      if ($("#semester").prop("checked")) {
            $('#anni_type').show();
      }else if (!$("#yearly").prop("checked")){
        $('#anni_type').hide();
      }
  });
   $('#yearly').change(function(){
       if ($("#yearly").prop("checked")){
        $('#anni_type').hide();
      }
  });
  
</script>
<script type="text/javascript">
  $("input.datepicker").datepicker({
        autoclose: true,
        //rtl: isRtl,
        templates: {
          leftArrow: '<i class="simple-icon-arrow-left"></i>',
          rightArrow: '<i class="simple-icon-arrow-right"></i>'
        }
      });
</script>
<script type="text/javascript">
  $(document).ready(function() {
  var max_fields      = 10; //maximum input boxes allowed
  var wrapper       = $(".input_fields_wrap"); //Fields wrapper
  var add_button      = $(".add_field_button"); //Add button ID
  
  var x = 1; //initlal text box count
  $(add_button).click(function(e){ //on add input button click
    var weightage = $('input[name="topics[]"]').map(function(){
      return $(this).val();
    }).get(); 
    var total =0;
    for(var i=0; i<weightage.length; i++){
      total = parseInt(total)+parseInt(weightage[i]);
    }
    if(total>100){
        max_fields = weightage.length;
        toastr.error('Weightage should not exceed 100%','Failed',{timeOut:5000});
    }else{
      max_fields      = 10;
    }
    e.preventDefault();
    if(x < max_fields){ //max input box allowed
    var y = x++; //text box increment
    $(wrapper).append('<div><select class="form-control select2-single mb-2" name="subjects[]" id="subject'+y+'"><option>Select Subject</option><?php if($subjects!=""){ foreach ($subjects as $sub) { ?><option value="<?php echo $sub->sub_id; ?>"><?php echo $sub->sub_title." (".$sub->sub_code.")"; ?></option><?php } } ?></select><div class="input-group"><input type="text" name="topics[]" id="topics'+y+'"  placeholder="Weightage" class="form-control mb-1 weightage_class"><div class="input-group-append mr-b-4"><span class="input-group-text">%</span></div></div><a href="#" class="btn btn-outline-primary btn-xs mb-2 remove_field"><i class="simple-icon-minus"></i></a></div>'); //add input box
    }
  });
  
  $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
    e.preventDefault(); $(this).parent('div').remove(); x--;
  });
});
</script>
