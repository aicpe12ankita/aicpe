<div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header custom-modal">
              <h5 class="modal-title white">Edit Staff Managment Details</h5>
              <button type="button" class="close white" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
            <form id="save_staff_list_form" name="save_staff_list_form" method="post" enctype="multipart/form-data"  role="form" onsubmit="return false;">
          <div class="modal-body">
              <input type="hidden" class="form-control" name="id" value="<?php echo $staff_data['id'];?>">
              
              <div class="form-group">
                <label>Full Name</label>
                <input type="text" class="form-control" name="staff_name" value="<?php echo $staff_data['staff_name'];?>">
              </div>
              <div class="form-group">
                  <label>Mobile No</label>
                  <input type="text" class="form-control" min="10" max="10" name="mobile_no" value="<?= $staff_data['mobile_no'];?>">
              </div>
               <div class="form-group">
                  <label>Alternate Mobile No</label>
                  <input type="text" class="form-control" min="10" max="10" name="alternate_mobile_no" value="<?= $staff_data['alternate_mobile_no'];?>">
              </div>
              <div class="form-group">
                  <label>Whats App No</label>
                  <input type="text" class="form-control" min="10" max="10" name="whatapp_no" value="<?=$staff_data['whatapp_no']; ?>">
              </div>
              <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control" name="email" value="<?= $staff_data['email'];?>">
              </div>
              <div class="form-group">
                <label>Gender</label>
                <select value="" name="gender" class="form-control">
                  <option>--- Select Gender---</option>
                  <?php foreach($gender_array as $key => $value){?>
                  <option value="<?= $key?>" <?= $key == $staff_data['gender'] ? 'selected' : '';?>><?= $value ?></option>
                <?php }?>
                </select>

               <!--  <?php foreach($gender_array as $key => $value){?>
                 <input type="radio" name="gender" value="<?=$key?>" <?php $key == $staff_data['gender'] ? 'checked' : '';?>> <?php $value?> &nbsp;&nbsp;
                <?php }?> -->
              </div>
                <div class="form-group">
                  <label>Date Of Birth</label>
                    <div class="input-group">
                        <div class="input-group ">
                          <span class="input-group-text input-group-append input-group-addon">
                                <i class="simple-icon-calendar"></i>
                          </span>
                          <input type="text" class="form-control" id="date_of_birth" name="date_of_birth" value="<?= $staff_data['date_of_birth'];?>" >
                        </div>
                    </div>
              </div>
               <div class="form-group">
                  <label>Temporary Address</label>
                  <textarea name="temporary_address" class="form-control"><?= $staff_data['temporary_address'];?></textarea>
              </div>
              <div class="form-group">
                  <label>Permanent Address</label>
                  <textarea name="permanant_address" class="form-control" ><?= $staff_data['permanant_address'];?></textarea>
              </div>
              <div class="form-group">
                  <label>Country</label>
                  <input type="text" class="form-control" name="country" value="<?= $staff_data['country'];?>" />
              </div>
              <div class="form-group">
                  <label>State</label>
                  <input type="text" class="form-control" name="state" value="<?= $staff_data['state'];?>" />
              </div>
              <div class="form-group">
                  <label>City</label>
                 <input type="text" class="form-control" name="city" value="<?= $staff_data['city'];?>" />
              </div>
              <div class="form-group">
                  <label>Pin Code</label>
                  <input type="text" class="form-control" maxlength="6" name="pin_code" value="<?= $staff_data['pin_code'];?>">
              </div>
              <div class="form-group">
                  <label>Designation</label>
                  <input type="text" class="form-control" name="designation" value="<?= $staff_data['designation'];?>">
              </div>
              <div class="form-group">
                  <label>Education Qualification</label>
                  <input type="text" class="form-control" name="education_qualification" value="<?= $staff_data['education_qualification'];?>">
              </div>
              <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" name="username" value="<?= $staff_data['username'];?>" >
              </div>
              <div class="form-group">
                  <label>Password</label>
                  <input type="text" class="form-control" name="password" value="<?= $staff_data['password'];?>" >
              </div>
              <div class="form-group">
                <label> Photo </label>
                 <input type="file" value="" name="photo">
              </div>
              <div class="form-group">
                  <label>Photo ID Type</label>
                  <select class="form-control" name="photo_id_type">
                     <option>--- Select Photo ID Type ---</option>
                    <?php foreach($photo_type_array as $key => $value){ ?>
                      <option value="<?= $key ?>" <?= $key == $staff_data['photo_id_type'] ? 'selected' : '';?> ><?= $value ?></option>
                      <?php } ?>
                  </select>
              </div>
              <div class="form-group">
                  <label>Photo ID No.</label>
                  <input type="text" class="form-control" name="photo_id_no" value="<?= $staff_data['photo_id_no'];?>" >
              </div>
              <div class="form-group">
                <label>Upload Photo ID</label>
                 <input type="file" value="" name="photo_id">
              </div>
              <div class="form-group">
                  <label>Role </label>
                  <input type="text" name="role" class="form-control" value="<?= $staff_data['role'];?>">
              </div>
              <div class="form-group">
                  <label>Eligibility for incentive </label>
                  <select class="form-control" name="eligibility_for_incentives">
                    <option value="">-- select Eligibility for incentive --</option>
                  <?php foreach($eligible_incentive as $key => $value ){?>
                   
                   <option value="<?= $key?>"<?= $key == $staff_data['eligibility_for_incentives'] ? 'selected' : '';?>><?= $value?></option>
                   <?php } ?>
                   </select>
              </div>
              
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="button" class="btn btn-outline-primary"
                  data-dismiss="modal">Cancel</button>
              
          </div>
          </form>
      </div>
 </div>
<script type="text/javascript">
 $(document).ready(function(){  
  $('#save_staff_list_form').on('submit',function(event){

    event.preventDefault();
  //var brand_name = $('#brand_name').val().trim();
   var formdata = new FormData(this);

       $.ajax({
            url: '<?php echo base_url().'save-institutions-staff-list'; ?>',
            type: 'POST',
            dataType: 'json',
            data: formdata,          
          processData: false,
          contentType: false,
            beforeSend: function()
            {
                $(".main-loader").fadeIn();
            },      
            success:function(data)
            {
                $('#staff_managment_list').modal('hide');
                toastr[data.type](data.msg);
                page_update();
            }   
        });
       return false;
    });

});
</script>
<script type="text/javascript">
  
  $("#date_of_birth").datepicker({
    inline:true,
    formate:"yyyy-mm-dd",
    maxDate:"today"
  });
</script>