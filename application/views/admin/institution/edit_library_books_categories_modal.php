<div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header custom-modal">
              <h5 class="modal-title white">Edit Book Category Details</h5>
              <button type="button" class="close white" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
            <form id="save_book_category_form" name="save_book_category_form" method="post" enctype="multipart/form-data"  role="form" onsubmit="return false;">
                <div class="modal-body">
                    <input type="hidden" class="form-control" name="id" value="<?= $book_category_data['id'];?>">
                    <div class="form-group">
                        <label>Book Category</label>
                        <input type="text" class="form-control" name="book_category" value="<?= $book_category_data['book_category'];?>">
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
  $('#save_book_category_form').on('submit',function(event){

    event.preventDefault();
  //var brand_name = $('#brand_name').val().trim();
   var formdata = new FormData(this);

       $.ajax({
            url: '<?php echo base_url().'save-institutions-library-books-categories'; ?>',
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
                $('#edit_book_category').modal('hide');
                toastr[data.type](data.msg);
                page_update();
            }   
        });
       return false;
    });

});
</script>
