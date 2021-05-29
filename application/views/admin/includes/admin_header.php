<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>AICPE - All India Council For Professional Excellence</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/font/iconsmind-s/css/iconsminds.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/font/simple-line-icons/css/simple-line-icons.css" />

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/bootstrap.rtl.only.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/fullcalendar.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/datatables.responsive.bootstrap4.min.css" />
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
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/baguetteBox.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/component-custom-switch.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/smart_wizard.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" />
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/toastr.min.css" />
    
    
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
                    <a class="dropdown-item" href="<?php echo base_url(); ?>admin-profile">Profile</a>
                    <a class="dropdown-item" href="<?php echo base_url(); ?>admin-settings">Settings</a>
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
                        <a href="<?php echo base_url(); ?>admin-dashboard">
                            <i class="iconsminds-shop-4"></i>
                            <span>Dashboards</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="#masters">
                            <i class="simple-icon-grid"></i>
                            <span>Master Tables</span>
                        </a>
                    </li>
                    <li>
                        <a href="#institutes">
                            <i class="iconsminds-books"></i>
                            <span>Institutions</span>
                        </a>
                    </li>
                    <li>
                        <a href="#admissions">
                            <i class="iconsminds-network"></i>
                            <span>Admissions</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin-aicpe-associates">
                            <i class="iconsminds-business-mens"></i>
                            <span>AICPE Associates</span>
                        </a>
                    </li>
                     <li>
                        <a href="#enquiries">
                            <i class="iconsminds-user"></i>
                            <span>Enquries</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin-aicpe-world-membership-invention-center">
                            <i class="iconsminds-globe-2"></i>
                            <span>AICPE World Membership</span>
                        </a>
                    </li>
                    <li>
                        <a href="#courses">
                            <i class="iconsminds-books"></i>
                            <span>Courses</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin-e-books">
                            <i class="iconsminds-library"></i>
                            <span>Free E-Books</span>
                        </a>
                    </li>
                    <li>
                        <a href="employers">
                            <i class="iconsminds-id-card"></i>
                            <span>Employers</span>
                        </a>
                    </li>
                    <li>
                        <a href="#staff_management">
                            <i class="iconsminds-business-mens"></i>
                            <span>Staff Management</span>
                        </a>
                    </li>
                    <li>
                        <a href="#certificates">
                            <i class="iconsminds-diploma-2"></i>
                            <span>Certificates</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin-marketing-material">
                            <i class="iconsminds-photo"></i>
                            <span>Marketing Material</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin-gallery">
                            <i class="iconsminds-folder-cloud"></i>
                            <span>Gallery</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin-birthday-and-anniversary">
                            <i class="iconsminds-birthday-cake"></i>
                            <span>Birthday And Anniversary</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin-sms-management">
                            <i class="iconsminds-speach-bubble-dialog"></i>
                            <span>SMS Management</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin-wallet">
                            <i class="iconsminds-wallet"></i>
                            <span>Wallet</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin-postage-record">
                            <i class="iconsminds-box-with-folders"></i>
                            <span>Postage Record</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin-address-label">
                            <i class="iconsminds-printer"></i>
                            <span>Address Label</span>
                        </a>
                    </li>
                    <li>
                        <a href="#business">
                            <i class="iconsminds-digital-drawing"></i>
                            <span>Business</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin-recharge-report">
                            <i class="iconsminds-financial"></i>
                            <span>Recharge Report</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin-role-management">
                            <i class="iconsminds-king-2"></i>
                            <span>Role Management</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="sub-menu">
            <div class="scroll">
                
                <ul class="list-unstyled" data-link="institutes">
                    <li>
                        <a href="<?php echo base_url(); ?>admin-institutions">
                            <i class="iconsminds-office"></i> <span class="d-inline-block">Institutions</span>
                        </a>
                    </li>
                    <!-- <li>
                        <a href="<?php echo base_url(); ?>admin-bulk-upload">
                            <i class="simple-icon-user"></i> <span class="d-inline-block">Bulk Upload</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin-institution-role-management">
                            <i class="iconsminds-king-2"></i> <span class="d-inline-block">Role Management</span>
                        </a>
                    </li> -->
                    <li>
                        <a href="<?php echo base_url(); ?>admin-institutions-remarks">
                            <i class="simple-icon-note"></i> <span class="d-inline-block">Institutions Remarks</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin-institutions-staff">
                            <i class="simple-icon-people"></i> <span class="d-inline-block">Institutions Staff</span>
                        </a>
                    </li>
                </ul>
                <ul class="list-unstyled" data-link="admissions">
                    <li>
                        <a href="<?php echo base_url(); ?>admin-admissions">
                            <i class="simple-icon-list"></i> <span class="d-inline-block">Admission List</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin-aicpe-admissions">
                            <i class="simple-icon-people"></i> <span class="d-inline-block">AICPE Admissions</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin-associates-admissions">
                            <i class="iconsminds-business-mens"></i> <span class="d-inline-block">Associate Admissions</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin-dropouts-students">
                            <i class="simple-icon-user-unfollow"></i> <span class="d-inline-block"> Dropout Students</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin-old-students"> <i class="simple-icon-user"></i> <span class="d-inline-block">Old Students </span> </a>
                    </li>
                </ul>
                <ul class="list-unstyled" data-link="courses">
                    <li>
                        <a href="<?php echo base_url(); ?>admin-subjects">
                            <i class="simple-icon-list"></i> <span class="d-inline-block"> Subjects</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin-course-stream">
                            <i class="iconsminds-gears"></i> <span class="d-inline-block">  Course Types</span>
                        </a>
                    </li>
                     <li>
                        <a href="<?php echo base_url(); ?>admin-aicpe-courses">
                            <i class="iconsminds-books"></i> <span class="d-inline-block">AICPE  Courses</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin-associate-courses">
                            <i class="iconsminds-books"></i> <span class="d-inline-block">AICPE Associate Courses</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin-non-aicpe-courses">
                            <i class="simple-icon-notebook"></i> <span class="d-inline-block">Non-AICPE Courses</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin-course-suggestions">
                            <i class="simple-icon-note"></i> <span class="d-inline-block">New Course Suggestions</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin-question-bank">
                            <i class="iconsminds-big-data"></i> <span class="d-inline-block">Question Bank</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin-course-admissions">
                            <i class="iconsminds-big-data"></i> <span class="d-inline-block">Course Wise Admissions</span>
                        </a>
                    </li>
                </ul>
               
                <ul class="list-unstyled" data-link="staff_management">
                    <li>
                        <a href="<?php echo base_url(); ?>admin-administrative-staff">
                            <i class="simple-icon-list"></i> <span class="d-inline-block">Administrative Staff
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin-field-staff">
                            <i class="iconsminds-gift-box"></i> <span class="d-inline-block">Field Staff</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin-agent-and-other-staff">
                            <i class="iconsminds-network"></i> <span class="d-inline-block">Agents and Other Staff</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin-staff-tasks">
                            <i class="iconsminds-id-card"></i> <span class="d-inline-block">Tasks</span>
                        </a>
                    </li>
                </ul>
                
                <ul class="list-unstyled" data-link="certificates">
                    <li>
                        <a href="<?php echo base_url(); ?>admin-aicpe-vocational-certificates">
                            <i class="iconsminds-id-card"></i> <span class="d-inline-block">AICPE Vocational Certificates</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin-aicpe-typing-certificates">
                            <i class="iconsminds-id-card"></i> <span class="d-inline-block">AICPE Typing Certificates</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin-non-aicpe-certificates">
                            <i class="iconsminds-id-card"></i> <span class="d-inline-block">Non AICPE  Certificates</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin-participation-certificates">
                            <i class="iconsminds-id-card"></i> <span class="d-inline-block"> Participation Certificates </span>
                        </a>
                    </li>
                </ul>
                <ul class="list-unstyled" data-link="employers">
                    <li>
                        <a href="<?php echo base_url(); ?>admin-employers">
                            <i class="iconsminds-list"></i> <span class="d-inline-block">  Employers </span>
                        </a>
                    </li>
                     <li>
                        <a href="<?php echo base_url(); ?>admin-employers-jobpost">
                            <i class="simple-icon-project"></i> <span class="d-inline-block">Employers Job Posts</span>
                        </a>
                    </li>
                </ul>
                <ul class="list-unstyled" data-link="masters">
                    <li>
                        <a href="<?php echo base_url(); ?>admin-countries">
                            <i class="simple-icon-globe"></i> <span class="d-inline-block">Countries </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin-states">
                            <i class="simple-icon-compass"></i> <span class="d-inline-block">States</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin-district">
                            <i class="simple-icon-directions"></i> <span class="d-inline-block">District</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin-cities">
                            <i class="simple-icon-location-pin"></i> <span class="d-inline-block">Cities</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin-awards">
                            <i class="simple-icon-trophy"></i> <span class="d-inline-block">Awards</span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo base_url(); ?>admin-institute-staff-designation">
                            <i class="iconsminds-office"></i> <span class="d-inline-block">Institute Staff Designation</span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="<?php echo base_url(); ?>admin-staff-designation">
                            <i class="simple-icon-organization"></i> <span class="d-inline-block">Admin Staff Designation</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin-payment-mode">
                            <i class="iconsminds-handshake"></i> <span class="d-inline-block">Payment Mode</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin-transaction-type">
                            <i class="simple-icon-credit-card"></i> <span class="d-inline-block">Transaction Type</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin-qualification">
                            <i class="simple-icon-graduation"></i> <span class="d-inline-block">Qualification</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin-photo-id-type">
                            <i class="iconsminds-id-card"></i> <span class="d-inline-block">Photo ID type</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin-aicpe-world-content">
                            <i class="iconsminds-globe-2"></i> <span class="d-inline-block">AICPE World Content </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin-book-categories">
                            <i class="iconsminds-book"></i> <span class="d-inline-block">Book Categories</span>
                        </a>
                    </li>
                     <li>
                        <a href="<?php echo base_url(); ?>admin-subject-level">
                            <i class="iconsminds-file"></i> <span class="d-inline-block">Subject Level</span>
                        </a>
                    </li>
                     <li>
                        <a href="<?php echo base_url(); ?>admin-currency-converter">
                            <i class="iconsminds-coins-2"></i> <span class="d-inline-block">Currency Converter</span>
                        </a>
                    </li>
                </ul>
                <ul class="list-unstyled" data-link="business">
                    <li>
                        <a href="<?php echo base_url(); ?>admin-business-institutions">
                            <i class="iconsminds-list"></i> <span class="d-inline-block">  Business with Institutions </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin-monthly-business">
                            <i class="simple-icon-project"></i> <span class="d-inline-block">Monthly Business</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin-virtual-business">
                            <i class="simple-icon-project"></i> <span class="d-inline-block">Virtual Business</span>
                        </a>
                    </li>
                </ul>
                <ul class="list-unstyled" data-link="enquiries">
                    <li>
                        <a href="<?php echo base_url(); ?>admin-student-enquiries">
                            <i class="simple-icon-people"></i> <span class="d-inline-block">Student Enquiries</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin-institution-enquiries">
                            <i class="iconsminds-office"></i> <span class="d-inline-block">Institution Enquiries</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin-employer-enquiries">
                            <i class="iconsminds-business-man"></i> <span class="d-inline-block">Employer Enquiries</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin-quick-enquiries">
                            <i class="simple-icon-call-in"></i> <span class="d-inline-block"> Quick Enquiries</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>