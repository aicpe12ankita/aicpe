                    <div class="card">
                         <div class="card-header progress-bar pt-20">
                            <h5 class="text-center"><?= isset($type) && $type =="edit" ? "Edit Subject Level" : "Add Subject Level" ?></h5>
                        </div>
                        <div class="card-body">
                            <?= isset($type) && $type =="edit" ? '<form id="edit_subject_level" method="post" onsubmit="return false;">' : '<form id="add_subject_level" method="post" onsubmit="return false;">' ?>
                              <div class="form-group">
                                <label>Subject Level</label>
                                <input type="text" class="form-control" name="title" value="<?= isset($subject_level) && $subject_level!="" ?  $subject_level->sl_title : "" ?>" required>
                              </div>
                               <input type="hidden" name="sl_id" value="<?= isset($subject_level) && $subject_level!="" ?  $subject_level->sl_id : "" ?>">
                              <?= isset($type) && $type !=="" ? '<button type="submit" class="btn btn-primary" id="" name="update" value="update">Update</button>' : '<button type="submit" class="btn btn-primary" id="" name="submit" value="submit">Submit</button>' ?> 
                            </form>
                        </div>
                    </div>


<script type="text/javascript">
 $(document).ready(function(){
     $('#edit_subject_level').validate({
     rules:{
        "title":{
          required:true
        }
      },
      messages:{
        "title":{
          required:'Please enter subject level!'
        }
      },
      submitHandler:function(form){
        var formdata = new FormData(form);
       
        $.ajax({
                  url: '<?php echo base_url(); ?>add-subject-level',
                  type:'post',
                  data: formdata,
                  processData: false,
                  contentType: false,
                  dataType: 'json',
                  beforeSend: function()
                  {
                    $(".main-loader").show();
                  },      
                  complete:function()
                  {
                    $(".main-loader").hide();
                  },
                  success: function(response){
                      if(response==true){
                        toastr.success('Subject level has been updated successfully','Success',{timeOut:5000});
                         window.location.reload();
                      }else{
                        toastr.error('Please try again later','Failed',{timeOut:5000});
                      }
                  }
          });
      }
    });
  });
</script>