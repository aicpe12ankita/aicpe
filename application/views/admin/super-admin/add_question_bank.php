 
 <div class="modal-dialog" role="document">
          <div class="modal-content">
            
              <div class="modal-header custom-modal">
                  <h5 class="modal-title white"><?= isset($id) && $id!='' ? 'Edit Quation':'Add Question' ?></h5>
                  <button type="button" class="close white" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>

              <div class="modal-body">
                <?= isset($id) && $id!='' ? '<form method="post" enctype="multipart/form-data" id="edit_question" onsubmit="return false;">' : '<form method="post" enctype="multipart/form-data" id="add_question" onsubmit="return false;">' ?>
                
                 
                  <div class="form-group">
                      <label>Subject</label>
                      <select class="form-control select2-single" name="subject">
                        <option>&nbsp;</option>
                        <?php if($subjects!=""){
                          foreach ($subjects as $subject) { ?>
                            <option value="<?php echo $subject->sub_id; ?>" <?php if(isset($id) && $id!=''){ if($data->qa_sub_id==$subject->sub_id){ echo "selected"; }} ?>><?php echo $subject->sub_title; ?></option>
                          <?php } } ?>
                      </select>
                  </div>
                  <div class="form-group">
                      <label>Question</label>
                      <input type="text" class="form-control" name="question" value="<?= isset($id) && $id!='' ? $data->qa_question : '' ?>">
                  </div>
                  <div class="form-group">
                      <label>Question Image</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile02" name="que_img">
                            <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                        </div>
                    </div>
                  </div>
                  <div class="form-group">
                      <label>Option 1</label>
                      <input type="text" class="form-control" name="option_1" value="<?= isset($id) && $id!='' ? $data->qa_option_1 : '' ?>">
                  </div>
                  <div class="form-group">
                      <label>Option 1 Image</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile01" name="option_1_img">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
                  </div>
                  <div class="form-group">
                      <label>Option 2</label>
                      <input type="text" class="form-control" name="option_2" value="<?= isset($id) && $id!='' ? $data->qa_option_2 : '' ?>">
                  </div>
                  <div class="form-group">
                      <label>Option 2 Image</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile02" name="option_2_img">
                            <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                        </div>
                    </div>
                  </div>
                  <div class="form-group">
                      <label>Option 3</label>
                      <input type="text" class="form-control" name="option_3" value="<?= isset($id) && $id!='' ? $data->qa_option_3 : '' ?>">
                  </div>
                  <div class="form-group">
                      <label>Option 3 Image</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile03" name="option_3_img">
                            <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
                        </div>
                    </div>
                  </div>
                  <div class="form-group">
                      <label>Option 4</label>
                      <input type="text" class="form-control" name="option_4" value="<?= isset($id) && $id!='' ? $data->qa_option_4 : '' ?>">
                  </div>
                  <div class="form-group">
                      <label>Option 4 Image</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile04" name="option_4_img">
                            <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                        </div>
                    </div>
                  </div>
                   <div class="form-group">
                      <label>Correct Option</label>
                      <select class="form-control select2-single" name="correct_option">
                        <option>&nbsp;</option>
                        <option value="1" <?php if(isset($data->qa_correct_option) && $data->qa_correct_option==1){ echo 'selected'; } ?>>1</option>
                        <option value="2" <?php if(isset($data->qa_correct_option) && $data->qa_correct_option==2){ echo 'selected'; } ?>>2</option>
                        <option value="3" <?php if(isset($data->qa_correct_option) && $data->qa_correct_option==3){ echo 'selected'; } ?>>3</option>
                        <option value="4" <?php if(isset($data->qa_correct_option) && $data->qa_correct_option==4){ echo 'selected'; } ?>>4</option>
                      </select>
                  </div>
                  
                  <input type="hidden" name="id" value="<?= isset($data) && $data!="" ? $data->qa_id : "" ?>">
                  <?= isset($id) && $id!="" ? '<button type="submit" class="btn btn-primary">Update</button>' : '<button type="submit" class="btn btn-primary">Submit</button>' ?>
                  
                <button type="button" class="btn btn-outline-primary"
                      data-dismiss="modal">Cancel</button>
              
                </form>
              </div>
              <div class="modal-footer">
                
          </div>
      </div>
<!-- <script type="text/javascript">
  $(document).ready(function(){
    $('#add_assciate_course').validate({
      rules:{
        "subjects":{
          required:true
        }
      },
      messages: {
        "subjects":{
          required:"Course Code is required!"
        }
      }
    });
  });
</script> -->
<script type="text/javascript">
  $(document).ready(function(){
    $('#add_question').on('submit',function(){
        
        var formdata = new FormData(this);

        $.ajax({
          url: '<?php echo base_url(); ?>add-question-bank',
          type:'post',
          dataType : 'json',
          data:formdata,
          processData: false,
          contentType: false,
          success:function(data){ 

            $('#addAssociateCourse').modal('hide');
            toastr[data.type](data.msg);
            $("#add_question")[0].reset();
            page_update();
          }   
        });
    });

    $('#edit_question').on('submit',function(){
        
        var formdata = new FormData(this);

        $.ajax({
          url: '<?php echo base_url(); ?>edit-question-bank',
          type:'post',
          dataType : 'json',
          data:formdata,
          processData: false,
          contentType: false,
          success:function(data){ 

            $('#addAssociateCourse').modal('hide');
            toastr[data.type](data.msg);
            $("#edit_question")[0].reset();
            page_update();
          }   
        });
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
    ClassicEditor.create(document.querySelector("#editor04")).catch(function (error) { console.log(error); });
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
