<?php $this->load->view('admin/includes/header'); ?>

    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>Course Details</h1>
                    <div class="separator mb-5"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-5 col-xl-5 col-left ">
                    <div class="card study_card mb-4">
                        <a href="<?php echo base_url(); ?>assets/img/courses/computer-programing.jpg" class="lightbox">    
                            <img src="<?php echo base_url(); ?>assets/img/courses/computer-programing.jpg" alt="Detail Picture" class="card-img-top" />
                        </a>
                        <div class="card-body">
                            <p class="text-muted text-small mb-2">Course Title</p>
                            <h5 class="mb-05 listing-heading ellipsis">Certificate in MS- Office and internet</h5>

                            <p class="text-muted text-small mb-2">Course Category</p>
                            <p class="mb-05">
                                <span class="badge badge-pill badge-outline-theme-2 mb-1">AICPE</span>
                                <span class="badge badge-pill badge-outline-theme-2 mb-1">ACT</span>
                            </p>
                            <p class=" text-small ellipsis">
                                <span class="text-muted">Course Duration -</span> 3 months
                            </p>
                            <p class=" text-small ellipsis">
                                <span class="text-muted">Course Fees -</span> Rs. 1500
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class=" mb-5">Payment Details</h5>
                            <div class="row">
                                <div class="col-lg-6">
                                    <p class="mb-05 text-small">
                                       <span class="text-muted">Total Fees - </span> Rs. 1500
                                    </p>
                                    <p class="mb-05 text-small">
                                        <span class="text-muted">Paid Fees  - </span> Rs. 700
                                    </p>
                                    <p class="mb-3 text-small">
                                        <span class="text-muted">Balance Fees  - </span> Rs. 800
                                    </p>
                                </div>
                                <div class="col-lg-6">
                                    <div role="progressbar" class="progress-bar-circle position-relative" data-color="#922c88"
                                        data-trailColor="#d7d7d7" aria-valuemax="100" aria-valuenow="40"
                                        data-show-percent="true">
                                    </div>
                                    <p class="text-small text-muted pt-5px">paid Fees %</p>
                                </div>
                                <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Sr. No.</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Receipt No.</th>
                                        <th scope="col">Total Fees</th>
                                        <th scope="col">Paid Fees</th>
                                        <th scope="col">Print Receipt</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>02-02-2021</td>
                                        <td>RCPT_00041</td>
                                        <td>3500</td>
                                        <td>1000</td>
                                        <td><a href="#"><i class="iconsminds-download"></i></a></td>
                                    </tr>
                                     <tr>
                                        <th scope="row">2</th>
                                        <td>02-02-2021</td>
                                        <td>RCPT_00022</td>
                                        <td>3500</td>
                                        <td>500</td>
                                        <td><a href="#"><i class="iconsminds-download"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-7 col-xl-7">
                    <div class="card mb-4">
                        <div class="card-header progress-bar pt-20">
                            <h5 class="text-center">Course Syllabus</h5>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li class="card_list"><span class="iconsminds-folder-open"></span> Subject one
                                    <ul class="card_list_child">
                                        <li>topic one</li>
                                        <li>topic two</li>
                                        <li> topic three</li>
                                        <li> topic four <a data-toggle="collapse" href="#collapseExample"
                                    role="button" aria-expanded="true" aria-controls="collapseExample">
                                    ....</a></li>
                                     <span class="collapse" id="collapseExample">
                                            <li>topic five</li>
                                            <li>topic six </li>
                                            <li> topic seven</li>
                                        </span>   
                                    </ul>
                                </li>
                                <li class="card_list"><span class="iconsminds-folder-open"></span> Subject two
                                    <ul class="card_list_child">
                                        <li>topic one</li>
                                        <li>topic two</li>
                                        <li> topic three</li>
                                        <li> topic four<a data-toggle="collapse" href="#collapseExample1"
                                    role="button" aria-expanded="true" aria-controls="collapseExample1">
                                    ....</a></li>
                                     <span class="collapse" id="collapseExample1">
                                            <li>topic five</li>
                                            <li>topic six </li>
                                            <li> topic seven</li>
                                        </span>   
                                    </ul>
                                </li>
                                <li class="card_list"><span class="iconsminds-folder-open"></span> Subject three
                                    <ul class="card_list_child">
                                       <li>topic one</li>
                                        <li>topic two</li>
                                        <li> topic three</li>
                                        <li> topic four <a data-toggle="collapse" href="#collapseExample2"
                                    role="button" aria-expanded="true" aria-controls="collapseExample2">
                                    ....</a></li>
                                     <span class="collapse" id="collapseExample2">
                                            <li>topic five</li>
                                            <li>topic six </li>
                                            <li> topic seven</li>
                                        </span>   
                                    </ul>
                                </li>
                                <li class="card_list"><span class="iconsminds-folder-open"></span> Subject four
                                    <ul class="card_list_child">
                                        <li>topic one</li>
                                        <li>topic two</li>
                                        <li> topic three</li>
                                        <li> topic four <a data-toggle="collapse" href="#collapseExample3"
                                    role="button" aria-expanded="true" aria-controls="collapseExample3">
                                    ....</a></li>
                                     <span class="collapse" id="collapseExample3">
                                            <li>topic five</li>
                                            <li>topic six </li>
                                            <li> topic seven</li>
                                        </span>   
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                                <div class="card-header pl-0 pr-0">
                                    <ul class="nav nav-tabs card-header-tabs  ml-0 mr-0" role="tablist">
                                        <li class="nav-item w-50 text-center">
                                            <a class="nav-link active" id="first-tab_" data-toggle="tab"
                                                href="#firstFull" role="tab" aria-controls="first"
                                                aria-selected="true">AICPE Notes</a>
                                        </li>
                                        <li class="nav-item w-50 text-center">
                                            <a class="nav-link" id="second-tab_" data-toggle="tab" href="#secondFull"
                                                role="tab" aria-controls="second" aria-selected="false">Institute Notes</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="firstFull" role="tabpanel"
                                            aria-labelledby="first-tab_">
                                            <div class="row">
                                                <div class="col-12">
                                                   
                                                    
                                                    <div class="mb-2">
                                                        <a class="btn pt-0 pl-0 d-inline-block d-md-none" data-toggle="collapse" href="#displayOptions02"
                                                            role="button" aria-expanded="true" aria-controls="displayOptions02">
                                                            Display Options
                                                            <i class="simple-icon-arrow-down align-middle"></i>
                                                        </a>
                                                        <div class="collapse dont-collapse-sm" id="displayOptions02">
                                                            <div class="d-block d-md-inline-block">
                                                                <div class="search-sm d-inline-block float-md-left mr-1 mb-1 align-top">
                                                                    <input class="form-control" placeholder="Search Table" id="searchDatatable02">
                                                                </div>
                                                            </div>
                                                            <div class="float-md-right dropdown-as-select" id="pageCountDatatable02">
                                                                <span class="text-muted text-small">Displaying 1-10 of 40 items </span>
                                                                <button class="btn btn-outline-dark btn-xs dropdown-toggle" type="button"
                                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    10
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#">5</a>
                                                                    <a class="dropdown-item active" href="#">10</a>
                                                                    <a class="dropdown-item" href="#">20</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="separator"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 mb-4 data-table-rows data-tables-hide-filter">
                                                    <table id="datatableRows02" class="data-table responsive nowrap" data-order="[[ 1, &quot;asc&quot; ]]">
                                                        <thead>
                                                            <tr>
                                                                <th>Sr. no</th>
                                                                <th>Subject Name</th>
                                                                <th>Remarks</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td> <p class="list-item-heading">1</p></td>
                                                                <td>
                                                                    <p class="list-item-heading">computer typing hindi</p>
                                                                </td>
                                                                <td>
                                                                    <p class="text-muted">test remark</p>
                                                                </td>
                                                                <td>
                                                                  
                                                                    <a href="http://localhost/aicpe/student-courses" target="_blank"><span class="badge badge-pill badge-warning">Open Link</span></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td> <p class="list-item-heading">2</p></td>
                                                                <td>
                                                                    <p class="list-item-heading">computer typing english</p>
                                                                </td>
                                                                <td>
                                                                    <p class="text-muted">test remark</p>
                                                                </td>
                                                                <td>
                                                                    <span class="badge badge-pill badge-secondary">Download</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td> <p class="list-item-heading">3</p></td>
                                                                <td>
                                                                    <p class="list-item-heading">computer typing marathi</p>
                                                                </td>
                                                                <td>
                                                                    <p class="text-muted">test remark</p>
                                                                </td>
                                                                <td>
                                                                    <span class="badge badge-pill badge-secondary" data-toggle="modal" data-target="#paymentHistory">Watch Video</span>
                                                                </td>
                                                            </tr>
                                                            
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="secondFull" role="tabpanel"
                                            aria-labelledby="second-tab_">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-2">
                                                        <div class="top-right-button-container">
                                                            <div class="btn-group">
                                                                <button class="btn btn-sm btn-outline-primary btn-lg dropdown-toggle" type="button"
                                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    EXPORT
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" id="dataTablesCopy01" href="#">Copy</a>
                                                                    <a class="dropdown-item" id="dataTablesExcel01" href="#">Excel</a>
                                                                    <a class="dropdown-item" id="dataTablesCsv01" href="#">Csv</a>
                                                                    <a class="dropdown-item" id="dataTablesPdf01" href="#">Pdf</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="mb-2">
                                                        <a class="btn pt-0 pl-0 d-inline-block d-md-none" data-toggle="collapse" href="#displayOptions01"
                                                            role="button" aria-expanded="true" aria-controls="displayOptions01">
                                                            Display Options
                                                            <i class="simple-icon-arrow-down align-middle"></i>
                                                        </a>
                                                        <div class="collapse dont-collapse-sm" id="displayOptions01">
                                                            <div class="d-block d-md-inline-block">
                                                                <div class="search-sm d-inline-block float-md-left mr-1 mb-1 align-top">
                                                                    <input class="form-control" placeholder="Search Table" id="searchDatatable01">
                                                                </div>
                                                            </div>
                                                            <div class="float-md-right dropdown-as-select" id="pageCountDatatable01">
                                                                <span class="text-muted text-small">Displaying 1-10 of 40 items </span>
                                                                <button class="btn btn-outline-dark btn-xs dropdown-toggle" type="button"
                                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    10
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#">5</a>
                                                                    <a class="dropdown-item active" href="#">10</a>
                                                                    <a class="dropdown-item" href="#">20</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="separator"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 mb-4 data-table-rows data-tables-hide-filter">
                                                    <table id="datatableRows01" class="data-table responsive nowrap"
                                                        data-order="[[ 1, &quot;desc&quot; ]]">
                                                        <thead>
                                                            <tr>
                                                                <th>Sr. no</th>
                                                                <th>Subject Name</th>
                                                                <th>Remarks</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td> <p class="list-item-heading">1</p></td>
                                                                <td>
                                                                    <p class="list-item-heading">computer typing hindi</p>
                                                                </td>
                                                                <td>
                                                                    <p class="text-muted">test remark</p>
                                                                </td>
                                                                <td>
                                                                    <span class="badge badge-pill badge-secondary">Download</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td> <p class="list-item-heading">2</p></td>
                                                                <td>
                                                                    <p class="list-item-heading">computer typing english</p>
                                                                </td>
                                                                <td>
                                                                    <p class="text-muted">test remark</p>
                                                                </td>
                                                                <td>
                                                                    <span class="badge badge-pill badge-secondary">Download</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td> <p class="list-item-heading">3</p></td>
                                                                <td>
                                                                    <p class="list-item-heading">computer typing marathi</p>
                                                                </td>
                                                                <td>
                                                                    <p class="text-muted">test remark</p>
                                                                </td>
                                                                <td>
                                                                    <span class="badge badge-pill badge-secondary">Download</span>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </main>

        <div class="modal fade " id="paymentHistory" tabindex="-1" role="dialog" aria-labelledby="paymentHistory" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                
                <div class="modal-body">
                    <div class="position-relative mb-3">
                        <video id="my-video" class="video-js card-img video-content" controls
                            preload="auto" poster="<?php echo base_url();?>assets/img/video/subpage-video-poster.jpg"
                            data-setup="{}">
                            <source src="https://www.youtube.com/watch?v=aEShWLRo3fE"
                                type='video/mp4'>
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $this->load->view('admin/includes/footer'); ?>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/custom/study-material-datatables.js"></script>