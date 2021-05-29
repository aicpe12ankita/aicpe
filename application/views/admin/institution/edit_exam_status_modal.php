
      <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
             <form  id="edit_exam_status_form" name="edit_exam_status_form" method="post" enctype="multipart/form-data"  role="form" onsubmit="return false;">
              <div class="modal-header custom-modal">
                  <h5 class="modal-title white">Edit Exam Status Details</h5>
                  <button type="button" class="close white" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                <input type="hidden" name="id" value="<?= $get_exam_status_detail['id'] ?>">
                <div class="row">
                <div class="col-sm-12" style="margin-bottom: 10px;">
                  <img src="<?php echo base_url();?>assets/img/profiles/l-2.jpg" class="img-thumbnail border-0 rounded-circle list-thumbnail table_img mr-15">
                  <h6><?= $get_exam_status_detail['student_name'] ?></h6>
                <!-- <p class="text-muted">Certificate no. : <?= $get_exam_status_detail['certificate_no'] ?></p> -->
                </div>
                
                <div class="separator mb-1"></div>
                    <div class="col-sm-6" style="margin-bottom: 10px;">
                        <label> <strong>Username</strong></label>
                      <input class="form-control" type="text" name="username" id="username" value="<?= $get_exam_status_detail['username'] ?>" readonly/>
                    </div>
                    <div class="col-sm-6" style="margin-bottom: 10px;">
                        <label><strong>Student name</strong></label>
                      <input class="form-control" type="text" name="name" id="name" value="<?= $get_exam_status_detail['student_name'] ?>" />
                    </div>
                    <div class="col-sm-6" style="margin-bottom: 10px;">
                        <label><strong>Student ID</strong></label>
                      <input class="form-control" type="text" name="student_id" id="student_id" value="<?= $get_exam_status_detail['main_student_id'] ?>" />
                    </div>
                    <div class="col-sm-6" style="margin-bottom: 10px;">
                        <label><strong>Password</strong></label>
                        <input class="form-control" type="text" name="password" id="password" value="<?= $get_exam_status_detail['password'] ?>" />  
                    </div>
                    <div class="col-sm-6" style="margin-bottom: 10px;">
                        <label><strong>Course Duration</strong></label>
                      <input class="form-control" type="text" name="course_duration" id="course_duration" value="<?= $get_exam_status_detail['course_duration'] ?>" />
                    </div>
                    <div class="col-sm-6" style="margin-bottom: 10px;">
                        <label><strong>Course Fee</strong></label>
                         <input class="form-control" type="text" name="course_fee" id="course_fee" value="<?= $get_exam_status_detail['course_fee'] ?>"/> 
                    </div> 
                    <div class="col-sm-6" style="margin-bottom: 10px;">
                        <label><strong>Balance Fee</strong></label>
                         <input class="form-control" type="text" name="balance_fee" id="balance_fee" value="<?= $get_exam_status_detail['balance_fee'] ?>"/> 
                    </div> 
                     <div class="col-sm-6" style="margin-bottom: 10px;">
                        <label><strong>Available Exam Mode</strong></label>
                      <!-- <input class="form-control" type="text" name="available_exam_mode" id="available_exam_mode" value="<?php //echo ucfirst($get_exam_status_detail['available_exam_mode']) ?>" /> -->
                      <select class="form-control" name="available_exam_mode" id="available_exam_mode">
                          <option value="online" <?= isset($get_exam_status_detail['available_exam_mode']) && $get_exam_status_detail['available_exam_mode'] == 'online' ? 'selected' : '' ?> > Online</option>
                          <option value="offline" <?= isset($get_exam_status_detail['available_exam_mode']) && $get_exam_status_detail['available_exam_mode'] == 'offline' ? 'selected' : '' ?> > Offline</option>
                      </select>
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
  
$('#edit_exam_status_form').on('submit',function(event){

    event.preventDefault();
//var brand_name = $('#brand_name').val().trim();
 var form_data = $('#edit_exam_status_form').serialize();

$.ajax({
    url: '<?php echo base_url().'save-institutions-exam-status'; ?>',
    type: 'POST',
    dataType: 'json',
    data: form_data,
    beforeSend: function()
    {
        $(".main-loader").fadeIn();
    },      
    success:function(data)
    {
        $('#edit_exam_status').modal('hide');
        toastr[data.type](data.msg);

        page_update();

    }
});


return false;
});


</script>