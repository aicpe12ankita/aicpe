<?php $this->load->view('admin/includes/header'); ?>

    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>Birthday And Anniversary</h1>
                    <div class="text-zero top-right-button-container">

                        <div class="input-group typeahead-container">
                            <input type="text" class="form-control typeahead" name="query" id="query"
                                placeholder="Search..." data-provide="typeahead"
                                autocomplete="off">
                            <div class="input-group-append ">
                                <button type="submit" class="btn btn-primary default">
                                    <i class="simple-icon-magnifier"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="separator mb-5"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4 col-xl-4 col-left ">
                    <div class="card">
                      <div class="card-header progress-bar pt-20">
                            <h5 class="text-center">Add Birthday Or Anniversary</h5>
                        </div>
                        <div class="card-body">
                            <form id="exampleForm" class="tooltip-label-right" novalidate>
                                <div class="form-group mb-1">
                                    <div class="input-group">
                                      <span class="input-group-text input-group-append input-group-addon">
                                            <i class="simple-icon-user"></i>
                                      </span>
                                      <input type="text" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group mb-1">
                                    <div class="input-group">
                                      <span class="input-group-text input-group-append input-group-addon">
                                            <i class="simple-icon-envelope"></i>
                                      </span>
                                      <input type="text" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group mb-1">
                                    <div class="input-group">
                                      <span class="input-group-text input-group-append input-group-addon">
                                            <i class="simple-icon-screen-smartphone"></i>
                                      </span>
                                      <input type="text" class="form-control" placeholder="Mobile no.">
                                    </div>
                                </div>
                                <div class="form-group mb-1">
                                    <div class="input-group">
                                      <span class="input-group-text input-group-append input-group-addon">
                                            <i class="simple-icon-phone"></i>
                                      </span>
                                      <input type="text" class="form-control" placeholder="Alternate Mobile no.">
                                    </div>
                                </div>
                                <div class="form-group mb-1">
                                    <div class="input-group">
                                      <span class="input-group-text input-group-append input-group-addon">
                                            <i class="simple-icon-location-pin"></i>
                                      </span>
                                      <input type="text" class="form-control" placeholder="City">
                                    </div>
                                </div>
                                <div class="form-group mb-1">
                                    <div class="input-group">
                                      <span class="input-group-text input-group-append input-group-addon">
                                            <i class="simple-icon-location-pin"></i>
                                      </span>
                                      <input type="text" class="form-control" placeholder="State">
                                    </div>
                                </div>
                                <div class="form-group mb-1">
                                  <div class="row">
                                    <div class="col-lg-6 col-xs-6">
                                      <div class="custom-control custom-radio">
                                          <input type="radio" id="birthday" name="customRadio"
                                              class="custom-control-input">
                                          <label class="custom-control-label" for="birthday"> Birthday </label>
                                      </div>
                                    </div>
                                    <div class="col-lg-6 col-xs-6">
                                      <div class="custom-control custom-radio">
                                        <input type="radio" id="anniversary" name="customRadio"
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="anniversary">Anniversary</label>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group mb-1">
                                    <div class="input-group date">
                                      <span class="input-group-text input-group-append input-group-addon">
                                            <i class="simple-icon-calendar"></i>
                                      </span>
                                      <input type="text" class="form-control" placeholder="Date">
                                    </div>
                                </div>
                                <div class="form-group mb-1" id="anni_type">
                                    <div class="input-group">
                                      <span class="input-group-text input-group-append input-group-addon">
                                            <i class="iconsminds-gift-box"></i>
                                      </span>
                                      <input type="text" class="form-control" placeholder="Anniversary Type">
                                    </div>
                                </div>
                                <div class="form-group">
                                  <label class="text-small text-muted">Upload Photo</label>
                                  <div class="dropzone"></div>
                                </div>
                                <div class="form-group">
                                  <label class="text-small text-muted">Address</label>
                                  <textarea class="form-control"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary mb-0">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-8 col-xl-8">
                  <div class="card">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs " role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="first-tab" data-toggle="tab" href="#first"
                                    role="tab" aria-controls="first" aria-selected="true">Today's Birthday and Anniversary</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="second-tab" data-toggle="tab" href="#second"
                                    role="tab" aria-controls="second" aria-selected="false">Upcomung Birthday and Anniversary</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="first" role="tabpanel" aria-labelledby="first-tab">
                                <div class="row">
                                  <?php //for($i=1;$i<6;$i++){ ?>
                                  <div class="col-lg-6">
                                    <div class="card d-flex flex-row mb-4">
                                      <a class="d-flex" href="#">
                                          <img alt="Profile" src="<?php echo base_url(); ?>assets/img/profiles/l-1.jpg"
                                              class="img-thumbnail border-0 rounded-circle m-4 list-thumbnail align-self-center">
                                      </a>
                                      <div class=" d-flex flex-grow-1 min-width-zero">
                                          <div class="card-body pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                              <div class="min-width-zero">
                                                  <a href="#">
                                                      <p class="list-item-heading mb-1 truncate">
                                                        Sarah Kortney</p>
                                                  </a>
                                                  <p class="mb-2 text-muted text-small">Nagpur, Maharashtra
                                                  </p>
                                                  <p class="mb-2 text-muted text-small">
                                                    <i class="simple-icon-calendar"></i> 14.01.2021
                                                  </p>
                                                  <p class="mb-2 text-muted text-small">
                                                    <i class="simple-icon-phone"></i> 09988235496
                                                  </p>
                                                  <p class="mb-2 text-muted text-small">
                                                    <i class="iconsminds-birthday-cake"></i> Birthday
                                                  </p>
                                                  <button type="button" class="btn btn-xs btn-outline-primary ">Edit</button>
                                                  <button type="button" class="btn btn-xs btn-outline-danger ">Delete</button>
                                                 
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card d-flex flex-row mb-4">
                                      <a class="d-flex" href="#">
                                          <img alt="Profile" src="<?php echo base_url(); ?>assets/img/profiles/l-2.jpg"
                                              class="img-thumbnail border-0 rounded-circle m-4 list-thumbnail align-self-center">
                                      </a>
                                      <div class=" d-flex flex-grow-1 min-width-zero">
                                          <div class="card-body pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                              <div class="min-width-zero">
                                                  <a href="#">
                                                      <p class="list-item-heading mb-1 truncate">
                                                        Mayra Sibley</p>
                                                  </a>
                                                  <p class="mb-2 text-muted text-small">Pune, Maharashtra
                                                  </p>
                                                  <p class="mb-2 text-muted text-small">
                                                    <i class="simple-icon-calendar"></i> 14.01.2021
                                                  </p>
                                                  <p class="mb-2 text-muted text-small">
                                                    <i class="simple-icon-phone"></i> 09988235496
                                                  </p>
                                                  <p class="mb-2 text-muted text-small">
                                                    <i class="iconsminds-gift-box"></i> Marriage Anniversary
                                                  </p>
                                                  <button type="button" class="btn btn-xs btn-outline-primary ">Edit</button>
                                                  <button type="button" class="btn btn-xs btn-outline-danger ">Delete</button>
                                                 
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card d-flex flex-row mb-4">
                                      <a class="d-flex" href="#">
                                          <img alt="Profile" src="<?php echo base_url(); ?>assets/img/profiles/l-3.jpg"
                                              class="img-thumbnail border-0 rounded-circle m-4 list-thumbnail align-self-center">
                                      </a>
                                      <div class=" d-flex flex-grow-1 min-width-zero">
                                          <div class="card-body pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                              <div class="min-width-zero">
                                                  <a href="#">
                                                      <p class="list-item-heading mb-1 truncate">
                                                        John Doe</p>
                                                  </a>
                                                  <p class="mb-2 text-muted text-small">Test, Test
                                                  </p>
                                                  <p class="mb-2 text-muted text-small">
                                                    <i class="simple-icon-calendar"></i> 14.01.2021
                                                  </p>
                                                  <p class="mb-2 text-muted text-small">
                                                    <i class="simple-icon-phone"></i> 09988235496
                                                  </p>
                                                  <p class="mb-2 text-muted text-small">
                                                     <i class="iconsminds-gift-box"></i> Work Anniversary
                                                  </p>
                                                  <button type="button" class="btn btn-xs btn-outline-primary ">Edit</button>
                                                  <button type="button" class="btn btn-xs btn-outline-danger ">Delete</button>
                                                 
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card d-flex flex-row mb-4">
                                      <a class="d-flex" href="#">
                                          <img alt="Profile" src="<?php echo base_url(); ?>assets/img/profiles/l-4.jpg"
                                              class="img-thumbnail border-0 rounded-circle m-4 list-thumbnail align-self-center">
                                      </a>
                                      <div class=" d-flex flex-grow-1 min-width-zero">
                                          <div class="card-body pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                              <div class="min-width-zero">
                                                  <a href="#">
                                                      <p class="list-item-heading mb-1 truncate">
                                                        Sarah Kortney</p>
                                                  </a>
                                                  <p class="mb-2 text-muted text-small">Nagpur, Maharashtra
                                                  </p>
                                                  <p class="mb-2 text-muted text-small">
                                                    <i class="simple-icon-calendar"></i> 14.01.2021
                                                  </p>
                                                  <p class="mb-2 text-muted text-small">
                                                    <i class="simple-icon-phone"></i> 09988235496
                                                  </p>
                                                  <p class="mb-2 text-muted text-small">
                                                    <i class="iconsminds-birthday-cake"></i> Birthday
                                                  </p>
                                                  <button type="button" class="btn btn-xs btn-outline-primary ">Edit</button>
                                                  <button type="button" class="btn btn-xs btn-outline-danger ">Delete</button>
                                                 
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card d-flex flex-row mb-4">
                                      <a class="d-flex" href="#">
                                          <img alt="Profile" src="<?php echo base_url(); ?>assets/img/profiles/l-5.jpg"
                                              class="img-thumbnail border-0 rounded-circle m-4 list-thumbnail align-self-center">
                                      </a>
                                      <div class=" d-flex flex-grow-1 min-width-zero">
                                          <div class="card-body pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                              <div class="min-width-zero">
                                                  <a href="#">
                                                      <p class="list-item-heading mb-1 truncate">
                                                        Sarah Kortney</p>
                                                  </a>
                                                  <p class="mb-2 text-muted text-small">Nagpur, Maharashtra
                                                  </p>
                                                  <p class="mb-2 text-muted text-small">
                                                    <i class="simple-icon-calendar"></i> 14.01.2021
                                                  </p>
                                                  <p class="mb-2 text-muted text-small">
                                                    <i class="simple-icon-phone"></i> 09988235496
                                                  </p>
                                                  <p class="mb-2 text-muted text-small">
                                                    <i class="iconsminds-birthday-cake"></i> Birthday
                                                  </p>
                                                  <button type="button" class="btn btn-xs btn-outline-primary ">Edit</button>
                                                  <button type="button" class="btn btn-xs btn-outline-danger ">Delete</button>
                                                
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                </div>
                              <?php //} ?>
                              </div>
                            </div>
                            <div class="tab-pane fade" id="second" role="tabpanel" aria-labelledby="second-tab">
                                <div class="row">
                                  <?php for($i=1;$i<6;$i++){ ?>
                                  <div class="col-lg-6">
                                    <div class="card d-flex flex-row mb-4">
                                      <a class="d-flex" href="#">
                                          <img alt="Profile" src="<?php echo base_url(); ?>assets/img/profiles/l-5.jpg"
                                              class="img-thumbnail border-0 rounded-circle m-4 list-thumbnail align-self-center">
                                      </a>
                                      <div class=" d-flex flex-grow-1 min-width-zero">
                                          <div class="card-body pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                              <div class="min-width-zero">
                                                  <a href="#">
                                                      <p class="list-item-heading mb-1 truncate">
                                                        Sarah Kortney</p>
                                                  </a>
                                                  <p class="mb-2 text-muted text-small">Nagpur, Maharashtra
                                                  </p>
                                                  <p class="mb-2 text-muted text-small">
                                                    <i class="simple-icon-calendar"></i> 14.01.2021
                                                  </p>
                                                  <p class="mb-2 text-muted text-small">
                                                    <i class="simple-icon-phone"></i> 09988235496
                                                  </p>
                                                  <p class="mb-2 text-muted text-small">
                                                    <i class="iconsminds-birthday-cake"></i> Birthday
                                                  </p>
                                                  <button type="button" class="btn btn-xs btn-outline-primary ">Edit</button>
                                                  <button type="button" class="btn btn-xs btn-outline-danger ">Delete</button>
                                                
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                </div>
                              <?php } ?>
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
<script type="text/javascript">
  $(document).ready(function(){
    $('#anni_type').hide();
  });
  $('#anniversary').change(function(){
      if ($("#anniversary").prop("checked")) {
            $('#anni_type').show();
      }else if (!$("#birthday").prop("checked")){
        $('#anni_type').hide();
      }
  });
   $('#birthday').change(function(){
       if ($("#birthday").prop("checked")){
        $('#anni_type').hide();
      }
  });
  
</script>