<?php $this->load->view('admin/includes/institution_header'); ?>
<form id="institution_profile" class="tooltip-label-right">
    <main>
        <div class="container-fluid">
           
            <div class="row">
                
                <div class="col-12 col-lg-7 col-xl-8 col-left">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Welcome Sarah Cortney</h5>

                            
                                <label class="form-group has-top-label position-relative error-l-50">
                                    <input class="form-control" name="i_instCode" value="<?= $institution_details['inst_code'] ?>"  disabled />
                                    <span>Institute ATC Code</span>
                                </label>
                                <label class="form-group has-top-label">
                                    <input class="form-control" name="i_instName" value="<?= $institution_details['inst_name'] ?>" required />
                                    <span>Institute Name</span>
                                </label>
                                <label class="form-group has-top-label">
                                    <input class="form-control" value="<?= $institution_details['owner_name'] ?>" name="i_ownerName" />
                                    <span>Owner Name</span>
                                </label>
                                <label class="form-group has-top-label">
                                    <input class="form-control" value="<?= $institution_details['designation'] ?>" name="i_designation" />
                                    <span>Designation</span>
                                </label>
                                <label class="form-group has-top-label">
                                    <input class="form-control" value="<?= $institution_details['email'] ?>" name="i_email" />
                                    <span>E-MAIL</span>
                                </label>
                                <label class="form-group has-top-label">
                                    <input class="form-control" value="<?= $institution_details['mobile_1'] ?>" name="i_mobile1" />
                                    <span>Mobile no.</span>
                                </label>
                                <label class="form-group has-top-label">
                                    <input class="form-control" value="<?= $institution_details['mobile_2'] ?>" name="i_mobile2" />
                                    <span>Alternate mobile no.</span>
                                </label>
                                <label class="form-group has-top-label">
                                    <input class="form-control" value="<?= $institution_details['whatsapp_no'] ?>" name="i_whatsppNo" />
                                    <span>What's app no.</span>
                                </label>
                                <label class="form-group has-top-label">
                                    <input class="form-control datepicker" value="<?= $institution_details['dete_of_birth'] ?>" name="i_dateofBirth" />
                                    <span>Date of birth</span>
                                </label>
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
                                <label class="form-group has-top-label">
                                    <input class="form-control" value="<?= $institution_details['pan_no'] ?>" name="i_panNo" />
                                    <span>Pan No</span>
                                </label>
                                <label class="form-group has-top-label">
                                    <input class="form-control" value="<?= $institution_details['gst_no'] ?>" name="i_gstNo" />
                                    <span>GST No</span>
                                </label>
                                
                                
                                <label class="form-group has-top-label">
                                    <textarea class="form-control" name="i_address"><?= $institution_details['address']; ?>
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
                                    <input class="form-control" name="p_pinCode" value="<?= $institution_details['pincode'] ?>" maxlength="6" required />
                                    <span>Pin Code</span>
                                </label>
                                <label class="form-group has-top-label">
                                    <textarea class="form-control" name="i_instDetails"><?= $institution_details['inst_details'] ?>
                                    </textarea>
                                    <span>Institution Details</span>
                                </label>
                                <label class="form-group has-top-label">
                                    <input class="form-control" value="<?= $institution_details['username'] ?>" name="p_userName" required />
                                    <span>User Name</span>
                                </label>
                                <label class="form-group has-top-label">
                                    <input class="form-control" value="<?= $institution_details['password'] ?>" name="p_password" disabled />
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
                                <label>Institute Logo</label>
                                <label class="form-group has-top-label">
                                    <div class="dropzone" id="institution_logo">
                                    </div>
                                     <span>Upload Institute Logo</span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Owner Passport Photo</label>
                                <label class="form-group has-top-label">
                                    <div class="dropzone" id="owner_passport_photo">
                                    </div>
                                     <span>Upload Owner Passport Photo</span>
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
                                    <input class="form-control" id="photo_id_no" name="i_photoIdNo" />
                                    <span>Photo ID no.</span>
                                </label>
                            <div class="form-group">
                                <label>Photo ID Proof</label>
                                <label class="form-group has-top-label">
                                    <div class="dropzone" id="id_photo_proof">
                                    </div>
                                     <span>Upload Photo ID Proof</span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Institute Registration Certificate</label>
                                <label class="form-group has-top-label">
                                    <div class="dropzone" id="registration_certificate">
                                    </div>
                                     <span>Upload File</span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Educational Qualification</label>
                                <label class="form-group has-top-label">
                                    <div class="dropzone" id="education_qualification">
                                    </div>
                                     <span>Upload File</span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Professional Course Completed Certificate</label>
                                <label class="form-group has-top-label">
                                    <div class="dropzone" id="course_completed_certificate">
                                    </div>
                                     <span>Upload File</span>
                                </label>
                            </div>
                           
                            <div class="form-group">
                                <label>Institute Gallery</label>
                                <label class="form-group has-top-label">
                                    <div class="dropzone" id="institution_gallary">
                                    </div>
                                     <span>Upload Files</span>
                                </label>
                            </div>
                        </div>
                       
                    </div>
                    
                </div>
            </div>
        </div>
    </main>
</form>
<div class="main-loader" style="display: none;">
            <div class="loader"></div>
    </div>

<?php $this->load->view('admin/includes/footer'); ?>

<script rel="javascript" type="text/javascript">
        $(document).ready(function() {

        jQuery.validator.addMethod("noBlank", function(value, element) { 

            return $.trim(value) != "";

        },"This field is required");

        $("#institution_profile").validate({
            errorElement:'span',
            ignore: '.ignore',
            rules:
            {

            },
            messages:
            {

            },
            highlight: function (element, errorClass, validClass) { 
                $(element).addClass('required-f'); 

            }, 
            unhighlight: function (element, errorClass, validClass) { 
                $(element).removeClass('required-f'); 
            }
        });

        $('#institution_profile').on('submit',function(event){

            var form_data = $('#institution_profile').serialize();           
           
            if($("#institution_profile").valid())
            {
                $.ajax({
                    url: '<?php echo base_url().'index.php/institutions/save_profile'; ?>',
                    type: 'POST',
                    dataType: 'json',
                    data: new FormData(this),
                    processData: false,
                    contentType: false,
                    beforeSend: function()
                    {
                        $(".main-loader").fadeIn();
                    },      
                    success:function(data)
                    {
                        toastr[data.type](data.msg);

                        if(data.type != 'error')
                        {                           
                           location.reload(true);
                        }
                        else
                        {
                           $(".main-loader").hide();
                        }

                    }   
                })
                .done(function() {
                   // $(".main-loader").hide();
                })
                .fail(function() {
                    toastr['error']('Something went wrong');
                })
                .always(function() {
                   /// $(".main-loader").hide();
                });
            }

            return false;
        });
    });
    </script>