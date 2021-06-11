<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header custom-modal">
      <h5 class="modal-title white">Update Exam Secret Code </h5>
      <button type="button" class="close white" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<form id="edit_codes">
<div class="modal-body">
    <div class="form-group">
        <input type="hidden" name="id" class="form-control" value="<?= $student_data['id']?>">
    </div>
<div class="form-group">
  <label>Student Name :</label>
  <input type="text" name="student_name" class="form-control" value="<?= $student_data['student_name']?>" readonly>
</div>
  <div class="form-group">
    <label>Exam Secret Code</label>
    <input type="text" name="exam_secret_code" class="form-control" value="<?= $student_data['exam_secret_code']?>">
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
  
$('#edit_codes').on('submit',function(event){

    event.preventDefault();
//var brand_name = $('#brand_name').val().trim();
 var form_data = $('#edit_codes').serialize();

$.ajax({
    url: '<?php echo base_url().'save-institutions-secrete-codes'; ?>',
    type: 'POST',
    dataType: 'json',
    data: form_data,
    beforeSend: function()
    {
        $(".main-loader").fadeIn();
    },      
    success:function(data)
    {
        $('#edit_secrete_code').modal('hide');
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