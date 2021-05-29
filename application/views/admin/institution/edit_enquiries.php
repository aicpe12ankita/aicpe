<div class="modal fade modal-right" id="editEnquiry" tabindex="-1" role="dialog" aria-labelledby="editEnquiry" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header custom-modal">
                  <h5 class="modal-title white">Edit New Enquiry</h5>
                  <button type="button" class="close white" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                <form id="enquiryForm" method="post" action="<?php echo base_url(); ?>add-enquiry">
                  <div class="form-group">
                    <label>Full Name <span class="mandatory">*</span></label>
                      <div class="input-group">
                            <input type="text" name="first_name" class="form-control" placeholder="First Name">
                            <input type="text" name="middle_name" class="form-control" placeholder="Middle Name">
                            <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                      </div>
                  </div>
                  <div class="form-group">
                      <label>Course Of Interest <span class="mandatory">*</span></label>
                      <input type="text" name="course_of_interest" class="form-control" placeholder="">
                  </div>
                  <div class="form-group">
                      <label>Mobile No <span class="mandatory">*</span></label>
                      <input type="text" name="mobile1" class="form-control" placeholder="">
                  </div>
                   <div class="form-group">
                      <label>Alternate Mobile No</label>
                      <input type="text" name="mobile2" class="form-control" placeholder="">
                  </div>
                  <div class="form-group">
                      <label>Whats App No</label>
                      <input type="text" name="whatsappNo" class="form-control" placeholder="">
                  </div>
                   <div class="form-group">
                      <label>Email </label>
                      <input type="email" name="email" class="form-control" placeholder="">
                  </div>
                  <div class="form-group">
                    <label>Gender <span class="mandatory">*</span></label>
                        <div class="row">
                          <div class="col-lg-4 col-xs-4">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="Male" name="gender"
                                    class="custom-control-input" value="1">
                                <label class="custom-control-label" for="Male"> Male </label>
                            </div>
                          </div>
                          <div class="col-lg-4 col-xs-4">
                            <div class="custom-control custom-radio">
                              <input type="radio" id="Female" name="gender"
                                  class="custom-control-input" value="2">
                              <label class="custom-control-label" for="Female">Female</label>
                            </div>
                          </div>
                          <div class="col-lg-4 col-xs-4">
                            <div class="custom-control custom-radio">
                              <input type="radio" id="Other" name="gender"
                                  class="custom-control-input" value="3">
                              <label class="custom-control-label" for="Other">Other</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label>Date Of Birth</label>
                        <div class="input-group date">
                          <span class="input-group-text input-group-append input-group-addon">
                                <i class="simple-icon-calendar"></i>
                          </span>
                          <input type="text" name="date_of_birth" class="form-control" placeholder="Date">
                        </div>
                      </div>
                      <div class="form-group">
                          <label>Education Qualification <span class="mandatory">*</span></label>
                          <input type="text" name="education" class="form-control" placeholder="">
                      </div>
                      <div class="form-group">
                          <label>Occupation</label>
                          <input type="text" name="occupation" class="form-control" placeholder="">
                      </div>
                      <div class="form-group">
                          <label>Address</label>
                          <textarea placeholder="" name="address" class="form-control" rows="3"></textarea>
                      </div>
                      <div class="form-group">
                          <label>Country <span class="mandatory">*</span></label>
                          <select class="form-control"  name="country">
                              <option label="&nbsp;">&nbsp;</option>
                              <option value="Flexbox">Flexbox</option>
                              <option value="Sass">Sass</option>
                              <option value="React">React</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>State <span class="mandatory">*</span></label>
                          <select class="form-control"  name="state">
                              <option label="&nbsp;">&nbsp;</option>
                              <option value="Flexbox">Flexbox</option>
                              <option value="Sass">Sass</option>
                              <option value="React">React</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>City <span class="mandatory">*</span></label>
                          <select class="form-control"  name="city">
                              <option label="&nbsp;">&nbsp;</option>
                              <option value="Flexbox">Flexbox</option>
                              <option value="Sass">Sass</option>
                              <option value="React">React</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>Pin Code <span class="mandatory">*</span></label>
                          <input type="text" name="pincode" class="form-control" placeholder="" maxlength="6">
                      </div>
                      <div class="form-group">
                          <label>Assign Staff <span class="mandatory">*</span></label>
                          <select class="form-control"  name="assign_staff">
                              <option label="&nbsp;">&nbsp;</option>
                              <option value="1">Flexbox</option>
                              <option value="2">Sass</option>
                              <option value="3">React</option>
                          </select>
                      </div>
                  
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-outline-primary"
                      data-dismiss="modal">Cancel</button>
               </form>   
              </div>
          </div>
      </div>
  </div>