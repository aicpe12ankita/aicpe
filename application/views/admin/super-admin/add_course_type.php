                    <div class="card">
                         <div class="card-header progress-bar pt-20">
                            <h5 class="text-center"><?= isset($type) && $type =="edit" ? "Edit Course Stream" : "Add Course Stream" ?></h5>
                        </div>
                        <div class="card-body">
                            <?= isset($type) && $type =="edit" ? '<form id="edit_course_type" method="post">' : '<form id="add_course_type" method="post">' ?>
                              <div class="form-group">
                                <label>Course Stream</label>
                                <input type="text" class="form-control" name="title" value="<?= isset($course_type) && $course_type!="" ?  $course_type->ct_title : "" ?>" required>
                              </div>
                               <input type="hidden" name="ct_id" value="<?= isset($course_type) && $course_type!="" ?  $course_type->ct_id : "" ?>">
                              <?= isset($type) && $type =="edit" ? '<button type="submit" class="btn btn-primary" id="" name="update" value="update">Update</button>' : '<button type="submit" class="btn btn-primary" id="" name="submit" value="submit">Submit</button>' ?> 
                            </form>
                        </div>
                    </div>

<script type="text/javascript">

  $(document).ready(function(){
    var base= $('#base_url').val();

    $('#edit_course_type').validate({
      rules:{
        "title":{
          required:true
        }
      },
      messages:{
        "title":{
          required:'Please enter title!'
        }
      },
      submitHandler: function(form){
         
        var formdata = new FormData(form);
        $.ajax({
              url: base+'add-course-stream',
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
                    toastr.success('Course stream has been updated successfully','Success',{timeOut:5000});
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