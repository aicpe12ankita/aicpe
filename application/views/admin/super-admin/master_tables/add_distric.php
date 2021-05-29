<div class="card">
                         <div class="card-header progress-bar pt-20">
                            <h5 class="text-center"><?= isset($type) && $type !=="" ? "Edit District" : "Add District" ?></h5>
                        </div>
                        <div class="card-body">
                            <?= isset($type) && $type !=="" ? '<form id="edit_district_form" method="post" enctype="multipart/form-data" onsubmit="return false;">' : '<form id="add_district_form" method="post" enctype="multipart/form-data" onsubmit="return false;">' ?>
                              <div class="form-group">
                                <label>Country</label>
                                <select class="form-control select2-single" name="country_name" id="country_dist" <?= isset($type) && $type !=="" ? "disabled" : "" ?> required>
                                  <option></option>
                                 <?php if($countries!=""){
                                  foreach ($countries as $row) { ?>
                                   <option value="<?php echo $row->c_id; ?>"  <?php if(isset($type)){ if($row->c_id == $districts->d_country_id){ echo "selected "; }} ?>><?php echo $row->c_name; ?></option>
                                  <?php } } ?>
                                </select>
                              </div>
                              <div class="form-group">
                                <label>State</label>
                                <select class="form-control select2-single" name="state_name" id="state_dist" <?= isset($type) && $type !=="" ? "disabled" : "" ?> required>
                                  <option></option>
                                  
                                   <option value="<?php if(isset($type) && $type="edit"){ 
                                    if($districts!=""){ echo $districts->d_state_id; } } ?>" 
                                     <?php if(isset($type) && $type="edit"){  echo "selected"; } ?>><?php echo $districts->s_name; ?></option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label>District Name</label>
                                <input type="text" class="form-control" name="district_name" value="<?= isset($districts) && $districts!="" ?  $districts->d_district_name : "" ?>" required>
                              </div>
                              
                                 <input type="hidden" name="did" value="<?= isset($districts) && $districts!="" ?  $districts->d_id : "" ?>">

                                 <?= isset($type) && $type !=="" ? '<button type="submit" class="btn btn-primary" id="" name="update" value="update">Update</button>' : '<button type="submit" class="btn btn-primary" id="" name="submit" value="submit">Submit</button>' ?> 
                            </form>
                        </div>
                    </div>

<script type="text/javascript">
  $(document).ready(function(){
    $("#edit_district_form").validate({

        rules: {
            "country_name": {
                required: true
            },
            "state_name": {
                required: true
            },
            "district_name": {
                required: true
            }
          },
        messages: {
            "country_name": {
                required: 'Please select Country!'
            },
            "state_name": {
                required: 'Please select State!'
            },
            "district_name": {
                required: 'Please select District!'
            }
        },
        submitHandler: function(form) { 
          
            var formdata = new FormData(form);
              $.ajax({
                      url: base+'add-district',
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
                            toastr.success('District has been updated successfully','Success',{timeOut:5000});
                            $( '#edit_district_form' ).each(function(){
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