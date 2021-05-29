<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>AICPE - All India Council For Professional Excellence</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/font/iconsmind-s/css/iconsminds.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/font/simple-line-icons/css/simple-line-icons.css" />
   <!--  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/datatables.responsive.bootstrap4.min.css" /> -->
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
                    <a class="dropdown-item" href="<?php echo base_url(); ?>institutions-profile">Profile</a>
                    <a class="dropdown-item" href="<?php echo base_url(); ?>institutions-settings">Settings</a>
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
                        <a href="<?php echo base_url(); ?>institutions-dashboard">
                            <i class="iconsminds-shop-4"></i>
                            <span>Dashboards</span>
                        </a>
                    </li>
                     <li>
                        <a href="#students">
                            <i class="iconsminds-network"></i>
                            <span>Students</span>
                        </a>
                    </li>
                    <li>
                        <a href="#courses">
                            <i class="iconsminds-books"></i>
                            <span>Courses</span>
                        </a>
                    </li>
                    <li>
                        <a href="#exam_manager">
                            <i class="iconsminds-air-balloon-1"></i>
                            <span>Exam Manager</span>
                        </a>
                    </li>
                    <li>
                        <a href="#certificates">
                            <i class="iconsminds-diploma-2"></i>
                            <span>Certificates</span>
                        </a>
                    </li>
                    <li>
                        <a href="#staff_management">
                            <i class="iconsminds-business-mens"></i>
                            <span>Staff Management</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>institutions-assignments">
                            <i class="iconsminds-idea"></i>Assignments
                        </a>
                    </li>
                   
                    <li>
                        <a href="#library">
                            <i class="iconsminds-library"></i>
                            <span>Library Management</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>institutions-employers">
                            <i class="iconsminds-id-card"></i>
                            <span>Employers</span>
                        </a>
                    </li>
                    
                    
                    <li>
                        <a href="<?php echo base_url(); ?>institutions-marketing-material">
                            <i class="iconsminds-photo"></i>
                            <span>Marketing Material</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>institutions-birthday-and-anniversary">
                            <i class="iconsminds-birthday-cake"></i>
                            <span>Birthday And Anniversary</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>institutions-sms-management">
                            <i class="iconsminds-speach-bubble-dialog"></i>
                            <span>SMS Management</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>institutions-wallet">
                            <i class="iconsminds-wallet"></i>
                            <span>Wallet</span>
                        </a>
                    </li>
                    <!-- <li>
                        <a href="<?php echo base_url(); ?>institutions-role-management">
                            <i class="iconsminds-iconsminds-king-2"></i>
                            <span>Role Management</span>
                        </a>
                    </li> -->
                </ul>
            </div>
        </div>

        <div class="sub-menu">
            <div class="scroll">
                
                <ul class="list-unstyled" data-link="students">
                    <li>
                        <a href="<?php echo base_url(); ?>institutions-enquiries">
                            <i class="iconsminds-user"></i>
                            <span>Enquries</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>institutions-payments">
                            <i class="iconsminds-dollar"></i>
                            <span>Payments</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>institutions-aicpe-world-membership">
                            <i class="iconsminds-globe-2"></i>
                            <span>AICPE World Membership</span>
                        </a>
                    </li>
                    <li id="menuTypes" data-link="menu">
                        <a href="#" data-toggle="collapse" data-target="#collapseMenuLevel" aria-expanded="true"
                            aria-controls="collapseMenuLevel" class="rotate-arrow-icon collapsed">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Admissions</span>
                        </a>
                        <div id="collapseMenuLevel" class="collapse" data-parent="#menuTypes">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="<?php echo base_url(); ?>institutions-admissions">
                                        <i class="simple-icon-list"></i> <span class="d-inline-block">Admissions List 
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>institutions-old-students">
                                        <i class="simple-icon-people"></i> <span class="d-inline-block">Old Students</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>institutions-dropout-students">
                                        <i class="simple-icon-user-unfollow"></i> <span class="d-inline-block">Dropout Students</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>

                <ul class="list-unstyled" data-link="courses">
                    <li>
                        <a href="<?php echo base_url(); ?>institutions-courses">
                            <i class="simple-icon-list"></i> <span class="d-inline-block">All Courses
                            </span>
                        </a>
                    </li>
                     <li>
                        <a href="<?php echo base_url(); ?>institutions-aicpe-courses">
                            <i class="simple-icon-user"></i> <span class="d-inline-block">AICPE  Courses</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>institutions-associate-courses">
                            <i class="simple-icon-people"></i> <span class="d-inline-block">AICPE Associate Courses</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>institutions-non-aicpe-courses">
                            <i class="simple-icon-user-unfollow"></i> <span class="d-inline-block">Non-AICPE Courses</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>institutions-course-material">
                            <i class="simple-icon-notebook"></i> <span class="d-inline-block"> Course Material</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>institutions-question-bank">
                            <i class="iconsminds-big-data"></i> <span class="d-inline-block"> Question Bank</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>institutions-suggest-course">
                            <i class="iconsminds-notebook"></i> <span class="d-inline-block"> New Course Suggestions</span>
                        </a>
                    </li>
                </ul>
                <ul class="list-unstyled" data-link="library">
                    <li>
                        <a href="<?php echo base_url(); ?>institutions-library-books-categories">
                            <i class="simple-icon-list"></i> <span class="d-inline-block">Books Categories
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>institutions-library-books">
                            <i class="iconsminds-books"></i> <span class="d-inline-block">Books</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>institutions-library-books-issued">
                            <i class="iconsminds-id-card"></i> <span class="d-inline-block">Books Issued</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>institutions-library-books-return">
                            <i class="iconsminds-id-card"></i> <span class="d-inline-block">Books Return</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>institutions-library-books-fine">
                            <i class="iconsminds-id-card"></i> <span class="d-inline-block">Books Fine</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>institutions-library-e-books">
                            <i class="iconsminds-file"></i> <span class="d-inline-block">Free E-Books </span>
                        </a>
                    </li>
                </ul>
                <ul class="list-unstyled" data-link="staff_management">
                    <li>
                        <a href="<?php echo base_url(); ?>institutions-staff-list">
                            <i class="simple-icon-list"></i> <span class="d-inline-block">Staff List
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>institutions-staff-incentives">
                            <i class="iconsminds-gift-box"></i> <span class="d-inline-block">Incentives</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>institutions-staff-tasks">
                            <i class="iconsminds-id-card"></i> <span class="d-inline-block">Tasks</span>
                        </a>
                    </li>
                </ul>
                <ul class="list-unstyled" data-link="exam_manager">
                    <li>
                        <a href="<?php echo base_url(); ?>institutions-exam-status">
                            <i class="iconsminds-keyboard"></i> <span class="d-inline-block">Exam Status</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>institutions-hall-tickets">
                            <i class="iconsminds-id-card"></i> <span class="d-inline-block">Hall Tickets</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>institutions-secrete-codes">
                            <i class="iconsminds-qr-code"></i> <span class="d-inline-block">Secrete Codes</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>institutions-paper-based-exam">
                            <i class="iconsminds-printer"></i> <span class="d-inline-block">Paper Based Exam</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>institutions-offline-exam">
                            <i class="iconsminds-file-edit"></i> <span class="d-inline-block">Offline exam</span>
                        </a>
                    </li>
                   <!--  <li>
                        <a href="<?php echo base_url(); ?>institutions-bulk-registration">
                            <i class="iconsminds-id-card"></i> <span class="d-inline-block">Bulk Registration</span>
                        </a>
                    </li> -->
                </ul>
                <ul class="list-unstyled" data-link="certificates">
                     <li>
                        <a href="<?php echo base_url(); ?>institutions-certificates">
                            <i class="iconsminds-id-card"></i> <span class="d-inline-block">Certificates</span>
                        </a>
                    </li>
                     <li>
                        <a href="<?php echo base_url(); ?>institutions-participation-certificates">
                            <i class="iconsminds-id-card"></i> <span class="d-inline-block"> Participation Certificate </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>