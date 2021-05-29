<div class="modal-dialog custom-modal-width" role="document">
    <div class="modal-content" id="inst_content">

        <div class="modal-header custom-modal">
            <h5 class="modal-title white"><?= isset($type) && $type =="edit" ? "Edit Institution" : "Add Institution" ?> </h5>
            <button type="button" class="close white" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
         <?= isset($type) && $type =="edit" ? '<form id="edit_institution" method="post" enctype="multipart/form-data"  onsubmit="return false;">' : '<form id="add_institution" method="post" enctype="multipart/form-data"  onsubmit="return false;">' ?>
        <div class="modal-body">
         
            <div class="row">
              <div class="col-lg-6">
                <label class="form-group has-float-label">
                  <input type="text" class="form-control" id="inst_name" name="inst_name" value="<?php if(isset($institution) && $institution!=""){ echo $institution->inst_name; }  ?>" required />
                  <span>Institute Name <span class="mandetory">*</span></span>
                </label>
            
            <label class="form-group has-float-label">
                <input type="text" class="form-control" id="owner_name" name="owner_name" value="<?php if(isset($institution) && $institution!=""){ echo $institution->owner_name; }  ?>"  />
                <span>Owner Name </span>
            </label>
            
            <label class="form-group has-float-label">
                <input type="email" class="form-control" id="email" name="email" <?= isset($type) && $type =="edit" ? 'id="email"' : 'id="up_email"' ?> value="<?php if(isset($institution) && $institution!=""){ echo $institution->email; }  ?>" required />
                <span>Email <span class="mandetory">*</span></span>
            </label>
            
            <label class="form-group has-float-label">
                <input type="text" class="form-control" id="mobile_2" name="mobile_2" value="<?php if(isset($institution) && $institution!=""){ echo $institution->mobile_2; }  ?>" />
                <span>Alternate Mobile No.</span>
            </label>
            
            <label class="form-group has-float-label">
                <input type="text" class="form-control datepicker" id="date_of_birth" name="date_of_birth" value="<?php if(isset($institution) && $institution!=""){ echo date('m/d/Y',strtotime($institution->dete_of_birth)); }  ?>" />
                <span>Date Of Birth <span class="mandetory">*</span></span>
            </label>
            <label class="form-group has-float-label">
                <textarea class="form-control" id="address" name="address"><?php if(isset($institution) && $institution!=""){ echo $institution->address; }  ?></textarea>
                <span>Address <span class="mandetory">*</span></span>
            </label>
            <label class="form-group has-float-label">
                <select class="form-control select2-single" data-width="100%" name="state" id="state_dist" required>
                  <option value="<?php if(isset($type) && $type=='edit'){ if(isset($institution) && $institution!=""){ echo $institution->state; } } ?>"><?php if(isset($type) && $type=='edit'){ if($institution!=""){ echo $institution->s_name; }}  ?></option>
                </select>
                <span>State <span class="mandetory">*</span></span>
            </label>
               
                <label class="form-group has-float-label">
                    <select class="form-control select2-single" data-width="100%" name="city" id="getcities"><option value="<?php  if(isset($type) && $type=='edit'){ if(isset($institution) && $institution!=""){ echo $institution->city; } } ?>" selected><?php if($institution!=""){ if(isset($type) && $type=='edit'){ echo $institution->ci_name; }}  ?></option>
                    </select>
                    <span>City <span class="mandetory">*</span></span>
                </label>

                <div class="form-group">
                  <label>Institute Logo</label>
                    <div class="dropzone" id="institution_logo"></div>
                </div>
                <?php if(isset($institution) && $institution!=""){
                  if($institution->inst_logo!=""){ ?>
                    <div class="img_preview mb-4">
                      <img class="img-thumbnail border-0" src="<?php echo base_url(); ?>uploads/institution_files/<?php echo $institution->inst_logo; ?>" />
                    </div>
                  <?php } } ?>
                   
                <label class="form-group has-float-label">
                    <select class="form-control select2-single" data-width="100%" name="photo_id_type">
                        <option label="&nbsp;">&nbsp;</option>
                        <?php if($photoid_types!=""){
                          foreach ($photoid_types as $photoid_types_row) { ?>
                            <option value="<?php echo $photoid_types_row->ph_id; ?>" <?php  if(isset($institution) && $institution!=""){ if($institution->photo_id_type==$photoid_types_row->ph_id){ echo "selected"; }  } ?>><?php echo $photoid_types_row->ph_title; ?></option>
                          <?php } } ?>
                    </select>
                    <span>Photo ID Type <span class="mandetory">*</span></span>
                </label>
                <div class="form-group">
                  <label>Photo ID Proof</label>
                    <div class="dropzone" id="photo_id_proof"></div>
                </div>
                <?php if(isset($institution) && $institution!=""){
                  if($institution->photo_id!=""){ ?>
                    <div class="img_preview mb-4">
                      <img class="img-thumbnail border-0" src="<?php echo base_url(); ?>uploads/institution_files/<?php echo $institution->photo_id; ?>" />
                    </div>
                  <?php } } ?>
                <label class="form-group has-float-label">
                  <input type="text" class="form-control" id="pan_no" name="pan_no" value="<?php if(isset($institution) && $institution!=""){ echo $institution->pan_no; }  ?>" />
                  <span>Pan No.</span>
                </label>
                <label class="form-group has-float-label">
                  <input type="text" class="form-control" name="gst_no" value="<?php if(isset($institution) && $institution!=""){echo $institution->gst_no; }  ?>" />
                  <span>Gst No.</span>
                </label>
                <label class="form-group has-float-label">
                  <select class="form-control select2-single" data-width="100%" name="qualification">
                        <option label="&nbsp;">&nbsp;</option>
                        <?php if($qualifications!=""){
                          foreach ($qualifications as $qualifications_row) { ?>
                            <option value="<?php echo $qualifications_row->q_id; ?>" <?php if(isset($institution) && $institution!=""){ if($institution->qualification==$qualifications_row->q_id){ ?>selected="selected" <?php } }?>><?php echo $qualifications_row->q_title; ?></option><?php } } ?>
                    </select>
                  <span>Qualification</span>
                </label>
              </div>
              <div class="col-lg-6">
                <label class="form-group has-float-label">
                    <input type="text" class="form-control" id="inst_code" name="inst_code" value="<?php if(isset($institution) && $institution!=""){ echo $institution->atc_code; }  ?>" />
                    <span>Institute ATC Code <span class="mandetory">*</span></span>
                </label>
                <label class="form-group has-float-label">
                    <select class="form-control select2-single" data-width="100%" name="designation">
                        <option label="&nbsp;">&nbsp;</option>
                        <?php if($designations!=""){
                          foreach ($designations as $designations_row) { ?>
                            <option value="<?php echo $designations_row->isd_id; ?>" <?php if(isset($institution) && $institution!=""){ if($institution->designation==$designations_row->isd_id){ echo "selected"; }  } ?>><?php echo $designations_row->isd_title; ?></option>
                          <?php } } ?>
                    </select>
                    <span>Designation</span>
                </label>
                <label class="form-group has-float-label">
                    <input type="text" class="form-control" id="mobile_1" name="mobile_1" value="<?php if(isset($institution) && $institution!=""){  echo $institution->mobile_1; }  ?>" required />
                    <span>Mobile No. <span class="mandetory">*</span></span>
                </label>
                <label class="form-group has-float-label">
                    <input type="text" class="form-control" id="whatsapp_no" name="whatsapp_no" value="<?php if(isset($institution) && $institution!=""){ echo $institution->whatsapp_no; }  ?>" />
                    <span>Whatsapp No. <span class="mandetory">*</span></span>
                </label>
                <div class="form-group">
                  <label>Gender <span class="mandetory">*</span></label>
                  <div class="row">
                    <div class="col-lg-4 col-xs-4">
                      <div class="custom-control custom-radio">
                          <input type="radio" id="Male" name="gender"
                              class="custom-control-input" value="Male" <?php if(isset($institution) && $institution!=""){ if($institution->gender=='Male'){ echo 'checked'; } } ?>>
                          <label class="custom-control-label" for="Male"> Male </label>
                      </div>
                    </div>
                    <div class="col-lg-4 col-xs-4">
                      <div class="custom-control custom-radio">
                        <input type="radio" id="Female" name="gender"
                            class="custom-control-input" value="Female" <?php if(isset($institution) && $institution!=""){ if($institution->gender=='Female'){ echo 'checked'; } } ?>>
                        <label class="custom-control-label" for="Female">Female</label>
                      </div>
                    </div>
                    <div class="col-lg-4 col-xs-4">
                      <div class="custom-control custom-radio">
                        <input type="radio" id="Other" name="gender"
                            class="custom-control-input" value="Other" <?php if(isset($institution) && $institution!=""){ if($institution->gender=='Other'){ echo 'checked'; } } ?>>
                        <label class="custom-control-label" for="Other">Other</label>
                      </div>
                    </div>
                  </div>
                </div><!-- gender -->
                <label class="form-group has-float-label">
                    <select class="form-control select2-single" data-width="100%" name="country" id="country_dist">
                        <option label="&nbsp;">&nbsp;</option>
                        <?php if($countries!=""){
                          foreach ($countries as $countries_row) { ?>
                            <option value="<?php echo $countries_row->c_id;?>" <?php if(isset($institution) && $institution!=""){ if($institution->country==$countries_row->c_id){ echo "selected"; }  } ?>><?php echo $countries_row->c_name; ?></option>
                          <?php } } ?>
                    </select>
                    <span>Country <span class="mandetory">*</span></span>
                </label>
                <label class="form-group has-float-label">
                    <select class="form-control select2-single" data-width="100%" name="district" id="dist_city">
                     <option value="<?php if(isset($institution) && $institution!=""){ echo $institution->district; }  ?>" selected><?php if(isset($institution) && $institution!=""){  echo $institution->d_district_name; }  ?></option>  
                    </select>
                    <span>District <span class="mandetory">*</span></span>
                </label>
                 <label class="form-group has-float-label">
                  <input type="text" class="form-control" name="pin_code" value="<?php if(isset($institution) && $institution!=""){ echo $institution->pincode; }  ?>" />
                  <span>Pin Code <span class="mandetory">*</span></span>
                </label>
                <div class="form-group">
                  <label>Owner Photo</label>
                    <div class="dropzone" id="owner_photo"></div>
                </div>
                <?php if(isset($institution) && $institution!=""){
                  if($institution->owner_photo!=""){ ?>
                    <div class="img_preview mb-4">
                      <img class="img-thumbnail border-0" src="<?php echo base_url(); ?>uploads/institution_files/<?php echo $institution->owner_photo; ?>" />
                    </div>
                  <?php } } ?>

                <label class="form-group has-float-label">
                  <input type="text" class="form-control" name="photo_id_no" value="<?php if(isset($institution) && $institution!=""){ echo $institution->photo_id_no; }  ?>" />
                  <span>Photo ID No. <span class="mandetory">*</span></span>
                </label>
                <label class="form-group has-float-label">
                 <textarea class="form-control" name="inst_details"><?php if(isset($institution) && $institution!=""){ echo $institution->inst_details; }  ?></textarea>
                  <span>Institute Details</span>
                </label>
                <div class="form-group">
                  <label>Institution Gallery</label>
                  <p class="text-small text-muted">* You can upload maximum 10 images</p>
                    <div class="dropzone" id="inst_gallery"></div>
                </div>
                <?php if(isset($institution) && $institution!=""){
                  if($institution->inst_gallery!="" || $institution->inst_gallery!=NULL){  ?>
                    <div class="mb-4">
                    <?php $gallery = json_decode($institution->inst_gallery,true);
                   
                    for ($i=0; $i < count($gallery); $i++) { ?>
                    <div class="img_preview mb-1">
                      <img class="img-thumbnail border-0" src="<?php echo base_url(); ?>uploads/institution_files/<?php echo $gallery[$i]; ?>" />
                    </div>
                  <?php }?></div><?php } } ?>

                  <label class="form-group has-float-label">
                    <select class="form-control select2-single" data-width="100%" name="staff_id" required>
                        <option label="&nbsp;">&nbsp;</option>
                        <?php if($staff!=""){
                          foreach ($staff as $staff_row) { ?>
                            <option value="<?php echo $staff_row->as_id ;?>" <?php if(isset($institution) && $institution!=""){ if($institution->staff_id==$staff_row->as_id ){ echo "selected"; }  } ?>><?php echo ucwords($staff_row->as_firstName." ".$staff_row->as_lastName)." (".$staff_row->as_staff_type.")";
                             ?></option>
                          <?php } } ?>
                    </select>
                    <span>Assign Staff <span class="mandetory">*</span></span>
                </label>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <input type="hidden" name="id" value="<?= isset($institution) && $institution!="" ?  $institution->id : "" ?>">

            <?= isset($type) && $type =="edit" ? '<button type="submit" class="btn btn-primary" id="" name="update" value="update">Update</button>' : '<button type="submit" class="btn btn-primary" id="" name="submit" value="submit">Submit</button>' ?>
          
          <button type="button" id="cancel" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
            
        </div>
      </form>
    </div>
  </div>

<script type="text/javascript">
  $(document).ready(function() {
     $('#mobile_1,#mobile_2,#whatsapp_no,#pan_no').on('keypress',function(e){
      if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) { return false; }
     });

    $("#add_institution").validate({

        rules: {
            "inst_name": {
                required: true
            },
            "inst_code": {
                required: true
            },
            "email":{
              required: true,
              email: true
            },
            "mobile_1":{
              required:true,
              number:true,
              maxlength:12
            },
            "mobile_2":{
              number:true,
              maxlength:12
            },
            "whatsapp_no":{
              required:true,
              number:true,
              maxlength:12
            },
            "date_of_birth":{
              required:true
            },
            "address":{
              required:true
            },
            "gender":{
              required:true
            },
            "country":{
              required:true
            },
            "state":{
              required:true
            },
            "district":{
              required:true
            },
            "city":{
              required:true
            },
            "pin_code":{
              required:true
            },
            "staff_id":{
              required:true
            }
        },
        messages: {
            "inst_name": {
                required: 'Institution name is required'
              },
            "inst_code": {
                required: 'Institution ATC code is required'
            },
            "email": {
              required: 'Email is required',
              email: 'Your email address must be in correct format!',
            },
            "mobile_1": {
              required: 'Mobile no. is required',
              number: 'Mobile no. must be in correct format!',
            },
            "mobile_2": {
              number: 'Mobile no. must be in correct format!',
            },
            "whatsapp_no": {
              required: 'Whatsapp no. is required',
              number: 'Mobile no. must be in correct format!',
            },
            "date_of_birth": {
                required: 'Date of birth is required'
            },
            "address": {
                required: 'Address is required'
            },
            "gender": {
                required: 'Gender is required'
            },
            "country": {
                required: 'Country is required'
            },
            "state": {
                required: 'State is required'
            },
            "district": {
                required: 'District is required'
            },
            "city": {
                required: 'City is required'
            },
            "pin_code": {
                required: 'Pin code is required'
            },
            "staff_id":{
              required: 'Staff is required'
            }

        },
        submitHandler: function(form) { 
        
        base = $('#base_url').val();
         var formdata = new FormData(form);

        $.ajax({
          url   : base+'add-institution',
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
            $('#addEnquiry').modal('hide');
            toastr[data.type](data.msg);
            $("#add_institution")[0].reset();
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
        
     
    }
  });
});
</script>
<script type="text/javascript">
  $(document).ready(function() {

    $("#edit_institution").validate({

        rules: {
            "inst_name": {
                required: true
            },
            "inst_code": {
                required: true
            },
            "email":{
              required: true,
              email: true
            },
            "mobile_1":{
              required:true,
              number:true,
              maxlength:12
            },
            "mobile_2":{
              number:true,
              maxlength:12
            },
            "whatsapp_no":{
              required:true,
              number:true,
              maxlength:12
            },
            "date_of_birth":{
              required:true
            },
            "address":{
              required:true
            },
            "gender":{
              required:true
            },
            "country":{
              required:true
            },
            "state":{
              required:true
            },
            "district":{
              required:true
            },
            "city":{
              required:true
            },
            "pin_code":{
              required:true
            },
            "staff_id":{
              required:true
            }
        },
        messages: {
            "inst_name": {
                required: 'Institution name is required'
              },
            "inst_code": {
                required: 'Institution ATC code is required'
            },
            "email": {
              required: 'Email is required',
              email: 'Your email address must be in correct format!',
            },
            "mobile_1": {
              required: 'Mobile no. is required',
              number: 'Mobile no. must be in correct format!',
            },
            "mobile_2": {
              number: 'Mobile no. must be in correct format!',
            },
            "whatsapp_no": {
              required: 'Whatsapp no. is required',
              number: 'Mobile no. must be in correct format!',
            },
            "date_of_birth": {
                required: 'Date of birth is required'
            },
            "address": {
                required: 'Address is required'
            },
            "gender": {
                required: 'Gender is required'
            },
            "country": {
                required: 'Country is required'
            },
            "state": {
                required: 'State is required'
            },
            "district": {
                required: 'District is required'
            },
            "city": {
                required: 'City is required'
            },
            "pin_code": {
                required: 'Pin code is required'
            },
            "staff_id":{
              required: 'Staff is required'
            }

        },
        submitHandler: function(form) { 
      
      var formdata = new FormData(form);
      $.ajax({
              url: base+'edit-institution',
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
                $('#addEnquiry').modal('hide');
                toastr[data.type](data.msg);
                $("#edit_institution")[0].reset();
                
              }   
            })
            .done(function() {
              $(".main-loader").hide();
              page_update();
            })
            .fail(function() {
              toastr['error']('Something went wrong');
            })
            .always(function() {
              $(".main-loader").hide();
            });
     
    }
  });
});
</script>

 <script type="text/javascript">
  $(document).ready(function(){
  var base = $('#base_url').val();
  $('#country_dist').on('change',function(){ 
    var id= $('#country_dist').val();
    var str ="<option>&nbsp;</option>";
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

  $('#state_dist').on('change',function(){
    var id= $('#state_dist').val();
    var str ="<option>&nbsp;</option>";
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
    var str ="<option>&nbsp;</option>";
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
    get_dropzone();
    var base = $('#base_url').val();

    $('#email').on('change',function(){
    var email= $('#email').val();
    var str ="";
    $.ajax({
          url: base+'check-email',
          type:'post',
          dataType: 'json',
          data: {email:email},
          success:function(response){
             if(response){
                toastr.error('Email is already resigestered','Failed',{timeOut:5000});
             }
          } 
        });
    });



});
  $('#cancel').click(function(){
        $( 'form' ).each(function(){
            this.reset();
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
