<div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header custom-modal">
                  <h5 class="modal-title white"><?= isset($id) && $id!="" ? 'Edit Marketing Material' : 'Add Marketing Material' ?> </h5>
                  <button type="button" class="close white" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                <?= isset($id) && $id!=='' ? '<form id="add_mark_img" method="post" enctype="multipart/form-data" onsubmit="return false;">' : '<form id="edit_mark_img" method="post" enctype="multipart/form-data" onsubmit="return false;">' ?>
                  <div class="form-group">
                    <label>Title<span class="mandetory">*</span></label>
                    <input type="text" class="form-control" name="title" value="<?= isset($id) && $id!="" ? $data->mm_title : '' ?>" />
                  </div>
                  <div class="form-group input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile02" name="image">
                        <label class="custom-file-label" for="inputGroupFile02">Upload File</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Status </label>
                    <div class="row">
                      <div class="col-lg-4 col-xs-4">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="Active" name="status"
                                class="custom-control-input" value="0" <?php if(isset($id) && $id!=""){ if($data->mm_status==0){ echo "checked"; }} ?>>
                            <label class="custom-control-label" for="Active"> Active </label>
                        </div>
                      </div>
                      <div class="col-lg-4 col-xs-4">
                        <div class="custom-control custom-radio">
                          <input type="radio" id="Inactive" name="status"
                              class="custom-control-input" value="1" <?php if(isset($id) && $id!=""){ if($data->mm_status==1){ echo "checked"; }} ?>>
                          <label class="custom-control-label" for="Inactive">Inactive</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <input type="hidden" name="mm_id" value="<?= isset($data) && $data!="" ? $data->mm_id  : "" ?>">
                  <?= isset($id) && $id!="" ? '<button type="submit" class="btn btn-primary">Update</button>' : '<button type="submit" class="btn btn-primary">Submit</button>' ?>
                    
                    <button type="button" class="btn btn-outline-primary"
                      data-dismiss="modal">Cancel</button>
                  </form>
              </div>
              <div class="modal-footer">
                
                  
              </div>
          </div>
      </div>

      <script type="text/javascript">
  $(document).ready(function(){
    
    $('#add_mark_img').validate({
        rules: {
            "title": {
                required: true
            },
            "image": {
                required: true
            }
          },
        messages: {
          "title":{
            required: 'Title is required!'
          },
          "image":{
            required: 'Image is required!'
          }
        }
    });
  
  $('#edit_mark_img').validate({
        rules: {
            "title": {
                required: true
            },
            "image": {
                required: true
            }
          },
        messages: {
          "title":{
            required: 'Title is required!'
          },
          "image":{
            required: 'Image is required!'
          }
        }
    });

  $('#add_mark_img').on('submit',function(){
        
        var formdata = new FormData(this);
        $.ajax({
          url: '<?php echo base_url(); ?>add-marketing-material',
          type:'post',
          data:formdata,
          dataType : 'json',
          processData: false,
          contentType: false,
          success:function(response){ 

            $('#addAssociate').modal('hide');
            if(response==true){
                toastr.success('Marketing material is added successfully','Success',{timeOut:5000});
                   
                    $("#add_mark_img")[0].reset();
                    page_update();
                }else{
                  toastr.error('Please try again later','Failed',{timeOut:5000});
                }
            
          }   
        });
        
  });

  $('#edit_mark_img').on('submit',function(){
        
        var formdata = new FormData(this);
        $.ajax({
          url: '<?php echo base_url(); ?>add-marketing-material',
          type:'post',
          data:formdata,
          dataType : 'json',
          processData: false,
          contentType: false,
          success:function(response)
          { 
            $('#addAssociate').modal('hide');
           if(response==true){
                toastr.success('Marketing material has been updated successfully','Success',{timeOut:5000});
                $("#edit_mark_img")[0].reset();
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
  $(".custom-file-input").on("change", function() {
    //var data = $('#stud_photo').files[0];
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>