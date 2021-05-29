<?php $this->load->view('admin/includes/institution_header'); ?>

    <main>
        <div class="row">
            <div class="col-12">
                <h1>Register Student</h1>
                <div class="separator mb-5"></div>
            </div>
        </div>
        <div class="container-fluid">
        	<div class="row">
        		<div class="col-lg-8 col-lg-offset-2">
        			<div class="card mb-4">
		                <div id="smartWizardValidation">
		                    <ul class="card-header">
		                        <li><a href="#step-0">Step 1<br /><small>First step description</small></a></li>
		                        <li><a href="#step-1">Step 2<br /><small>Second step description</small></a></li>
		                        <li><a href="#step-2">Step 3<br /><small>Third step description</small></a></li>
		                    </ul>
							<div class="card-body">
		                        <div id="step-0">
		                            <form id="form-step-0" class="tooltip-label-right" novalidate method="post" enctype="multipart/form-data">
		                                <div class="form-group position-relative error-l-100">
					                    <label>Full Name <span class="red">*</span></label>
					                      	<div class="input-group">
					                            <input type="text" class="form-control" placeholder="First Name"required id="nameValidation" name="first_name">
					                            <input typelast_name="text" class="form-control" placeholder="Middle Name"  name="middle_name">
					                            <input type="text" name="last_name" class="form-control" placeholder="Last Name" name="" required>
					                      	</div>
					                  	</div>
					                    <div class="form-group position-relative error-l-100">
					                      <label>Mobile No <span class="red">*</span></label>
					                      <input type="text" class="form-control" id="mobileValidation" name="stud_mobile1" required>
					                    </div>
					                    <div class="form-group position-relative error-l-100">
					                      <label>Alternate Mobile No</label>
					                      <input type="text" class="form-control" id="alternateMobileValidation" name="stud_mobile2">
					                    </div>
					                    <div class="form-group position-relative error-l-100">
					                      <label>Whats App No <span class="red">*</span></label>
					                      <input type="text" class="form-control" name="stud_whatsappNo" placeholder="" required>
					                    </div>
					                    <div class="form-group position-relative error-l-100">
					                      <label>Email </label>
					                      <input type="email" class="form-control" id="emailValidation" name="stud_email">
					                    </div>
					                    <div class="form-group position-relative error-l-100">
					                    	<label>Gender <span class="red">*</span></label>
					                        <div class="row">
					                          	<div class="col-lg-4 col-xs-4">
						                            <div class="custom-control custom-radio">
						                                <input type="radio" id="Male" name="stud_gender"
						                                    class="custom-control-input">
						                                <label class="custom-control-label" for="Male"> Male </label>
						                            </div>
					                          	</div>
					                          	<div class="col-lg-4 col-xs-4">
					                            	<div class="custom-control custom-radio">
					                              		<input type="radio" id="Female" name="stud_gender"
					                                  class="custom-control-input">
					                              		<label class="custom-control-label" for="Female">Female</label>
					                            	</div>
					                          	</div>
				                          		<div class="col-lg-4 col-xs-4">
					                            	<div class="custom-control custom-radio">
					                              		<input type="radio" id="Other" name="stud_gender"
					                                  class="custom-control-input">
					                              		<label class="custom-control-label" for="Other">Other</label>
					                            	</div>
					                          	</div>
					                        </div>
					                    </div>
					                    <div class="form-group position-relative error-l-100">
					                        <label>Date Of Birth <span class="red">*</span></label>
					                        <div class="input-group date">
					                            <span class="input-group-text input-group-append input-group-addon">
					                                <i class="simple-icon-calendar"></i>
					                            </span>
					                            <input type="text" class="form-control" placeholder="Date" name="stud_dob" required>
					                        </div>
				                        </div>
					                    <div class="form-group position-relative error-l-100">
				                            <label>Education Qualification <span class="red">*</span></label>
				                            <input type="text" class="form-control" name="stud_qualification" required> 
					                    </div>
					                    <div class="form-group">
				                            <label>Occupation</label>
				                            <input type="text" class="form-control" name="stud_occupation">
					                    </div>
					                    <div class="form-group position-relative error-l-100">
					                    	 <label>Address </label>
				                            <textarea name="stud_address" class="form-control" rows="3"></textarea>
					                    </div>
				                        <div class="form-group position-relative error-l-100">
				                        	 <label>Country <span class="red">*</span></label>
				                            <select class="form-control" name="stud_country" required>
				                                <option label="&nbsp;">&nbsp;</option>
				                                <option value="Flexbox">Flexbox</option>
				                                <option value="Sass">Sass</option>
				                                <option value="React">React</option>
				                            </select>
					                    </div>
					                    <div class="form-group position-relative error-l-100">
					                        <label>State <span class="red">*</span></label>
					                        <select class="form-control" name="stud_state" required>
					                            <option label="&nbsp;">&nbsp;</option>
					                            <option value="Flexbox">Flexbox</option>
					                            <option value="Sass">Sass</option>
					                            <option value="React">React</option>
					                        </select>
					                    </div>
					                    <div class="form-group position-relative error-l-100">
					                        <label>District <span class="red">*</span></label>
					                        <select class="form-control" name="stud_district" required>
					                            <option label="&nbsp;">&nbsp;</option>
					                            <option value="Flexbox">Flexbox</option>
					                            <option value="Sass">Sass</option>
					                            <option value="React">React</option>
					                        </select>
					                    </div>
					                    <div class="form-group position-relative error-l-100">
					                        <label>City <span class="red">*</span></label>
					                        <select class="form-control" name="stud_city" required>
					                            <option label="&nbsp;">&nbsp;</option>
					                            <option value="Flexbox">Flexbox</option>
					                            <option value="Sass">Sass</option>
					                            <option value="React">React</option>
					                        </select>
					                    </div>
					                    <div class="form-group position-relative error-l-100">
					                        <label>Pin Code <span class="red">*</span></label>
					                        <input type="text" name="stud_pincode" class="form-control" placeholder="" maxlength="6" required>
					                    </div>
					                </form>
		                        </div>
		                        <div id="step-1">
		                            <form id="form-step-1" enctype="multipart/form-data" class="tooltip-label-right" method="post" novalidate>
		                                <div class="form-group">
			                                <label>Passport Photo</label>
			                                 
			                                <div class="input-group">
						                        <div class="custom-file">
						                            <input type="file" class="custom-file-input" id="stud_photo" name="stud_photo">
						                            <label class="custom-file-label" for="stud_photo">Choose file</label>
						                        </div>
						                        <div class="input-group-append">
						                            <button class="btn btn-outline-secondary" type="button">Upload</button>
						                        </div>
						                    </div>
			                            </div>
			                            <div class="form-group">
			                            	<label>Photo ID Type</label>
		                                    <select class="form-control select2-single" data-width="100%" name="stud_photoIdType">
		                                        <option label="&nbsp;">&nbsp;</option>
		                                        <option value="TPZ">Aadhar Card</option>
		                                        <option value="TPZ">Pan Card</option>
		                                        <option value="TTZ">Driving License</option>
		                                        <option value="TTZ">Electricity Bill</option>
		                                        <option value="TTZ">Other</option>
		                                    </select>
			                            </div>
		                                <div class="form-group">
		                                	<label>Photo ID no.</label>
		                                    <input class="form-control"  name="stud_photoIdNo" />
		                                </div>
			                            <div class="form-group">
			                                <label>Photo ID Proof</label>
			                                <input type="file" name="stud_photoIdProof" id="stud_photoIdProof" class="form-control">
		                                	<!-- <div class="input-group">
						                        <div class="custom-file">
						                            <input type="file" class="custom-file-input" id="inputGroupFile05" name="stud_photoIdProof">
						                            <label class="custom-file-label" for="inputGroupFile05">Choose file</label>
						                        </div>
						                        <div class="input-group-append">
						                            <button class="btn btn-outline-secondary" type="button">Upload</button>
						                        </div>
						                    </div> -->
			                            </div>
		                            </form>
		                        </div>
		                        <div id="step-2">
		                            
		                            <form id="form-step-2" method="post" class="tooltip-label-right" novalidate>
		                            	<div class="form-group position-relative error-l-100">
					                       <label>Course Name</label>
					                       <input type="text" class="form-control" name="stud_course_name" required>
					                    </div>
					                    <div class="form-group position-relative error-l-100">
					                       <label>Course Fees</label>
					                       <input type="text" class="form-control" name="stud_course_fees" required>
					                    </div>
					                    <div class="form-group position-relative error-l-100">
					                       <label>Discount Rate</label>
					                       <input type="text" class="form-control" name="stud_discount_rate" required>
					                    </div>
					                    <div class="form-group position-relative error-l-100">
					                       <label>Discount Ammount</label>
					                       <input type="text" class="form-control" name="stud_discount_ammount" required>
					                    </div>
					                    <div class="form-group position-relative error-l-100">
					                       <label>Total Fees </label>
					                       <input type="text" class="form-control" name="stud_total_fees" required>
					                    </div>
					                    <div class="form-group position-relative error-l-100">
					                       <label>Fees Received </label>
					                       <input type="text" class="form-control" name="stud_fees_received" required>
					                    </div>
					                    <div class="form-group position-relative error-l-100">
					                       <label>Balance amount </label>
					                       <input type="text" class="form-control" name="stud_balance_fees" required>
					                    </div>
					                    <div class="form-group position-relative error-l-100">
					                        <label>Admission Date</label>
					                      	<div class="input-group date">
					                            <span class="input-group-text input-group-append input-group-addon">
					                                <i class="simple-icon-calendar"></i>
					                            </span>
					                            <input type="text" class="form-control" placeholder="Date" name="stud_admission_date" required>
					                        </div>
					                    </div>
					                    <div class="form-group position-relative error-l-100">
					                          <label>Remarks</label>
					                          <textarea name="stud_remarks" class="form-control" rows="3"></textarea>
				                        </div>
									</div>
		                        </div>

			                    <div class="btn-toolbar custom-toolbar text-center card-body pt-0">
			                        <button class="btn btn-secondary prev-btn" type="button">Previous</button>
			                        <button class="btn btn-secondary next-btn" type="button">Next</button>
			                        <button class="btn btn-secondary finish-btn" type="submit" name="register" value="register">Finish</button>
			                    </form>
		                    </div>
		                </div>
		            </div>
    			</div>
    		</div>
        </div>
    </main>
<?php $this->load->view('admin/includes/footer'); ?>
<script type="text/javascript">
	$(".custom-file-input").on("change", function() {
		//var data = $('#stud_photo').files[0];
		alert(this);
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
$('#stud_photoIdProof').change(function(){
	alert(this.value);
});
</script>