                    <div class="card">
                         <div class="card-header progress-bar pt-20">
                            <h5 class="text-center"><?= isset($type) && $type !=="" ? "Edit Qualification Type" : "Add Qualification Type" ?></h5>
                        </div>
                        <div class="card-body">
                            <?= isset($type) && $type !=="" ? '<form id="edit_qualification" method="post">' : '<form id="add_qualification" method="post">' ?>
                              <div class="form-group">
                                <label>Qualification Type</label>
                                <input type="text" class="form-control" name="title" value="<?= isset($qualification) && $qualification!="" ?  $qualification->q_title : "" ?>" required>
                              </div>
                               <input type="hidden" name="q_id" value="<?= isset($qualification) && $qualification!="" ?  $qualification->q_id : "" ?>">
                              <?= isset($type) && $type !=="" ? '<button type="submit" class="btn btn-primary" id="" name="update" value="update">Update</button>' : '<button type="submit" class="btn btn-primary" id="" name="submit" value="submit">Submit</button>' ?> 
                            </form>
                        </div>
                    </div>
          <script type="text/javascript">
  $(document).ready(function(){
     $('#edit_qualification').validate({
      rules:{
        "title":{
          required:true
        }
      },
      messages:{
        "title":{
          required:'Please enter qualification type!'
        }
      },
      submitHandler: function(form) {
         // $('#add_qualification').on('submit', function(e){ 
         // e.preventDefault();
           var formdata = new FormData(form);
          $.ajax({
                  url: base+'add-qualification',
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
                        toastr.success('Qualification has been updated successfully','Success',{timeOut:5000});
                        window.location.reload();
                      }else{
                        toastr.error('Please try again later','Failed',{timeOut:5000});
                      }
                  }
          });
        //});
      }
    });
    
  });
</script>