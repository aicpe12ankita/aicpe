<?php $this->load->view('admin/includes/header'); ?>

    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>Study Material</h1>
                    <div class="separator mb-5"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-5 col-xl-4 col-left">
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
                                                        <div class="top-right-button-container">
                                                            <div class="btn-group">
                                                                <button class="btn btn-sm btn-outline-primary btn-lg dropdown-toggle" type="button"
                                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    EXPORT
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" id="dataTablesCopy02" href="#">Copy</a>
                                                                    <a class="dropdown-item" id="dataTablesExcel02" href="#">Excel</a>
                                                                    <a class="dropdown-item" id="dataTablesCsv02" href="#">Csv</a>
                                                                    <a class="dropdown-item" id="dataTablesPdf02" href="#">Pdf</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
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
                                                    <table id="datatableRows02" class="data-table responsive nowrap" data-order="[[ 1, &quot;desc&quot; ]]">
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
    <?php $this->load->view('admin/includes/footer'); ?>
 
