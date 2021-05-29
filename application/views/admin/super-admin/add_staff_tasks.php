<div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header custom-modal">
                  <h5 class="modal-title white"><?= isset($type) && $type=='edit' ? 'Edit Associate' : 'Add Associate' ?></h5>
                  <button type="button" class="close white" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                <?= isset($type) && $type=='edit' ? '<form id="edit_staff" method="post" enctype="multipart/form-data" onsubmit="return false;">' : '<form id="add_staff" method="post" enctype="multipart/form-data" onsubmit="return false;">' ?>
                  <div class="form-group">
                      <label>Staff</label>
                      <select class="form-control select2-single" name="admin_staff" required>
                        <option value="">&nbsp;</option>
                        <?php if($admin_staff!=""){
                          foreach($admin_staff as $staff){ ?>
                          <option value="<?php echo $staff->as_id; ?>" <?php if($tasks!=""){ if($staff->as_id==$tasks->st_staff_id){ echo "selected"; } } ?>><?php echo ucwords($staff->as_firstName." ".$staff->as_lastName); ?></option>  
                        <?php } } ?>
                      </select>
                  </div>
                  <div class="form-group">
                      <label>Institution Name</label>
                     <select class="form-control select2-single" name="institution_name" required>
                        <option value="">&nbsp;</option>
                        <?php if($institutions!=""){
                          foreach($institutions as $inst){ ?>
                          <option value="<?php echo $inst->id; ?>" <?php if($tasks!=""){ if($inst->id==$tasks->st_inst_id){ echo "selected"; } } ?>><?php echo ucwords($inst->inst_name); ?></option>  
                        <?php } } ?>
                      </select>
                  </div>
                   <div class="form-group">
                      <label>Task Title</label>
                      <input type="text" class="form-control" name="task_title" value="<?= isset($type) && $type=='edit' && $id!="" ? $tasks->st_task : "" ?>" required>
                  </div>
                  <div class="form-group">
                      <label>Description </label>
                      <textarea id="ckEditorClassic" class="form-control" name="task_description"><?= isset($type) && $type=='edit' && $id!="" ? $tasks->st_description : "" ?></textarea>
                  </div>
                  <div class="form-group">
                    <label>Status </label>
                    <div class="row">
                      <div class="col-lg-4 col-xs-4">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="Active" name="status"
                                class="custom-control-input" value="0" <?php if(isset($id) && $id!=""){ if($tasks->st_status==0){ echo "checked"; }} ?>>
                            <label class="custom-control-label" for="Active"> Pending </label>
                        </div>
                      </div>
                      <div class="col-lg-4 col-xs-4">
                        <div class="custom-control custom-radio">
                          <input type="radio" id="Inactive" name="status"
                              class="custom-control-input" value="1" <?php if(isset($id) && $id!=""){ if($tasks->st_status==1){ echo "checked"; }} ?>>
                          <label class="custom-control-label" for="Inactive">Completed</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <input type="hidden" name="id" value="<?= isset($type) && $type =="edit" ? "$tasks->st_id" : "" ?>">
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
    
    $('#add_staff').validate({
        rules: {
            "admin_staff": {
                required: true
            },
            "institution_name": {
                required: true
            },
            "task_title":{
              required:true
            },
            "status":{
              required:true
            }
          },
        messages: {
          "admin_staff": {
            required: 'Please select Staff!'
          },
          "institution_name": {
            required: 'Please select Institution!'
          },
          "task_title": {
              required: 'Please enter task Title!'
          },
          "status":{
              required: "Please select status!"
            }
        },
      submitHandler: function(form){
      var formdata = new FormData(form);
        $.ajax({
          url: '<?php echo base_url(); ?>add-staff-tasks',
          type:'post',
          data:formdata,
          dataType : 'json',
          processData: false,
          contentType: false,
          success:function(data){ 
             if(data==true){
                    toastr.success('Task has been added successfully','Success',{timeOut:5000});
                  }else{
                    toastr.error('Please try again later','Failed',{timeOut:5000});
                  }
            $('#addAssociate').modal('hide');
            
            $("#add_staff")[0].reset();
            page_update();
          }   
        });
        
  
      }
    });
});
  
$(document).ready(function(){  
  $('#edit_staff').validate({
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
          url: '<?php echo base_url(); ?>add-staff-tasks',
          type:'post',
          data:formdata,
          dataType : 'json',
          processData: false,
          contentType: false,
          success:function(data)
          { 
           if(data==true){
                    toastr.success('Task has been added successfully','Success',{timeOut:5000});
                  }else{
                    toastr.error('Please try again later','Failed',{timeOut:5000});
                  }
            $('#addAssociate').modal('hide');
            
            $("#edit_staff")[0].reset();
            page_update();
            
          }   
        });
        
        
   
        }
    });
});
</script>
