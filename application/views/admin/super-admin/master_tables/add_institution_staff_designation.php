<div class="card">

     <div class="card-header progress-bar pt-20">
        <h5 class="text-center"><?= isset($type) && $type !=="" ? "Edit Designation" : "Add Designation" ?></h5>
    </div>
    <div class="card-body">
        <?= isset($type) && $type !=="" ? '<form id="edit_admDesignation" method="post">' : '<form id="add_admDesignation" method="post">' ?>
          <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="title" value="<?= isset($desg) && $desg!="" ?  $desg->isd_title : "" ?>" required>
          </div>
          <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" cols="2" name="description"> <?= isset($desg) && $desg!="" ?  $desg->isd_description : "" ?></textarea>
          </div>
          <input type="hidden" name="isd_id" value="<?= isset($desg) && $desg!="" ?  $desg->isd_id : "" ?>">
          <?= isset($type) && $type !=="" ? '<button type="submit" class="btn btn-primary" id="" name="update" value="update">Update</button>' : '<button type="submit" class="btn btn-primary" id="" name="submit" value="submit">Submit</button>' ?> 
        </form>
    </div>
</div>
 
<script type="text/javascript">
  $(document).ready(function(){
    $('#edit_admDesignation').validate({
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
       // $('#add_admDesignation').on('submit', function(e){ 
         // e.preventDefault();
           var formdata = new FormData(form);
          $.ajax({
                  url: base+'add-institute-staff-designation',
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
                        toastr.success('Designation has been updated successfully','Success',{timeOut:5000});
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