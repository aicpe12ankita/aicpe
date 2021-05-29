<div class="card">
                         <div class="card-header progress-bar pt-20">
                            <h5 class="text-center">
                              <?= isset($type) && $type !=="" ? "Edit Country" : "Add Country" ?></h5>
                        </div>
                        <div class="card-body">
                          <?= isset($type) && $type !=="" ? '<form id="edit_country" method="post" enctype="multipart/form-data" class="tooltip-label-right" novalidate>' : '<form id="add_country" method="post" enctype="multipart/form-data" class="tooltip-label-right" novalidate>' ?>
                            
                              <div class="form-group">
                                <label>Country Name<span class="mandatory">*</span></label>
                                <input type="text" class="form-control" name="country_name" value="<?= isset($countries) && $countries!="" ?  $countries->c_name : "" ?>" required>
                              </div>
                              <div class="form-group">
                                <label>Phone Code</label>
                                <input type="text" class="form-control" name="phone_code" value="<?= isset($countries) && $countries!="" ?  $countries->c_phone_code : "" ?>">
                              </div>
                              <div class="form-group">
                                <label>Currency</label>
                                <input type="text" class="form-control" name="currency" value="<?= isset($countries) && $countries!="" ?  $countries->c_currency : "" ?>">
                              </div>
                              <div class="form-group">
                                <label>Currency Value <span class="text-muted text-small">According To India eg. currency = $ currency value = Rs.70 ($1 = Rs. 70)</span></label>
                                <input type="text" class="form-control" name="currency_india_value" value="<?= isset($countries) && $countries!="" ?  $countries->c_indian_value : "" ?>">
                              </div>
                              <div class="form-group">
                                <label>Flag Image</label>
                                <div class="input-group">
                                  <div class="custom-file">
                                      <input type="file" class="custom-file-input" name="flag_image">
                                      <label class="custom-file-label" for="flag_image">Choose file</label>
                                  </div>
                                </div>
                              </div>

                              <input type="hidden" name="cid" value="<?= isset($countries) && $countries!="" ?  $countries->c_id : "" ?>">

                              <?php if(isset($countries) && $countries!=""){
                                if($countries->c_flag_img!=""){ ?>
                                  <div class="country_img mb-2">
                                    <img src="<?php echo base_url();?>assets/images/countries/<?php echo $countries->c_flag_img; ?>" class="img-thumbnail border-0 ">
                                  </div> 
                                <?php }
                              } ?>
                              <?= isset($type) && $type !=="" ? '<button type="submit" class="btn btn-primary" id="" name="update" value="update">Update</button>' : '<button type="submit" class="btn btn-primary" id="" name="submit" value="submit">Submit</button>' ?>  
                            
                            </form>
                        </div>
                    </div>




<script type="text/javascript">
  $(document).ready(function(){
    $('#edit_country').validate({

      rules:{
        'country_name':{
          required:true
        }
      },
      messages:{
        'country_name':{
          required:'Country is required!'
        }
      },
      submitHandler:function(form){
          
       var formdata = new FormData(form);
      $.ajax({
              url: base+'add-country',
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
                    toastr.success('Country has been updated successfully','Success',{timeOut:5000});
                    $( '#edit_country' ).each(function(){
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