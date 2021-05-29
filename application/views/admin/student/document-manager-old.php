<?php $this->load->view('admin/includes/header'); ?>

    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>Document Manager</h1>
                    <div class="separator mb-5"></div>
                </div>
            </div>
            <div class="row">
              <div class="col-12">
                  
                  <span class="custom-checkbox doc_box right">
                    <label class="custom-control custom-checkbox mb-0">
                        <input type="checkbox" class="custom-control-input">
                        <span class="custom-control-label"></span>
                    </label>
                  </span>
                  <span class="text-muted text-small right p-10">Check all</span>
              </div>
                <div class="col-12 col-lg-4 col-xl-4 col-left ">
                    <div class="card">
                      <div class="card-header progress-bar pt-20">
                            <h5 class="text-center">Add Document</h5>
                        </div>
                        <div class="card-body">
                            <form id="exampleForm" class="tooltip-label-right" novalidate>
                                <div class="form-group position-relative error-l-50">
                                    <label>Document Title</label>
                                    <input type="text" class="form-control" name="jQueryName" required>
                                </div>
                                <div class="form-group">
                                  <label>Upload document</label>
                                  <div class="dropzone"></div>
                                </div>
                                <div class="form-group">
                                    <label>Remarks</label>
                                    <textarea class="form-control" id="" cols="3"></textarea>
                                </div>
                                
                                <button type="submit" class="btn btn-primary mb-0">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-8 col-xl-8">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="card mb-3">
                        <div class="position-relative">
                            <img class="card-img-top" src="<?php echo base_url(); ?>assets/img/cards/thumb-1.jpg" alt="Card image cap">
                        </div>
                        <div class="card-body">
                            <p class="list-item-heading mb-05 text-small">Homemade Cheesecake with Fresh Berries and Mint
                            </p>
                            <p class="text-muted text-small mb-05 font-weight-light">12.01.2021</p>
                            <footer>
                                <p>
                                  <span class="badge badge-pill badge-theme-1"><span class="simple-icon-arrow-down-circle"></span> Download</span>
                                  <span class="badge badge-pill badge-secondary"><span class="simple-icon-trash"></span> Delete</span>
                                  <span class="custom-checkbox doc_box right">
                                    <label class="custom-control custom-checkbox mb-0">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label"></span>
                                    </label>
                                  </span>
                                </p>
                            </footer>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                      <div class="card mb-3">
                        <div class="position-relative">
                            <img class="card-img-top" src="<?php echo base_url(); ?>assets/img/cards/thumb-1.jpg" alt="Card image cap">
                        </div>
                        <div class="card-body">
                            <p class="list-item-heading mb-05 text-small">Homemade Cheesecake with Fresh Berries and Mint
                            </p>
                            <p class="text-muted text-small mb-05 font-weight-light">12.01.2021</p>
                            <footer>
                                <p>
                                  <span class="badge badge-pill badge-theme-1"><span class="simple-icon-pencil"></span> Edit</span>
                                  <span class="badge badge-pill badge-secondary"><span class="simple-icon-trash"></span> Delete</span>
                                  <span class="custom-checkbox doc_box right">
                                    <label class="custom-control custom-checkbox mb-0">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label"></span>
                                    </label>
                                  </span>
                                </p>
                            </footer>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                      <div class="card mb-3">
                        <div class="position-relative">
                            <img class="card-img-top" src="<?php echo base_url(); ?>assets/img/cards/thumb-1.jpg" alt="Card image cap">
                        </div>
                        <div class="card-body">
                            <p class="list-item-heading mb-05 text-small">Homemade Cheesecake with Fresh Berries and Mint
                            </p>
                            <p class="text-muted text-small mb-05 font-weight-light">12.01.2021</p>
                            <footer>
                                <p>
                                  <span class="badge badge-pill badge-theme-1"><span class="simple-icon-pencil"></span> Edit</span>
                                  <span class="badge badge-pill badge-secondary"><span class="simple-icon-trash"></span> Delete</span>
                                  <span class="custom-checkbox doc_box right">
                                    <label class="custom-control custom-checkbox mb-0">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label"></span>
                                    </label>
                                  </span>
                                </p>
                            </footer>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                      <div class="card mb-3">
                        <div class="position-relative">
                            <img class="card-img-top" src="<?php echo base_url(); ?>assets/img/cards/thumb-1.jpg" alt="Card image cap">
                        </div>
                        <div class="card-body">
                            <p class="list-item-heading mb-05 text-small">Homemade Cheesecake with Fresh Berries and Mint
                            </p>
                            <p class="text-muted text-small mb-05 font-weight-light">12.01.2021</p>
                            <footer>
                                <p>
                                  <span class="badge badge-pill badge-theme-1"><span class="simple-icon-pencil"></span> Edit</span>
                                  <span class="badge badge-pill badge-secondary"><span class="simple-icon-trash"></span> Delete</span>
                                  <span class="custom-checkbox doc_box right">
                                    <label class="custom-control custom-checkbox mb-0">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label"></span>
                                    </label>
                                  </span>
                                </p>
                            </footer>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                      <div class="card mb-3">
                        <div class="position-relative">
                            <img class="card-img-top" src="<?php echo base_url(); ?>assets/img/cards/thumb-1.jpg" alt="Card image cap">
                        </div>
                        <div class="card-body">
                            <p class="list-item-heading mb-05 text-small">Homemade Cheesecake with Fresh Berries and Mint
                            </p>
                            <p class="text-muted text-small mb-05 font-weight-light">12.01.2021</p>
                            <footer>
                                <p>
                                  <span class="badge badge-pill badge-theme-1"><span class="simple-icon-pencil"></span> Edit</span>
                                  <span class="badge badge-pill badge-secondary"><span class="simple-icon-trash"></span> Delete</span>
                                  <span class="custom-checkbox doc_box right">
                                    <label class="custom-control custom-checkbox mb-0">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label"></span>
                                    </label>
                                  </span>
                                </p>
                            </footer>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </main>
<?php $this->load->view('admin/includes/footer'); ?>