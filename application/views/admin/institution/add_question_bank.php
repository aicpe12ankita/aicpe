                    
<div class="card">
    <div class="card-header progress-bar pt-20">
        <h5 class="text-center"> <?= isset($id) && $id!='' ? 'Edit' : 'Add'?> Question And Answer</h5>
    </div>
    <div class="card-body">
         <?= isset($id) && $id!='' ? '<form method="post" enctype="multipart/form-data" id="edit_question_and_ans" onsubmit="return false;">' : '<form method="post" enctype="multipart/form-data" id="add_question" onsubmit="return false;">' ?>
                
            <div class="form-group">
                <label>Subject</label>
                <select class="form-control select2-single" name="subject">
                        <option>-- Select Subject --</option>
                        <?php if($subjects!=""){
                          foreach ($subjects as $subject) { ?>
                            <option value="<?php echo $subject['sub_id']; ?>" <?php if(isset($id) && $id!=''){ if($data['qa_sub_id']==$subject['sub_id']){ echo "selected"; }} ?>><?php echo $subject['sub_title']; ?></option>
                          <?php } } ?>
                </select>
            </div>
            <!-- <div class="form-group">
                <label>Subject</label>
                <select name="qa_subject" class="form-control select2-single" data-width="100%">
                    <option label="&nbsp;">&nbsp;</option>
                    <option value="Flexbox">Subject 1</option>
                    <option value="Sass">Subject 2</option>
                    <option value="React">Subject 3</option>
                    <option value="React">Subject 4</option>
                    <option value="React">Subject 5</option>
                </select>
            </div> -->
            <div class="form-group">
                <label>Question</label>
                <input type="text" class="form-control" name="question" value="<?= isset($id) && $id!='' ? $data['qa_question'] : '' ?>">
            </div>
             <div class="form-group">
                    <label>Question Image</label>
                     <?php if(isset($data['qa_que_img']) && $data['qa_que_img'] !== ''): ?>
                          <div>  <img height="100px" width="100px" src="<?php echo base_url().'uploads/question_bank/'.$data['qa_que_img']; ?>"></div><br/>
                        <?php endif; ?>
                    <div class="input-group">
                       
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" required="required" name="que_img">
                            <label class="custom-file-label">Choose file</label>
                        </div>
                    </div>
                  </div>
                  <div class="form-group">
                      <label>Option 1</label>
                      <input type="text" class="form-control"  required="required" name="option_1" value="<?= isset($id) && $id!='' ? $data['qa_option_1'] : '' ?>">
                  </div>
                  <div class="form-group">
                      <label>Option 1 Image</label>
                      <?php if(isset($data['qa_option_1_img']) && $data['qa_option_1_img'] !== ''): ?>
                          <div>  <img height="100px" width="100px" src="<?php echo base_url().'uploads/question_bank/'.$data['qa_option_1_img']; ?>"></div><br/>
                        <?php endif; ?>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" value="<?= isset($data['qa_option_1_img']) ? $data['qa_option_1_img'] : ''?>" required="required" id="inputGroupFile01" name="option_1_img">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
                  </div>
                  <div class="form-group">
                      <label>Option 2</label>
                      <input type="text" class="form-control" required="required" name="option_2" value="<?= isset($id) && $id!='' ? $data['qa_option_2'] : '' ?>">
                  </div>
                  <div class="form-group">
                      <label>Option 2 Image</label>
                       <?php if(isset($data['qa_option_2_img']) && $data['qa_option_2_img'] !== ''): ?>
                          <div>  <img height="100px" width="100px"  src="<?php echo base_url().'uploads/question_bank/'.$data['qa_option_2_img']; ?>"></div><br/>
                        <?php endif; ?>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" required="required" value="<?= isset($data['qa_option_2_img']) ? $data['qa_option_2_img'] : ''?>" class="custom-file-input" id="inputGroupFile02" name="option_2_img">
                            <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                        </div>
                    </div>
                  </div>
                  <div class="form-group">
                      <label>Option 3</label>
                      <input type="text" required="required" class="form-control" name="option_3" value="<?= isset($id) && $id!='' ? $data['qa_option_3'] : '' ?>">
                  </div>
                  <div class="form-group">
                      <label>Option 3 Image</label>
                       <?php if(isset($data['qa_option_3_img']) && $data['qa_option_3_img'] !== ''): ?>
                         <div>   <img height="100px" width="100px"  src="<?php echo base_url().'uploads/question_bank/'.$data['qa_option_3_img']; ?>"></div><br/>
                        <?php endif; ?>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" required="required" value="<?= isset($data['qa_option_3_img']) ? $data['qa_option_3_img'] : ''?>" class="custom-file-input" id="inputGroupFile03" name="option_3_img">
                            <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
                        </div>
                    </div>
                  </div>
                  <div class="form-group">
                      <label>Option 4</label>
                      <input type="text" required="required" class="form-control" name="option_4" value="<?= isset($id) && $id!='' ? $data['qa_option_4'] : '' ?>">
                  </div>
                  <div class="form-group">
                      <label>Option 4 Image</label>
                        <?php if(isset($data['qa_option_4_img']) && $data['qa_option_4_img'] !== ''): ?>
                           <div>   <img height="100px" width="100px"  src="<?php echo base_url().'uploads/question_bank/'.$data['qa_option_4_img']; ?>"></div>  <br/>
                        <?php endif; ?>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" required="required" value="<?= isset($data['qa_option_4_img']) ? $data['qa_option_4_img'] : ''?>" class="custom-file-input" id="inputGroupFile04" name="option_4_img">
                            <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                        </div>
                    </div>
                  </div>
                   <div class="form-group">
                      <label>Correct Option</label>
                      <select class="form-control select2-single" required="required" name="correct_option">
                        <option>&nbsp;</option>
                        <option value="1" <?php if(isset($data['qa_correct_option']) && $data['qa_correct_option']==1){ echo 'selected'; } ?>>1</option>
                        <option value="2" <?php if(isset($data['qa_correct_option']) && $data['qa_correct_option']==2){ echo 'selected'; } ?>>2</option>
                        <option value="3" <?php if(isset($data['qa_correct_option']) && $data['qa_correct_option']==3){ echo 'selected'; } ?>>3</option>
                        <option value="4" <?php if(isset($data['qa_correct_option']) && $data['qa_correct_option']==4){ echo 'selected'; } ?>>4</option>
                      </select>
                  </div>
                  
                  <input type="hidden" name="id" value="<?= isset($data['qa_id']) && $data!="" ? $data['qa_id'] : "" ?>">
                  <?= isset($id) && $id!="" ? '<button type="submit" class="btn btn-primary">Update</button>' : '<button type="submit" class="btn btn-primary">Submit</button>' ?>

          <!--   <button type="submit" class="btn btn-primary">Submit</button> -->
            <!-- <button type="button" class="btn btn-outline-primary">Cancel</button> -->
        </form>
    </div>
</div>


