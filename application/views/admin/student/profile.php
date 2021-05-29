<?php $this->load->view('admin/includes/header'); ?>

    <main>
        <div class="container-fluid">
           
            <div class="row">
                <div class="col-12 col-lg-5 col-xl-4 col-left mt-3r">
                    <a href="<?php echo base_url(); ?>assets/img/profiles/1.jpg" class="lightbox">
                        <img alt="Profile" src="<?php echo base_url(); ?>assets/img/profiles/l-1.jpg"
                                            class="img-thumbnail card-img social-profile-img">
                    </a>

                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="text-center pt-4">
                                <p class="list-item-heading pt-2">Sarah Cortney</p>
                            </div>
                            <p class="text-muted text-small mb-2">Course Appeared</p>
                            <p class="mb-3">Certificate in MS- Office and internet</p>

                            <p class="text-muted text-small mb-2">Institution Details</p>
                            <p class="mb-05 text-small">AICPE Institute of Technology and Management</p>
                            <p class="mb-3 text-small">Contact Person - John Doe [09988998820]</p>

                            <p class="text-muted text-small mb-2">Fees Details</p>
                            <div class="row">
                                <div class="col-lg-6">
                                    <p class="mb-05 text-small">
                                       Total Fees - Rs. 1500
                                    </p>
                                    <p class="mb-05 text-small">
                                       Paid Fees  - Rs. 700
                                    </p>
                                    <p class="mb-3 text-small">
                                       Balance Fees  - Rs. 800
                                    </p>
                                </div>
                                <div class="col-lg-6">
                                    <div role="progressbar" class="progress-bar-circle position-relative" data-color="#922c88"
                                        data-trailColor="#d7d7d7" aria-valuemax="100" aria-valuenow="40"
                                        data-show-percent="true">
                                    </div>
                                    <p class="text-small text-muted pt-5px">paid Fees %</p>
                                </div>
                            </div>
                            <p class="text-muted text-small mb-2">Demo Exams</p>
                            
                                    <p class="mb-05 text-small">
                                       Total Demo Exams - 20
                                    </p>
                                    <p class="mb-05 text-small">
                                       Attempted Exams - 09
                                    </p>
                                    <p class="mb-3 text-small">
                                       Remaining Exams - 11
                                    </p>
                               
                                    <p class="text-muted text-small mb-2">
                                        <span>Attempted exams/ total exams</span>
                                        <span class="float-right text-muted">09/20</span>
                                    </p>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                
                        </div>
                    </div>
                    <div class="card mb-4 d-none d-lg-block">
                        <div class="position-absolute card-top-buttons">
                            <button class="btn btn-header-light icon-button">
                                <i class="simple-icon-refresh"></i>
                            </button>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">New Courses</h5>
                            <div>
                                <div class="d-flex flex-row mb-3">
                                    <a class="d-block position-relative" href="#">
                                        <img src="<?php echo base_url(); ?>assets/img/products/marble-cake-thumb.jpg" alt="Marble Cake"
                                            class="list-thumbnail border-0" />
                                        <span
                                            class="badge badge-pill badge-theme-2 position-absolute badge-top-right">NEW</span>
                                    </a>
                                    <div class="pl-3 pt-2 pr-2 pb-2">
                                        <a href="#">
                                            <p class="list-item-heading">Progressively Maintain
                                                Extensive Infomediaries</p>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex flex-row mb-3">
                                    <a class="d-block position-relative" href="#">
                                        <img src="<?php echo base_url(); ?>assets/img/products/fruitcake-thumb.jpg" alt="Fruitcake"
                                            class="list-thumbnail border-0" />
                                    </a>
                                    <div class="pl-3 pt-2 pr-2 pb-2">
                                        <a href="#">
                                            <p class="list-item-heading">Assertively Iterate Resource
                                                Maximizing</p>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex flex-row mb-3">
                                    <a class="d-block position-relative" href="#">
                                        <img src="<?php echo base_url(); ?>assets/img/products/chocolate-cake-thumb.jpg" alt="Chocolate Cake"
                                            class="list-thumbnail border-0" />
                                    </a>
                                    <div class="pl-3 pt-2 pr-2 pb-2">
                                        <a href="#">
                                            <p class="list-item-heading">Podcasting Operational Change
                                            </p>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex flex-row">
                                    <a class="d-block position-relative" href="#">
                                        <img src="<?php echo base_url(); ?>assets/img/products/fat-rascal-thumb.jpg" alt="Fat Rascal"
                                            class="list-thumbnail border-0" />
                                    </a>
                                    <div class="pl-3 pt-2 pr-2 pb-2">
                                        <a href="#">
                                            <p class="list-item-heading">Manufactured Products</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-7 col-xl-8 col-right">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Welcome Sarah Cortney</h5>

                            <form id="exampleForm" class="tooltip-label-right" novalidate>
                                <label class="form-group has-top-label position-relative error-l-50">
                                    <input class="form-control"  value="AICPE00101"  disabled />
                                    <span>Student ID</span>
                                </label>
                                <label class="form-group has-top-label">
                                    <input class="form-control" disabled value="John Doe" />
                                    <span>Name</span>
                                </label>
                                <label class="form-group has-top-label">
                                    <input class="form-control" disabled value="john.doe@yourdomain.com" />
                                    <span>E-MAIL</span>
                                </label>
                                <label class="form-group has-top-label">
                                    <input class="form-control" disabled value="09955221144" />
                                    <span>Mobile no.</span>
                                </label>
                                <label class="form-group has-top-label">
                                    <input class="form-control" value="09955221144" />
                                    <span>Alternate mobile no.</span>
                                </label>
                                <label class="form-group has-top-label">
                                    <input class="form-control" value="09955221144" />
                                    <span>What's app no.</span>
                                </label>
                                <label class="form-group has-top-label">
                                    <input class="form-control datepicker" value="04/20/1993" disabled>
                                    <span>Date of birth</span>
                                </label>
                                <label class="form-group has-top-label">
                                    <input class="form-control" value="Male" disabled />
                                    <span>Gender</span>
                                </label>
                                <label class="form-group has-top-label">
                                    <input class="form-control" value="Student" disabled />
                                    <span>Occupation</span>
                                </label>
                                <label class="form-group has-top-label">
                                    <input class="form-control" value="appeared in BCA" disabled />
                                    <span>Qualification</span>
                                </label>

                                <!-- <fieldset class="form-group">
                                    <div class="row">
                                        <label class="col-form-label col-sm-2 pt-0">Gender</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                            <div class="form-check col-sm-4">
                                                <input class="form-check-input" type="radio" name="gridRadios"
                                                    id="gridRadios1" value="option1" checked>
                                                <label class="form-check-label" for="gridRadios1">
                                                    Male
                                                </label>
                                            </div>
                                            <div class="form-check col-sm-4">
                                                <input class="form-check-input" type="radio" name="gridRadios"
                                                    id="gridRadios2" value="option2">
                                                <label class="form-check-label" for="gridRadios2">
                                                    Female
                                                </label>
                                            </div>
                                            <div class="form-check col-sm-4">
                                                <input class="form-check-input" type="radio" name="gridRadios"
                                                    id="gridRadios3" value="option3">
                                                <label class="form-check-label" for="gridRadios3">
                                                    Don't want to disclose
                                                </label>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </fieldset> -->
                                <label class="form-group has-top-label">
                                    <select class="form-control select2-single" data-width="100%">
                                        <option label="&nbsp;">&nbsp;</option>
                                        <option value="TPZ">Aadhar Card</option>
                                        <option value="TPZ">Pan Card</option>
                                        <option value="TTZ">Driving License</option>
                                        <option value="TTZ">Electricity Bill</option>
                                    </select>
                                    <span>Photo ID Type</span>
                                </label>
                                <label class="form-group has-top-label">
                                    <input class="form-control" value="CXQPTR989CB7" disabled />
                                    <span>Photo ID no.</span>
                                </label>
                                <label class="form-group has-top-label">
                                    <div class="dropzone">
                                    </div>
                                     <span>Upload Photo ID</span>
                                </label>
                                <label class="form-group has-top-label">
                                    <textarea class="form-control">
                                        F-21, Sai Regency Apartment, Ravi Nagar, 
                                        Nagpur, Maharashtra 440033
                                    </textarea>
                                    <span>Address</span>
                                </label>
                                <label class="form-group has-top-label">
                                    <select class="form-control select2-single" data-width="100%">
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
                                    <select class="form-control select2-single" data-width="100%">
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
                                    <select class="form-control select2-single" data-width="100%">
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
                                    <input class="form-control" value="CXQPTR989CB7" name="std_pincode" maxlength="6" />
                                    <span>Pin Code</span>
                                </label>
                                <button class="btn btn-primary" type="submit" name="update">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php $this->load->view('admin/includes/footer'); ?>