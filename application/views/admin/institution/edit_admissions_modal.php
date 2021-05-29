
      <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
             <form  id="edit_admissions" name="edit_admissions" method="post" enctype="multipart/form-data"  role="form" onsubmit="return false;">
              <div class="modal-header custom-modal">
                  <h5 class="modal-title white">Edit admissions Details</h5>
                  <button type="button" class="close white" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                <input type="hidden" name="id" value="<?= $student_data['id'] ?>">
                <div class="row">
                <div class="col-sm-12" style="margin-bottom: 10px;">
                  <img src="<?php echo base_url();?>assets/img/profiles/l-2.jpg" class="img-thumbnail border-0 rounded-circle list-thumbnail table_img mr-15">
                  <h6><?= $student_data['student_name'] ?></h6>
                <!-- <p class="text-muted">Certificate no. : <?= $student_data['certificate_no'] ?></p> -->
                </div>
                
                <div class="separator mb-1"></div>
                    <div class="col-sm-6" style="margin-bottom: 10px;">
                        <label> <strong>Username</strong></label>
                      <input class="form-control" type="text" name="username" id="username" value="<?= $student_data['username'] ?>" readonly/>
                    </div>
                    <div class="col-sm-6" style="margin-bottom: 10px;">
                        <label><strong>Student name</strong></label>
                      <input class="form-control" type="text" name="name" id="name" value="<?= $student_data['student_name'] ?>" />
                    </div>
                    <div class="col-sm-6" style="margin-bottom: 10px;">
                        <label><strong>Password</strong></label>
                        <input class="form-control" type="text" name="password" id="password" value="<?= $student_data['password'] ?>" />  
                    </div>
                    <div class="col-sm-6" style="margin-bottom: 10px;">
                        <label><strong>Course Duration</strong></label>
                      <input class="form-control" type="text" name="course_duration" id="course_duration" value="<?= $student_data['course_duration'] ?>" />
                    </div>
                     
                    <div class="col-sm-6" style="margin-bottom: 10px;">
                        <label><strong>Course Fee</strong></label>
                         <input class="form-control" type="text" name="course_fee" id="course_fee" value="<?= $student_data['course_fee'] ?>"/> 
                    </div> 
                    <div class="col-sm-6" style="margin-bottom: 10px;">
                        <label><strong>Balance Fee</strong></label>
                         <input class="form-control" type="text" name="balance_fee" id="balance_fee" value="<?= $student_data['balance_fee'] ?>"/> 
                    </div> 
                    <div class="col-sm-6" style="margin-bottom: 10px;">
                        <label><strong>Admission Date</strong></label>
                        <input class="form-control datepicker" type="text" name="admissiondate" id="admissiondate" value="<?= format_date($student_data['admission_date'],'m/d/y') ?>"readonly/> 
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
  
$('#edit_admissions').on('submit',function(event){

    event.preventDefault();
//var brand_name = $('#brand_name').val().trim();
 var form_data = $('#edit_admissions').serialize();

$.ajax({
    url: '<?php echo base_url().'save-institutions-admissions'; ?>',
    type: 'POST',
    dataType: 'json',
    data: form_data,
    beforeSend: function()
    {
        $(".main-loader").fadeIn();
    },      
    success:function(data)
    {
        $('#edit_admission').modal('hide');
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