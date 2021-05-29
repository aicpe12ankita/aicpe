<?php $this->load->view('admin/includes/header'); ?>

    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>Invention Center</h1>
                    <div class="text-zero top-right-button-container">
                        <button type="button" class="btn btn-primary btn-lg top-right-button mr-1" data-toggle="modal" data-target="#addInventiont">Add Invention</button>
                    </div>
                    <div class="separator mb-5"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-8 col-xl-8">
                  <div class="card mb-4">
                    <div class="card-body">
                        <div class="d-flex flex-row mb-3">
                            <a href="#">
                                <img src="<?php echo base_url(); ?>assets/img/profiles/l-1.jpg" alt="Mayra Sibley"
                                    class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                            </a>
                            <div class="pl-3">
                                <a href="#">
                                    <p class="font-weight-medium mb-0 ">Mayra Sibley</p>
                                    <p class="text-muted mb-0 text-small">Nagpur, Maharashtra</p>
                                </a>
                            </div>
                        </div>
                        <p>
                            Keeping your eye on the ball while performing a deep dive on the start-up mentality.
                            Keeping your eye on the ball while performing a deep dive on the start-up mentality.
                        </p>
                        <p><strong>Utility for society :</strong> Keeping your eye on the ball while
                            performing a deep dive on the start-up mentality.</p>

                        <a href="img/details/5.jpg" class="lightbox">
                          <img class="img-fluid border-0 border-radius mb-3" src="<?php echo base_url(); ?>assets/img/details/5.jpg" />
                        </a>
                        <a href="#">
                          <button type="button" class="btn btn-secondary btn-block mb-3">view attachments</button>
                        </a>
                        <div>
                            <div class="post-icon mr-3 d-inline-block"><a href="#"><i
                                        class="simple-icon-heart mr-1"></i></a> <span>4
                                    Likes</span></div>
                            <div class="post-icon d-inline-block"><i
                                    class="simple-icon-bubble mr-1"></i> <span>1
                                    Comment</span></div>
                        </div>

                        <div class="mt-5">
                            <div class="d-flex flex-row mb-4 justify-content-between">
                                <a href="#">
                                    <img src="<?php echo base_url(); ?>assets/img/profiles/l-8.jpg" alt="Brynn Bragg"
                                        class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                </a>
                                <div class="pl-3">
                                    <a href="#">
                                        <p class="font-weight-medium mb-0 ">Brynn Bragg</p>
                                        <p class="text-muted mb-0 text-small">Two Days Ago</p>
                                    </a>
                                    <p class="mt-3">
                                        Mass incarceration, preliminary thinking systems thinking
                                        vibrant thought leadership corporate social responsibility.
                                        Green space global, policymaker; shared value disrupt
                                        segmentation social capital.
                                    </p>
                                </div>
                                
                            </div>
                            <div class="d-flex flex-row mb-4 justify-content-between">
                                <a href="#">
                                    <img src="<?php echo base_url(); ?>assets/img/profiles/l-5.jpg" alt="Mimi Carreira"
                                        class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                </a>
                                <div class="pl-3">
                                    <a href="#">
                                        <p class="font-weight-medium mb-0 ">Mimi Carreira</p>
                                        <p class="text-muted mb-0 text-small">Two Days Ago</p>
                                    </a>
                                    <p class="mt-3">
                                        Mass incarceration, preliminary thinking systems thinking
                                        vibrant thought leadership corporate social responsibility.
                                        Green space global, policymaker; shared value disrupt
                                        segmentation social capital.
                                    </p>
                                </div>
                            </div>
                            <div class="comment-contaiener">
                                <div class="input-group">
                                    <input type="text" class="form-control"
                                        placeholder="Add a comment">
                                    <div class="input-group-append">
                                        <button class="btn btn-secondary" type="button"><span
                                                class="d-inline-block">Send</span> <i
                                                class="simple-icon-arrow-right ml-2"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-xl-4 col-left ">
                <div class="row">
                    <div class="col-12">
                        <div class="input-group typeahead-container">
                            <input type="text" class="form-control typeahead" name="query" id="query"
                                placeholder="Type something for search..." data-provide="typeahead"
                                autocomplete="off">
                            <div class="input-group-append ">
                                <button type="submit" class="btn btn-primary default">
                                    <i class="simple-icon-magnifier"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- --------------select state -->
                        <div class="col-12 mt-2r">
                            <div class="card custom_accordion_card">
                                <div class="card-header progress-bar">
                                     <a class="" data-toggle="collapse" href="#stateAccordion" aria-expanded="true" aria-controls="stateAccordion">
                                    <h6 class="text-left white">State<i class="simple-icon-minus right"></i> </h6>
                                </a>
                                </div>
                                <div class="card-body collapse show" id="stateAccordion">
                                    <form>
                                    <div class="form-group">
                                     <input type="text" placeholder="Search State" id="search_state" data-type="accordion-search" data-filter-key="state" class="form-control">
                                    </div>
                                    <div class="accordion-inner p-lr">
                                        <div class="input-group">
                                            <ul class="list_course stateList">
                                                <li>
                                                    <label for="courses1">
                                                       <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="state1" value="01">
                                                            <label class="custom-control-label" for="state1"><?php echo ucwords("Andhra Pradesh"); ?></label>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="courses1">
                                                       <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="state2" value="02">
                                                            <label class="custom-control-label" for="state2"><?php echo ucwords("Arunachal Pradesh"); ?></label>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="courses1">
                                                       <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="state3">
                                                            <label class="custom-control-label" for="state3"><?php echo ucwords("Assam"); ?></label>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="courses1">
                                                       <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="state4">
                                                            <label class="custom-control-label" for="state4"><?php echo ucwords("Bihar"); ?></label>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="courses1">
                                                       <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="state5">
                                                            <label class="custom-control-label" for="state5"><?php echo ucwords("Chhattisgarh"); ?></label>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="courses1">
                                                       <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="state6" value="01">
                                                            <label class="custom-control-label" for="state6"><?php echo ucwords("Goa"); ?></label>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="courses1">
                                                       <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="state7" value="02">
                                                            <label class="custom-control-label" for="state7"><?php echo ucwords("Gujarat"); ?></label>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="courses1">
                                                       <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="state8">
                                                            <label class="custom-control-label" for="state8"><?php echo ucwords("Haryana"); ?></label>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="courses1">
                                                       <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="state9">
                                                            <label class="custom-control-label" for="state9"><?php echo ucwords("Himachal Pradesh"); ?></label>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="courses1">
                                                       <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="state10">
                                                            <label class="custom-control-label" for="state10"><?php echo ucwords("Jharkhand"); ?></label>
                                                        </div>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                         <!-- ----------select city -->
                        <div class="col-12 mt-2r">
                            <div class="card custom_accordion_card">
                                <div class="card-header progress-bar">
                                     <a class="" data-toggle="collapse" href="#cityAccordion" aria-expanded="true" aria-controls="cityAccordion">
                                    <h6 class="text-left white">Cities <i class="simple-icon-minus right"></i> </h6>
                                </a>
                                </div>
                                <div class="card-body collapse show" id="cityAccordion">
                                    <form>
                                    <div class="form-group">
                                     <input type="text" placeholder="Search City" id="search_city" data-type="accordion-search" data-filter-key="cities" class="form-control">
                                    </div>
                                    <div class="accordion-inner p-lr">
                                        <div class="input-group">
                                            <ul class="list_course cityList">
                                                <li>
                                                    <label for="courses1">
                                                       <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="city1">
                                                            <label class="custom-control-label" for="city1"><?php echo ucwords("Amravati"); ?></label>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="courses1">
                                                       <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="city2">
                                                            <label class="custom-control-label" for="city2"><?php echo ucwords("Akola"); ?></label>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="courses1">
                                                       <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="city3">
                                                            <label class="custom-control-label" for="city3"><?php echo ucwords("Achalpur"); ?></label>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="courses1">
                                                       <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="city4">
                                                            <label class="custom-control-label" for="city4"><?php echo ucwords("Ahmednagar"); ?></label>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="courses1">
                                                       <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="city5">
                                                            <label class="custom-control-label" for="city5"><?php echo ucwords("Aurangabad"); ?></label>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="courses1">
                                                       <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="city6">
                                                            <label class="custom-control-label" for="city6"><?php echo ucwords("Barshi"); ?></label>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="courses1">
                                                       <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="city7">
                                                            <label class="custom-control-label" for="city7"><?php echo ucwords("beed"); ?></label>
                                                        </div>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div><!-- city select  -->
                </div>    
            </div>
            </div>
        </div>
    </main>
    <div class="modal fade" id="addInventiont" tabindex="-1" role="dialog"
                                aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header custom-modal">
                    <h5 class="modal-title">Add Invention</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="exampleForm" class="tooltip-label-right" novalidate>
                        <div class="form-group position-relative error-l-50">
                            <label>Title</label>
                            <input type="text" class="form-control" name="jQueryName" required>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" id="" cols="3"></textarea>
                        </div>
                        <div class="form-group position-relative error-l-50">
                            <label>Utility for society</label>
                            <input type="text" class="form-control" name="jQueryName" required>
                        </div>
                        <div class="form-group">
                          <label>Upload file</label>
                          <div class="dropzone"></div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                   <button type="submit" class="btn btn-primary mb-0">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
<?php $this->load->view('admin/includes/footer'); ?>