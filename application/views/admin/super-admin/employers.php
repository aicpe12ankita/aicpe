<?php $this->load->view('admin/includes/admin_header'); ?>

    <main>
        <div class="row">
            <div class="col-12">
                <h1>Employers</h1>
                <div class="text-zero top-right-button-container">
                  <button type="button" class="btn btn-primary btn-lg top-right-button mr-1" onclick="get_employer('','');">Add New Employer </button>
                           
                </div>
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
            <div class="col-lg-2  mb-3">
              <div class="btn-group right">
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
                           
                            <table id="dataTableRows01" class="data-table responsive nowrap data-table-standard"
                                data-order="[[ 1, &quot;desc&quot; ]]">
                                <thead>
                                   <tr>
                                        <th>Sr. No.</th>
                                        <th>Logo</th>
                                        <th>Employer Code </th>
                                        <th>Employer Name </th>
                                        <th>Designation  </th>
                                        <th>Mobile No.</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>No. Of Jobs Posted</th>
                                        <th>AICPE Staff</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php for($i=1;$i<11;$i++){ ?>   
                                    <tr>
                                        <td>
                                            <p class="list-item-heading"><?php echo $i; ?></p>
                                        </td>
                                        <td>
                                          <img src="<?php echo base_url();?>assets/img/profiles/l-2.jpg" class="img-thumbnail border-0 rounded-circle list-thumbnail table_img">
                                        </td>
                                        <td>
                                            <p class="text-muted">EMP_43860</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">John Doe</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Recruiter</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">9856892351</p>
                                        </td>
                                        <td>
                                           <p class="text-muted">EMP_John09</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">John@ertyry</p>
                                        </td>
                                         <td>
                                            <p class="text-muted">54</p>
                                        </td>
                                         <td>
                                            <p class="text-muted">Lorem Ipsum</p>
                                        </td>
                                         <td>
                                            <p class="badge badge-success">Active</p>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-xs btn-primary mb-1"><i class="simple-icon-note"></i></a>
                                            <a href="#" class="btn btn-xs btn-danger mb-1"><i class="simple-icon-trash"></i></a>
                                            <a href="#" class="btn btn-xs btn-warning mb-1" data-toggle="tooltip" data-placement="top" title="Send Password Recovery Mail"><i class="simple-icon-lock"></i></a>
                                            <a href="#" class="btn btn-xs btn-info mb-1" data-toggle="tooltip" data-placement="top" title="Send Document Remainder Mail"><i class="iconsminds-file"></i></a>
                                            <a href="#" class="btn btn-xs btn-success mb-1" data-toggle="tooltip" data-placement="top" title="Send Message"><i class="iconsminds-speach-bubble-dialog"></i></a>
                                        </td>
                                    </tr>
                                   <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>
 <div class="modal fade modal-right" id="addEmployer" tabindex="-1" role="dialog" aria-labelledby="addEmployer" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
            <form method="post" enctype="multipart/form-data" id="add_employer">
              <div class="modal-header custom-modal">
                  <h5 class="modal-title white">Add New Employer</h5>
                  <button type="button" class="close white" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                
                  <div class="form-group">
                      <label>Employer Code</label>
                      <input type="text" class="form-control" placeholder="">
                  </div>
                  <div class="form-group">
                      <label>Employer Name</label>
                      <input type="text" class="form-control" placeholder="">
                  </div>
                  <div class="form-group">
                      <label>Company Name</label>
                      <input type="text" class="form-control" placeholder="">
                  </div>
                  <div class="form-group">
                      <label>Designation</label>
                      <input type="text" class="form-control" placeholder="">
                  </div>
                  <div class="form-group">
                      <label>Mobile No</label>
                      <input type="text" class="form-control" placeholder="">
                  </div>
                   <div class="form-group">
                      <label>Alternate Mobile No</label>
                      <input type="text" class="form-control" placeholder="">
                  </div>
                  <div class="form-group">
                      <label>Whats App No</label>
                      <input type="text" class="form-control" placeholder="">
                  </div>
                   <div class="form-group">
                      <label>Email</label>
                      <input type="email" class="form-control" placeholder="">
                  </div>
                  <div class="form-group">
                    <label>Gender</label>
                        <div class="row">
                          <div class="col-lg-4 col-xs-4">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="Male" name="customRadio"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="Male"> Male </label>
                            </div>
                          </div>
                          <div class="col-lg-4 col-xs-4">
                            <div class="custom-control custom-radio">
                              <input type="radio" id="Female" name="customRadio"
                                  class="custom-control-input">
                              <label class="custom-control-label" for="Female">Female</label>
                            </div>
                          </div>
                          <div class="col-lg-4 col-xs-4">
                            <div class="custom-control custom-radio">
                              <input type="radio" id="Other" name="customRadio"
                                  class="custom-control-input">
                              <label class="custom-control-label" for="Other">Other</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label>Date Of Birth</label>
                        <div class="input-group date">
                          <span class="input-group-text input-group-append input-group-addon">
                                <i class="simple-icon-calendar"></i>
                          </span>
                          <input type="text" class="form-control" placeholder="Date">
                        </div>
                      </div>
                      <div class="form-group">
                          <label>Address</label>
                          <textarea placeholder="" class="form-control" rows="3"></textarea>
                      </div>
                      <div class="form-group">
                          <label>Country</label>
                          <select class="form-control">
                              <option label="&nbsp;">&nbsp;</option>
                              <option value="Flexbox">Flexbox</option>
                              <option value="Sass">Sass</option>
                              <option value="React">React</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>State</label>
                          <select class="form-control">
                              <option label="&nbsp;">&nbsp;</option>
                              <option value="Flexbox">Flexbox</option>
                              <option value="Sass">Sass</option>
                              <option value="React">React</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>City</label>
                          <select class="form-control">
                              <option label="&nbsp;">&nbsp;</option>
                              <option value="Flexbox">Flexbox</option>
                              <option value="Sass">Sass</option>
                              <option value="React">React</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>Pin Code</label>
                          <input type="text" class="form-control" placeholder="" maxlength="6">
                      </div>
                      <div class="form-group">
                          <label>Employer Details</label>
                          <textarea placeholder="" class="form-control" rows="3"></textarea>
                      </div>
                      <div class="form-group">
                          <label>Username</label>
                          <input type="text" class="form-control" >
                      </div>
                      <div class="form-group">
                          <label>Password</label>
                          <input type="password" class="form-control" placeholder="" >
                      </div>
                      <div class="form-group">
                          <label>Conform Password</label>
                          <input type="password" class="form-control" placeholder="" >
                      </div>
                      <div class="form-group">
                          <label>Gst No.</label>
                          <input type="text" class="form-control" placeholder="" maxlength="6">
                      </div>
                      <div class="form-group">
                          <label>Pan Card No.</label>
                          <input type="text" class="form-control" placeholder="" maxlength="6">
                      </div>
                      <div class="form-group">
                        <label>Employer Logo</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile04">
                                <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button">Upload</button>
                            </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Employer Passport Photo</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile04">
                                <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button">Upload</button>
                            </div>
                        </div>
                      </div>
                      <div class="form-group">
                          <label>Photo ID Type</label>
                          <select class="form-control">
                              <option label="&nbsp;">&nbsp;</option>
                              <option value="Flexbox">Aadhar Card</option>
                              <option value="Sass">Pan Card</option>
                              <option value="React">Driving Licence</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>Photo ID No.</label>
                          <input type="text" class="form-control" >
                      </div>
                      <div class="form-group">
                        <label>Upload Photo ID</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile04">
                                <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button">Upload</button>
                            </div>
                        </div>
                      </div>
                  
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-outline-primary"
                      data-dismiss="modal">Cancel</button>
                  
              </div>
              </form>
          </div>
      </div>
  </div>
<?php $this->load->view('admin/includes/footer'); ?>
<script type="text/javascript">
  function get_employer(type,id){
    if(type=="add" && id==""){
      $('#addEmployer').modal('show');
    }
    
  }

  $('#add_employer').on('submit', function(e){
    e.preventDefault();
    alert(ok);
  })
</script>