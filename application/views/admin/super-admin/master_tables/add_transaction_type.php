                    <div class="card">
                         <div class="card-header progress-bar pt-20">
                            <h5 class="text-center"><?= isset($type) && $type !=="" ? "Edit Transaction Type" : "Add Transaction Type" ?></h5>
                        </div>
                        <div class="card-body">
                            <?= isset($type) && $type =="edit" ? '<form id="edit_transaction_type" method="post" onsubmit="return false;">' : '<form id="add_transaction_type" method="post">' ?>
                              <div class="form-group">
                                <label>Transaction Type</label>
                                <input type="text" class="form-control" name="title" value="<?= isset($transaction_type) && $transaction_type!="" ?  $transaction_type->t_title : "" ?>" required>
                              </div>
                               <input type="hidden" name="t_id" value="<?= isset($transaction_type) && $transaction_type!="" ?  $transaction_type->t_id : "" ?>">
                              <?= isset($type) && $type !=="" ? '<button type="submit" class="btn btn-primary" id="" name="update" value="update">Update</button>' : '<button type="submit" class="btn btn-primary" id="" name="submit" value="submit">Submit</button>' ?> 
                            </form>
                        </div>
                    </div>


<script type="text/javascript">
  $(document).ready(function(){
     $('#edit_transaction_type').validate({
      rules:{
        "title":{
          required:true
        }
      },
      messages:{
        "title":{
          required:'Please enter transaction type!'
        }
      },
      submitHandler: function(form) {
         // $('#add_transaction_type').on('submit', function(e){ 
          //e.preventDefault();
           var formdata = new FormData(form);
          $.ajax({
                  url: base+'add-transaction-type',
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
                        toastr.success('Transaction type has been updated successfully','Success',{timeOut:5000});
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