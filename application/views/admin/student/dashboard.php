<?php $this->load->view('admin/includes/header'); ?>
<?php //echo $this->session->userdata(); die; ?>
    <main>
        <div class="container-fluid">
           <div class="row">
                <div class="col-12">
                    <div class="input-group typeahead-container">
                        <input type="text" class="form-control typeahead" name="query" id="query"
                            placeholder="Start typing something to search..." data-provide="typeahead"
                            autocomplete="off">
                        <div class="input-group-append ">
                            <button type="submit" class="btn btn-primary default">
                                <i class="simple-icon-magnifier"></i>
                            </button>
                        </div>
                    </div>
                    <?php print_r($this->session->userdata());  ?>

                    <div class="separator mb-5"></div>
                </div>
                
             </div> 
            <div class="row">   
                <div class="col-lg-12 col-xl-6">
                    <div class="card custom-modal custom-user-card mb-4">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="position-relative custom-user-card">
                                            <img class="card-img-left" src="<?php echo base_url(); ?>assets/img/profiles/l-1.jpg" alt="Card image cap">
                                            <p class="badge  position-absolute badge-bottom-left pb-0">
                                                <i class="simple-icon-badge"></i>
                                                <i class="simple-icon-badge"></i>
                                                <i class="simple-icon-badge"></i>
                                                <i class="simple-icon-badge"></i>
                                                <i class="simple-icon-badge"></i>
                                            </p>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="card-body resume01_head">
                                            
                                        <a href="#">
                                            <p class="list-item-heading mb-2 truncate custom-user-card-head">Sarah Kortney</p>
                                        <p class="custom-user-card-subhead mb-2"><i class="iconsminds-office"></i> <?php echo ucwords("AICPE Institute of Technology and Management Nagpur, Maharashtra"); ?> </p>
                                        <p class="mb-2 custom-user-card-subhead"><i class="iconsminds-book"></i> <?php echo ucwords("Certificate in MS- Office and internet"); ?>  </p>
                                        <p class="mb-2 custom-user-card-subhead"><i class="iconsminds-calendar-1"></i> <?php echo ucwords("3 months"); ?></p>
                                        
                                        
                                        <p class="mb-2 custom-user-card-subhead"><i class="iconsminds-user"></i> <?php echo ucwords("John Doe [ 09911223399 ]"); ?> </p>
                                        </a>
                                    
                                
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                    <div class="icon-cards-row">
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="glide__slide mb-15">
                                    <a href="#" class="card">
                                        <div class="card-body text-center">
                                            <i class="iconsminds-clock"></i>
                                            <p class="card-text mb-0">08 remain out of 15</p>
                                            <p class="lead text-center">Demo Exams</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="glide__slide mb-15">
                                    <a href="#" class="card">
                                        <div class="card-body text-center">
                                            <i class="iconsminds-file-edit"></i>
                                            <p class="card-text mb-0">Yet Not Applied for </p>
                                            <p class="lead text-center">Final Exam</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="glide__slide mb-15">
                                    <a href="#" class="card">
                                        <div class="card-body text-center">
                                            <i class="iconsminds-user"></i>
                                            <p class="card-text mb-0">Job Updates </p>
                                            <p class="lead text-center">20</p>
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
                            <h5 class="card-title">Invention Center</h5>

                            <div class="scroll dashboard-list-with-user">
                                <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                    <a href="#">
                                        <img src="<?php echo base_url(); ?>assets/img/profiles/l-1.jpg" alt="Mayra Sibley"
                                            class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                    </a>
                                    <div class="pl-3">
                                        <a href="#">
                                            <p class="font-weight-medium mb-0 ">Mayra Sibley</p>
                                            <p class="text-muted mb-0 text-small">09.08.2018 - 12:45</p>
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
                                            <p class="text-muted mb-0 text-small">05.08.2018 - 10:20</p>
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
                                            <p class="text-muted mb-0 text-small">05.08.2018 - 09:12</p>
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
                                            <p class="text-muted mb-0 text-small">01.08.2018 - 18:20</p>
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
                                            <p class="text-muted mb-0 text-small">27.07.2018 - 11:45</p>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                    <a href="#">
                                        <img src="<?php echo base_url(); ?>assets/img/profiles/l-4.jpg" alt="Esperanza Lodge"
                                            class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                    </a>
                                    <div class="pl-3">
                                        <a href="#">
                                            <p class="font-weight-medium mb-0 ">Esperanza Lodge</p>
                                            <p class="text-muted mb-0 text-small">24.07.2018 - 15:00</p>
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
                                    <h5 class="card-title">AICPE Courses</h5>

                                    <div class="scroll dashboard-list-with-user">
                                        <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                            <a href="#">
                                                <img src="<?php echo base_url(); ?>assets/img/courses/ms-office.jpg" alt="Mayra Sibley"
                                                    class="img-thumbnail border-0 list-thumbnail align-self-center xsmall" />
                                            </a>
                                            <div class="pl-3">
                                                <a href="#">
                                                    <p class="font-weight-medium mb-0 ">Certificate In MS- Office And Internet </p>
                                                    <a href="#" class="text-primary text-small font-weight-medium d-none d-sm-block">view course<span class="iconsminds-right"></span></a>
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
                                                    <p class="font-weight-medium mb-0 ">Certificate In Tally Erp-09</p>
                                                    <a href="#" class="text-primary text-small font-weight-medium d-none d-sm-block">view course<span class="iconsminds-right"></span></a>
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
                                                    <p class="font-weight-medium mb-0 ">Certificate In Computer Based English Typing</p>
                                                    <a href="#" class="text-primary text-small font-weight-medium d-none d-sm-block">view course<span class="iconsminds-right"></span></a>
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
                                                    <p class="font-weight-medium mb-0 ">Certificate In Account Expert</p>
                                                    <a href="#" class="text-primary text-small font-weight-medium d-none d-sm-block">view course<span class="iconsminds-right"></span></a>
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
                                                    <p class="font-weight-medium mb-0 ">Certificate in information Technology </p>
                                                    <a href="#" class="text-primary text-small font-weight-medium d-none d-sm-block">view course<span class="iconsminds-right"></span></a>
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
                <div class="col-12">
                    <div class="icon-cards-row w-100">
                        <div class="row">
                             <div class="col-xl-6 col-lg-6">
                                <div class="card mb-15">
                                    <div class="card-body">
                                        <h4>Fees Details</h4>
                                        <table class="table">
                                            <thead class="thead-light">
                                                <tr>
                                                     <th scope="col">Total Fees</th>
                                                     <th scope="col">Paid Fees</th>
                                                     <th scope="col">Balance Fees</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                     <td>3500</td>
                                                     <td>1600</td>
                                                     <td>1400</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                             </div>
                            <div class="col-xl-3 col-lg-3">
                                <div class="glide__slide mb-15">
                                    <a href="<?php echo base_url(); ?>student-resume-make" class="card">
                                        <div class="card-body text-center">
                                            <i class="iconsminds-letter-open"></i>
                                            <p class="card-text mb-0">Create the best version of your resume with</p>
                                            <p class="lead text-center">Resume Maker</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3">
                                <div class="glide__slide mb-15">
                                    <a href="#" class="card">
                                        <div class="card-body text-center">
                                            <i class="iconsminds-digital-drawing"></i>
                                            <p class="card-text mb-0">Practice typing for free</p>
                                            <p class="lead text-center">Typing Software</p>
                                        </div>
                                    </a>
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
                                    <h5 class="d-inline">Demo exams</h5>
                                    <span class="text-muted text-small d-block">Growth chart accoring to demo exams</span>
                                </div>
                            </div>
                            <!-- <div class="btn-group float-right float-none-xs mt-2">
                                <button class="btn btn-outline-primary btn-xs dropdown-toggle" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    This Week
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Last Week</a>
                                    <a class="dropdown-item" href="#">This Month</a>
                                </div>
                            </div> -->
                        </div>
                        <div class="chart card-body pt-0">
                            <canvas id="visitChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Book Marked Websites</h5>

                            <div class="scroll dashboard-logs">

                                <table class="table table-sm table-borderless">

                                    <tbody>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-1 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium"><a href="https://www.aicpeindia.ac.in/">All India Council For Professional Excellence</a></span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted" data-toggle="modal"
                                data-target=".bd-example-modal-sm"><span class="simple-icon-trash"></span></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium"><a href="#">Facebook - Log In or Sign Up</a></span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted"><i class="simple-icon-trash"></i></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-danger align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium"><a href="#">Gmail - Log in or Signup</a></span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted"><i class="simple-icon-trash"></i></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New sale: Napoleonshat</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted"><i class="simple-icon-trash"></i></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">https://www.aicpeindia.ac.in</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted"><i class="simple-icon-trash"></i></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New sale: Soufflé</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted"><i class="simple-icon-trash"></i></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-danger align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">2 categories added</span>
                                            </td>
                                           <td class="text-right">
                                                <span class="text-muted"><i class="simple-icon-trash"></i></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">https://digitalpatti.com</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted"><i class="simple-icon-trash"></i></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New sale: Bebinca</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted"><i class="simple-icon-trash"></i></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New sale: Bebinca</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted"><i class="simple-icon-trash"></i></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">https://digitalpatti.com</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted"><i class="simple-icon-trash"></i></span>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
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
<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Are you sure, you want to delete this bookmark link ?</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            ...
                                        </div>
                                    </div>
                                </div>
                            </div>
   <?php $this->load->view('admin/includes/footer'); ?>