 <div class="card">
                         <div class="card-header progress-bar pt-20">
                            <h5 class="text-center"><?= isset($type) && $type =="edit" ? "Edit E-Book" : "Add E-Book" ?> </h5>
                        </div>
                        <div class="card-body">
                             <?= isset($type) && $type =="edit" ? '<form id="edit_e_book" method="post" enctype="multipart/form-data" onsubmit="return false;">' : '<form id="add_e_book" method="post" enctype="multipart/form-data" onsubmit="return false;">' ?>
                                <div class="form-group">
                                    <label>Category<span class="mandetory">*</span></label>
                                    <select class="form-control select2-single" data-width="100%" name="book_category" required>
                                        <option></option>
                                        <?php if($categories!=""){ foreach ($categories as $cat) { ?>
                                            <option value="<?php echo $cat->id; ?>" <?php if(isset($e_books) && $e_books!=""){ if($e_books->eb_book_category == $cat->id){ echo "selected"; }} ?>><?php echo $cat->category_name; ?></option>
                                        <?php }} ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Book Title<span class="mandetory">*</span></label>
                                    <input type="text" name="book_title" class="form-control" value="<?= isset($e_books) && $e_books!="" ?  $e_books->eb_title : "" ?>" required>
                                </div>
                                <div class="form-group">
                                    <label>Author</label>
                                    <input type="text" name="author" class="form-control" value="<?= isset($e_books) && $e_books!="" ?  $e_books->eb_auther : "" ?>">
                                </div>
                                <div class="form-group">
                                    <label>Pages</label>
                                    <input type="text" name="pages" class="form-control" value="<?= isset($e_books) && $e_books!="" ?  $e_books->eb_pages : "" ?>">
                                </div>
                                <div class="form-group">
                                    <label>Summery</label>
                                    <textarea class="form-control" cols="2" name="summery"><?= isset($e_books) && $e_books!="" ?  $e_books->eb_summery : "" ?></textarea>
                                </div>
                                <div class="form-group">
                                      <label>Upload File </label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="book_pdf">
                                            <label class="custom-file-label" for="book_pdf">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Link</label>
                                    <input type="text" name="book_link" class="form-control" value="<?= isset($e_books) && $e_books!="" ?  $e_books->eb_link : "" ?>">
                                </div>
                                <div class="form-group">
                                    <label>Status<span class="mandetory">*</span></label>
                                    <select class="form-control select2-single" data-width="100%" name="status" required>
                                        <option></option>
                                        <option value="0" <?php if(isset($e_books) && $e_books!=""){ if($e_books->eb_status=='0'){ echo 'selected'; }} ?>>Active</option>
                                        <option value="1" <?php if(isset($e_books) && $e_books!=""){ if($e_books->eb_status=='1'){ echo 'selected'; }} ?>>Inactive</option>
                                    </select>
                                </div>
                                <?php if(isset($e_books) && $e_books!=""){
                                if($e_books->eb_file!=""){ ?>
                                  <div class="country_img mb-2">
                                    <iframe src="http://docs.google.com/gview?
url=<?php echo base_url(); ?>uploads/ebooks/<?php echo $e_books->eb_file; ?>&embedded=true" style="width:100%; height:200px;" frameborder="0"></iframe>
                                  </div> 
                                <?php }
                              } ?>
                               <input type="hidden" name="id" value="<?= isset($e_books) && $e_books!="" ?  $e_books->eb_id : "" ?>">
                               <?= isset($type) && $type !=="" ? '<button type="submit" class="btn btn-primary" id="" name="update" value="update">Update</button>' : '<button type="submit" class="btn btn-primary" id="" name="submit" value="submit">Submit</button>' ?>
                            </form>
                        </div>
                    </div>



<script type="text/javascript">
   $(document).ready(function(){ 

        $('#edit_e_book').validate({ 
      rules: {
            "book_category": {
                required: true
            },
            "book_title": {
                required: true
            },
            "status": {
                required: true
            }
        },
      messages: {
        "book_category": {
          required: 'Book category is required'
        },
        "book_title": {
          required: 'Book title is required'
        },
        "status": {
          required: 'Status is required'
        }
      },
      submitHandler: function(form) { 
           var formdata = new FormData(form);
         
          $.ajax({
                  url: '<?php echo base_url(); ?>add-e-books',
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
                        $( 'form' ).each(function(){ 
                            this.reset();
                        });
                        toastr.success('E-book has been updated successfully','Success',{timeOut:5000});
                        
                        window.location.reload();
                      }else{
                        toastr.error('Please try again later','Failed',{timeOut:5000});
                      }
                  }
             });
        }
    });
  });
</script>