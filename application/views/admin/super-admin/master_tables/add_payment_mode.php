                    <div class="card">
                         <div class="card-header progress-bar pt-20">
                            <h5 class="text-center"><?= isset($type) && $type !=="" ? "Edit Payemnt Mode" : "Add Payemnt Mode" ?></h5>
                        </div>
                        <div class="card-body">
                            <?= isset($type) && $type !=="" ? '<form id="edit_payment_mode" method="post">' : '<form id="add_payment_mode" method="post">' ?>
                              <div class="form-group">
                                <label>Payment Mode</label>
                                <input type="text" class="form-control" name="title" value="<?= isset($payment_mode) && $payment_mode!="" ?  $payment_mode->p_title : "" ?>" required>
                              </div>
                               <input type="hidden" name="p_id" value="<?= isset($payment_mode) && $payment_mode!="" ?  $payment_mode->p_id : "" ?>">
                              <?= isset($type) && $type !=="" ? '<button type="submit" class="btn btn-primary" id="" name="update" value="update">Update</button>' : '<button type="submit" class="btn btn-primary" id="" name="submit" value="submit">Submit</button>' ?> 
                            </form>
                        </div>
                    </div>

 <script type="text/javascript">
  $(document).ready(function(){
     $('#edit_payment_mode').validate({
      rules:{
        "title":{
          required:true
        }
      },
      messages:{
        "title":{
          required:'Please enter title!'
        }
      },
      submitHandler: function(form) {
         // $('#add_payment_mode').on('submit', function(e){ 
          //e.preventDefault();
           var formdata = new FormData(form);
          $.ajax({
                  url: base+'add-payment-mode',
                  type:'post',
                  data: formdata,
                  processData: false,
                  contentType: false,
                  dataType: 'json',
                  beforeSend: function()
                  {
                    $(".main-loader").show();
                  },      
                  complete:function()
                  {
                    $(".main-loader").hide();
                  },
                  success: function(response){
                      if(response==true){
                        toastr.success('Payment mode has been updated successfully','Success',{timeOut:5000});
                        window.location.reload();
                      }else{
                        toastr.error('Please try again later','Failed',{timeOut:5000});
                      }
                  }
          });
        //});
      }
    });
    
  });
</script>