<?php $this->load->view('admin/includes/header'); ?>

    <main>
        <div class="row">
            <div class="col-12">
                <h1>Course Assignment / Home work</h1>
                <div class="separator mb-5"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 mb-3">
              <form class="form-inline">
                <div class="input-daterange input-group w-90" id="datepicker">
                      <input type="text" class="input-sm form-control" name="start"
                          placeholder="Select Start Date" />
                      <span class="input-group-addon"></span>
                      <input type="text" class="input-sm form-control" name="end"
                          placeholder="Select End Date" />
                  </div>
                  <button type="submit" class="btn btn-primary default mar_l-5"> 
                      <i class="iconsminds-magnifi-glass"></i></button>
              </form>
            </div>
             
        </div>
        <div class="container-fluid">
            <div class="card">
                
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-2">
                              <a class="btn pt-0 pl-0 d-inline-block d-md-none" data-toggle="collapse" href="#displayOptions01"
                                    role="button" aria-expanded="true" aria-controls="displayOptions01">
                                    Display Options
                                    <i class="simple-icon-arrow-down align-middle"></i>
                                </a>

                                <div class="collapse dont-collapse-sm" id="displayOptions01">
                                  <div class="row">
                                    <div class="col-lg-6">
                                      <div class="d-block d-md-inline-block w-100">
                                        <div class="search-sm d-inline-block float-md-left mr-1 mb-1 align-top w-100">
                                            <input class="form-control" placeholder="Search Table" id="searchDatatable01">
                                        </div>
                                        
                                      </div>
                                    </div>
                                    <div class="col-lg-6">
                                      <div class="float-md-right dropdown-as-select" id="pageCountDatatable01">
                                        <span class="text-muted text-small">Displaying 1-10 of 40 items </span>
                                        <button class="btn btn-outline-dark btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">10</button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">5</a>
                                            <a class="dropdown-item active" href="#">10</a>
                                            <a class="dropdown-item" href="#">20</a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                          </div>
                            <div class="separator"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mb-4 data-table-rows data-tables-hide-filter">
                            <table id="datatableRows01" class="data-table responsive nowrap " data-order="[[ 0, &quot;asc&quot; ]]">
                                <thead>
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Assignment Title </th>
                                        <th>Description </th>
                                        <th>Attachment </th>
                                        <th>Submission Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">1</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Assignment title one</p>
                                        </td>
                                        <td>
                                            <p class="text-small text-muted mb-05">
                                                <?php $text = "In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.";
                                                if(strlen($text)>35){
                                                    echo substr($text,0,35);
                                                 ?><p class="text-small text-muted" data-toggle="modal" data-target="#exampleModalCenter"> <span class="iconsminds-down
                            "></span><a href="#"> view more</a></p>
                                                <?php }else{ echo $text; } ?>
                                            </p>
                                        </td>
                                        <td>No Attachment</td>
                                        <td>
                                            <p class="text-muted">14-01-2021</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-pill badge-warning">Pending</span>
                                        </td>
                                        <td>
                                            <p><button class="btn btn-primary btn-xs mb-1" data-toggle="modal" data-target=".bd-example-modal-lg"><span class="iconsminds-to-left"></span> RE</button></p>
                                            <p>
                                            <button class="btn btn-secondary btn-xs mb-1" data-toggle="modal" data-target=".remarks"><span class="iconsminds-speach-bubbles"></span> Remarks</button></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">2</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Assignment title test</p>
                                        </td>
                                        <td>
                                            <p class="text-small text-muted mb-05">
                                                <?php $text = "In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.";
                                                if(strlen($text)>35){
                                                    echo substr($text,0,35);
                                                 ?><p class="text-small text-muted" data-toggle="modal" data-target="#exampleModalCenter"> <span class="iconsminds-down
                            "></span><a href="#"> view more</a></p>
                                                <?php }else{ echo $text; } ?>
                                            </p>
                                        </td>
                                        <td><a href=""><span class="badge badge-pill badge-outline-info">Download Attachment</span></a></td>
                                        <td>
                                            <p class="text-muted">14-01-2021</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-pill badge-warning">Pending</span>
                                        </td>
                                        <td>
                                            <p><button class="btn btn-primary btn-xs mb-1" data-toggle="modal" data-target=".bd-example-modal-lg"><span class="iconsminds-to-left"></span> RE</button></p>
                                            <p><button class="btn btn-secondary btn-xs mb-1" data-toggle="modal" data-target=".remarks"><span class="iconsminds-speach-bubbles"></span> Remarks</button></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">3</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Assignment title </p>
                                        </td>
                                        <td>
                                            <p class="text-small text-muted mb-05">
                                                <?php $text = "In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.";
                                                if(strlen($text)>35){
                                                    echo substr($text,0,35);
                                                 ?><p class="text-small text-muted" data-toggle="modal" data-target="#exampleModalCenter"> <span class="iconsminds-down
                            "></span><a href="#"> view more</a></p>
                                                <?php }else{ echo $text; } ?>
                                            </p>
                                        </td>
                                        <td><a href=""><span class="badge badge-pill badge-outline-info">Download Attachment</span></a></td>
                                        <td>
                                            <p class="text-muted">14-01-2021</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-pill badge-warning">Pending</span>
                                        </td>
                                        <td>
                                            <p><button class="btn btn-primary btn-xs mb-1" data-toggle="modal" data-target=".bd-example-modal-lg"><span class="iconsminds-to-left"></span> RE</button></p>
                                            <p><button class="btn btn-secondary btn-xs mb-1" data-toggle="modal" data-target=".remarks"><span class="iconsminds-speach-bubbles"></span> Remarks</button></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">4</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Assignment title xyz</p>
                                        </td>
                                        <td>
                                            <p class="text-small text-muted mb-05">
                                                <?php $text = "In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.";
                                                if(strlen($text)>35){
                                                    echo substr($text,0,35);
                                                 ?><p class="text-small text-muted" data-toggle="modal" data-target="#exampleModalCenter"> <span class="iconsminds-down
                            "></span><a href="#"> view more</a></p>
                                                <?php }else{ echo $text; } ?>
                                            </p>
                                        </td>
                                        <td>No Attachment</td>
                                        <td>
                                            <p class="text-muted">14-01-2021</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-pill badge-success">Completed</span>
                                        </td>
                                        <td>
                                           
                                            <p> <button class="btn btn-info btn-xs mb-1" data-toggle="modal" data-target="#viewAssignment">view</button></p>
                                            <p><button class="btn btn-secondary btn-xs mb-1" data-toggle="modal" data-target=".remarks"><span class="iconsminds-speach-bubbles"></span> Remarks</button></p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- -------------------------------view description modal------------------------------- -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header custom-modal">
                    <h5 class="modal-title">Assignment Details</h5>
                    <button type="button" class="close white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                   <h5 class="text-muted">Assignment title xyz
                    <p class="mb-3 text-muted text-small right">Post Date: 14-01-2021 </p></h5>
                    <p class="mb-3 text-muted">Description: 
                        <span class="text-small">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in ex
                            imperdiet magna dignissim porta in vel ipsum. Cras et
                            lectus vel magna eleifend faucibus. Proin aliquam fermentum lacus, sit amet
                            molestie
                            ante aliquet nec. Nunc interdum, ante non lobortis feugiat, quam quam
                            ornare
                            nunc, tempus dictum neque odio sed augue. Suspendisse tincidunt tristique
                            laoreet.
                            Orci varius natoque penatibus et magnis dis parturient montes, nascetur
                            ridiculus
                            mus. Aenean condimentum est sit amet justo semper molestie. Integer
                            placerat
                            nulla id tortor molestie, sed laoreet est ornare. Morbi non velit nec purus
                            accumsan
                            commodo et sed nisi. Maecenas sit amet purus scelerisque neque luctus
                            congue.
                        </span>
                    </p>
                    <p class="mb-3 text-muted">Submission Date: 14-01-2021 </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<!-- ---------------------------------Reply form modal----------------------- -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header custom-modal">
                <h5 class="modal-title">Assignment</h5>
                <button type="button" class="close white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form enctype="multipart/form-data" method="post">
            <div class="modal-body">
                
                    <div class="form-group">
                        <label>Assignment Titile</label>
                        <input type="text" name="assi_title" id="assi_title" class="form-control" placeholder="" value="This is assignment titile one" disabled>
                    </div>
                    <div class="form-group">
                        <label>Desciption</label>
                        <textarea placeholder="" class="form-control" rows="6" id="ckEditorClassic">
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label>Upload your assignment</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile04" required>
                                <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button">Upload</button>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary"
                    data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- -------------------------------view completed assignment modal------------------------------- -->
    <div class="modal fade" id="viewAssignment" tabindex="-1" role="dialog"
                                aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header custom-modal">
                    <h5 class="modal-title">Completed Assignment</h5>
                    <button type="button" class="close white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5 class="text-muted">Assignment title xyz</h5>
                    <p class="mb-3 text-muted">Description: 
                        <span class="text-small">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in ex
                            imperdiet magna dignissim porta in vel ipsum. Cras et
                            lectus vel magna eleifend faucibus. Proin aliquam fermentum lacus, sit amet
                            molestie
                            ante aliquet nec. Nunc interdum, ante non lobortis feugiat, quam quam
                            ornare
                            nunc, tempus dictum neque odio sed augue. Suspendisse tincidunt tristique
                            laoreet.
                            Orci varius natoque penatibus et magnis dis parturient montes, nascetur
                            ridiculus
                            mus. Aenean condimentum est sit amet justo semper molestie. Integer
                            placerat
                            nulla id tortor molestie, sed laoreet est ornare. Morbi non velit nec purus
                            accumsan
                            commodo et sed nisi. Maecenas sit amet purus scelerisque neque luctus
                            congue.
                        </span>
                    </p>
                    <p class="mb-3 text-muted">Submission Date: 14-01-2021 </p>
                    <p class="text-small"><a href="" class="custom-link"><span class="iconsminds-download"></span>Download your assignment answersheet from here.</a></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- ------------------------------remarks modal--------------------- -->
    <div class="modal fade remarks" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header custom-modal">
                <h5 class="modal-title">Remarks</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form enctype="multipart/form-data" method="post">
            <div class="modal-body">
                
                   <div class="row">
                <div class="col-12 chat-app">
                    <div class="d-flex flex-row justify-content-between mb-3 chat-heading-container">
                        <div class="d-flex flex-row chat-heading">
                            <a class="d-flex" href="#">
                                <img alt="Profile Picture" src="<?php echo base_url(); ?>assets/img/profiles/l-1.jpg"
                                    class="img-thumbnail border-0 rounded-circle ml-0 mr-4 list-thumbnail align-self-center small">
                            </a>
                            <div class=" d-flex min-width-zero">
                                <div
                                    class="card-body pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                    <div class="min-width-zero">
                                        <a href="#">
                                            <p class="list-item-heading mb-1 truncate ">Sarah Kortney</p>
                                        </a>
                                        <p class="mb-0 text-muted text-small">Last seen today 01:24</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="separator mb-5"></div>

                    <div class="scroll">
                        <div class="scroll-content">
                            <div class="card d-inline-block mb-3 float-left mr-2">
                                <div class="position-absolute pt-1 pr-2 r-0">
                                    <span class="text-extra-small text-muted">09:25</span>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex flex-row pb-2">
                                        <a class="d-flex" href="#">
                                            <img alt="Profile Picture" src="<?php echo base_url(); ?>assets/img/profiles/l-1.jpg"
                                                class="img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                        </a>
                                        <div class=" d-flex flex-grow-1 min-width-zero">
                                            <div
                                                class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                                <div class="min-width-zero">
                                                    <p class="mb-0 truncate list-item-heading">Sarah Kortney</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="chat-text-left">
                                        <p class="mb-0 text-semi-muted">
                                            What do you think about our plans for this product launch?
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="card d-inline-block mb-3 float-left mr-2">
                                <div class="position-absolute pt-1 pr-2 r-0">
                                    <span class="text-extra-small text-muted">09:28</span>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex flex-row pb-2">
                                        <a class="d-flex" href="#">
                                            <img alt="Profile Picture" src="<?php echo base_url(); ?>assets/img/profiles/l-1.jpg"
                                                class="img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                        </a>
                                        <div class=" d-flex flex-grow-1 min-width-zero">
                                            <div
                                                class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                                <div class="min-width-zero">
                                                    <p class="mb-0 truncate list-item-heading">Sarah Kortney</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="chat-text-left">
                                        <p class="mb-0 text-semi-muted">
                                            It looks to me like you have a lot planned before your deadline. I would
                                            suggest you push your deadline back so you have
                                            time to run a successful advertising campaign.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="card d-inline-block mb-3 float-left mr-2">
                                <div class="position-absolute pt-1 pr-2 r-0">
                                    <span class="text-extra-small text-muted">09:30</span>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex flex-row pb-2">
                                        <a class="d-flex" href="#">
                                            <img alt="Profile Picture" src="<?php echo base_url(); ?>assets/img/profiles/l-1.jpg"
                                                class="img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                        </a>
                                        <div class="d-flex flex-grow-1 min-width-zero">
                                            <div
                                                class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                                <div class="min-width-zero">
                                                    <p class="mb-0 truncate list-item-heading">Sarah Kortney</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="chat-text-left">
                                        <p class="mb-0 text-semi-muted">
                                            How do you think we should move forward with this project? As you know, we
                                            are
                                            expected to present it to our clients next
                                            week. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="card d-inline-block mb-3 float-right  mr-2">
                                <div class="position-absolute pt-1 pr-2 r-0">
                                    <span class="text-extra-small text-muted">09:41</span>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex flex-row pb-2">
                                        <a class="d-flex" href="#">
                                            <img alt="Profile Picture" src="<?php echo base_url(); ?>assets/img/profiles/l-4.jpg"
                                                class="img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                        </a>
                                        <div class="d-flex flex-grow-1 min-width-zero">
                                            <div
                                                class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                                <div class="min-width-zero">
                                                    <p class="mb-0 list-item-heading truncate">Mimi Carreira</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="chat-text-left">
                                        <p class="mb-0 text-semi-muted">
                                            I would suggest you discuss this further with the advertising team.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="card d-inline-block mb-3 float-right  mr-2">
                                <div class="position-absolute pt-1 pr-2 r-0">
                                    <span class="text-extra-small text-muted">09:41</span>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex flex-row pb-2">
                                        <a class="d-flex" href="#">
                                            <img alt="Profile Picture" src="<?php echo base_url(); ?>assets/img/profiles/l-4.jpg"
                                                class="img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                        </a>
                                        <div class="d-flex flex-grow-1 min-width-zero">
                                            <div
                                                class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                                <div class="min-width-zero">
                                                    <p class="mb-0 list-item-heading truncate">Mimi Carreira</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="chat-text-left">
                                        <p class="mb-0 text-semi-muted">
                                            I am very busy at the moment and on top of everything, I forgot my umbrella
                                            today.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="card d-inline-block mb-3 float-right mr-2">
                                <div class="position-absolute pt-1 pr-2 r-0">
                                    <span class="text-extra-small text-muted">09:41</span>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex flex-row pb-2">
                                        <a class="d-flex" href="#">
                                            <img alt="Profile Picture" src="<?php echo base_url(); ?>assets/img/profiles/l-4.jpg"
                                                class="img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                        </a>
                                        <div class="d-flex flex-grow-1 min-width-zero">
                                            <div
                                                class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                                <div class="min-width-zero">
                                                    <p class="mb-0 list-item-heading truncate">Mimi Carreira</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="chat-text-left">
                                        <p class="mb-0 text-semi-muted">
                                            I am very busy at the moment and on top of everything, I forgot my umbrella
                                            today.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                    </div>
                </div>
                <div class="chat-input-container chat-input-container-custom d-flex justify-content-between align-items-right">
                <input class="form-control flex-grow-1" type="text" placeholder="Say something...">
                <!-- <div>
                    <button type="button" class="btn btn-outline-primary icon-button large">
                        <i class="simple-icon-paper-clip"></i>
                    </button>
                    <button type="button" class="btn btn-primary icon-button large">
                        <i class="simple-icon-arrow-right"></i>
                    </button>

                </div> -->
            </div>
            </div>
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary"
                    data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>
<?php $this->load->view('admin/includes/footer'); ?>
<script type="text/javascript">
     // Datatable with rows 01
      var $datatableRows01 = $("#datatableRows01").DataTable({
        bLengthChange: false,
        buttons: [
          'copy',
          'excel',
          'csv',
          'pdf'
        ],
        destroy: true,
        info: false,
        sDom: '<"row view-filter"<"col-sm-12"<"float-left"l><"float-right"f><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>',
        pageLength: 10,
        columns: [
          { data: "Sr. No." },
          { data: "Assignment Title" },
          { data: "Description" },
          { data: "Attachment" },
          { data: "Submission Date" },
          { data: "Status" },
          { data: "Action" }
        ],
        language: {
          paginate: {
            previous: "<i class='simple-icon-arrow-left'></i>",
            next: "<i class='simple-icon-arrow-right'></i>"
          }
        },
        drawCallback: function () {
          unCheckAllRows();
          $("#checkAllDataTables").prop("checked", false);
          $("#checkAllDataTables").prop("indeterminate", false).trigger("change");

          $($(".dataTables_wrapper .pagination li:first-of-type"))
            .find("a")
            .addClass("prev");
          $($(".dataTables_wrapper .pagination li:last-of-type"))
            .find("a")
            .addClass("next");
          $(".dataTables_wrapper .pagination").addClass("pagination-sm");
          var api = $(this).dataTable().api();
          $("#pageCountDatatable01 span").html("Displaying " + parseInt(api.page.info().start + 1) + "-" + api.page.info().end + " of " + api.page.info().recordsTotal + " items");
        }
      });

      $("#dataTablesCopy01").on("click", function(event) {
        event.preventDefault();
        $datatableRows01.buttons(0).trigger();
      });

      $("#dataTablesExcel01").on("click", function(event) {
        event.preventDefault();
        $datatableRows01.buttons(1).trigger();
      });
      
      $("#dataTablesCsv01").on("click", function(event) {
        event.preventDefault();
        $datatableRows01.buttons(2).trigger();
      });
      
      $("#dataTablesPdf01").on("click", function(event) {
        event.preventDefault();
        $datatableRows01.buttons(3).trigger();
      });

      $('#datatableRows01 tbody').on('click', 'tr', function () {
        $(this).toggleClass('selected');
        var $checkBox = $(this).find(".custom-checkbox input");
        $checkBox.prop("checked", !$checkBox.prop("checked")).trigger("change");
        controlCheckAll();
      });

      function controlCheckAll() {
        var anyChecked = false;
        var allChecked = true;
        $('#datatableRows01 tbody tr .custom-checkbox input').each(function () {
          if ($(this).prop("checked")) {
            anyChecked = true;
          } else {
            allChecked = false;
          }
        });
        if (anyChecked) {
          $("#checkAllDataTables01").prop("indeterminate", anyChecked);
        } else {
          $("#checkAllDataTables01").prop("indeterminate", anyChecked);
          $("#checkAllDataTables01").prop("checked", anyChecked);
        }
        if (allChecked) {
          $("#checkAllDataTables01").prop("indeterminate", false);
          $("#checkAllDataTables01").prop("checked", allChecked);
        }
      }

      function unCheckAllRows() {
        $('#datatableRows01 tbody tr').removeClass('selected');
        $('#datatableRows01 tbody tr .custom-checkbox input').prop("checked", false).trigger("change");
      }

      function checkAllRows() {
        $('#datatableRows01 tbody tr').addClass('selected');
        $('#datatableRows01 tbody tr .custom-checkbox input').prop("checked", true).trigger("change");
      }

      $("#checkAllDataTables01").on("click", function (event) {
        var isCheckedAll = $("#checkAllDataTables01").prop("checked");
        if (isCheckedAll) {
          checkAllRows();
        } else {
          unCheckAllRows();
        }
      });

      function getSelectedRows() {
        //Getting Selected Ones
        console.log($datatableRows01.rows('.selected').data());
      }

      $("#searchDatatable01").on("keyup", function (event) {
        $datatableRows01.search($(this).val()).draw();
      });

      $("#pageCountDatatable01 .dropdown-menu a").on("click", function (event) {
        var selText = $(this).text();
        $datatableRows01.page.len(parseInt(selText)).draw();
      });

      var $addToDatatableButton = $("#addToDatatable01").stateButton();


</script>