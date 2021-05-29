
 <div class="card">
                         <div class="card-header progress-bar pt-20">
                            <h5 class="text-center"> <?= isset($type) && $type !=="" ? "Edit State" : "Add State" ?></h5>
                        </div>
                        <div class="card-body">
                            <?= isset($type) && $type !=="" ? '<form id="edit_state" method="post" enctype="multipart/form-data" class="tooltip-label-right" novalidate >' : '<form id="add_new_state" method="post" class="tooltip-label-right" enctype="multipart/form-data" novalidate >' ?>
                              <div class="form-group position-relative error-l-50">
                                <label>Country</label>
                                <select class="form-control select2-single" name="country_name" id="country_name"  <?= isset($type) && $type !=="" ? "disabled" : "" ?> required>
                                  <option></option>
                                 <?php if($countries!=""){
                                  foreach ($countries as $row) { ?>
                                   <option value="<?php echo $row->c_id; ?>"  <?php if(isset($type)){ if($row->c_id == $states->s_country_id){ echo "selected"; }} ?>><?php echo $row->c_name; ?></option>
                                  <?php } } ?>
                                </select>
                              </div>
                              <div class="form-group position-relative error-l-50">
                                <label>State Name</label>
                                <input type="text" class="form-control" name="state_name" id="state_name" value="<?= isset($states) && $states!="" ?  $states->s_name : "" ?>" required>
                              </div>
                              <input type="hidden" name="sid" value="<?= isset($states) && $states!="" ?  $states->s_id : "" ?>">

                                 <?= isset($type) && $type !=="" ? '<button type="submit" class="btn btn-primary" id="" name="update" value="update">Update</button>' : '<button type="submit" class="btn btn-primary" id="" name="submit" value="submit">Submit</button>' ?>  
                            </form>
                        </div>
                    </div>


<script type="text/javascript">
  $(document).ready(function(){ 
    $('#edit_state').validate({ 
      rules: {
          "country_name":{
            required: true
          },
          "state_name":{
            required: true
          }
      },
      message:{
        "country_name":{
            required: "Country is required!"
          },
          "state_name":{
            required: "State is required!"
          }
      },
      submitHandler: function(form) { // for demo
            
      var formdata = new FormData(form);
      $.ajax({
              url: '<?php echo base_url(); ?>add-state',
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
                    toastr.success('State has been updated successfully','Success',{timeOut:5000});
                    $( '#edit_state' ).each(function(){
                        this.reset();
                    });
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