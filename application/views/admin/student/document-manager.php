<?php $this->load->view('admin/includes/header'); ?>

    <main>
        <div class="container-fluid library-app">
            <div class="row">
                <div class="col-12">
                    <div class="mb-3">
                        <h1>Document Manager</h1>
                        <div class="text-zero top-right-button-container">
                            <button type="button" class="btn btn-primary btn-lg top-right-button mr-1" data-toggle="modal" data-target="#addDocument">ADD NEW</button>
                            <div class="btn-group">
                                <div class="btn btn-primary btn-lg pl-4 pr-0 check-button">
                                    <label class="custom-control custom-checkbox mb-0 d-inline-block">
                                        <input type="checkbox" class="custom-control-input" id="checkAll">
                                        <span class="custom-control-label"></span>
                                    </label>
                                </div>
                                <button type="button"
                                    class="btn btn-lg btn-primary dropdown-toggle dropdown-toggle-split"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Delete</a>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <div class="mb-2">
                        <a class="btn pt-0 pl-0 d-inline-block d-md-none" data-toggle="collapse" href="#displayOptions"
                            role="button" aria-expanded="true" aria-controls="displayOptions">
                            Display Options
                            <i class="simple-icon-arrow-down align-middle"></i>
                        </a>
                        <div class="collapse d-md-block" id="displayOptions">
                            <div class="d-block d-md-inline-block">
                                <div class="btn-group float-md-left mr-1 mb-1">
                                    <button class="btn btn-outline-dark btn-xs dropdown-toggle" type="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Order By
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Ascending</a>
                                        <a class="dropdown-item" href="#">Descending</a>
                                    </div>
                                </div>
                                <div class="search-sm d-inline-block float-md-left mr-1 mb-1 align-top">
                                    <input placeholder="Search...">
                                </div>
                            </div>
                            <div class="float-md-right">
                                <span class="text-muted text-small">Displaying 1-10 of 210 items </span>
                                <button class="btn btn-outline-dark btn-xs dropdown-toggle" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    20
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">10</a>
                                    <a class="dropdown-item active" href="#">20</a>
                                    <a class="dropdown-item" href="#">30</a>
                                    <a class="dropdown-item" href="#">50</a>
                                    <a class="dropdown-item" href="#">100</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="separator mb-5"></div>
                </div>
            </div>

            <div class="row">
                
                <div class="col-12 list disable-text-selection" data-check-all="checkAll">
                    <div class="row">

                        <div class="col-xxl-4 col-xl-4 col-12">
                            <div class="card d-flex flex-row mb-4 media-thumb-container">
                                <a class="d-flex align-self-center media-thumbnail-icon"
                                    href="Apps.MediaLibrary.ViewFolder.html">
                                    <i class="iconsminds-folder-open"></i>
                                </a>
                                <div class="d-flex flex-grow-1 min-width-zero">
                                    <div class="card-body align-self-center d-flex flex-column justify-content-between min-width-zero align-items-lg-center">
                                        <a href="#" class="w-100">
                                            <p class="list-item-heading mb-1 truncate">Cakes</p>
                                        </a>
                                        <p class="mb-1 text-muted text-small w-100 truncate">14.11.2018</p>
                                    </div>
                                    <div class="card-body align-self-center d-flex flex-column justify-content-between min-width-zero align-items-lg-center">
                                      <a href="#" class="d-flex align-self-center mb-2">
                                        <span class="badge badge-pill badge-outline-warning">Download</span>
                                      </a>
                                      <a href="#" class="btn btn-xs btn-danger"><i class="simple-icon-trash"></i></a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-xl-4 col-12">
                            <div class="card d-flex flex-row mb-4 media-thumb-container">
                                <a class="d-flex align-self-center media-thumbnail-icon" href="#">
                                    <i class="iconsminds-folder-open"></i>
                                </a>
                                <div class="d-flex flex-grow-1 min-width-zero">
                                    <div class="card-body align-self-center d-flex flex-column justify-content-between min-width-zero align-items-lg-center">
                                        <a href="#" class="w-100">
                                            <p class="list-item-heading mb-1 truncate">Desserts</p>
                                        </a>
                                        <p class="mb-1 text-muted text-small w-100 truncate">18.11.2018</p>
                                    </div>
                                    <div class="card-body align-self-center d-flex flex-column justify-content-between min-width-zero align-items-lg-center">
                                      <a href="#" class="d-flex align-self-center mb-2">
                                        <span class="badge badge-pill badge-outline-warning">Download</span>
                                      </a>
                                      <a href="#" class="btn btn-xs btn-danger"><i class="simple-icon-trash"></i></a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-xl-4 col-12">
                            <div class="card d-flex flex-row mb-4 media-thumb-container">
                                <a class="d-flex align-self-center media-thumbnail-icon" href="#">
                                    <i class="iconsminds-file-zip"></i>
                                </a>
                                <div class="d-flex flex-grow-1 min-width-zero">
                                    <div class="card-body align-self-center d-flex flex-column justify-content-between min-width-zero align-items-lg-center">
                                        <a href="#" class="w-100">
                                            <p class="list-item-heading mb-1 truncate">commercial-back.mp3</p>
                                        </a>
                                        <p class="mb-1 text-muted text-small w-100 truncate">02.10.2018</p>
                                    </div>
                                    <div class="card-body align-self-center d-flex flex-column justify-content-between min-width-zero align-items-lg-center">
                                      <a href="#" class="d-flex align-self-center mb-2">
                                        <span class="badge badge-pill badge-outline-warning">Download</span>
                                      </a>
                                      <a href="#" class="btn btn-xs btn-danger"><i class="simple-icon-trash"></i></a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-xl-4 col-12">
                            <div class="card d-flex flex-row mb-4 media-thumb-container">
                                <a class="d-flex align-self-center media-thumbnail-icon"
                                    href="#">
                                    <i class="iconsminds-guitar"></i>
                                </a>
                                <div class="d-flex flex-grow-1 min-width-zero">
                                    <div class="card-body align-self-center d-flex flex-column justify-content-between min-width-zero align-items-lg-center">
                                        <a href="#" class="w-100">
                                            <p class="list-item-heading mb-1 truncate">ambiance.mp3</p>
                                        </a>
                                        <p class="mb-1 text-muted text-small w-100 truncate">22.12.2018</p>
                                    </div>
                                    <div class="card-body align-self-center d-flex flex-column justify-content-between min-width-zero align-items-lg-center">
                                      <a href="#" class="d-flex align-self-center mb-2">
                                        <span class="badge badge-pill badge-outline-warning">Download</span>
                                      </a>
                                      <a href="#" class="btn btn-xs btn-danger"><i class="simple-icon-trash"></i></a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-xl-4 col-12">
                            <div class="card d-flex flex-row mb-4 media-thumb-container">
                                <a class="d-flex align-self-center media-thumbnail-icon"
                                    href="#">
                                    <i class="iconsminds-camera-4"></i>
                                </a>
                                <div class="d-flex flex-grow-1 min-width-zero">
                                    <div class="card-body align-self-center d-flex flex-column justify-content-between min-width-zero align-items-lg-center">
                                        <a href="#" class="w-100">
                                            <p class="list-item-heading mb-1 truncate">big-buck-bunny.mp4</p>
                                        </a>
                                        <p class="mb-1 text-muted text-small w-100 truncate">07.10.2018</p>
                                    </div>
                                    <div class="card-body align-self-center d-flex flex-column justify-content-between min-width-zero align-items-lg-center">
                                      <a href="#" class="d-flex align-self-center mb-2">
                                        <span class="badge badge-pill badge-outline-warning">Download</span>
                                      </a>
                                      <a href="#" class="btn btn-xs btn-danger"><i class="simple-icon-trash"></i></a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-xl-4 col-12">
                            <div class="card d-flex flex-row mb-4 media-thumb-container">
                                <a class="d-flex align-self-center" href="#">
                                    <img src="<?php echo base_url(); ?>assets/img/products/bebinca-thumb.jpg" alt="uploaded image" class="list-media-thumbnail responsive border-0" />
                                </a>
                                <div class="d-flex flex-grow-1 min-width-zero">
                                    <div class="card-body align-self-center d-flex flex-column justify-content-between min-width-zero align-items-lg-center">
                                        <a href="#" class="w-100">
                                            <p class="list-item-heading mb-1 truncate">bebinca-thumb.jpg</p>
                                        </a>
                                        <p class="mb-1 text-muted text-small w-100 truncate">16.09.2018 14:04</p>
                                    </div>
                                    <div class="card-body align-self-center d-flex flex-column justify-content-between min-width-zero align-items-lg-center">
                                      <a href="#" class="d-flex align-self-center mb-2">
                                        <span class="badge badge-pill badge-outline-warning">Download</span>
                                      </a>
                                      <a href="#" class="btn btn-xs btn-danger"><i class="simple-icon-trash"></i></a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-xl-4 col-12">
                            <div class="card d-flex flex-row mb-4 media-thumb-container ">
                                <a class="d-flex align-self-center" href="#">
                                    <img src="<?php echo base_url(); ?>assets/img/products/cheesecake-thumb.jpg" alt="uploaded image" class="list-media-thumbnail responsive border-0" />
                                </a>
                                <div class="d-flex flex-grow-1 min-width-zero">
                                    <div class="card-body align-self-center d-flex flex-column justify-content-between min-width-zero align-items-lg-center">
                                        <a href="#" class="w-100">
                                            <p class="list-item-heading mb-1 truncate">cheesecake-thumb.jpg</p>
                                        </a>
                                        <p class="mb-1 text-muted text-small w-100 truncate">16.09.2018 14:05</p>
                                    </div>
                                    <div class="card-body align-self-center d-flex flex-column justify-content-between min-width-zero align-items-lg-center">
                                      <a href="#" class="d-flex align-self-center mb-2">
                                        <span class="badge badge-pill badge-outline-warning">Download</span>
                                      </a>
                                      <a href="#" class="btn btn-xs btn-danger"><i class="simple-icon-trash"></i></a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-xl-4 col-12">
                            <div class="card d-flex flex-row mb-4 media-thumb-container">
                                <a class="d-flex align-self-center" href="#">
                                    <img src="<?php echo base_url(); ?>assets/img/products/chocolate-cake-thumb.jpg" alt="uploaded image"
                                        class="list-media-thumbnail responsive border-0" />
                                </a>
                                <div class="d-flex flex-grow-1 min-width-zero">
                                    <div
                                        class="card-body align-self-center d-flex flex-column justify-content-between min-width-zero align-items-lg-center">
                                        <a href="#" class="w-100">
                                            <p class="list-item-heading mb-1 truncate">chocolate-cake-thumb.jpg</p>
                                        </a>
                                        <p class="mb-1 text-muted text-small w-100 truncate">16.09.2018 14:08</p>
                                    </div>
                                    <div class="card-body align-self-center d-flex flex-column justify-content-between min-width-zero align-items-lg-center">
                                      <a href="#" class="d-flex align-self-center mb-2">
                                        <span class="badge badge-pill badge-outline-warning">Download</span>
                                      </a>
                                      <a href="#" class="btn btn-xs btn-danger"><i class="simple-icon-trash"></i></a>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-xl-4 col-12">
                            <div class="card d-flex flex-row mb-4 media-thumb-container">
                                <a class="d-flex align-self-center" href="#">
                                    <img src="<?php echo base_url(); ?>assets/img/products/coconut-cake.jpg" alt="uploaded image" class="list-media-thumbnail responsive border-0" />
                                </a>
                                <div class="d-flex flex-grow-1 min-width-zero">
                                    <div
                                        class="card-body align-self-center d-flex flex-column justify-content-between min-width-zero align-items-lg-center">
                                        <a href="#" class="w-100">
                                            <p class="list-item-heading mb-1 truncate">coconut-cake.jpg</p>
                                        </a>
                                        <p class="mb-1 text-muted text-small w-100 truncate">16.09.2018 14:15</p>
                                    </div>
                                    <div class="card-body align-self-center d-flex flex-column justify-content-between min-width-zero align-items-lg-center">
                                      <a href="#" class="d-flex align-self-center mb-2">
                                        <span class="badge badge-pill badge-outline-warning">Download</span>
                                      </a>
                                      <a href="#" class="btn btn-xs btn-danger"><i class="simple-icon-trash"></i></a>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-xl-4 col-12">
                            <div class="card d-flex flex-row mb-4 media-thumb-container">
                                <a class="d-flex align-self-center" href="#">
                                    <img src="<?php echo base_url(); ?>assets/img/products/cremeschnitte-thumb.jpg" alt="uploaded image"
                                        class="list-media-thumbnail responsive border-0" />
                                </a>
                                <div class="d-flex flex-grow-1 min-width-zero">
                                    <div class="card-body align-self-center d-flex flex-column justify-content-between min-width-zero align-items-lg-center">
                                        <a href="#" class="w-100">
                                            <p class="list-item-heading mb-1 truncate">cremeschnitte-thumb.jpg</p>
                                        </a>
                                        <p class="mb-1 text-muted text-small w-100 truncate">16.09.2018 14:23</p>
                                    </div>
                                    <div class="card-body align-self-center d-flex flex-column justify-content-between min-width-zero align-items-lg-center">
                                      <a href="#" class="d-flex align-self-center mb-2">
                                        <span class="badge badge-pill badge-outline-warning">Download</span>
                                      </a>
                                      <a href="#" class="btn btn-xs btn-danger"><i class="simple-icon-trash"></i></a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                       
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-xl-8 offset-0 offset-xl-4">
                    <nav class="mt-4 mb-3">
                        <ul class="pagination justify-content-center mb-0">
                            <li class="page-item ">
                                <a class="page-link first" href="#">
                                    <i class="simple-icon-control-start"></i>
                                </a>
                            </li>
                            <li class="page-item ">
                                <a class="page-link prev" href="#">
                                    <i class="simple-icon-arrow-left"></i>
                                </a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item ">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item ">
                                <a class="page-link next" href="#" aria-label="Next">
                                    <i class="simple-icon-arrow-right"></i>
                                </a>
                            </li>
                            <li class="page-item ">
                                <a class="page-link last" href="#">
                                    <i class="simple-icon-control-end"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </main>
      <div class="modal fade" id="addDocument" tabindex="-1" role="dialog"
                                aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header custom-modal">
                    <h5 class="modal-title">Add Document</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="exampleForm" class="tooltip-label-right" novalidate>
                      <div class="form-group position-relative error-l-50">
                          <label>Document Title</label>
                          <input type="text" class="form-control" name="jQueryName" required>
                      </div>
                      <div class="form-group">
                        <label>Upload document</label>
                        <div class="dropzone"></div>
                      </div>
                      <!-- <div class="form-group">
                          <label>Remarks</label>
                          <textarea class="form-control" id="" cols="3"></textarea>
                      </div> -->
                </div>
                <div class="modal-footer">
                   <button type="submit" class="btn btn-primary mb-0">Submit</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
<?php $this->load->view('admin/includes/footer'); ?>