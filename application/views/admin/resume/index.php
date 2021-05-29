<?php $this->load->view('admin/includes/header'); ?>

    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>Resume Maker</h1>
                    <div class="separator mb-5"></div>
                </div>
            </div>
           <div class="row">
               <div class="col-lg-6 mb-4">
                    <div id="accordion">
                        
                                <div class="border mb-2 bg_white">
                                    <button class="btn btn-primary default w-100" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                     Basic Information
                                    </button>
                                    <div id="collapseOne" class="collapse show " data-parent="#accordion">
                                        <div class="p-4">
                                            <form id="exampleForm" class="tooltip-label-right" method="post" novalidate>
                                            <div class="form-group position-relative error-l-50">
                                                <label>Name</label>
                                                <input type="text" class="form-control" name="jQueryName" disabled placeholder="John Doe">
                                            </div>
                                            <div class="form-group position-relative error-l-50">
                                                <label>Email</label>
                                                <input type="email" class="form-control" name="jQueryEmail" required placeholder="Email" value="john.doe@gmail.com">
                                            </div>
                                            <div class="form-group position-relative error-l-50">
                                                <label>Contact number</label>
                                                <input type="text" class="form-control" name="jQueryContactno" placeholder="Contact no" value="8946382600">
                                            </div>
                                            <div class="form-group position-relative error-l-50">
                                                <label>Address</label>
                                                <textarea class="form-control" rows="2" name="jQueryAddress" required></textarea>
                                            </div>
                                            <div class="form-group position-relative error-l-50">
                                                <label>About me/ Summery</label>
                                                <textarea class="form-control" rows="2" name="jQuerySummery" required></textarea>
                                            </div>
                                            <div class="form-group position-relative error-l-50">
                                                <label>Hobbies/ Interest</label>
                                                <input type="text" class="form-control" name="jQueryContactno" data-role="tagsinput" required placeholder="Press enter after each hobbie">
                                            </div>
                                            <div class="form-group position-relative error-l-50">
                                                <label>Languages</label>
                                                 <select class="form-control select2-multiple" multiple="multiple" data-width="100%" required>
                                                    <option value=""></option>
                                                    <option value="1">English</option>
                                                    <option value="2">Hindi</option>
                                                    <option value="3">Marathi</option>
                                                    <option value="3">Gujrati</option>
                                                    <option value="3">Kannada</option>
                                                    <option value="3">Telgu</option>
                                                </select>
                                            </div>
                                            <div class="form-group position-relative error-l-50">
                                                <label>Resume Title</label>
                                                <input type="text" class="form-control" name="jQueryName"  placeholder="Resume Title" required>
                                            </div>
                                            <div class="form-group position-relative error-l-50">
                                                <label>Skill Set</label>
                                                <input type="text" class="form-control" name="jQueryContactno" data-role="tagsinput" required placeholder="Press enter after each skill">
                                            </div>
                                            <button class="btn btn-outline-primary" type="submit">Submit</button></form>
                                        </div>
                                    </div>
                                </div>
                                <div class="border mb-2 bg_white">
                                    <button class="btn btn-primary default w-100 collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">Course Details</button>
                                    <div id="collapseFour" class="collapse" data-parent="#accordion">
                                        <div class="p-4">
                                             <div class="card mb-3">
                                    <div class="card-body">
                                        <h5>Course Details</h5>
                                        <table class="table">
                                            <thead class="">
                                                <tr>
                                                    <th>Sr. No.</th>
                                                    <th>Course Name</th>
                                                    <th>Course Duration</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>XYZ</td>
                                                    <td>12-01-2021 To 20-02-2021</td>
                                                    <td><a href="#" class="btn btn-xs btn-warning mbr_5px"><i class="simple-icon-note"></i></a><a href="#" class="btn btn-xs btn-danger"><i class="simple-icon-trash"></i></a><a href="#" class="btn btn-xs btn-dark mbr_5px">Add To Resume</i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Test Course 1</td>
                                                    <td>12-01-2021 To 20-02-2021</td>
                                                    <td><a href="#" class="btn btn-xs btn-warning mbr_5px"><i class="simple-icon-note"></i></a><a href="#" class="btn btn-xs btn-danger"><i class="simple-icon-trash"></i></a><a href="#" class="btn btn-xs btn-info mbr_5px">Remove From Resume</i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Test Course 2</td>
                                                    <td>12-01-2021 To 20-02-2021</td>
                                                    <td><a href="#" class="btn btn-xs btn-warning mbr_5px"><i class="simple-icon-note"></i></a><a href="#" class="btn btn-xs btn-danger"><i class="simple-icon-trash"></i></a><a href="#" class="btn btn-xs btn-dark mbr_5px">Add To Resume</i></a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                            <form id="exampleForm" class="tooltip-label-right" method="post" novalidate>
                                                <div class="input_fields_wrap">
                                                    <div class="mb-5">
                                                         <div class="form-group position-relative error-l-50">
                                                <label>Course Name</label>
                                                <input type="text" class="form-control" name="jQueryCourseName"  placeholder="Course Name" >
                                            </div>
                                            <div class="form-group position-relative error-l-50">
                                                <label>Course Description</label>
                                                 <textarea class="form-control" rows="2" name="jQuerySummery"></textarea>
                                            </div>
                                            <div class="form-group position-relative error-l-50">
                                                <label>Institute Name</label>
                                                <input type="text" class="form-control" name="jQueryCourseName"  placeholder="Institute Name" >
                                            </div>
                                            <div class="form-group position-relative error-l-50">
                                                <label>Institute Address</label>
                                                 <textarea class="form-control" rows="2" name="jQuerySummery"></textarea>
                                            </div>
                                            <div class="form-group position-relative error-l-50">
                                                <label>Course Duration</label>
                                                <div class="input-daterange input-group" id="datepicker">
                                                    <input type="text" class="input-sm form-control" name="start"
                                                        placeholder="Start Date" />
                                                    <span class="input-group-addon"></span>
                                                    <input type="text" class="input-sm form-control" name="end"
                                                        placeholder="End Date" />
                                                    </div>
                                                    </div>
                                                    </div>
                                                </div>
                                           
                                            <button class="btn btn-outline-primary" type="submit">Submit</button> <button class="btn btn-dark add_field_button right" type="button"><i class="simple-icon-plus"></i> Add More</button>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="border mb-2 bg_white">
                                    <button class="btn btn-primary default w-100 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Work Experience
                                    </button>
                                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                        <div class="p-4">
                                                      <div class="card mb-3">
                                    <div class="card-body">
                                        <h5>Work Experience</h5>
                                        <table class="table">
                                            <thead class="">
                                                <tr>
                                                    <th>Sr. No.</th>
                                                    <th>Job Title</th>
                                                    <th>Company Name</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>XYZ</td>
                                                    <td>Test Company 1</td>
                                                    <td><a href="#" class="btn btn-xs btn-warning mbr_5px"><i class="simple-icon-note"></i></a><a href="#" class="btn btn-xs btn-danger"><i class="simple-icon-trash"></i></a><a href="#" class="btn btn-xs btn-dark mbr_5px">Add To Resume</i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Test Course 1</td>
                                                    <td>Test Company 2</td>
                                                    <td><a href="#" class="btn btn-xs btn-warning mbr_5px"><i class="simple-icon-note"></i></a><a href="#" class="btn btn-xs btn-danger"><i class="simple-icon-trash"></i></a><a href="#" class="btn btn-xs btn-info mbr_5px">Remove From Resume</i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Test Course 2</td>
                                                    <td>Test Company 3</td>
                                                    <td><a href="#" class="btn btn-xs btn-warning mbr_5px"><i class="simple-icon-note"></i></a><a href="#" class="btn btn-xs btn-danger"><i class="simple-icon-trash"></i></a><a href="#" class="btn btn-xs btn-info mbr_5px">Remove From Resume</i></a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                            <form id="exampleForm" class="tooltip-label-right" method="post" novalidate>
                                            <div class="workExpWrapper">
                                                <div class="mb-5">
                                                    <div class="form-group position-relative error-l-50">
                                                        <label>Job Title</label>
                                                        <input type="text" class="form-control" name="jobTitle[]"  placeholder="Job Title">
                                                    </div>
                                                    <div class="form-group position-relative error-l-50">
                                                        <label>Job Description</label>
                                                         <textarea class="form-control" rows="2" name="jobDescr[]"></textarea>
                                                    </div>
                                                    <div class="form-group position-relative error-l-50">
                                                        <label>Company Name</label>
                                                        <input type="text" class="form-control" name="companyName[]"  placeholder="Company Name">
                                                    </div>
                                                    <div class="form-group position-relative error-l-50">
                                                        <label>Company Address</label>
                                                         <textarea class="form-control" rows="2" name="companyAddress[]"></textarea>
                                                    </div>
                                                    <div class="form-group position-relative error-l-50">
                                                        <label>Job Duration</label>
                                                        <div class="input-daterange input-group" id="datepicker">
                                                            <input type="text" class="input-sm form-control" name="jobStart[]"
                                                                placeholder="Start Date" />
                                                            <span class="input-group-addon"></span>
                                                            <input type="text" class="input-sm form-control" name="jobEnd[]"
                                                                placeholder="End Date" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-outline-primary">Submit</button>
                                            <button class="btn btn-dark addExp right" type="button"><i class="simple-icon-plus"></i> Add More</button>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="border mb-2 bg_white">
                                    <button class="btn btn-primary default w-100 collapsed" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Education Details
                                    </button>
                                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                                        <div class="p-4">
                                            <form id="exampleForm" class="tooltip-label-right" method="post" novalidate>
                                                <div class="form-group position-relative error-l-50">
                                                <label>Qualification Title</label>
                                                <input type="text" class="form-control" name="jQueryCourseName"  placeholder="Qualification Title">
                                            </div>
                                            <div class="form-group position-relative error-l-50">
                                                <label>Description</label>
                                                 <textarea class="form-control" rows="2" name="jQuerySummery"></textarea>
                                            </div>
                                            <div class="form-group position-relative error-l-50">
                                                <label>Institute Name</label>
                                                <input type="text" class="form-control" name="jQueryCourseName"  placeholder="Company Name">
                                            </div>
                                            <div class="form-group position-relative error-l-50">
                                                <label>Institute Address</label>
                                                 <textarea class="form-control" rows="2" name="jQuerySummery"></textarea>
                                            </div>
                                            <div class="form-group position-relative error-l-50">
                                                <label>Duration</label>
                                                <div class="input-daterange input-group" id="datepicker">
                                                    <input type="text" class="input-sm form-control" name="start"
                                                        placeholder="Start Date" />
                                                    <span class="input-group-addon"></span>
                                                    <input type="text" class="input-sm form-control" name="end"
                                                        placeholder="End Date" />
                                                </div>
                                            </div>
                                                <button type="submit" class="btn btn-outline-primary">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="border mb-2 bg_white">
                                    <button class="btn btn-primary default w-100 collapsed" data-toggle="collapse"
                                        data-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">
                                        Achievement and Awards
                                    </button>
                                    <div id="collapseFive" class="collapse" data-parent="#accordion">
                                        <div class="p-4">
                                            <form id="exampleForm" class="tooltip-label-right" method="post" novalidate>
                                               
                                            <div class="form-group position-relative error-l-50">
                                                <label>Achievement and Awards</label>
                                                 <textarea class="form-control" rows="2" name="jQuerySummery" id="ckEditorClassic"></textarea>
                                            </div>
                                            
                                                <button type="submit" class="btn btn-outline-primary">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>
                <div class="col-lg-6">
                    <div class="icon-cards-row w-100">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3">
                                <div class="glide__slide mb-15">
                                    <a href="<?php echo base_url(); ?>student-resume-type-01" class="card">
                                        <div class="card-body text-center">
                                            <i class="iconsminds-letter-open"></i>
                                            <p class="lead text-center text-small">Resume Type 01</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3">
                                <div class="glide__slide mb-15">
                                    <a href="<?php echo base_url(); ?>student-resume-type-02" class="card">
                                        <div class="card-body text-center">
                                            <i class="iconsminds-letter-open"></i>
                                            <p class="lead text-center text-small">Resume Type 02</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3">
                                <div class="glide__slide mb-15">
                                    <a href="<?php echo base_url(); ?>student-resume-type-03" class="card">
                                        <div class="card-body text-center">
                                            <i class="iconsminds-letter-open"></i>
                                            <p class="lead text-center text-small">Resume Type 03</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3">
                                <div class="glide__slide mb-15">
                                    <a href="<?php echo base_url(); ?>student-resume-type-04" class="card">
                                        <div class="card-body text-center">
                                            <i class="iconsminds-letter-open"></i>
                                            <p class="lead text-center text-small">Resume Type 04</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3">
                                <div class="glide__slide mb-15">
                                    <a href="<?php echo base_url(); ?>student-resume-type-05" class="card">
                                        <div class="card-body text-center">
                                            <i class="iconsminds-letter-open"></i>
                                            <p class="lead text-center text-small">Resume Type 05</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3">
                                <div class="glide__slide mb-15">
                                    <a href="<?php echo base_url(); ?>student-resume-type-06" class="card">
                                        <div class="card-body text-center">
                                            <i class="iconsminds-letter-open"></i>
                                            <p class="lead text-center text-small">Resume Type 06</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3">
                                <div class="glide__slide mb-15">
                                    <a href="<?php echo base_url(); ?>student-resume-type-07" class="card">
                                        <div class="card-body text-center">
                                            <i class="iconsminds-letter-open"></i>
                                            <p class="lead text-center text-small">Resume Type 07</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3">
                                <div class="glide__slide mb-15">
                                    <a href="<?php echo base_url(); ?>student-resume-type-08" class="card">
                                        <div class="card-body text-center">
                                            <i class="iconsminds-letter-open"></i>
                                            <p class="lead text-center text-small">Resume Type 08</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3">
                                <div class="glide__slide mb-15">
                                    <a href="<?php echo base_url(); ?>student-resume-type-09" class="card">
                                        <div class="card-body text-center">
                                            <i class="iconsminds-letter-open"></i>
                                            <p class="lead text-center text-small">Resume Type 09</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3">
                                <div class="glide__slide mb-15">
                                    <a href="<?php echo base_url(); ?>student-resume-type-10" class="card">
                                        <div class="card-body text-center">
                                            <i class="iconsminds-letter-open"></i>
                                            <p class="lead text-center text-small">Resume Type 10</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3">
                                <div class="glide__slide mb-15">
                                    <a href="<?php echo base_url(); ?>student-resume-type-11" class="card">
                                        <div class="card-body text-center">
                                            <i class="iconsminds-letter-open"></i>
                                            <p class="lead text-center text-small">Resume Type 11</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3">
                                <div class="glide__slide mb-15">
                                    <a href="<?php echo base_url(); ?>student-resume-type-12" class="card">
                                        <div class="card-body text-center">
                                            <i class="iconsminds-letter-open"></i>
                                            <p class="lead text-center text-small">Resume Type 12</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- <div class="col-xl-3 col-lg-3">
                                <div class="glide__slide mb-15">
                                    <a href="<?php echo base_url(); ?>student-resume-type-13" class="card">
                                        <div class="card-body text-center">
                                            <i class="iconsminds-letter-open"></i>
                                            <p class="lead text-center text-small">Resume Type 13</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3">
                                <div class="glide__slide mb-15">
                                    <a href="<?php echo base_url(); ?>student-resume-type-14" class="card">
                                        <div class="card-body text-center">
                                            <i class="iconsminds-letter-open"></i>
                                            <p class="lead text-center text-small">Resume Type 14</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3">
                                <div class="glide__slide mb-15">
                                    <a href="<?php echo base_url(); ?>student-resume-type-15" class="card">
                                        <div class="card-body text-center">
                                            <i class="iconsminds-letter-open"></i>
                                            <p class="lead text-center text-small">Resume Type 15</p>
                                        </div>
                                    </a>
                                </div>
                            </div> -->

                        </div>

                    </div>

                </div>
           </div>
        </div>
    </main>
<?php $this->load->view('admin/includes/footer'); ?>
<script type="text/javascript">
  $(document).ready(function() {
  var max_fields      = 10; //maximum input boxes allowed
  var wrapper       = $(".input_fields_wrap"); //Fields wrapper
  var add_button      = $(".add_field_button"); //Add button ID
  
  var x = 1; //initlal text box count
  $(add_button).click(function(e){ //on add input button click
    e.preventDefault();
    if(x < max_fields){ //max input box allowed
      x++; //text box increment
      $(wrapper).append('<div class="mb-5"><div class="form-group position-relative error-l-50"><label>Course Name</label><input type="text" class="form-control" name="jQueryCourseName"  placeholder="Course Name"></div><div class="form-group position-relative error-l-50"><label>Course Description</label><textarea class="form-control" rows="2" name="jQuerySummery"></textarea></div><div class="form-group position-relative error-l-50"><label>Institute Name</label><input type="text" class="form-control" name="jQueryCourseName"  placeholder="Institute Name"></div><div class="form-group position-relative error-l-50"><label>Institute Address</label><textarea class="form-control" rows="2" name="jQuerySummery"></textarea></div><div class="form-group position-relative error-l-50"><label>Course Duration</label><div class="input-daterange input-group" id="datepicker"><input type="text" class="input-sm form-control" name="start" placeholder="Start Date" /><span class="input-group-addon"></span><input type="text" class="input-sm form-control" name="end" placeholder="End Date" /></div></div><a href="#" class="btn btn-outline-primary btn-xs mb-2 remove_field"><i class="simple-icon-minus"></i></a></div>'); //add input box
    }
  });
  
  $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
    e.preventDefault(); $(this).parent('div').remove(); x--;
  })
});
</script>
<script type="text/javascript">
  $(document).ready(function() {
  var max_fields      = 10; //maximum input boxes allowed
  var wrapper       = $(".workExpWrapper"); //Fields wrapper
  var add_button      = $(".addExp"); //Add button ID
  
  var x = 1; //initlal text box count
  $(add_button).click(function(e){ //on add input button click
    e.preventDefault();
    if(x < max_fields){ //max input box allowed
      x++; //text box increment
      $(wrapper).append('<div class="mb-5"><div class="form-group position-relative error-l-50"><label>Job Title</label><input type="text" class="form-control" name="jobTitle[]"  placeholder="Job Title"></div><div class="form-group position-relative error-l-50"><label>Job Description</label><textarea class="form-control" rows="2" name="jobDescr[]"></textarea></div><div class="form-group position-relative error-l-50"><label>Company Name</label><input type="text" class="form-control" name="companyName[]"  placeholder="Company Name"></div><div class="form-group position-relative error-l-50"><label>Company Address</label><textarea class="form-control" rows="2" name="companyAddress[]"></textarea></div><div class="form-group position-relative error-l-50"><label>Job Duration</label><div class="input-daterange input-group" id="datepicker"><input type="text" class="input-sm form-control" name="jobStart[]" placeholder="Start Date" /><span class="input-group-addon"></span><input type="text" class="input-sm form-control" name="jobEnd[]" placeholder="End Date" /></div></div><a href="#" class="btn btn-outline-primary btn-xs mb-2 remove_field"><i class="simple-icon-minus"></i></a></div>'); //add input box
    }
  });
  
  $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
    e.preventDefault(); $(this).parent('div').remove(); x--;
  })
});
</script>
