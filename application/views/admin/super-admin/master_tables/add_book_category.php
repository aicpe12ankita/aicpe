  <div class="card">
       <div class="card-header progress-bar pt-20">
          <h5 class="text-center"><?= isset($type) && $type !=="" ? "Edit Book Category" : "Add Book Category" ?></h5>
      </div>
      <div class="card-body">
          <?= isset($type) && $type !=="" ? '<form id="edit_book_category" method="post">' : '<form id="add_book_category" method="post">' ?>
            <div class="form-group">
              <label>Book Category</label>
              <input type="text" class="form-control" name="title" value="<?= isset($book_category) && $book_category!="" ?  $book_category->category_name : "" ?>" required>
            </div>
             <input type="hidden" name="id" value="<?= isset($book_category) && $book_category!="" ?  $book_category->id : "" ?>">
            <?= isset($type) && $type !=="" ? '<button type="submit" class="btn btn-primary" id="" name="update" value="update">Update</button>' : '<button type="submit" class="btn btn-primary" id="" name="submit" value="submit">Submit</button>' ?> 
          </form>
      </div>
  </div>

   <script type="text/javascript">
  $(document).ready(function(){
    $('#edit_book_category').validate({
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
      submitHandler:function(form){
       // $('#add_book_category').on('submit', function(e){ 
      //e.preventDefault();
       var formdata = new FormData(form);
      $.ajax({
              url: base+'add-book-categories',
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
                    toastr.success('Book Category has been updated successfully','Success',{timeOut:5000});
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