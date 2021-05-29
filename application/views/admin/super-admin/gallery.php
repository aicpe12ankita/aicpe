<?php $this->load->view('admin/includes/admin_header'); ?>

    <main>
        <div class="row">
            <div class="col-12">
                <h1>Gallery </h1>
                 <div class="text-zero top-right-button-container">
                  <button type="button" class="btn btn-primary btn-lg top-right-button mr-1" data-toggle="modal" data-target="#addEnquiry">Add Album </button>
                </div>
                <div class="separator mb-5"></div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                                <div class="col-12">
                                    <h5 class="mb-4">Cover Images [10] <span class="badge badge-xs badge-success"> Active</span>
                                      <span class="right">
                                        <a href="#" class="btn btn-xs btn-primary mb-1" data-toggle="modal" data-target="#viewDescription"><i class="simple-icon-eye"></i></a>
                                          <a href="#" class="btn btn-xs btn-info mb-1"><i class="simple-icon-note"></i></a>
                                          <a href="#" class="btn btn-xs btn-danger mb-1"><i class="simple-icon-trash"></i></a>
                                      </span>
                                    </h5>
                                </div>
                            </div>
                            <div class="row gallery gallery-page mb-5">
                                <div class="col-6 col-lg-2 col-md-4">
                                    <a href="<?php echo base_url(); ?>assets/img/products/marble-cake.jpg">
                                        <img class="img-fluid border-radius" src="<?php echo base_url(); ?>assets/img/products/marble-cake-thumb.jpg" />
                                    </a>
                                </div>
                                <div class="col-6 col-lg-2 col-md-4">
                                    <a href="<?php echo base_url(); ?>assets/img/products/parkin.jpg">
                                        <img class="img-fluid border-radius" src="<?php echo base_url(); ?>assets/img/products/parkin-thumb.jpg" />
                                    </a>
                                </div>
                                <div class="col-6 col-lg-2 col-md-4">
                                    <a href="<?php echo base_url(); ?>assets/img/products/fruitcake.jpg">
                                        <img class="img-fluid border-radius" src="<?php echo base_url(); ?>assets/img/products/fruitcake-thumb.jpg" />
                                    </a>
                                </div>
                                <div class="col-6 col-lg-2 col-md-4">
                                    <a href="<?php echo base_url(); ?>assets/img/products/tea-loaf.jpg">
                                        <img class="img-fluid border-radius" src="<?php echo base_url(); ?>assets/img/products/tea-loaf-thumb.jpg" />
                                    </a>
                                </div>
                                <div class="col-6 col-lg-2 col-md-4">
                                  <a href="<?php echo base_url(); ?>assets/img/products/napoleonshat.jpg">
                                        <img class="img-fluid border-radius" src="<?php echo base_url(); ?>assets/img/products/napoleonshat-thumb.jpg" />
                                    </a>
                                </div>
                                <div class="col-6 col-lg-2 col-md-4">
                                  <a href="<?php echo base_url(); ?>assets/img/products/magdalena.jpg">
                                        <img class="img-fluid border-radius" src="<?php echo base_url(); ?>assets/img/products/magdalena-thumb.jpg" />
                                    </a>
                                </div>
                                <div class="col-6 col-lg-3 col-md-3">
                                  <a href="<?php echo base_url(); ?>assets/img/products/marble-cake.jpg">
                                        <img class="img-fluid border-radius" src="<?php echo base_url(); ?>assets/img/products/marble-cake.jpg" />
                                    </a>
                                </div>
                                <div class="col-6 col-lg-3 col-md-3">
                                  <a href="<?php echo base_url(); ?>assets/img/products/parkin.jpg">
                                        <img class="img-fluid border-radius" src="<?php echo base_url(); ?>assets/img/products/parkin.jpg" />
                                    </a>
                                </div>
                                <div class="col-6 col-lg-3 col-md-3">
                                  <a href="<?php echo base_url(); ?>assets/img/products/fruitcake.jpg">
                                        <img class="img-fluid border-radius" src="<?php echo base_url(); ?>assets/img/products/fruitcake.jpg" />
                                    </a>
                                </div>
                                <div class="col-6 col-lg-3 col-md-3">
                                  <a href="<?php echo base_url(); ?>assets/img/products/tea-loaf.jpg">
                                        <img class="img-fluid border-radius" src="<?php echo base_url(); ?>assets/img/products/tea-loaf.jpg" />
                                    </a>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <h5 class="mb-4">Banner Images  [06] <span class="badge badge-xs badge-success"> Active</span>
                                      <span class="right">
                                        <a href="#" class="btn btn-xs btn-primary mb-1"><i class="simple-icon-eye"></i></a>
                                          <a href="#" class="btn btn-xs btn-info mb-1"><i class="simple-icon-note"></i></a>
                                          <a href="#" class="btn btn-xs btn-danger mb-1"><i class="simple-icon-trash"></i></a>
                                      </span></h5>
                                </div>
                            </div>
                            <div class="row gallery gallery-page mb-5">

                                <div class="col-6 col-lg-2 col-md-4">
                                    <a href="<?php echo base_url(); ?>assets/img/products/magdalena.jpg">
                                        <img class="img-fluid border-radius" src="<?php echo base_url(); ?>assets/img/products/magdalena-thumb.jpg" />
                                    </a>
                                </div>
                                <div class="col-6 col-lg-2 col-md-4">
                                    <a href="<?php echo base_url(); ?>assets/img/products/napoleonshat.jpg">
                                        <img class="img-fluid border-radius" src="<?php echo base_url(); ?>assets/img/products/napoleonshat-thumb.jpg" />
                                    </a>
                                </div>
                                <div class="col-6 col-lg-2 col-md-4">
                                    <a href="<?php echo base_url(); ?>assets/img/products/tea-loaf.jpg">
                                        <img class="img-fluid border-radius" src="<?php echo base_url(); ?>assets/img/products/tea-loaf-thumb.jpg" />
                                    </a>
                                </div>
                                <div class="col-6 col-lg-2 col-md-4">
                                    <a href="<?php echo base_url(); ?>assets/img/products/fruitcake.jpg">
                                        <img class="img-fluid border-radius" src="<?php echo base_url(); ?>assets/img/products/fruitcake-thumb.jpg" />
                                    </a>
                                </div>
                                <div class="col-6 col-lg-2 col-md-4">
                                  <a href="<?php echo base_url(); ?>assets/img/products/parkin.jpg">
                                    <img class="img-fluid border-radius" src="<?php echo base_url(); ?>assets/img/products/parkin-thumb.jpg" />
                                  </a>
                                </div>
                                <div class="col-6 col-lg-2 col-md-4">
                                  <a href="<?php echo base_url(); ?>assets/img/products/marble-cake.jpg">
                                    <img class="img-fluid border-radius" src="<?php echo base_url(); ?>assets/img/products/marble-cake-thumb.jpg" />
                                  </a>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-12">
                                    <h5 class="mb-4">Motivational Quotes Images [03] <span class="badge badge-xs badge-danger"> Inactive</span>
                                      <span class="right">
                                        <a href="#" class="btn btn-xs btn-primary mb-1"><i class="simple-icon-eye"></i></a>
                                          <a href="#" class="btn btn-xs btn-info mb-1"><i class="simple-icon-note"></i></a>
                                          <a href="#" class="btn btn-xs btn-danger mb-1"><i class="simple-icon-trash"></i></a>
                                      </span></h5>
                                </div>
                            </div>
                            <div class="row gallery gallery-page mb-5">
                                <div class="col-6 col-lg-3 col-md-3">
                                    <a href="<?php echo base_url(); ?>assets/img/products/parkin.jpg">
                                        <img class="img-fluid border-radius" src="<?php echo base_url(); ?>assets/img/products/parkin.jpg" />
                                    </a>
                                </div>
                                <div class="col-6 col-lg-3 col-md-3">
                                    <a href="<?php echo base_url(); ?>assets/img/products/fruitcake.jpg">
                                        <img class="img-fluid border-radius" src="<?php echo base_url(); ?>assets/img/products/fruitcake.jpg" />
                                    </a>
                                </div>
                                <div class="col-6 col-lg-3 col-md-3">
                                    <a href="<?php echo base_url(); ?>assets/img/products/tea-loaf.jpg">
                                        <img class="img-fluid border-radius" src="<?php echo base_url(); ?>assets/img/products/tea-loaf.jpg" />
                                    </a>
                                </div>
                            </div>
        </div>
    </main>
    <div class="modal fade modal-right" id="addEnquiry" tabindex="-1" role="dialog" aria-labelledby="addEnquiry" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header custom-modal">
                  <h5 class="modal-title white">Add Album </h5>
                  <button type="button" class="close white" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="form-group">
                    <label>Album Name<span class="mandetory">*</span></label>
                    <input type="text" class="form-control" name="inst_name" />
                  </div>
                  <div class="form-group">
                      <label>Description</label>
                      <textarea class="form-control" cols="3"></textarea>
                  </div>
                  <div class="form-group">
                    <label>Status <span class="mandetory">*</span></label>
                    <select class="form-control select2-single" data-width="100%" name="country">
                          <option label="&nbsp;">&nbsp;</option>
                          <option value="TPZ">Active</option>
                          <option value="TTZ">Inactive</option>
                      </select>
                  </div>
                  <div class="form-group">
                    <label>Upload Album</label>
                    <div class="dropzone"></div>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-outline-primary"
                      data-dismiss="modal">Cancel</button>
                  
              </div>
          </div>
      </div>
  </div>

  <div class="modal fade " id="viewDescription" tabindex="-1" role="dialog" aria-labelledby="viewDescription" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header custom-modal">
                  <h5 class="modal-title white">Album Description</h5>
                  <button type="button" class="close white" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                <h6>Cover Images [10] <span class="badge badge-xs badge-success"> Active</span></h6>
                <p class="text-small"><strong>Description :</strong>
                  <span class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>
                </p>
              </div>
          </div>
      </div>
  </div>
<?php $this->load->view('admin/includes/footer'); ?>
