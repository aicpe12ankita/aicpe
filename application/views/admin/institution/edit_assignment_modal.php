<div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header custom-modal">
                  <h5 class="modal-title white">Edit Assignment Details</h5>
                  <button type="button" class="close white" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <form id="edit_assignments_form" name="edit_assignments_form" method="post" enctype="multipart/form-data"  role="form" onsubmit="return false;">
                <input type="hidden" name="record_id" value="<?= $record_key?>">
              <div class="modal-body">
                  <div class="form-group">
                      <label>Course Name</label>
                     <select class="form-control" name="course_name">
                          <option value="">---Select Course Name--</option>
                         <?php foreach($course_array as $key => $value): ?>
                          <option value="<?= $key ?>" <?= $key == $student_data['course_name'] ? 'selected' : ''?> > <?= $value ?></option>
                        <?php endforeach; ?>
                      </select>
                  </div>
                  <div class="form-group">
                      <label>Assignment Title</label>
                      <input type="text" class="form-control" name="assignment_title" id="assignment_title" value="<?=$student_data['assignment_title'];?>">
                  </div>
                  <div class="form-group">
                      <label>Description</label>
                      <textarea name="description" id="description" class="form-control" rows="3"><?= $student_data['description'];?></textarea>
                  </div>
                  <div class="form-group">
                    <label>Post Date</label>
                    <div class="input-group ">
                      <span class="input-group-text input-group-append input-group-addon" id="post_date_icon">
                            <i class="simple-icon-calendar" ></i>
                      </span>
                      <input type="text" class="form-control" id="post_date" name="post_date" value="<?= $student_data['post_date'];?>" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Submission Date</label>
                    <div class="input-group ">
                      <span class="input-group-text input-group-append input-group-addon" id="submission_date_icon">
                            <i class="simple-icon-calendar" ></i>
                      </span>
                      <input type="text" class="form-control" id="submission_date" name="submission_date" value="<?= $student_data['submission_date'];?>" >
                    </div>
                  </div>
                  
                  <div class="form-group">
                      <label>Assign Faculty</label>
                      <select class="form-control" name="faculty">
                          <option value="">--Assign Faculty--</option>
                          <?php foreach($assign_faculty as $key => $value):?>
                          <option value="<?= $key ?>" <?= $key == $student_data['faculty'] ? 'selected' : ''?>><?= $value ?></option>
                          <?php endforeach; ?>
                      </select>
                  </div>
                  <div class="form-group">
                      <label>Upload Assignment Document</label>
                        <input type="file" value="" name="assignment_document">
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

  $("#submission_date,#post_date").datepicker({
    inline:true,
    formate:"yyyy-mm-dd",
    maxDate:"today"
  });
  $("#submission_date_icon").click(function(){
   $("#submission_date").datepicker("show");
  });

  $("#post_date_icon").click(function(){
   $("#post_date").datepicker("show");
  });


$('#edit_assignments_form').on('submit',function(event){

    event.preventDefault();
  //var brand_name = $('#brand_name').val().trim();
   var formdata = new FormData(this);

       $.ajax({
            url: '<?php echo base_url().'save-institutions-assignments'; ?>',
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
                $('#edit_assignment').modal('hide');
                toastr[data.type](data.msg);
                page_update();
            }   
        });
       return false;
    });

});
</script>
