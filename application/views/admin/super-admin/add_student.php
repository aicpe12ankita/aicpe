<?php $this->load->view('admin/includes/admin_header'); ?>

    <main>
        <div class="row">
            <div class="col-12">
                <h1>Register Student</h1>
                <div class="separator mb-5"></div>
            </div>
        </div>
        <div class="container-fluid">
        	<div class="card mb-4">
                        <div id="smartWizardValidation">
                            <ul class="card-header">
                                <li><a href="#step-0">Step 1<br /><small>First step description</small></a></li>
                                <li><a href="#step-1">Step 2<br /><small>Second step description</small></a></li>
                                <li><a href="#step-2">Step 3<br /><small>Third step description</small></a></li>
                            </ul>
							<div class="card-body">
                                <div id="step-0">
                                    <form id="form-step-0" class="tooltip-label-right" novalidate>
                                       
					                  <div class="form-group position-relative error-l-100">
					                    <label>Full Name</label>
					                      <div class="input-group">
					                            <input type="text" class="form-control" placeholder="First Name"required id="nameValidation">
					                            <input type="text" class="form-control" placeholder="Middle Name" >
					                            <input type="text" class="form-control" placeholder="Last Name" required>
					                      </div>
					                  </div>
					                  <div class="form-group position-relative error-l-100">
					                      <label>Mobile No</label>
					                      <input type="text" class="form-control" id="mobileValidation" required>
					                  </div>
					                   <div class="form-group position-relative error-l-100">
					                      <label>Alternate Mobile No</label>
					                      <input type="text" class="form-control" id="alternateMobileValidation" required>
					                  </div>
					                  <div class="form-group position-relative error-l-100">
					                      <label>Whats App No</label>
					                      <input type="text" class="form-control" placeholder="" required>
					                  </div>
					                   <div class="form-group position-relative error-l-100">
					                      <label>Email</label>
					                      <input type="email" class="form-control" id="emailValidation" required>
					                  </div>
					                  <div class="form-group position-relative error-l-100">
					                    <label>Gender</label>
					                        <div class="row">
					                          <div class="col-lg-4 col-xs-4">
					                            <div class="custom-control custom-radio">
					                                <input type="radio" id="Male" name="customRadio"
					                                    class="custom-control-input">
					                                <label class="custom-control-label" for="Male"> Male </label>
					                            </div>
					                          </div>
					                          <div class="col-lg-4 col-xs-4">
					                            <div class="custom-control custom-radio">
					                              <input type="radio" id="Female" name="customRadio"
					                                  class="custom-control-input">
					                              <label class="custom-control-label" for="Female">Female</label>
					                            </div>
					                          </div>
					                          <div class="col-lg-4 col-xs-4">
					                            <div class="custom-control custom-radio">
					                              <input type="radio" id="Other" name="customRadio"
					                                  class="custom-control-input">
					                              <label class="custom-control-label" for="Other">Other</label>
					                            </div>
					                          </div>
					                        </div>
					                    </div>
					                      
					                      <div class="form-group position-relative error-l-100">
					                        <label>Date Of Birth</label>
					                        <div class="input-group date">
					                          <span class="input-group-text input-group-append input-group-addon">
					                                <i class="simple-icon-calendar"></i>
					                          </span>
					                          <input type="text" class="form-control" placeholder="Date" required>
					                        </div>
					                      </div>
					                      <div class="form-group position-relative error-l-100">
					                          <label>Education Qualification</label>
					                          <input type="text" class="form-control" placeholder="" required> 
					                      </div>
					                      <div class="form-group">
					                          <label>Occupation</label>
					                          <input type="text" class="form-control" placeholder="">
					                      </div>
					                      <div class="form-group position-relative error-l-100">
					                          <label>Address</label>
					                          <textarea placeholder="" class="form-control" rows="3"></textarea>
					                      </div>
					                      <div class="form-group position-relative error-l-100">
					                          <label>Country</label>
					                          <select class="form-control" required>
					                              <option label="&nbsp;">&nbsp;</option>
					                              <option value="Flexbox">Flexbox</option>
					                              <option value="Sass">Sass</option>
					                              <option value="React">React</option>
					                          </select>
					                      </div>
					                      <div class="form-group position-relative error-l-100">
					                          <label>State</label>
					                          <select class="form-control" required>
					                              <option label="&nbsp;">&nbsp;</option>
					                              <option value="Flexbox">Flexbox</option>
					                              <option value="Sass">Sass</option>
					                              <option value="React">React</option>
					                          </select>
					                      </div>
					                      <div class="form-group position-relative error-l-100">
					                          <label>City</label>
					                          <select class="form-control" required>
					                              <option label="&nbsp;">&nbsp;</option>
					                              <option value="Flexbox">Flexbox</option>
					                              <option value="Sass">Sass</option>
					                              <option value="React">React</option>
					                          </select>
					                      </div>
					                      <div class="form-group position-relative error-l-100">
					                          <label>Pin Code</label>
					                          <input type="text" class="form-control" placeholder="" maxlength="6" required>
					                      </div>
					                </form>
                                </div>
                                <div id="step-1">
                                    <form id="form-step-1" class="tooltip-label-right" novalidate>
                                        <div class="form-group">
			                                <label>Passport Photo</label>
			                                <label class="form-group has-top-label">
			                                    <div class="dropzone">
			                                    </div>
			                                     <span>Upload Passport Photo</span>
			                                </label>
			                            </div>
			                            <label class="form-group has-top-label">
			                                    <select class="form-control select2-single" data-width="100%" name="i_photoIdType">
			                                        <option label="&nbsp;">&nbsp;</option>
			                                        <option value="TPZ">Aadhar Card</option>
			                                        <option value="TPZ">Pan Card</option>
			                                        <option value="TTZ">Driving License</option>
			                                        <option value="TTZ">Electricity Bill</option>
			                                        <option value="TTZ">Other</option>
			                                    </select>
			                                    <span>Photo ID Type</span>
			                                </label>
			                                <label class="form-group has-top-label">
			                                    <input class="form-control" name="i_photoIdNo" />
			                                    <span>Photo ID no.</span>
			                                </label>
			                            <div class="form-group">
			                                <label>Photo ID Proof</label>
			                                <label class="form-group has-top-label">
			                                    <div class="dropzone">
			                                    </div>
			                                     <span>Upload Photo ID Proof</span>
			                                </label>
			                            </div>
                                    </form>
                                </div>
                                <div id="step-2">
                                    
                                    <form id="form-step-2" class="tooltip-label-right" novalidate>
                                    	<div class="form-group position-relative error-l-100">
					                       <label>Course Name</label>
					                       <input type="text" class="form-control" placeholder="" required>
					                    </div>
					                    <div class="form-group position-relative error-l-100">
					                       <label>Course Fees</label>
					                       <input type="text" class="form-control" placeholder="" required>
					                    </div>
					                    <div class="form-group position-relative error-l-100">
					                       <label>Discount Rate</label>
					                       <input type="text" class="form-control" placeholder="" required>
					                    </div>
					                    <div class="form-group position-relative error-l-100">
					                       <label>Discount Ammount</label>
					                       <input type="text" class="form-control" placeholder="" required>
					                    </div>
					                    <div class="form-group position-relative error-l-100">
					                       <label>Total Fees </label>
					                       <input type="text" class="form-control" placeholder="" required>
					                    </div>
					                    <div class="form-group position-relative error-l-100">
					                       <label>Fees Received </label>
					                       <input type="text" class="form-control" placeholder="" required>
					                    </div>
					                    <div class="form-group position-relative error-l-100">
					                       <label>Balance amount </label>
					                       <input type="text" class="form-control" placeholder="" required>
					                    </div>
					                    <div class="form-group position-relative error-l-100">
					                       <label>Admission Date</label>
					                       <input type="text" class="form-control" placeholder="" required>
					                    </div>
					                    <div class="form-group position-relative error-l-100">
					                          <label>Remarks</label>
					                          <textarea placeholder="" class="form-control" rows="3"></textarea>
				                        </div>

                                    </form>
                                </div>
                                
                            </div>

                            <div class="btn-toolbar custom-toolbar text-center card-body pt-0">
                                <button class="btn btn-secondary prev-btn" type="button">Previous</button>
                                <button class="btn btn-secondary next-btn" type="button">Next</button>
                                <button class="btn btn-secondary finish-btn" type="submit">Finish</button>
                            </div>
                        </div>
                    </div>
        </div>
    </main>
<?php $this->load->view('admin/includes/footer'); ?>