<div class="card">
      <div class="card-header progress-bar pt-20">
          <h5 class="text-center"><?= isset($type) && $type !=="" ? "Edit City" : "Add City" ?></h5>
      </div>
      <div class="card-body">
          <?= isset($type) && $type !=="" ? '<form id="edit_city_form" method="post" enctype="multipart/form-data">' : '<form id="add_city_form" method="post" enctype="multipart/form-data">' ?>
            <div class="form-group">
              <label>Country</label>
              <select class="form-control select2-single" name="ci_country" id="country_dist" <?= isset($type) && $type !=="" ? "disabled" : "" ?> required>
                <option></option>
               <?php if($countries!=""){
                foreach ($countries as $row) { ?>
                 <option value="<?php echo $row->c_id; ?>"  <?php if(isset($type)){ if($row->c_id == $city->ci_country_id){ echo "selected "; }} ?>><?php echo $row->c_name; ?></option>
                <?php } } ?>
              </select>
            </div>
            <div class="form-group">
              <label>State</label>
              <select class="form-control select2-single" name="ci_state" id="state_dist" <?= isset($type) && $type !=="" ? "disabled" : "" ?> required>
                <option></option>
                <option value="<?php if(isset($type)){ if($city!=""){ echo $city->ci_state_id; }} ?>" <?php if(isset($type)){ if($city->ci_state_id!=""){ echo "selected"; }} ?>><?php if(isset($type)){ if($city!=""){ echo $city->s_name; }} ?></option>
              </select>
            </div>
            <div class="form-group">
              <label>District</label>
              <select class="form-control select2-single" name="ci_district" id="dist_city" <?= isset($type) && $type !=="" ? "disabled" : "" ?> required>
                <option></option>
                <option value="<?php if(isset($type)){ if($city!=""){ echo $city->ci_district_id; }} ?>" <?php if(isset($type)){ if($city->ci_district_id!=""){ echo "selected"; }} ?>><?php if(isset($type)){ if($city!=""){ echo $city->d_district_name; }} ?></option>
              </select>
            </div>
            <div class="form-group">
              <label>City Name</label>
              <input type="text" class="form-control" name="ci_city" value="<?= isset($type) && $type !=="" ? $city->ci_name : "" ?>" required>
            </div>
            
             <input type="hidden" name="ci_id" value="<?= isset($city) && $city!="" ?  $city->ci_id : "" ?>">

             <?= isset($type) && $type !=="" ? '<button type="submit" class="btn btn-primary" id="" name="update" value="update">Update</button>' : '<button type="submit" class="btn btn-primary" id="" name="submit" value="submit">Submit</button>' ?> 
          </form>
      </div>
    </div>


<script type="text/javascript">
  $(document).ready(function(){
    $("#edit_city_form").validate({

        rules: {
            "ci_country": {
                required: true
            },
            "ci_state": {
                required: true
            },
            "ci_district": {
                required: true
            },
            "ci_city": {
                required: true
            }
          },
        messages: {
            "ci_country": {
                required: 'Please select Country!'
            },
            "ci_state": {
                required: 'Please select State!'
            },
            "ci_district": {
                required: 'Please select District!'
            },
            "ci_city": {
                required: 'Please enter City!'
            }
        },
        submitHandler: function(form) { 
         
             var formdata = new FormData(form);
            $.ajax({
                    url: base+'add-city',
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
                          toastr.success('City has been updated successfully','Success',{timeOut:5000});
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