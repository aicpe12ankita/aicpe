

      <div class="modal-dialog" role="document">
          <div class="modal-content">
            <form method="post" enctype="multipart/form-data" id="edit_course">
              <div class="modal-header custom-modal">
                  <h5 class="modal-title white">Edit Course</h5>
                  <button type="button" class="close white" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>

              <div class="modal-body">
                
                  <div class="form-group">
                      <label>Course Code</label>
                      <input type="text" class="form-control" name="crs_code" value="<?= isset($course) && $course!="" ? $course->crs_code : "" ?>">
                  </div>
                  <div class="form-group">
                      <label>Course Name</label>
                      <input type="text" class="form-control" name="crs_name">
                  </div>
                  <div class="form-group">
                      <label>Course Duration</label>
                      <input type="text" class="form-control" name="crs_duration">
                  </div>
                  <div class="form-group">
                      <label>Course Stream </label>
                      <select class="form-control select2-single" name="crs_stream">
                        <option>&nbsp;</option>
                        <?php if($streams!=""){
                          foreach ($streams as $stream) { ?>
                            <option value="<?php echo $stream->ct_id; ?>"><?php echo $stream->ct_title; ?></option>
                          <?php } } ?>
                      </select>
                  </div>
                  <div class="form-group">
                      <label>Course Award</label>
                     <textarea class="form-control" name="crs_awards" id="editor06"></textarea>
                  </div>
                  <div class="form-group">
                      <label>Eligibility</label>
                      <textarea class="form-control" name="crs_eligibility" id="editor05"></textarea>
                  </div>
                  <div class="form-group">
                    <label>Syllabus Pattern </label>
                    <div class="row">
                      <div class="col-lg-4 col-xs-4">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="semester" name="crs_pattern"
                                class="custom-control-input" value="0">
                            <label class="custom-control-label" for="semester"> Semester </label>
                        </div>
                      </div>
                      <div class="col-lg-4 col-xs-4">
                        <div class="custom-control custom-radio">
                          <input type="radio" id="yearly" name="crs_pattern"
                              class="custom-control-input" value="1">
                          <label class="custom-control-label" for="yearly">Yearly</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group mb-1" id="anni_type">
                    <label> No. of Semester</label> 
                      <input type="number" class="form-control" placeholder="" name="crs_no_of_semester">
                  </div>
                  <div class="form-group">
                      <label>No. Of Marksheeks </label>
                      <input type="number" class="form-control" name="crs_no_of_marksheets">
                  </div>
                  <div class="form-group">
                      <label>Demo Exams Count</label>
                      <input type="number" class="form-control" name="crs_demo_exam_count">
                  </div>
                  <div class="form-group">
                      <label>Exam Fees</label>
                      <input type="text" class="form-control" name="crs_exam_fees">
                  </div>
                  <div class="form-group">
                      <label>Marksheet Fees</label>
                      <input type="text" class="form-control" name="crs_marksheet_fees">
                  </div>
                  <div class="form-group">
                     <label>Course Syllabus</label>
                    <textarea name="crs_syllabus" id="editor04" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <label>Subjects and Weightage</label>
                      <div class="input_fields_wrap">
                        <div>
                         <select class="form-control select2-single mb-2" name="subjects[]" id="subject0">
                           <?php if($subjects!=""){
                            foreach ($subjects as $sub) { ?>
                              <option value="<?php echo $sub->sub_id; ?>">
                                <?php echo $sub->sub_title." (".$sub->sub_code.")"; ?>
                              </option>
                            <?php } } ?>
                         </select>
                          <input type="text" name="topics[]" placeholder="Weightage" class="form-control mb-1" id="topics0">
                        </div>
                        <button class="btn btn-xs btn-outline-primary add_field_button mb-2"><i class="simple-icon-plus"></i></button>
                    </div>
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
                      <label>Associates </label>
                      <select class="form-control select2-multiple" multiple name="crs_associates[]">
                        <option>&nbsp;</option>
                        <?php if($streams!=""){
                          foreach ($streams as $stream) { ?>
                            <option value="<?php echo $stream->ct_id; ?>"><?php echo $stream->ct_title; ?></option>
                          <?php } } ?>
                      </select>
                  </div>
                  <div class="form-group">
                      <label>Institutes </label>
                      <select class="form-control select2-multiple" multiple name="crs_publish_for[]">
                        <option>&nbsp;</option>
                        <?php if($streams!=""){
                          foreach ($streams as $stream) { ?>
                            <option value="<?php echo $stream->ct_id; ?>"><?php echo $stream->ct_title; ?></option>
                          <?php } } ?>
                      </select>
                  </div>
                  <div class="form-group">
                    <label>Publish Date</label>
                    <input type="text" class="form-control datepicker" name="crs_publish_date">
                  </div>
                  <div class="form-group">
                    <label>Status </label>
                    <div class="row">
                      <div class="col-lg-4 col-xs-4">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="Active" name="crs_status"
                                class="custom-control-input" value="0">
                            <label class="custom-control-label" for="Active"> Active </label>
                        </div>
                      </div>
                      <div class="col-lg-4 col-xs-4">
                        <div class="custom-control custom-radio">
                          <input type="radio" id="Inactive" name="crs_status"
                              class="custom-control-input" value="1">
                          <label class="custom-control-label" for="Inactive">Inactive</label>
                        </div>
                      </div>
                      
                    </div>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Update</button>
                <button type="button" class="btn btn-outline-primary"
                      data-dismiss="modal">Cancel</button>
              </div>
            </form>
          </div>
      </div>
<script type="text/javascript">
  $(document).ready(function(){
        $('#edit_course').on('submit',function(e){
      e.preventDefault();
      var formdata = new FormData(this);
        $.ajax({

          url: base+'add-aicpe-courses',
          type:'post',
          data:formdata,
          processData: false,
          contentType: false,
          dataType: 'json',
          success: function(response){
                  if(response==true){
                    toastr.success('Course has been updated successfully','Success',{timeOut:5000});
                    $( '#edit_course' ).each(function(){
                        this.reset();
                    });
                   page_update();
                  }else{
                    toastr.error('Please try again later','Failed',{timeOut:5000});
                  }
              }
        });

  });
  });
</script>

<script type="text/javascript">
  $(document).ready(function() {
  var max_fields      = 10; //maximum input boxes allowed
  var wrapper       = $(".input_fields_wrap"); //Fields wrapper
  var add_button      = $(".add_field_button"); //Add button ID
  
  var x = 1; //initlal text box count
  $(add_button).click(function(e){ //on add input button click
    e.preventDefault();
    if(x < max_fields){ //max input box allowed
      var y = x++; //text box increment
      $(wrapper).append('<div><select class="form-control select2-single mb-2" name="subjects[]" id="subject'+y+'"><?php if($subjects!=""){ foreach ($subjects as $sub) { ?><option value="<?php echo $sub->sub_id; ?>"><?php echo $sub->sub_title." (".$sub->sub_code.")"; ?></option><?php } } ?></select><input type="text" name="topics[]" id="topics'+y+'"  placeholder="Weightage" class="form-control mb-1"><a href="#" class="btn btn-outline-primary btn-xs mb-2 remove_field"><i class="simple-icon-minus"></i></a></div>'); //add input box
    }
  });
  
  $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
    e.preventDefault(); $(this).parent('div').remove(); x--;
  })
});
</script>

<script type="text/javascript">
  ClassicEditor.create(document.querySelector("#editor04")).catch(function (error) { console.log(error); });
  ClassicEditor.create(document.querySelector("#editor05")).catch(function (error) { console.log(error); });
  ClassicEditor.create(document.querySelector("#editor06")).catch(function (error) { console.log(error); });
</script>
<script type="text/javascript">
  $("input.datepicker").datepicker({
        autoclose: true,
        rtl: isRtl,
        templates: {
          leftArrow: '<i class="simple-icon-arrow-left"></i>',
          rightArrow: '<i class="simple-icon-arrow-right"></i>'
        }
      });
</script>
