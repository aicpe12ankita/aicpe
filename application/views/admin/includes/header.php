<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>AICPE - All India Council For Professional Excellence</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/font/iconsmind-s/css/iconsminds.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/font/simple-line-icons/css/simple-line-icons.css" />
     <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/datatables.responsive.bootstrap4.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/bootstrap.rtl.only.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/fullcalendar.min.css" />
   
     <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/bootstrap-float-label.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/select2.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/select2-bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/dropzone.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/perfect-scrollbar.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/glide.core.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/bootstrap-stars.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/bootstrap-tagsinput.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/nouislider.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/bootstrap-datepicker3.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/component-custom-switch.min.css" />

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/video-js.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/baguetteBox.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/smart_wizard.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" />
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/toastr.min.css" />
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.5.1.min.js"></script>
  
    <script src="<?php echo base_url(); ?>assets/js/vendor/bootstrap.bundle.min.js"></script>
    
   
    <script src="<?php echo base_url(); ?>assets/js/vendor/jquery.validate/jquery.validate.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/vendor/jquery.validate/additional-methods.min.js"></script> 

       <script src="<?php echo base_url(); ?>assets/js/dore.script.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/toastr.min.js"></script>
</head>

<body id="app-container" class="menu-default show-spinner">
    <nav class="navbar fixed-top">
        <div class="d-flex align-items-center navbar-left">
            <a href="#" class="menu-button d-none d-md-block">
                <svg class="main" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 17">
                    <rect x="0.48" y="0.5" width="7" height="1" />
                    <rect x="0.48" y="7.5" width="7" height="1" />
                    <rect x="0.48" y="15.5" width="7" height="1" />
                </svg>
                <svg class="sub" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 17">
                    <rect x="1.56" y="0.5" width="16" height="1" />
                    <rect x="1.56" y="7.5" width="16" height="1" />
                    <rect x="1.56" y="15.5" width="16" height="1" />
                </svg>
            </a>

            <a href="#" class="menu-button-mobile d-xs-block d-sm-block d-md-none">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 17">
                    <rect x="0.5" y="0.5" width="25" height="1" />
                    <rect x="0.5" y="7.5" width="25" height="1" />
                    <rect x="0.5" y="15.5" width="25" height="1" />
                </svg>
            </a>

            <div class="search" data-search-path="Pages.Search.html?q=">
                <input placeholder="Search...">
                <span class="search-icon">
                    <i class="simple-icon-magnifier"></i>
                </span>
            </div>

        </div>
        <div class="d-flex align-items-center navbar-center">
            <div class="div-navbar-logo">
               <span> <a class="navbar-logo" href="<?php echo base_url();?>student-dashboard">
                     <img src="<?php echo base_url();?>assets/logos/aicpe-logo.png">
                </a></span>
            </div>
        </div>
        <div class="navbar-right">
            <div class="header-icons d-inline-block align-middle">
                <div class="d-none d-md-inline-block align-text-bottom mr-3">
                    <div class="custom-switch custom-switch-primary-inverse custom-switch-small pl-1"
                         data-toggle="tooltip" data-placement="left" title="Dark Mode">
                        <input class="custom-switch-input" id="switchDark" type="checkbox" checked>
                        <label class="custom-switch-btn" for="switchDark"></label>
                    </div>
                </div>

              

                <div class="position-relative d-inline-block">
                    <button class="header-icon btn btn-empty" type="button" id="notificationButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="simple-icon-bell"></i>
                        <span class="count">3</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right mt-3 position-absolute" id="notificationDropdown">
                        <div class="scroll">
                            <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                <a href="#">
                                    <img src="<?php echo base_url(); ?>assets/img/profiles/l-2.jpg" alt="Notification Image"
                                        class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                                </a>
                                <div class="pl-3">
                                    <a href="#">
                                        <p class="font-weight-medium mb-1">Joisse Kaycee just sent a new comment!</p>
                                        <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                <a href="#">
                                    <img src="<?php echo base_url(); ?>assets/img/notifications/1.jpg" alt="Notification Image"
                                        class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                                </a>
                                <div class="pl-3">
                                    <a href="#">
                                        <p class="font-weight-medium mb-1">1 item is out of stock!</p>
                                        <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                <a href="#">
                                    <img src="<?php echo base_url(); ?>assets/img/notifications/2.jpg" alt="Notification Image"
                                        class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                                </a>
                                <div class="pl-3">
                                    <a href="#">
                                        <p class="font-weight-medium mb-1">New order received! It is total $147,20.</p>
                                        <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex flex-row mb-3 pb-3 ">
                                <a href="#">
                                    <img src="<?php echo base_url(); ?>assets/img/notifications/3.jpg" alt="Notification Image"
                                        class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                                </a>
                                <div class="pl-3">
                                    <a href="#">
                                        <p class="font-weight-medium mb-1">3 items just added to wish list by a user!
                                        </p>
                                        <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="header-icon btn btn-empty d-none d-sm-inline-block" type="button" id="fullScreenButton">
                    <i class="simple-icon-size-fullscreen"></i>
                    <i class="simple-icon-size-actual"></i>
                </button>

            </div>

            <div class="user d-inline-block">
                <button class="btn btn-empty p-0" type="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <span class="name">Sarah Kortney</span>
                    <span>
                        <img alt="Profile Picture" src="<?php echo base_url(); ?>assets/img/profiles/l-1.jpg" />
                    </span>
                </button>

                <div class="dropdown-menu dropdown-menu-right mt-3">
                    <a class="dropdown-item" href="<?php echo base_url(); ?>student-profile">Profile</a>
                    <a class="dropdown-item" href="<?php echo base_url(); ?>student-settings">Settings</a>
                    <a class="dropdown-item" href="<?php echo base_url(); ?>logout">Sign out</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="menu">
        <div class="main-menu">
            <div class="scroll">
                <ul class="list-unstyled">
                    <li class="active">
                        <a href="<?php echo base_url(); ?>student-dashboard">
                            <i class="iconsminds-shop-4"></i>
                            <span>Dashboards</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>student-courses">
                            <i class="iconsminds-books"></i>
                            <span>Course Details and Study material</span>
                        </a>
                    </li>
                    <!-- <li>
                        <a href="<?php echo base_url(); ?>student-study-material">
                            <i class="iconsminds-open-book"></i>
                            <span>Study material</span>
                        </a>
                    </li> -->
                    <li>
                        <a href="<?php echo base_url(); ?>student-course-assignment">
                            <i class="iconsminds-notepad"></i>
                            <span>Course assignment or homework</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>student-invention-center">
                            <i class="iconsminds-idea"></i>
                            <span>Invention center</span>
                        </a>
                    </li>
                    <!-- <li>
                        <a href="#applications">
                            <i class="iconsminds-air-balloon-1"></i>  Exam manager
                        </a>
                    </li> -->
                    <li>
                        <a href="<?php echo base_url(); ?>student-job-offers">
                            <i class="iconsminds-network"></i>
                            <span>Job offers</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>student-library-management">
                            <i class="iconsminds-library"></i>
                            <span>Library Management</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>student-document-manager">
                            <i class="iconsminds-folders"></i>
                            <span>Document manager</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>student-resume-maker">
                            <i class="iconsminds-letter-open"></i>
                            <span>Resume maker</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>students-birthday-and-anniversary">
                            <i class="iconsminds-iconsminds-birthday-cake"></i>
                            <span>Birthday and anniversary</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="sub-menu">
            <div class="scroll">
                
                <ul class="list-unstyled" data-link="applications">
                    <li>
                        <a href="<?php echo base_url(); ?>demo-exams">
                            <i class="simple-icon-picture"></i> <span class="d-inline-block">Demo online exam 
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>exam-hall-ticket">
                            <i class="simple-icon-event"></i> <span class="d-inline-block">Exam hall ticket </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>final-exam">
                            <i class="simple-icon-screen-desktop"></i> <span class="d-inline-block">Final exam</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>paper-exam">
                            <i class="simple-icon-note"></i> <span class="d-inline-block">Paper exam</span>
                        </a>
                    </li>
                </ul>
               

            </div>
        </div>
    </div>