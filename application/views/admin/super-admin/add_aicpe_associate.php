<div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header custom-modal">
                  <h5 class="modal-title white"><?= isset($type) && $type=='edit' ? 'Edit Associate' : 'Add Associate' ?></h5>
                  <button type="button" class="close white" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                <?= isset($type) && $type=='edit' ? '<form id="edit_associate" method="post" enctype="multipart/form-data" onsubmit="return false;">' : '<form id="add_associate" method="post" enctype="multipart/form-data" onsubmit="return false;">' ?>
                  <div class="form-group">
                      <label>Associate Code</label>
                      <input type="text" class="form-control" name="asso_code" value="<?= isset($type) && $type=='edit' && $id!="" ? $data->asso_code : "" ?>" required>
                  </div>
                  <div class="form-group">
                      <label>Associate Name</label>
                      <input type="text" class="form-control" name="asso_name" value="<?= isset($type) && $type=='edit' && $id!="" ? $data->asso_name : "" ?>" required>
                  </div>
                  <div class="form-group">
                      <label>Associate Logo</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile02" name="asso_logo">
                            <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                        </div> 
                    </div>
                  </div>
                  <?php if(isset($data) && $data!=""){
                  if($data->asso_logo!=""){ ?>
                    <div class="img_preview mb-4">
                      <img class="img-thumbnail border-0" src="<?php echo base_url(); ?>uploads/associates/<?php echo $data->asso_logo; ?>" />
                    </div>
                  <?php } } ?>
                  <div class="form-group">
                      <label>Affiliation </label>
                      <textarea id="ckEditorClassic" class="form-control" name="asso_affiliation"><?= isset($type) && $type=='edit' && $id!="" ? $data->asso_affiliation : "" ?></textarea>
                  </div>
                  <input type="hidden" name="asso_id" value="<?= isset($type) && $type =="edit" ? "$data->asso_id" : "" ?>">
                  <?= isset($type) && $type=='edit' ? '<button type="submit" name="update" value="update" class="btn btn-primary">Update</button>' : '<button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>' ?>
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
    
    $('#add_associate').validate({
        rules: {
            "asso_code": {
                required: true
            },
            "asso_name": {
                required: true
            }
          },
        messages: {
          "asso_code":{
            required: 'Associate code is required!'
          },
          "asso_name":{
            required: 'Associate name is required!'
          }
        },
      submitHandler: function(form){
       var formdata = new FormData(form);
        $.ajax({
          url: '<?php echo base_url(); ?>add-aicpe-associates',
          type:'post',
          data:formdata,
          dataType : 'json',
          processData: false,
          contentType: false,
          success:function(data){ 

            $('#addAssociate').modal('hide');
            toastr[data.type](data.msg);
            $("#add_associate")[0].reset();
            page_update();
          }   
        });
        
  
      }
    });
});
  
$(document).ready(function(){  
  $('#edit_associate').validate({
        rules: {
            "asso_code": {
                required: true
            },
            "asso_name": {
                required: true
            }
          },
        messages: {
          "asso_code":{
            required: 'Associate code is required!'
          },
          "asso_name":{
            required: 'Associate name is required!'
          }
        },
        submitHandler: function(form){
         
        var formdata = new FormData(form);
        $.ajax({
          url: '<?php echo base_url(); ?>add-aicpe-associates',
          type:'post',
          data:formdata,
          dataType : 'json',
          processData: false,
          contentType: false,
          success:function(data)
          { 
            $('#addAssociate').modal('hide');
            toastr[data.type](data.msg);
            $("#edit_associate")[0].reset();
            page_update();
          }   
        });
        
        
   
        }
    });

  

 
});
</script>
