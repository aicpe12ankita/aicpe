<div class="card">
     <div class="card-header progress-bar pt-20">
        <h5 class="text-center"><?= isset($type) && $type !=="" ? "Edit Institution Remark" : "Add Institution Remark" ?></h5>
    </div>
    <div class="card-body">
        <?= isset($type) && $type =="edit" ? '<form id="update_institution_remarks" method="post" onsubmit="return false;">' : '<form id="add_institution_remarks" method="post" onsubmit="return false;">' ?>
          <div class="form-group">
            <label>Institution Name</label>
             <select class="form-control select2-single" name="inst" required>
                <option> </option>
               <?php if($institutions!=""){
                foreach ($institutions as $row) { ?>
                 <option value="<?php echo $row->id; ?>"  <?php if(isset($type)){ if($row->id == $remarks->ir_inst){ echo "selected "; }} ?>><?php echo $row->inst_name; ?></option>
                <?php } } ?>
              </select>
          </div>
          <div class="form-group">
            <label>Remark</label>
            <textarea class="form-control" cols="2" name="description" required> <?= isset($remarks) && $remarks!="" ?  $remarks->ir_description : "" ?></textarea>
          </div>
          <input type="hidden" name="ir_id" value="<?= isset($remarks) && $remarks!="" ?  $remarks->ir_id : "" ?>">
          <?= isset($type) && $type !=="" ? '<button type="submit" class="btn btn-primary" name="update" value="update">Update</button>' : '<button type="submit" class="btn btn-primary"  name="submit" value="submit">Submit</button>' ?> 
        </form>
    </div>
</div>

 <script type="text/javascript">
  $(document).ready(function(){ 
    $('#update_institution_remarks').validate({
      rules:{
        "inst":{
          required:true
        },
        "description":{
            required:true,
            minlength:5
        }
      },
      messages:{
        "inst":{
          required:'Please select Institution!'
        },
        "description":{
          required:'Please enter description!'
        }
      },

      submitHandler:function(form){
          var formdata = new FormData(form);
          $.ajax({
                  url: '<?php echo base_url(); ?>add-institutions-remarks',
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
                        toastr.success('Institutions remarks has been updated successfully','Success',{timeOut:5000});
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