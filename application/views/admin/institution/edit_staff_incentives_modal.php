<div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header custom-modal">
              <h5 class="modal-title white">Edit Staff Incentives Details</h5>
              <button type="button" class="close white" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <form id="save_staff_incentives_form" name="save_staff_incentives_form" method="post" enctype="multipart/form-data"  role="form" onsubmit="return false;">

              <div class="modal-body">
                  <input type="hidden" class="form-control" name="id" value="<?php echo $incentives_data['id'];?>">
                  <input type="hidden" class="form-control" name="staff_id" value="<?php echo $incentives_data['staff_id'];?>">
                  <div class="form-group">
                    <label>Staff Name </label>
                    <input type="text" class="form-control" name="staff_name" value="<?php echo $incentives_data['staff_name'];?>">
                  </div>
                  <div class="form-group">
                      <label>Email</label>
                      <input type="text" class="form-control" name="email" value="<?= $incentives_data['email'];?>">
                  </div>
                  <div class="form-group">
                      <label>Mobile NO</label>
                      <input type="text" class="form-control"  name="mobile_no" value="<?= $incentives_data['mobile_no'];?>">
                  </div>
                  <div class="form-group">
                      <label>Task Assign Date </label>
                        <div class="input-group">
                            <div class="input-group ">
                              <span class="input-group-text input-group-append input-group-addon">
                                    <i class="simple-icon-calendar"></i>
                              </span>
                              <input type="text" class="form-control" id="task_assign_date" name="task_assign_date" value="<?= format_date($incentives_data['task_assign_date'],'d-m-y');?>" >
                            </div>
                        </div>
                  </div>
                  <div class="form-group">
                      <label>Task</label>
                      <input type="text" class="form-control"  name="task" value="<?= $incentives_data['task'];?>">
                  </div>
                  <div class="form-group">
                      <label>Description</label>
                      <input type="text" class="form-control"  name="description" value="<?= $incentives_data['description'];?>">
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
 $('#save_staff_incentives_form').on('submit',function(event){

    event.preventDefault();
//var brand_name = $('#brand_name').val().trim();
 var form_data = $('#save_staff_incentives_form').serialize();

$.ajax({
    url: '<?php echo base_url().'save-institutions-staff-incentives'; ?>',
    type: 'POST',
    dataType: 'json',
    data: form_data,
    beforeSend: function()
    {
        $(".main-loader").fadeIn();
    },      
    success:function(data)
    {
        $('#edit_staff_incentive').modal('hide');
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
<script type="text/javascript">
  
  $("#task_assign_date").datepicker({
    inline:true,
    formate:"yyyy-mm-dd",
    maxDate:"today"
  });
</script>