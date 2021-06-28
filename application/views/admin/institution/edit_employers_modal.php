<div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header custom-modal">
              <h5 class="modal-title white">Edit Employers Details</h5>
              <button type="button" class="close white" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
            <form id="save_employers_form" name="save_employers_form" method="post" enctype="multipart/form-data"  role="form" onsubmit="return false;">
                <div class="modal-body">
                    <input type="hidden" class="form-control" name="id" value="<?= $employers_data['id'];?>">
                    <div class="form-group">
                        <label>Logo</label>
                         <input type="file" value="" name="logo">
                    </div>
                    <div class="form-group">
                        <label>Employer code</label>
                        <input type="text" class="form-control" name="employer_code" value="<?= $employers_data['employer_code'];?>">
                    </div>
                    <div class="form-group">
                        <label>Employer Name</label>
                        <input type="text" class="form-control" name="employer_name" value="<?= $employers_data['employer_name'];?>">
                    </div>
                    <div class="form-group">
                        <label>Company Name</label>
                        <input type="text" class="form-control" name="company_name" value="<?= $employers_data['company_name'];?>">
                    </div>
                    <div class="form-group">
                        <label>Designation</label>
                        <input type="text" class="form-control" name="designation" value="<?= $employers_data['designation'];?>">
                    </div>
                    <div class="form-group">
                          <label>Mobile No</label>
                          <input type="text" class="form-control" min="10" max="10" name="mobile_no" value="<?= $employers_data['mobile_no'];?>">
                    </div>
                    <div class="form-group">
                        <label>No.of Jobs Posted</label>
                        <input type="text" class="form-control" name="no_of_job_posted" value="<?= $employers_data['no_of_job_posted'];?>">
                    </div>
                    <div class="form-group">
                        <label>Verified</label>
                        <input type="text" class="form-control" name="verified" value="<?= $employers_data['verified'];?>">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status">
                            <option>---Select Status---</option>
                            <?php foreach ($status_array as $key => $value) { ?>
                              <option value="<?=$key?>"<?= $key== $employers_data['status'] ? 'selected':'';?>><?= $value?></option>  
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
  $('#save_employers_form').on('submit',function(event){

    event.preventDefault();
  //var brand_name = $('#brand_name').val().trim();
   var formdata = new FormData(this);

       $.ajax({
            url: '<?php echo base_url().'save-institutions-employers'; ?>',
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
                $('#edit_employers').modal('hide');
                toastr[data.type](data.msg);
                page_update();
            }   
        });
       return false;
    });

});
</script>
