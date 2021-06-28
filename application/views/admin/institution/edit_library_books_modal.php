<div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header custom-modal">
              <h5 class="modal-title white">Edit Books Details</h5>
              <button type="button" class="close white" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
            <form id="save_book_form" name="save_book_form" method="post" enctype="multipart/form-data"  role="form" onsubmit="return false;">
                <div class="modal-body">
                    <input type="hidden" class="form-control" name="id" value="<?= $book_data['id'];?>">
                    <div class="form-group">
                        <label>Book Category</label>
                       <select name="book_category_id" class="form-control" readonly>
                            <?php foreach($category_list as $book_category): ?>
                                <option value="<?= $book_category['id']?>"> <?= $book_category['book_category'] ?> 
                                </option>
                            <?php endforeach; ?>

                        </select>
                    </div>
                    <div class="form-group">
                        <label>Book Name</label>
                        <input type="text" class="form-control" name="book_name" value="<?= $book_data['book_name'];?>">
                    </div>
                    <div class="form-group">
                        <label>Author Name</label>
                        <input type="text" class="form-control" name="author_name" value="<?= $book_data['author_name'];?>">
                    </div>
                    <div class="form-group">
                        <label>Pages</label>
                        <input type="text" class="form-control" name="pages" value="<?= $book_data['pages'];?>">
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" class="form-control" name="price" value="<?= $book_data['price'];?>">
                    </div>
                    <div class="form-group">
                        <label>Books Count </label>
                        <input type="text" class="form-control" name="book_count" value="<?= $book_data['book_count'];?>">
                    </div>
                    <div class="form-group">
                        <label>Available Count  </label>
                        <input type="text" class="form-control" name="available_count" value="<?= $book_data['available_count'];?>">
                    </div>
                    <div class="form-group">
                        <label>Issued Count </label>
                        <input type="text" class="form-control" name="issued_count" value="<?= $book_data['issued_count'];?>">
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
  $('#save_book_form').on('submit',function(event){

    event.preventDefault();
  //var brand_name = $('#brand_name').val().trim();
   var formdata = new FormData(this);

       $.ajax({
            url: '<?php echo base_url().'save-institutions-library-books'; ?>',
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
                $('#edit_library_books').modal('hide');
                toastr[data.type](data.msg);
                page_update();
            }   
        });
       return false;
    });

});
</script>
