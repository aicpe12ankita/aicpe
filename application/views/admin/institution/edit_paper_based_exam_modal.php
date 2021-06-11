<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header custom-modal">
      <h5 class="modal-title white">Update Paper Based Exam </h5>
      <button type="button" class="close white" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<form id="edit_paper_based_exam">
    <div class="modal-body">
        <div class="form-group">
            <input type="hidden" name="id" class="form-control" value="<?= $student_data['id']?>">
        </div>
    <div class="form-group">
      <label>Student ID :</label>
      <input type="text" name="student_id" class="form-control" value="<?= $student_data['student_id']?>" readonly>
    </div>
    <div class="form-group">
      <label>Student Name :</label>
      <input type="text" name="student_name" class="form-control" value="<?= $student_data['student_name']?>" readonly>
    </div>
      <div class="form-group">
        <label>Course Duration</label>
        <input type="text" name="course_duration" class="form-control" value="<?= $student_data['course_duration']?>" readonly>
    </div>
     <div class="form-group">
        <label>Username</label>
        <input type="text" name="username" class="form-control" value="<?= $student_data['username']?>"readonly>
    </div> 
    <div class="form-group">
        <label>Password</label>
        <input type="text" name="password" class="form-control" value="<?= $student_data['password']?>"readonly>
    </div>
     <div class="form-group">
        <label>Exam Status</label>
        <!-- <input type="text" name="status" class="form-control" value="<?= $student_data['status']?>"> -->
        <select name="status" class="form-control">
            <option value="">Select exam Status</option>
            <option value="0"<?= $student_data['status'] == '0'? 'selected' : '' ?>>Appeared</option>
            <option value="1"<?= $student_data['status'] == '1'? 'selected' : '' ?>>Disappeared</option>
        </select>
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
  
$('#edit_paper_based_exam').on('submit',function(event){

    event.preventDefault();
//var brand_name = $('#brand_name').val().trim();
 var form_data = $('#edit_paper_based_exam').serialize();

$.ajax({
    url: '<?php echo base_url().'save-institutions-paper-based-exam'; ?>',
    type: 'POST',
    dataType: 'json',
    data: form_data,
    beforeSend: function()
    {
        $(".main-loader").fadeIn();
    },      
    success:function(data)
    {
        $('#paper_based_exam').modal('hide');
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