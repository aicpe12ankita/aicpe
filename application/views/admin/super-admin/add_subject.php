<script type="text/javascript">
  ClassicEditor.create(document.querySelector("#editor07")).catch(function (error) { console.log(error); });
  
</script>
<div class="modal-dialog custom-modal-width" role="document">
          <div class="modal-content">

            <?= isset($type) && $type =="edit" ? '<form id="edit_subject" method="post" enctype="multipart/form-data" onsubmit="return false;">' : '<form id="add_subject" method="post" enctype="multipart/form-data"  onsubmit="return false;">' ?>
              <div class="modal-header custom-modal">
                  <h5 class="modal-title white"><?= isset($type) && $type =="edit" ? "Edit Subject" : "Add Subject" ?> </h5>
                  <button type="button" class="close white" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                <div class="form-row">
                    <div class="col-md-6">
                      <div class="form-group">
                          <label>Subject Code</label>
                          <input type="text" class="form-control" name="sub_code" value="<?= isset($subjects) && $subjects!="" ? $subjects->sub_code : "" ?>" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <label>Subject Name</label>
                          <input type="text" class="form-control" name="sub_title" value="<?= isset($subjects) && $subjects!="" ? $subjects->sub_title : "" ?>" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-6">
                      <div class="form-group">
                          <label>Eligibility</label>
                         
                            <textarea class="form-control" cols="2" id="editor07" name="content"><?= isset($subjects) && $subjects!="" ? $subjects->sub_eligibility : "" ?></textarea>
                          
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <label>Level</label>
                          <select class="form-control select2-single" name="sub_level" required>
                            <option></option>
                            <?php if($subject_levels!=""){
                              foreach ($subject_levels as $levels) { ?>
                              <option value="<?php echo $levels->sl_id; ?>" <?php if($subjects!=""){ if($subjects->sub_level==$levels->sl_id){ echo "selected"; }} ?>><?php echo $levels->sl_title; ?></option>
                              <?php } } ?>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>Prepared by</label>
                          <input type="text" class="form-control" name="sub_preparedBy" value="<?= isset($subjects) && $subjects!="" ? $subjects->sub_preparedBy: "" ?>">
                      </div>
                      <div class="form-group">
                          <label>Description</label>
                          <textarea class="form-control" cols="2" name="sub_description"><?= isset($subjects) && $subjects!="" ? $subjects->sub_description : "" ?></textarea>
                      </div>
                      <div class="form-group">
                        <label>Upload Notes</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile02" name="sub_notes[]" multiple>
                                <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                            </div>
                        </div>
                      </div>
                      <div class="form-group">
                          <label>Notes Remarks</label>
                          <textarea class="form-control" cols="2" name="sub_notes_remarks"><?= isset($subjects) && $subjects!="" ? $subjects->sub_notes_remarks : "" ?></textarea>
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-row">
                    <div class="col-md-6">
                      <div class="form-group">
                          <label>Links</label>
                         <textarea class="form-control" cols="2" name="sub_links"><?= isset($subjects) && $subjects!="" ? $subjects->sub_links : "" ?></textarea>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <label>Links Remarks</label>
                          <textarea class="form-control" cols="2" name="sub_links_remarks"><?= isset($subjects) && $subjects!="" ? $subjects->sub_links_remarks : "" ?></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-6">
                      <div class="form-group">
                          <label>YouTube Links</label>
                         <textarea class="form-control" cols="2" name="sub_youtube_links"><?= isset($subjects) && $subjects!="" ? $subjects->sub_youtube_links : "" ?></textarea>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <label>YouTube Links Remarks</label>
                          <textarea class="form-control" cols="2" name="sub_youtube_links_remarks"><?= isset($subjects) && $subjects!="" ? $subjects->sub_youtube_links_remarks: "" ?></textarea>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="modal-footer">
                 <input type="hidden" name="sub_id" value="<?= isset($subjects) && $subjects!="" ?  $subjects->sub_id : "" ?>">
          <?= isset($type) && $type =="edit" ? '<button type="submit" class="btn btn-primary" id="" name="update" value="update">Update</button>' : '<button type="submit" class="btn btn-primary" id="" name="submit" value="submit">Submit</button>' ?> 
                <button type="button" class="btn btn-outline-primary"
                      data-dismiss="modal">Cancel</button>
              </div>
              </form>
            </div>
      </div>

<script type="text/javascript">
 
$(document).ready(function(){
  $('#add_subject').validate({
    rules:{
        "sub_code":{
          required:true
        },
        "sub_title":{
          required:true
        },
        "sub_level":{
          required:true
        }
    },
    messages:{
      "sub_code":{
          required:'Subject code is required!'
        },
        "sub_title":{
          required:"Subject title is required!"
        },
        "sub_level":{
          required:"Subject level is required!"
        }
    },
    submitHandler:function(form){
      var formdata = new FormData(form);
      $.ajax({
              url: '<?php echo base_url(); ?>add-subject',
              type:'post',
              data: formdata,
              processData: false,
              contentType: false,
              dataType: 'json',
              success: function(response){
                  if(response==true){
                    toastr.success('Subject has been added successfully','Success',{timeOut:5000});
                   $('#addEnquiry').modal('hide');
                   page_update();
                  }else{
                    toastr.error('Please try again later','Failed',{timeOut:5000});
                  }
              }
      });
    }
  });

});
</script>
<script type="text/javascript">
 
$(document).ready(function(){
  $('#edit_subject').validate({
    rules:{
        "sub_code":{
          required:true
        },
        "sub_title":{
          required:true
        },
        "sub_level":{
          required:true
        }
    },
    messages:{
      "sub_code":{
          required:'Subject code is required!'
        },
        "sub_title":{
          required:"Subject title is required!"
        },
        "sub_level":{
          required:"Subject level is required!"
        }
    },
    submitHandler:function(form){ 
      var formdata = new FormData(form);
      $.ajax({
              url: '<?php echo base_url(); ?>add-subject',
              type:'post',
              data: formdata,
              processData: false,
              contentType: false,
              dataType: 'json',
              success: function(response){
                  if(response==true){
                    toastr.success('Subject has been updated successfully','Success',{timeOut:5000});
                   $('#addEnquiry').modal('hide');
                   page_update();
                  }else{
                    toastr.error('Please try again later','Failed',{timeOut:5000});
                  }
              }
      });
    }
  });
});
  </script>