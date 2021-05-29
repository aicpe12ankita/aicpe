<?php $this->load->view('admin/includes/admin_header'); ?>

    <main>
        <div class="container-fluid">
            <div class="row">   
                <div class="col-lg-12 col-xl-6">
                    <!-- <div class="card custom-modal custom-user-card mb-4">
                        <div class="card-body resume01_head">
                            <a href="#">
                                <p class="list-item-heading mb-2 truncate custom-user-card-head">Today's Collection</p>
                                <p class="lead text-center white"><i class="iconsminds-wallet"></i> Rs. 12600</p>
                            </a>
                        </div>
                    </div> -->
                    <div class="icon-cards-row">
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="glide__slide mb-15">
                                    <a href="#" class="card custom-modal">
                                        <div class="card-body text-center">
                                            <i class="iconsminds-wallet white"></i>
                                            <p class="card-text mb-0 white">Today's Collection</p>
                                            <p class="lead text-center white"> Rs. 12600</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="glide__slide mb-15">
                                    <a href="#" class="card">
                                        <div class="card-body text-center">
                                            <i class="iconsminds-office"></i>
                                            <p class="card-text mb-0">Institution Pending Enquiries</p>
                                            <p class="lead text-center">230</p>
                                            <p class="mb-0" data-toggle="modal" data-target="#instenquiriesReport">view more <span class="iconsminds-right"></span></p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="glide__slide mb-15">
                                    <a href="#" class="card">
                                        <div class="card-body text-center">
                                            <i class="iconsminds-diploma-2"></i>
                                            <p class="card-text mb-0">Certificate Requests </p>
                                            <p class="lead text-center">130</p>
                                            <p class="mb-0" data-toggle="modal" data-target="#certificateReport">view more <span class="iconsminds-right"></span></p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="glide__slide mb-15">
                                    <a href="#" class="card">
                                        <div class="card-body text-center">
                                            <i class="iconsminds-user"></i>
                                            <p class="card-text mb-0">Today's Admissions </p>
                                            <p class="lead text-center">200</p>
                                            <p class="mb-0" data-toggle="modal" data-target="#admissionsReport">view more <span class="iconsminds-right"></span></p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="glide__slide mb-15">
                                    <a href="#" class="card">
                                        <div class="card-body text-center">
                                            <i class="iconsminds-network"></i>
                                            <p class="card-text mb-0">Employer Pending Enquiries</p>
                                            <p class="lead text-center">230</p>
                                            <p class="mb-0" data-toggle="modal" data-target="#employerenquiriesReport">view more <span class="iconsminds-right"></span></p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="glide__slide mb-15">
                                    <a href="#" class="card">
                                        <div class="card-body text-center">
                                            <i class="iconsminds-clock"></i>
                                            <p class="card-text mb-0">Today's Exams </p>
                                            <p class="lead text-center">50</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 mb-4">
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Top 5 Best Performing Institutions</h5>

                                    <div class="scroll dashboard-list-with-user">
                                        <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                            <a href="#">
                                                <img src="<?php echo base_url(); ?>assets/img/profiles/l-1.jpg" alt="Mayra Sibley"
                                                    class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                            </a>
                                            <div class="pl-3">
                                                <a href="#">
                                                    <p class="font-weight-medium mb-0 ">Mayra Sibley</p>
                                                    <a href="#" class="text-primary text-small font-weight-medium d-none d-sm-block">view details<span class="iconsminds-right"></span></a>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                            <a href="#">
                                                <img src="<?php echo base_url(); ?>assets/img/profiles/l-7.jpg" alt="Mimi Carreira"
                                                    class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                            </a>
                                            <div class="pl-3">
                                                <a href="#">
                                                    <p class="font-weight-medium mb-0 ">Mimi Carreira</p>
                                                    <a href="#" class="text-primary text-small font-weight-medium d-none d-sm-block">view details<span class="iconsminds-right"></span></a>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                            <a href="#">
                                                <img src="<?php echo base_url(); ?>assets/img/profiles/l-6.jpg" alt="Philip Nelms"
                                                    class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                            </a>
                                            <div class="pl-3">
                                                <a href="#">
                                                    <p class="font-weight-medium mb-0 ">Philip Nelms</p>
                                                    <a href="#" class="text-primary text-small font-weight-medium d-none d-sm-block">view details<span class="iconsminds-right"></span></a>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                            <a href="#">
                                                <img src="<?php echo base_url(); ?>assets/img/profiles/l-3.jpg" alt="Terese Threadgill"
                                                    class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                            </a>
                                            <div class="pl-3">
                                                <a href="#">
                                                    <p class="font-weight-medium mb-0 ">Terese Threadgill</p>
                                                    <a href="#" class="text-primary text-small font-weight-medium d-none d-sm-block">view details<span class="iconsminds-right"></span></a>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                            <a href="#">
                                                <img src="<?php echo base_url(); ?>assets/img/profiles/l-5.jpg" alt="Kathryn Mengel"
                                                    class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                            </a>
                                            <div class="pl-3">
                                                <a href="#">
                                                    <p class="font-weight-medium mb-0 ">Kathryn Mengel</p>
                                                    <a href="#" class="text-primary text-small font-weight-medium d-none d-sm-block">view details<span class="iconsminds-right"></span></a>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Top 5 Best Performing Employers</h5>

                                    <div class="scroll dashboard-list-with-user">
                                        <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                            <a href="#">
                                                <img src="<?php echo base_url(); ?>assets/img/courses/ms-office.jpg" alt="Mayra Sibley"
                                                    class="img-thumbnail border-0 list-thumbnail align-self-center xsmall" />
                                            </a>
                                            <div class="pl-3">
                                                <a href="#">
                                                    <p class="font-weight-medium mb-0 ">Test Employer 1</p>
                                                    <a href="#" class="text-primary text-small font-weight-medium d-none d-sm-block">view details<span class="iconsminds-right"></span></a>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                            <a href="#">
                                                <img src="<?php echo base_url(); ?>assets/img/courses/tally.jpg" alt="Mimi Carreira"
                                                    class="img-thumbnail border-0 list-thumbnail align-self-center xsmall" />
                                            </a>
                                            <div class="pl-3">
                                                <a href="#">
                                                    <p class="font-weight-medium mb-0 ">Test Employer 2</p>
                                                    <a href="#" class="text-primary text-small font-weight-medium d-none d-sm-block">view details<span class="iconsminds-right"></span></a>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                            <a href="#">
                                                <img src="<?php echo base_url(); ?>assets/img/courses/typing.jpg" alt="Philip Nelms"
                                                    class="img-thumbnail border-0  list-thumbnail align-self-center xsmall" />
                                            </a>
                                            <div class="pl-3">
                                                <a href="#">
                                                    <p class="font-weight-medium mb-0 ">Test Employer 3</p>
                                                    <a href="#" class="text-primary text-small font-weight-medium d-none d-sm-block">view details<span class="iconsminds-right"></span></a>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                            <a href="#">
                                                <img src="<?php echo base_url(); ?>assets/img/courses/account-expert.jpg" alt="Terese Threadgill"
                                                    class="img-thumbnail border-0 list-thumbnail align-self-center xsmall" />
                                            </a>
                                            <div class="pl-3">
                                                <a href="#">
                                                    <p class="font-weight-medium mb-0 ">Test Employer 4</p>
                                                    <a href="#" class="text-primary text-small font-weight-medium d-none d-sm-block">view details<span class="iconsminds-right"></span></a>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                            <a href="#">
                                                <img src="<?php echo base_url(); ?>assets/img/courses/computer-programing.jpg" alt="Kathryn Mengel"
                                                    class="img-thumbnail border-0 list-thumbnail align-self-center xsmall" />
                                            </a>
                                            <div class="pl-3">
                                                <a href="#">
                                                    <p class="font-weight-medium mb-0 ">Test Employer 5</p>
                                                    <a href="#" class="text-primary text-small font-weight-medium d-none d-sm-block">view details<span class="iconsminds-right"></span></a>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
              
             <div class="row">
                <div class="col-lg-6 col-sm-12 mb-4">
                    <div class="card dashboard-filled-line-chart">
                        <div class="card-body ">
                            <div class="float-left float-none-xs">
                                <div class="d-inline-block">
                                    <h5 class="d-inline">Business Report</h5>
                                    <span class="text-muted text-small d-block">Last Week Business Growth chart accoring to recharge by institutions</span>
                                </div>
                            </div>
                        </div>
                        <div class="chart card-body pt-0">
                            <canvas id="businessChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Top 5 Best Performing Students</h5>

                                    <div class="scroll dashboard-list-with-user">
                                        <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                            <a href="#">
                                                <img src="<?php echo base_url(); ?>assets/img/profiles/l-1.jpg" alt="Mayra Sibley"
                                                    class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                            </a>
                                            <div class="pl-3">
                                                <a href="#">
                                                    <p class="font-weight-medium mb-0 ">Mayra Sibley</p>
                                                    <a href="#" class="text-primary text-small font-weight-medium d-none d-sm-block">view details<span class="iconsminds-right"></span></a>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                            <a href="#">
                                                <img src="<?php echo base_url(); ?>assets/img/profiles/l-7.jpg" alt="Mimi Carreira"
                                                    class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                            </a>
                                            <div class="pl-3">
                                                <a href="#">
                                                    <p class="font-weight-medium mb-0 ">Mimi Carreira</p>
                                                    <a href="#" class="text-primary text-small font-weight-medium d-none d-sm-block">view details<span class="iconsminds-right"></span></a>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                            <a href="#">
                                                <img src="<?php echo base_url(); ?>assets/img/profiles/l-6.jpg" alt="Philip Nelms"
                                                    class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                            </a>
                                            <div class="pl-3">
                                                <a href="#">
                                                    <p class="font-weight-medium mb-0 ">Philip Nelms</p>
                                                    <a href="#" class="text-primary text-small font-weight-medium d-none d-sm-block">view details<span class="iconsminds-right"></span></a>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                            <a href="#">
                                                <img src="<?php echo base_url(); ?>assets/img/profiles/l-3.jpg" alt="Terese Threadgill"
                                                    class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                            </a>
                                            <div class="pl-3">
                                                <a href="#">
                                                    <p class="font-weight-medium mb-0 ">Terese Threadgill</p>
                                                    <a href="#" class="text-primary text-small font-weight-medium d-none d-sm-block">view details<span class="iconsminds-right"></span></a>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                            <a href="#">
                                                <img src="<?php echo base_url(); ?>assets/img/profiles/l-5.jpg" alt="Kathryn Mengel"
                                                    class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                            </a>
                                            <div class="pl-3">
                                                <a href="#">
                                                    <p class="font-weight-medium mb-0 ">Kathryn Mengel</p>
                                                    <a href="#" class="text-primary text-small font-weight-medium d-none d-sm-block">view details<span class="iconsminds-right"></span></a>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card">
                                <div class="card-body birthday_dash">
                                    <h5 class="card-title">Today's Birthdays and Anniversaries </h5>

                                    <div class="scroll dashboard-list-with-user">
                                        <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                            <i class="iconsminds-gift-box theme_color"></i>
                                            <div class="pl-3">
                                                <a href="#">
                                                    <p class="font-weight-medium mb-0 ">Mayra Sibley</p>
                                                    <p class="text-muted mb-0 text-small">Anniversary</p>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                            <i class="iconsminds-birthday-cake theme_color"></i>
                                            <div class="pl-3">
                                                <a href="#">
                                                    <p class="font-weight-medium mb-0 ">Mimi Carreira</p>
                                                    <p class="text-muted mb-0 text-small">Birthday</p>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                           <i class="iconsminds-birthday-cake theme_color"></i>
                                            <div class="pl-3">
                                                <a href="#">
                                                    <p class="font-weight-medium mb-0 ">Philip Nelms</p>
                                                    <p class="text-muted mb-0 text-small">Birthday</p>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                           <i class="iconsminds-gift-box theme_color"></i>
                                            <div class="pl-3">
                                                <a href="#">
                                                    <p class="font-weight-medium mb-0 ">Terese Threadgill</p>
                                                    <p class="text-muted mb-0 text-small">Anniversary</p>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                            <i class="iconsminds-gift-box theme_color"></i>
                                            <div class="pl-3">
                                                <a href="#">
                                                    <p class="font-weight-medium mb-0 ">Kathryn Mengel</p>
                                                    <p class="text-muted mb-0 text-small">Anniversary</p>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                            <i class="iconsminds-birthday-cake theme_color"></i>
                                            <div class="pl-3">
                                                <a href="#">
                                                    <p class="font-weight-medium mb-0 ">Esperanza Lodge</p>
                                                    <p class="text-muted mb-0 text-small">Birthday</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                    </div>
                </div>
            </div>   
        </div>
    </main>
<div class="modal fade" id="admissionsReport" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header custom-modal">
                <h5 class="modal-title" id="exampleModalLabel">Admissions Report</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post">
                    <div class="mb-3 input-daterange input-group w-100" id="datepicker">
                      <input type="text" class="input-sm form-control" name="start"
                          placeholder="Select Start Date" />
                      <span class="input-group-addon"></span>
                      <input type="text" class="input-sm form-control" name="end"
                          placeholder="Select End Date" />
                    </div>
                    <label class="form-group has-float-label">
                          <select class="form-control select2-single" data-width="100%" name="country">
                              <option label="&nbsp;">&nbsp;</option>
                              <option value="TPZ">The Panic Zone</option>
                              <option value="TTZ">The Twilight Zone</option>
                          </select>
                          <span>Country <span class="mandetory">*</span></span>
                      </label>
                      <label class="form-group has-float-label">
                          <select class="form-control select2-single" data-width="100%" name="state">
                              <option label="&nbsp;">&nbsp;</option>
                              <option value="TPZ">The Panic Zone</option>
                              <option value="TTZ">The Twilight Zone</option>
                          </select>
                          <span>State <span class="mandetory">*</span></span>
                      </label>
                      <label class="form-group has-float-label">
                          <select class="form-control select2-single" data-width="100%" name="city">
                              <option label="&nbsp;">&nbsp;</option>
                              <option value="TPZ">The Panic Zone</option>
                              <option value="TTZ">The Twilight Zone</option>
                          </select>
                          <span>District <span class="mandetory">*</span></span>
                      </label>
                      <label class="form-group has-float-label">
                          <select class="form-control select2-single" data-width="100%" name="city">
                              <option label="&nbsp;">&nbsp;</option>
                              <option value="TPZ">The Panic Zone</option>
                              <option value="TTZ">The Twilight Zone</option>
                          </select>
                          <span>City <span class="mandetory">*</span></span>
                      </label>
                      <label class="form-group has-float-label">
                          <select class="form-control select2-single" data-width="100%" name="city">
                              <option label="&nbsp;">&nbsp;</option>
                              <option value="TPZ">The Panic Zone</option>
                              <option value="TTZ">The Twilight Zone</option>
                          </select>
                          <span>Course <span class="mandetory">*</span></span>
                      </label>
               
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                    data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Export</button>
            </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="certificateReport" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header custom-modal">
                <h5 class="modal-title" id="exampleModalLabel">Certificates Report</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post">
                    <div class="mb-3 input-daterange input-group w-100" id="datepicker">
                      <input type="text" class="input-sm form-control" name="start"
                          placeholder="Select Start Date" />
                      <span class="input-group-addon"></span>
                      <input type="text" class="input-sm form-control" name="end"
                          placeholder="Select End Date" />
                    </div>
                    <label class="form-group has-float-label">
                          <select class="form-control select2-single" data-width="100%" name="country">
                              <option label="&nbsp;">&nbsp;</option>
                              <option value="TPZ">The Panic Zone</option>
                              <option value="TTZ">The Twilight Zone</option>
                          </select>
                          <span>Country <span class="mandetory">*</span></span>
                      </label>
                      <label class="form-group has-float-label">
                          <select class="form-control select2-single" data-width="100%" name="state">
                              <option label="&nbsp;">&nbsp;</option>
                              <option value="TPZ">The Panic Zone</option>
                              <option value="TTZ">The Twilight Zone</option>
                          </select>
                          <span>State <span class="mandetory">*</span></span>
                      </label>
                      <label class="form-group has-float-label">
                          <select class="form-control select2-single" data-width="100%" name="city">
                              <option label="&nbsp;">&nbsp;</option>
                              <option value="TPZ">The Panic Zone</option>
                              <option value="TTZ">The Twilight Zone</option>
                          </select>
                          <span>District <span class="mandetory">*</span></span>
                      </label>
                      <label class="form-group has-float-label">
                          <select class="form-control select2-single" data-width="100%" name="city">
                              <option label="&nbsp;">&nbsp;</option>
                              <option value="TPZ">The Panic Zone</option>
                              <option value="TTZ">The Twilight Zone</option>
                          </select>
                          <span>City <span class="mandetory">*</span></span>
                      </label>
                      <label class="form-group has-float-label">
                          <select class="form-control select2-single" data-width="100%" name="city">
                              <option label="&nbsp;">&nbsp;</option>
                              <option value="TPZ">The Panic Zone</option>
                              <option value="TTZ">The Twilight Zone</option>
                          </select>
                          <span>Course <span class="mandetory">*</span></span>
                      </label>
               
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                    data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Export</button>
            </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="instenquiriesReport" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header custom-modal">
                <h5 class="modal-title" id="exampleModalLabel">Institution Enquiries Report</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post">
                    <div class="mb-3 input-daterange input-group w-100" id="datepicker">
                      <input type="text" class="input-sm form-control" name="start"
                          placeholder="Select Start Date" />
                      <span class="input-group-addon"></span>
                      <input type="text" class="input-sm form-control" name="end"
                          placeholder="Select End Date" />
                    </div>
                    <label class="form-group has-float-label">
                          <select class="form-control select2-single" data-width="100%" name="country">
                              <option label="&nbsp;">&nbsp;</option>
                              <option value="TPZ">The Panic Zone</option>
                              <option value="TTZ">The Twilight Zone</option>
                          </select>
                          <span>Country <span class="mandetory">*</span></span>
                      </label>
                      <label class="form-group has-float-label">
                          <select class="form-control select2-single" data-width="100%" name="state">
                              <option label="&nbsp;">&nbsp;</option>
                              <option value="TPZ">The Panic Zone</option>
                              <option value="TTZ">The Twilight Zone</option>
                          </select>
                          <span>State <span class="mandetory">*</span></span>
                      </label>
                      <label class="form-group has-float-label">
                          <select class="form-control select2-single" data-width="100%" name="city">
                              <option label="&nbsp;">&nbsp;</option>
                              <option value="TPZ">The Panic Zone</option>
                              <option value="TTZ">The Twilight Zone</option>
                          </select>
                          <span>District <span class="mandetory">*</span></span>
                      </label>
                      <label class="form-group has-float-label">
                          <select class="form-control select2-single" data-width="100%" name="city">
                              <option label="&nbsp;">&nbsp;</option>
                              <option value="TPZ">The Panic Zone</option>
                              <option value="TTZ">The Twilight Zone</option>
                          </select>
                          <span>City <span class="mandetory">*</span></span>
                      </label>
                      <label class="form-group has-float-label">
                          <select class="form-control select2-single" data-width="100%" name="city">
                              <option label="&nbsp;">&nbsp;</option>
                              <option value="TPZ">The Panic Zone</option>
                              <option value="TTZ">The Twilight Zone</option>
                          </select>
                          <span>Course <span class="mandetory">*</span></span>
                      </label>
               
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                    data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Export</button>
            </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="employerenquiriesReport" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header custom-modal">
                <h5 class="modal-title" id="exampleModalLabel">Employer Enquiries Report</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post">
                    <div class="mb-3 input-daterange input-group w-100" id="datepicker">
                      <input type="text" class="input-sm form-control" name="start"
                          placeholder="Select Start Date" />
                      <span class="input-group-addon"></span>
                      <input type="text" class="input-sm form-control" name="end"
                          placeholder="Select End Date" />
                    </div>
                    <label class="form-group has-float-label">
                          <select class="form-control select2-single" data-width="100%" name="country">
                              <option label="&nbsp;">&nbsp;</option>
                              <option value="TPZ">The Panic Zone</option>
                              <option value="TTZ">The Twilight Zone</option>
                          </select>
                          <span>Country <span class="mandetory">*</span></span>
                      </label>
                      <label class="form-group has-float-label">
                          <select class="form-control select2-single" data-width="100%" name="state">
                              <option label="&nbsp;">&nbsp;</option>
                              <option value="TPZ">The Panic Zone</option>
                              <option value="TTZ">The Twilight Zone</option>
                          </select>
                          <span>State <span class="mandetory">*</span></span>
                      </label>
                      <label class="form-group has-float-label">
                          <select class="form-control select2-single" data-width="100%" name="city">
                              <option label="&nbsp;">&nbsp;</option>
                              <option value="TPZ">The Panic Zone</option>
                              <option value="TTZ">The Twilight Zone</option>
                          </select>
                          <span>District <span class="mandetory">*</span></span>
                      </label>
                      <label class="form-group has-float-label">
                          <select class="form-control select2-single" data-width="100%" name="city">
                              <option label="&nbsp;">&nbsp;</option>
                              <option value="TPZ">The Panic Zone</option>
                              <option value="TTZ">The Twilight Zone</option>
                          </select>
                          <span>City <span class="mandetory">*</span></span>
                      </label>
                      <label class="form-group has-float-label">
                          <select class="form-control select2-single" data-width="100%" name="city">
                              <option label="&nbsp;">&nbsp;</option>
                              <option value="TPZ">The Panic Zone</option>
                              <option value="TTZ">The Twilight Zone</option>
                          </select>
                          <span>Course <span class="mandetory">*</span></span>
                      </label>
               
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                    data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Export</button>
            </form>
            </div>
        </div>
    </div>
</div>
   <?php $this->load->view('admin/includes/footer'); ?>