                    <div class="card">
                         <div class="card-header progress-bar pt-20">
                            <h5 class="text-center"><?= isset($type) && $type !=="" ? "Edit Photo ID Type" : "Add Photo ID Type" ?></h5>
                        </div>
                        <div class="card-body">
                            <?= isset($type) && $type !=="" ? '<form id="edit_photo_id_type" method="post">' : '<form id="add_photo_id_type" method="post">' ?>
                              <div class="form-group">
                                <label>Photo ID Type</label>
                                <input type="text" class="form-control" name="title" value="<?= isset($photo_id_type) && $photo_id_type!="" ?  $photo_id_type->ph_title : "" ?>" required>
                              </div>
                               <input type="hidden" name="ph_id" value="<?= isset($photo_id_type) && $photo_id_type!="" ?  $photo_id_type->ph_id : "" ?>">
                              <?= isset($type) && $type !=="" ? '<button type="submit" class="btn btn-primary" id="" name="update" value="update">Update</button>' : '<button type="submit" class="btn btn-primary" id="" name="submit" value="submit">Submit</button>' ?> 
                            </form>
                        </div>
                    </div>

<script type="text/javascript">
  $(document).ready(function(){
     $('#edit_photo_id_type').validate({
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
      submitHandler: function(form) {
        // $('form').on('submit', function(){ 
            //e.preventDefault();
             var formdata = new FormData(form);
            $.ajax({
                    url: base+'add-photo-id-type',
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
                          toastr.success('Photo ID Type has been updated successfully','Success',{timeOut:5000});
                           window.location.reload();
                        }else{
                          toastr.error('Please try again later','Failed',{timeOut:5000});
                        }
                    }
            });
         // });
        // return false;
      }
    });
    
  });
</script>