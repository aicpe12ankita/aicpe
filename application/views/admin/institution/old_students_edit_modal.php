
      <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
             <form  id="edit_old_student_data" name="edit_old_student_data" method="post" enctype="multipart/form-data"  role="form" onsubmit="return false;">
              <div class="modal-header custom-modal">
                  <h5 class="modal-title white">Edit Dropout Student Details</h5>
                  <button type="button" class="close white" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                <input type="hidden" name="id" value="<?= $student_data['id'] ?>">
                <div class="row">
                <div class="col-sm-12">
                  <img src="<?php echo base_url();?>assets/img/profiles/l-2.jpg" class="img-thumbnail border-0 rounded-circle list-thumbnail table_img mr-15">
                  <h6><?= $student_data['student_name'] ?></h6>
                <p class="text-muted">Certificate no. : <?= $student_data['certificate_no'] ?></p>
                </div>
                
                <div class="separator mb-1"></div>

                    <div class="col-sm-6" style="margin-bottom: 10px;">
                        <label> <strong>Username</strong></label>
                      <input class="form-control" type="text" name="username" id="username" value="<?= $student_data['username'] ?>" readonly/>
                    </div>
                    <div class="col-sm-6" style="margin-bottom: 10px;">
                           <label><strong>Password</strong></label>
                      <input class="form-control" type="text" name="password" id="password" value="<?= $student_data['password'] ?>" />  
                    </div>
                    <div class="col-sm-6" style="margin-bottom: 10px;">
                        <label><strong>Student name</strong></label>
                      <input class="form-control" type="text" name="name" id="name" value="<?= $student_data['student_name'] ?>" />
                    </div>
                    <div class="col-sm-6" style="margin-bottom: 10px;" >
                        <label><strong>Mobile No.</strong></label>
                      <input class="form-control" type="text" name="mobileno" id="mobileno" value="<?= $student_data['mobile_no'] ?>"/> 
                    </div> 
                    <div class="col-sm-6" style="margin-bottom: 10px;">
                        <label><strong>Grade</strong></label>
                     <!--  <input class="form-control" type="text" name="grade" id="grade" value="<?= $student_data['grade'] ?>"/> -->
                     <select class="form-control" name="grade" id="grade">
                        <option value="">-- Select Grade---</option>
                        <?php foreach ($grade_array as $key => $value) { ?>
                        <option value="<?= $key?>" <?= $key == $student_data['grade'] ? 'selected' :'' ?>>
                          <?= $value ?></option>
                       <?php } ?>
                     </select>
                    </div> 
                    <div class="col-sm-6" style="margin-bottom: 10px;">
                        <label><strong>Exam Date</strong></label>
                      <input class="form-control datepicker" type="text" name="examdate" id="examdate" value="<?= format_date($student_data['exam_date'],'m/d/y') ?>"/> 
                    </div> 
                    <div class="col-sm-6" style="margin-bottom: 10px;">
                        <label><strong>Certificate Date</strong></label>
                      <input class="form-control datepicker" type="text" name="certificatedate" id="certificatedate" value="<?= format_date($student_data['certificate_date'],'m/d/y') ?>"/> 
                    </div> 
                    <div class="col-sm-6" style="margin-bottom: 10px;">
                        <label><strong>Admission Date</strong></label>
                      <input class="form-control datepicker" type="text" name="admissiondate" id="admissiondate" value="<?= format_date($student_data['admission_date'],'m/d/y') ?>"/> 
                    </div> 
             </div>
            </div>
            <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button type="button" class="btn btn-outline-primary"
                    data-dismiss="modal">Cancel</button>

                </div>
          </form>
        </div>

    </div>
<script type="text/javascript">
  
$('#edit_old_student_data').on('submit',function(event){

    event.preventDefault();
//var brand_name = $('#brand_name').val().trim();
 var form_data = $('#edit_old_student_data').serialize();

$.ajax({
    url: '<?php echo base_url().'save-institutions-old-students'; ?>',
    type: 'POST',
    dataType: 'json',
    data: form_data,
    beforeSend: function()
    {
        $(".main-loader").fadeIn();
    },      
    success:function(data)
    {
        $('#edit_old_student').modal('hide');
        toastr[data.type](data.msg);

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

return false;
});


</script>