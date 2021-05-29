<?php $this->load->view('admin/includes/employer_header'); ?>

    <main>
        <div class="container-fluid">
           
            <div class="row">
                
                <div class="col-12 col-lg-7 col-xl-8 col-left">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Welcome Sarah Cortney</h5>

                            <form id="exampleForm" class="tooltip-label-right" novalidate>
                                <label class="form-group has-top-label position-relative error-l-50">
                                    <input class="form-control" name="p_cmpCode" value="EMP_00101"  disabled />
                                    <span>Employer Code</span>
                                </label>
                                <label class="form-group has-top-label">
                                    <input class="form-control" name="p_companyName" required />
                                    <span>Company Name</span>
                                </label>
                                <label class="form-group has-top-label">
                                    <input class="form-control" name="p_empName" />
                                    <span>Employer Name</span>
                                </label>
                                <label class="form-group has-top-label">
                                    <input class="form-control" name="p_designation" />
                                    <span>Designation</span>
                                </label>
                                <label class="form-group has-top-label">
                                    <input class="form-control" name="p_email" />
                                    <span>E-MAIL</span>
                                </label>
                                <label class="form-group has-top-label">
                                    <input class="form-control" name="p_mobile1" />
                                    <span>Mobile no.</span>
                                </label>
                                <label class="form-group has-top-label">
                                    <input class="form-control" name="p_mobile2" />
                                    <span>Alternate mobile no.</span>
                                </label>
                                <label class="form-group has-top-label">
                                    <input class="form-control" name="p_whatsppNo" />
                                    <span>What's app no.</span>
                                </label>
                                <label class="form-group has-top-label">
                                    <input class="form-control datepicker" name="p_dateofBirth" />
                                    <span>Date of birth</span>
                                </label>
                                <label class="form-group has-top-label">
                                    <input class="form-control" name="p_gender" />
                                    <span>Gender</span>
                                </label>
                                <label class="form-group has-top-label">
                                    <input class="form-control" name="p_panNo" />
                                    <span>Pan No</span>
                                </label>
                                <label class="form-group has-top-label">
                                    <input class="form-control" name="p_gstNo" />
                                    <span>GST No</span>
                                </label>
                                <label class="form-group has-top-label">
                                    <select class="form-control select2-single" data-width="100%" name="p_photoIdType">
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
                                    <input class="form-control" name="p_photoIdNo" />
                                    <span>Photo ID no.</span>
                                </label>
                                
                                <label class="form-group has-top-label">
                                    <textarea class="form-control" name="p_address">
                                    </textarea>
                                    <span>Address</span>
                                </label>
                                <label class="form-group has-top-label">
                                    <select class="form-control select2-single" data-width="100%" name="p_country">
                                        <option label="&nbsp;">&nbsp;</option>
                                        <option value="TPZ">India</option>
                                        <option value="TPZ">Nepal</option>
                                        <option value="TTZ">Shrilanka</option>
                                        <option value="TTZ">Bhutan</option>
                                        <option value="TTZ">Pakistan</option>
                                    </select>
                                    <span>Country</span>
                                </label>
                                <label class="form-group has-top-label">
                                    <select class="form-control select2-single" data-width="100%" name="p_state">
                                        <option label="&nbsp;">&nbsp;</option>

                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                        </optgroup>
                                        <optgroup label="Pacific Time Zone">
                                            <option value="CA">California</option>
                                            <option value="NV">Nevada</option>
                                            <option value="OR">Oregon</option>
                                            <option value="WA">Washington</option>
                                        </optgroup>
                                        <optgroup label="Mountain Time Zone">
                                            <option value="AZ">Arizona</option>
                                            <option value="CO">Colorado</option>
                                            <option value="ID">Idaho</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="UT">Utah</option>
                                            <option value="WY">Wyoming</option>
                                        </optgroup>
                                        <optgroup label="Central Time Zone">
                                            <option value="AL">Alabama</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TX">Texas</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="WI">Wisconsin</option>
                                        </optgroup>
                                        <optgroup label="Eastern Time Zone">
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="IN">Indiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="OH">Ohio</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WV">West Virginia</option>
                                        </optgroup>
                                        <option value="TNOGZ" disabled="disabled">The No Optgroup Zone</option>
                                        <option value="TPZ">The Panic Zone</option>
                                        <option value="TTZ">The Twilight Zone</option>
                                    </select>
                                    <span>State</span>
                                </label>
                                <label class="form-group has-top-label">
                                    <select class="form-control select2-single" data-width="100%" name="p_city">
                                        <option label="&nbsp;">&nbsp;</option>

                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                        </optgroup>
                                        <optgroup label="Pacific Time Zone">
                                            <option value="CA">California</option>
                                            <option value="NV">Nevada</option>
                                            <option value="OR">Oregon</option>
                                            <option value="WA">Washington</option>
                                        </optgroup>
                                        <optgroup label="Mountain Time Zone">
                                            <option value="AZ">Arizona</option>
                                            <option value="CO">Colorado</option>
                                            <option value="ID">Idaho</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="UT">Utah</option>
                                            <option value="WY">Wyoming</option>
                                        </optgroup>
                                        <optgroup label="Central Time Zone">
                                            <option value="AL">Alabama</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TX">Texas</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="WI">Wisconsin</option>
                                        </optgroup>
                                        <optgroup label="Eastern Time Zone">
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="IN">Indiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="OH">Ohio</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WV">West Virginia</option>
                                        </optgroup>
                                        <option value="TNOGZ" disabled="disabled">The No Optgroup Zone</option>
                                        <option value="TPZ">The Panic Zone</option>
                                        <option value="TTZ">The Twilight Zone</option>
                                    </select>
                                    <span>City</span>
                                </label>
                                <label class="form-group has-top-label">
                                    <input class="form-control" name="p_pinCode" maxlength="6" required />
                                    <span>Pin Code</span>
                                </label>
                                <label class="form-group has-top-label">
                                    <input class="form-control" name="p_userName" required />
                                    <span>User Name</span>
                                </label>
                                <label class="form-group has-top-label">
                                    <input class="form-control" name="p_password" disabled />
                                    <span>Password</span>
                                </label>
                                <button class="btn btn-primary" type="submit" name="update">Update</button>
                                <button class="btn btn-outline-primary" type="submit" name="cancel">Cancel</button>
                            
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5 col-xl-4 col-right">
                   <div class="card mb-4">
                        <div class="card-body">
                            
                            <div class="form-group">
                                <label>Company Logo</label>
                                <label class="form-group has-top-label">
                                    <div class="dropzone">
                                    </div>
                                     <span>Upload Company Logo</span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Employer Logo</label>
                                <label class="form-group has-top-label">
                                    <div class="dropzone">
                                    </div>
                                     <span>Upload Employer Logo</span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Employer Passport Photo</label>
                                <label class="form-group has-top-label">
                                    <div class="dropzone">
                                    </div>
                                     <span>Upload Employer Passport Photo</span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Photo ID Proof</label>
                                <label class="form-group has-top-label">
                                    <div class="dropzone">
                                    </div>
                                     <span>Upload Photo ID Proof</span>
                                </label>
                            </div>
                        </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </main>
    <?php $this->load->view('admin/includes/footer'); ?>