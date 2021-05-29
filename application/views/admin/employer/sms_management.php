<?php $this->load->view('admin/includes/employer_header'); ?>

    <main>
         <div class="row">
            <div class="col-12">
                <h1>SMS Management</h1>
                <div class="separator mb-5"></div>
            </div>
        </div>
        <div class="container-fluid">
           <div class="row">
               <div class="col-lg-8">
                   <div class="card mb-4">
                       <div class="card-body">
                           <ul class="sms_plan">
                               <li>
                                   <p>SMS Quota</p>
                                   <p class="text-muted text-small">0/200</p>
                               </li>
                               <li>
                                   <p>Plan Expire On</p>
                                   <p class="text-muted text-small">20-02-2021</p>
                               </li>
                               <li>
                                   <a href="<?php echo base_url(); ?>employer-wallet"><button class="btn btn-danger">Buy</button></a>
                               </li>
                           </ul>
                       </div>
                   </div>
               </div>
           </div>
            <div class="row">
                
                <div class="col-12 col-lg-7 col-xl-8 col-left">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5>Send SMS</h5>
                            <form id="exampleForm" class="tooltip-label-right" novalidate>
                                
                                
                                 <div class="form-group">
                                    <label>Message</label>
                                    <textarea class="form-control" name="j_jobDescription" id="ckEditorClassic01" name="p_address">
                                    </textarea>
                                </div>
                               
                                <button class="btn btn-primary" type="submit" name="send">Send</button>
                                <button class="btn btn-outline-primary" type="submit" name="cancel">Cancel</button>
                            
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-xl-4">
                    
                </div>
        <div class="app-menu">
            <ul class="nav nav-tabs card-header-tabs ml-0 mr-0 mb-1" role="tablist">
                
                <li class="nav-item w-50 text-center">
                    <a class="nav-link active" id="second-tab" data-toggle="tab" href="#secondFull" role="tab"
                        aria-selected="false">Contacts</a>
                </li>
            </ul>

            <div class="p-4 h-100">
                <div class="row">
                    <div class="col-12 col-left">
                        <div class="form-group">
                            <input type="text" class="form-control rounded" placeholder="Search">
                        </div>
                    </div>
                    <div class="col-12 ">
                        <div class="text-zero top-right-button-container pr-15">
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
                </div>
                
                
                <div class="tab-content h-100">
                    <div class="tab-pane fade show active  h-100" id="firstFull" role="tabpanel"
                        aria-labelledby="first-tab">

                        <div class="scroll list" data-check-all="checkAll">
                            <?php for($i=0;$i<15; $i++){ ?>
                                <div class="d-flex flex-row mb-3 border-bottom pb-3">
                                <a class="d-flex" href="#">
                                    <img alt="Profile Picture" src="<?php echo base_url(); ?>assets/img/profiles/l-1.jpg"
                                        class="img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                </a>
                                <div class="d-flex flex-grow-1 min-width-zero">
                                    <div class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                        <div class="min-width-zero">
                                            <p class="mb-0 truncate">Sarah Kortney</p>
                                            <p class="mb-0 text-muted text-small"><i class="iconsminds-phone"></i> 9867542387</p>
                                            <div class="pl-1 align-self-center">
                                                <label class="custom-control custom-checkbox mb-0">
                                                    <input type="checkbox" class="custom-control-input">
                                                    <span class="custom-control-label"></span>
                                                </label>
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

            <a class="app-menu-button d-inline-block d-xl-none" href="#">
                <i class="simple-icon-options"></i>
            </a>
        </div>
    </main>
    <?php $this->load->view('admin/includes/footer'); ?>