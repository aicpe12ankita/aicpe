     <div class="card">
                         <div class="card-header progress-bar pt-20">
                            <h5 class="text-center"><?= isset($type) && $type !=="" ? "Edit Post" : "Add Post" ?></h5></h5>
                        </div>
                        <div class="card-body">
                            <?= isset($type) && $type !=="" ? '<form id="edit_world_content" method="post" enctype="multipart/form-data">' : '<form id="add_world_content" method="post" enctype="multipart/form-data">' ?>
                              <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title" value="<?= isset($aicpe_world) && $aicpe_world!="" ?  $aicpe_world->w_title : "" ?>" required>
                              </div>
                              <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" id="editor" name="description"><?= isset($aicpe_world) && $aicpe_world!="" ?  $aicpe_world->w_description : "" ?></textarea>
                              </div>
                              <div class="form-group">
                                <label>Image</label>
                                <div class="input-group">
                                  <div class="custom-file">
                                      <input type="file" class="custom-file-input" id="inputGroupFile02" name="flag_image">
                                      <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                  </div>
                                </div>
                              </div>
                                <input type="hidden" name="w_id" value="<?= isset($aicpe_world) && $aicpe_world!="" ?  $aicpe_world->w_id : "" ?>">

                              <?php if(isset($aicpe_world) && $aicpe_world!=""){
                                if($aicpe_world->w_image!=""){ ?>
                                  <div class="country_img mb-2">
                                    <img src="<?php echo base_url();?>uploads/aicpe_world/<?php echo $aicpe_world->w_image; ?>" class="img-thumbnail border-0 ">
                                  </div> 
                                <?php }
                              } ?>
                              <?= isset($type) && $type !=="" ? '<button type="submit" class="btn btn-primary" id="" name="update" value="update">Update</button>' : '<button type="submit" class="btn btn-primary" id="" name="submit" value="submit">Submit</button>' ?> 
                            </form>
                        </div>
                    </div>


<script type="text/javascript">
  $(document).ready(function(){
     $('#edit_world_content').validate({
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
        //$('#add_world_content').on('submit', function(e){ 
      //e.preventDefault();
       var formdata = new FormData(form);
      $.ajax({
              url: base+'add-aicpe-world-content',
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
                    toastr.success('Content has been updated successfully','Success',{timeOut:5000});
                   
                     window.location.reload();
                  }else{
                    toastr.error('Please try again later','Failed',{timeOut:5000});
                  }
              }
      });
   // });
      }
    });
    
  });
</script>
