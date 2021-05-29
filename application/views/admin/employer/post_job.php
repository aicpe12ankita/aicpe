<?php $this->load->view('admin/includes/employer_header'); ?>

    <main>
         <div class="row">
            <div class="col-12">
                <h1>Post Job</h1>
                <div class="text-zero top-right-button-container">
                  <a href="<?php echo base_url(); ?>employer-post-jobs-report"><button type="button" class="btn btn-primary btn-lg top-right-button mr-1">Back</button></a>
                </div>
                <div class="separator mb-5"></div>
            </div>
        </div>
        <div class="container-fluid">
           
            <div class="row">
                
                <div class="col-12 col-lg-7 col-xl-8 col-left">
                    <div class="card mb-4">
                        <div class="card-body">

                            <form id="exampleForm" class="tooltip-label-right" novalidate>
                                
                                <label class="form-group has-top-label">
                                    <input class="form-control" name="j_jobTitle" required />
                                    <span>Job Title</span>
                                </label>
                                <label class="form-group has-top-label">
                                    <input class="form-control" name="j_Qualification" />
                                    <span>Qualification</span>
                                </label>
                                <label class="form-group has-top-label">
                                    <input class="form-control" name="j_payScale" />
                                    <span>Pay scale</span>
                                </label>
                                
                                <label class="form-group has-top-label">
                                    <input class="form-control" name="j_skills" />
                                    <span>Skills</span>
                                </label>
                                <div class="form-group">
                                    <label>Eligibility</label>
                                    <textarea class="form-control" name="j_jobRequirments" id="ckEditorClassic" name="p_address">
                                    </textarea>
                                </div>
                                 <div class="form-group">
                                    <label>Job Description</label>
                                    <textarea class="form-control" name="j_jobDescription" id="ckEditorClassic01" name="p_address">
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label>Chat Facility</label>
                                    <select class="form-control">
                                        <option>No</option>
                                        <option>Yes</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary" type="button" name="post" data-toggle="modal" data-target="#addEnquiry">Post</button>
                                <button class="btn btn-outline-primary" type="submit" name="cancel">Cancel</button>
                            
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5 col-xl-4 col-right">
                    <div class="card">
                        <div class="card-body">
                            <h4>Send SMS</h4>
                            <form>
                                <div class="form-group">
                                    <label>Select State</label>
                                    <select class="form-control">
                                        <option></option>
                                        <option>XYZ</option>
                                        <option>ABC</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Select City</label>
                                    <select class="form-control">
                                        <option></option>
                                        <option>XYZ</option>
                                        <option>ABC</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Select Institute</label>
                                    <select class="form-control">
                                        <option></option>
                                        <option></option>
                                        <option>XYZ</option>
                                        <option>ABC</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Select Course</label>
                                    <select class="form-control">
                                        <option></option>
                                        <option>XYZ</option>
                                        <option>ABC</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

     <div class="modal fade" id="addEnquiry" tabindex="-1" role="dialog" aria-labelledby="addEnquiry" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                
                <form>
                   
                    <div class="form-group">
                      <label>Do you get employees from last uploaded jobs?</label>
                      <input type="text" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                      <label>Do you get candidates from AICPE?</label>
                      <input type="text" class="form-control" placeholder="">
                    </div>
                  
                </form>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-outline-primary"
                      data-dismiss="modal">Cancel</button>
                  
              </div>
          </div>
      </div>
  </div>
    <?php $this->load->view('admin/includes/footer'); ?>