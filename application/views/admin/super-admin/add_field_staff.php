 <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header custom-modal">
                  <h5 class="modal-title white"><?= isset($id) && $id !="" ? 'Edit Staff' : 'Add Staff' ?></h5>
                  <button type="button" class="close white" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                <?php  //echo $id; print_r($data); ?>
                <?= isset($id) && $id !="" ? '<form id="edit_admin_staff" method="post" enctype="multipart/form-data"  onsubmit="return false;">' : '<form id="add_admin_staff" method="post" enctype="multipart/form-data"  onsubmit="return false;">' ?>
                  <!-- <div class="form-group">
                    <label>Full Name</label>
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="First Name" name="fname" value="<?= isset($id) && $id!="" ? $field->as_firstName : "" ?>">
                        <input type="text" class="form-control" placeholder="Middle Name" name="mname" value="<?= isset($id) && $id!="" ? $field->as_middleNmae : "" ?>">
                        <input type="text" class="form-control" placeholder="Last Name" name="lname" value="<?= isset($id) && $id!="" ? $field->as_lastName : "" ?>">
                      </div>
                  </div> -->
                  <div class="form-group">
                    <label>First Name</label>
                    <input type="text" class="form-control"  name="fname" value="<?= isset($id) && $id!="" ? $field->as_firstName : "" ?>">
                  </div>
                  <div class="form-group">
                    <label>Middle Name</label>
                    <input type="text" class="form-control"  name="mname" value="<?= isset($id) && $id!="" ? $field->as_middleNmae : "" ?>">
                  </div>
                  <div class="form-group">
                    <label>Last Name</label>
                     <input type="text" class="form-control"  name="lname" value="<?= isset($id) && $id!="" ? $field->as_lastName : "" ?>">
                  </div>
                  <div class="form-group">
                      <label>Mobile No</label>
                      <input type="text" class="form-control" name="mobile_1" value="<?= isset($id) && $id!="" ? $field->as_mobile_1 : "" ?>">
                  </div>
                   <div class="form-group">
                      <label>Alternate Mobile No</label>
                      <input type="text" class="form-control" name="mobile_2" value="<?= isset($id) && $id!="" ? $field->as_mobile_2 : "" ?>">
                  </div>
                  <div class="form-group">
                      <label>Whats App No</label>
                      <input type="text" class="form-control" name="whatsapp_no" value="<?= isset($id) && $id!="" ? $field->as_whats_app : "" ?>">
                  </div>
                   <div class="form-group">
                      <label>Email</label>
                      <input type="email" class="form-control" name="email" value="<?= isset($id) && $id!="" ? $field->as_email : "" ?>">
                  </div>
                  <div class="form-group">
                    <label>Gender</label>
                        <div class="row">
                          <div class="col-lg-4 col-xs-4">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="Male" name="gender"
                                    class="custom-control-input" value="0" <?php if(isset($id) && $id!=""){ if($field->as_gender=='0'){ echo 'checked'; } } ?>>
                                <label class="custom-control-label" for="Male"> Male </label>
                            </div>
                          </div>
                          <div class="col-lg-4 col-xs-4">
                            <div class="custom-control custom-radio">
                              <input type="radio" id="Female" name="gender"
                                  class="custom-control-input" value="1" <?php if(isset($field) && $field!=""){ if($field->as_gender=='1'){ echo 'checked'; } } ?>>
                              <label class="custom-control-label" for="Female">Female</label>
                            </div>
                          </div>
                          <div class="col-lg-4 col-xs-4">
                            <div class="custom-control custom-radio">
                              <input type="radio" id="Other" name="gender" class="custom-control-input" value="2" <?php if(isset($field) && $field!=""){ 
                                if($field->as_gender=='2'){ echo 'checked'; } } ?>>
                              <label class="custom-control-label" for="Other">Other</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label>Date Of Birth</label>
                        <div class="input-group date">
                          <span class="input-group-text input-group-append input-group-addon">
                                <i class="simple-icon-calendar"></i>
                          </span>
                          <input type="text" class="form-control datepicker" placeholder="Date" name="dob" value="<?= isset($id) && $id!="" ? date('d-m-Y',strtotime($field->as_date_of_birth)) : "" ?>">
                        </div>
                      </div>
                       <div class="form-group">
                          <label>Temporary Address</label>
                          <textarea placeholder="" class="form-control" rows="3" name="temp_address"> <?= isset($field) && $field!="" ? $field->as_temp_add : '' ?></textarea>
                      </div>
                      <div class="form-group">
                          <label>Permanent Address</label>
                          <textarea placeholder="" class="form-control" rows="3" name="perm_address"><?= isset($field) && $field!="" ? $field->as_perm_add : '' ?></textarea>
                      </div>
                      <div class="form-group">
                          <label>Country</label>
                          <select class="form-control select2-single" data-width="100%" name="country" id="country_dist" required>
                              <option label="&nbsp;">Country</option>
                              <?php if($countries!=""){
                                foreach ($countries as $countries_row) { ?>
                                  <option value="<?php echo $countries_row->c_id;?>" <?php if(isset($field) && $field!=""){ if($field->as_country==$countries_row->c_id){ echo "selected"; }  } ?>><?php echo $countries_row->c_name; ?></option>
                                <?php } } ?>
                          </select>
                      </div>

                      <div class="form-group">
                          <label>State</label>
                          <select class="form-control select2-single" data-width="100%" name="state" id="state_dist" required>
                              <option label="&nbsp;">State</option>
                              <option value="<?php if(isset($field) && $field!=''){  echo $field->as_state; }  ?>" selected><?php if(isset($field) && $field!=''){ if($field!=""){ echo $field->s_name; }}  ?></option>
                            </select>
                      </div>
                       <div class="form-group">
                          <label>District</label>
                            <select class="form-control select2-single" data-width="100%" name="district" id="dist_city">
                            <option label="&nbsp;">District</option>
                           <option value="<?php if(isset($field) && $field!=""){ 
                            echo $field->as_district; }  ?>" selected>
                            <?php if(isset($field) && $field!=""){  echo $field->d_district_name; }  ?></option>  
                          </select>
                      </div>
                      <div class="form-group">
                          <label>City</label>
                          <select class="form-control select2-single" data-width="100%" name="city" id="getcities">
                            <option label="&nbsp;">City</option>
                            <option value="<?php  if(isset($field) && $field!=""){ echo $field->as_city; }  ?>" selected><?php if(isset($field) && $field!=''){ echo $field->ci_name; }  ?></option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>Pin Code</label>
                          <input type="text" class="form-control" name="pincode" maxlength="6" value="<?php if($field!="") { echo $field->as_pincode; } ?>">
                      </div>
                      <div class="form-group">
                      <label>Designation</label>
                          <select class="form-control select2-single" data-width="100%" name="designation">
                              <option label="&nbsp;"></option>
                              <?php if($designation!=""){
                                foreach ($designation as $desg) { ?>
                                  <option value="<?php echo $desg->asd_id;?>" <?php if(isset($field) && $field!=""){ if($field->as_designation==$desg->asd_id){ echo "selected"; }  } ?>><?php echo $desg->asd_title; ?></option>
                                <?php } } ?>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>Education Qualification</label>
                           <select class="form-control select2-single" data-width="100%" name="education">
                          <option label="&nbsp;">&nbsp;</option>
                          <?php if($qualifications!=""){
                            foreach ($qualifications as $qualifications_row) { ?>
                              <option value="<?php echo $qualifications_row->q_id; ?>" <?php if(isset($field) && $field!=""){ if($field->as_education==$qualifications_row->q_id){ ?>selected <?php } } ?>><?php echo $qualifications_row->q_title; ?></option><?php } } ?>
                          </select>
                      </div>
                     
                      <div class="form-group">
                          <label>Password</label>
                          <input type="text" class="form-control" name="password" value="<?= isset($field) && $field!="" ? $field->as_password : "" ?>">
                      </div>
                      <div class="form-group">
                        <label>Photo</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile01" name="image">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>
                      </div>
                      <?php if(isset($field) && $field!=""){   
                        if($field->as_user_photo!=""){ ?>
                          <div class="img_preview mb-4">
                            <img class="img-thumbnail border-0" src="<?php echo base_url(); ?>uploads/admin_staff/<?php echo $field->as_user_photo; ?>" />
                          </div>
                        <?php } } ?>
                      <div class="form-group">
                          <label>Photo ID Type</label>
                          <select class="form-control select2-single" data-width="100%" name="photo_id_type">
                            <option label="&nbsp;">&nbsp;</option>
                            <?php if($photoid_types!=""){
                              foreach ($photoid_types as $photoid_types_row) { ?>
                                <option value="<?php echo $photoid_types_row->ph_id; ?>" <?php if(isset($field) && $field!=""){ if($field->as_id_type==$photoid_types_row->ph_id){ echo "selected"; }  } ?>><?php echo $photoid_types_row->ph_title; ?></option>
                              <?php } } ?>
                        </select>
                      </div>
                      <div class="form-group">
                          <label>Photo ID No.</label>
                          <input type="text" class="form-control" name="as_id_no" value="<?= isset($field) &&  $field!="" ? $field->as_id_no : "" ?>">
                      </div>
                      <div class="form-group">
                        <label>Upload Photo ID</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile02" name="id_proof">
                                <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                            </div>
                        </div>
                      </div>
                      <?php if(isset($field) && $field!=""){
                        if($field->as_id_proof!=""){ ?>
                          <div class="img_preview mb-4">
                            <img class="img-thumbnail border-0" src="<?php echo base_url(); ?>uploads/admin_staff/<?php echo $field->as_id_proof; ?>" />
                          </div>
                        <?php } } ?>
                      <div class="form-group">
                          <label>Role </label>
                          <input type="text" class="form-control" name="as_role" value="<?= isset($field) &&  $field!="" ? $field->as_role : "" ?>">
                      </div>
                      <div class="form-group">
                          <label>Eligibility for incentive </label>
                          <div class="row">
                            <div class="col-lg-4 col-xs-4">
                              <div class="custom-control custom-radio">
                                  <input type="radio" id="yes" name="incentive"
                                      class="custom-control-input" value="0" <?php if(isset($field) && $field!=""){ if($field->as_incentive_eligibility==0){ echo "checked"; }} ?>>
                                  <label class="custom-control-label" for="yes"> Yes </label>
                              </div>
                            </div>
                            <div class="col-lg-4 col-xs-4">
                              <div class="custom-control custom-radio">
                                <input type="radio" id="no" name="incentive"
                                    class="custom-control-input" value="1" <?php if(isset($field) && $field!=""){ if($field->as_incentive_eligibility==1){ echo "checked"; }} ?>>
                                <label class="custom-control-label" for="no">No</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Status </label>
                          <div class="row">
                            <div class="col-lg-4 col-xs-4">
                              <div class="custom-control custom-radio">
                                  <input type="radio" id="Active" name="status"
                                      class="custom-control-input" value="0" <?php if(isset($field) && $field!=""){ if($field->as_status==0){ echo "checked"; }} ?>>
                                  <label class="custom-control-label" for="Active"> Active </label>
                              </div>
                            </div>
                            <div class="col-lg-4 col-xs-4">
                              <div class="custom-control custom-radio">
                                <input type="radio" id="Inactive" name="status"
                                    class="custom-control-input" value="1" <?php if(isset($field) && $field!=""){ if($field->as_status==1){ echo "checked"; }} ?>>
                                <label class="custom-control-label" for="Inactive">Inactive</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <input type="hidden" name="id" value="<?= isset($id) && $id!="" ? $field->as_id : "" ?>">
                        <input type="hidden" name="staff_type" value="field">
                        <?= isset($id) && $id!="" ? ' <button type="submit" class="btn btn-primary">Update</button>' : ' <button type="submit" class="btn btn-primary">Submit</button>' ?>
                      
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

    $('#add_admin_staff').validate({ 

        rules: {
            "fname": {
              required: true
            },
            "lname": {
              required: true
            },
            'mobile_1':{
              required :true,
              digits: true,
            },
            'whatsapp_no':{
              required :true,
              digits: true,
            },
            'email':{
              required:true,
              email:true
            },
            'gender':{
              required:true
            },
            'country':{
              required:true
            },
            'state':{
              required:true
            },
            'district':{
              required:true
            },
            'pincode':{
              required:true
            },
            'designation':{
              required:true
            },
            'password':{
              required:true
            },
            'status':{
              required:true
            }

        },
        messages: {
          "fname": {
            required: 'First name is required!'
          },
          "lname": {
              required: 'Last name is required!'
          },
          'mobile_1':{
            required: 'Mobile no is required!',
            digits:'Mobile no must be 10 digits!'
          },
          'whatsapp_no':{
            required: 'Mobile no is required!',
            digits:'Whatsapp no must be 10 digits!'
          },
          'email':{
              required:'Email is required!',
              email:'Email id must be valid!'
          },
          'gender':{
              required:'Gender is required!'
          },
          'country':{
              required:'Country is required!'
          },
          'state':{
              required:'State is required!'
          },
          'district':{
              required:'District is required!'
          },
          'pincode':{
              required:'Pincode is required!'
            },
            'designation':{
              required: 'Designation is required!'
            },
            'password':{
              required:'Password is required!'
            },
            'status':{
              required:'Status is required!'
            }
        },
        submitHandler : function(form) {
         // $('#add_admin_staff').on('submit',function(){ 
        
          var formdata = new FormData(form);

        $.ajax({
          url   : '<?php echo base_url(); ?>add-field-staff',
          type  : 'POST',
          dataType: 'json',
          data  : formdata,
          processData: false,
          contentType: false,
          beforeSend: function()
          {  
            $(".main-loader").fadeIn();
          },      
          success:function(data)
          { 
            $('#addStaff').modal('hide');
            toastr[data.type](data.msg);
            $("#add_admin_staff")[0].reset();
            page_update();
          }   
        })
        .done(function() {
          $(".main-loader").hide();
        })
        .fail(function() {
          toastr['error']('Something went wrong');
        })
        .always(function() {
          $(".main-loader").hide();
        });
        
      //});
        }
    });
 
});

</script>
<script type="text/javascript">
   $(document).ready(function(){

    $('#edit_admin_staff').validate({ 

        rules: {
            "fname": {
              required: true
            },
            "lname": {
              required: true
            },
            'mobile_1':{
              required :true,
              digits: true,
            },
            'whatsapp_no':{
              required :true,
              digits: true,
            },
            'email':{
              required:true,
              email:true
            },
            'gender':{
              required:true
            },
            'country':{
              required:true
            },
            'state':{
              required:true
            },
            'district':{
              required:true
            },
            'pincode':{
              required:true
            },
            'designation':{
              required:true
            },
            'password':{
              required:true
            },
            'status':{
              required:true
            }

        },
        messages: {
          "fname": {
            required: 'First name is required!'
          },
          "lname": {
              required: 'Last name is required!'
          },
          'mobile_1':{
            required: 'Mobile no is required!',
            digits:'Mobile no must be 10 digits!'
          },
          'whatsapp_no':{
            required: 'Mobile no is required!',
            digits:'Whatsapp no must be 10 digits!'
          },
          'email':{
              required:'Email is required!',
              email:'Email id must be valid!'
          },
          'gender':{
              required:'Gender is required!'
          },
          'country':{
              required:'Country is required!'
          },
          'state':{
              required:'State is required!'
          },
          'district':{
              required:'District is required!'
          },
          'pincode':{
              required:'Pincode is required!'
            },
            'designation':{
              required: 'Designation is required!'
            },
            'password':{
              required:'Password is required!'
            },
            'status':{
              required:'Status is required!'
            }
        },
        submitHandler : function(form) {
            //$('#edit_admin_staff').on('submit', function(e){
            //  e.preventDefault();
              var formdata = new FormData(form);
              $.ajax({
                      url: '<?php echo base_url(); ?>edit-field-staff',
                      type:'post',
                      data: formdata,
                      processData: false,
                      contentType: false,
                      dataType: 'json',
                      beforeSend: function()
                      {  
                        $(".main-loader").fadeIn();
                      },      
                      success:function(data)
                      { 
                        $('#addStaff').modal('hide');
                        toastr[data.type](data.msg);
                        $("#edit_admin_staff")[0].reset();
                        page_update();
                      }   
                    })
                    .done(function() {
                      $(".main-loader").hide();
                      
                    })
                    .fail(function() {
                      toastr['error']('Something went wrong');
                    })
                    .always(function() {
                      $(".main-loader").hide();
                    });
              //});
        }
    });
 
});

</script>

<script type="text/javascript">
  $(document).ready(function(){
  var base = $('#base_url').val();
  $('#country_dist').change(function(){ 
    var id= $('#country_dist').val();
    var str ="<option>State</option>";
    $.ajax({
          url: base+'get-state-by-country',
          type:'post',
          dataType:'json',
          data: {id:id},
          success:function(response){
            if(response!=""){
              for(var i=0;i<response.length;i++){
                str+= '<option value="'+response[i].s_id+'">'+response[i].s_name+'</option>';
              }
            }
            $('#state_dist').html(str);
          } 
        });
  });

  $('#state_dist').change(function(){
    var id= $('#state_dist').val();
    var str ="<option>District</option>";
    $.ajax({
          url: base+'get-district-by-state',
          type:'post',
          dataType:'json',
          data: {id:id},
          success:function(response){
            if(response!=""){
              for(var i=0;i<response.length;i++){
                str+= '<option value="'+response[i].d_id+'">'+response[i].d_district_name+'</option>';
              }
            }
            $('#dist_city').html(str);
          } 
        });
  });

  $('#dist_city').change(function(){ 
    var cid= $('#dist_city').val();
    var str ="<option>City</option>";
    $.ajax({
          url: base+'get-cities-by-district',
          type:'post',
          dataType:'json',
          data: {cid:cid},
          success:function(response){
            if(response!=""){
              for(var i=0;i<response.length;i++){
                str+= '<option value="'+response[i].ci_id+'">'+response[i].ci_name+'</option>';
              }
            }
            $('#getcities').html(str);
          } 
        });
    });
});
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $("input.datepicker").datepicker({
        autoclose: true,
        templates: {
          leftArrow: '<i class="simple-icon-arrow-left"></i>',
          rightArrow: '<i class="simple-icon-arrow-right"></i>'
        }
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