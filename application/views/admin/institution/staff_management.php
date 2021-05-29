<?php $this->load->view('admin/includes/institution_header'); ?>

    <main>
        <div class="row">
            <div class="col-12">
                <h1>Staff Management</h1>
                <div class="text-zero top-right-button-container">
                  <button type="button" class="btn btn-primary btn-lg top-right-button mr-1" data-toggle="modal" data-target="#addEnquiry">ADD NEW </button>
                           
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
                                        <th>Staff Name</th>
                                        <th>Mobile 1</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Eligibility For Incentive</th>
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
                                            <p class="text-muted">John Doe</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">9856892351</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">john.doe@testmail.com</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Non Teaching</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">John@ertyry</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">John_98798</p>
                                        </td>
                                         <td>
                                            <p class="badge badge-info">Yes</p>
                                        </td>
                                         <td>
                                            <p class="badge badge-success">Active</p>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-xs btn-primary mb-1"><i class="simple-icon-note"></i></a>
                                            <a href="#" class="btn btn-xs btn-warning mb-1"><i class="simple-icon-trash"></i></a>
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
 <div class="modal fade modal-right" id="addEnquiry" tabindex="-1" role="dialog" aria-labelledby="addEnquiry" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header custom-modal">
                  <h5 class="modal-title white">Add New</h5>
                  <button type="button" class="close white" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="form-group">
                    <label>Full Name</label>
                      <div class="input-group">
                            <input type="text" class="form-control" placeholder="First Name">
                            <input type="text" class="form-control" placeholder="Middle Name">
                            <input type="text" class="form-control" placeholder="Last Name">
                      </div>
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
                          <label>Temporary Address</label>
                          <textarea placeholder="" class="form-control" rows="3"></textarea>
                      </div>
                      <div class="form-group">
                          <label>Permanent Address</label>
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
                      <label>Designation</label>
                          <input type="text" class="form-control" placeholder="">
                      </div>
                      <div class="form-group">
                          <label>Education Qualification</label>
                          <input type="text" class="form-control" placeholder="">
                      </div>
                      <div class="form-group">
                          <label>Username</label>
                          <input type="text" class="form-control" >
                      </div>
                      <div class="form-group">
                          <label>Password</label>
                          <input type="text" class="form-control" placeholder="" >
                      </div>
                      <div class="form-group">
                        <label>Photo</label>
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
                      <div class="form-group">
                          <label>Status</label>
                          <select class="form-control">
                              <option label="&nbsp;">&nbsp;</option>
                              <option value="Flexbox">Active</option>
                              <option value="Sass">Inactive</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>Role </label>
                          <select class="form-control">
                              <option>Teaching</option>
                              <option>Non - Teaching</option>
                              <option value="Sass">both</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>Eligibility for incentive </label>
                          <select class="form-control">
                              <option label="&nbsp;">Yes</option>
                              <option value="Sass">No</option>
                          </select>
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
<?php $this->load->view('admin/includes/footer'); ?>
<script type="text/javascript">
  var $dataTableRows01 = $("#dataTableRows01").DataTable({
        bLengthChange: false,
        buttons: [
          'copy',
          'excel',
          'csv',
          'pdf'
        ],
        destroy: true,
        info: true,
        sDom: '<"row view-filter"<"col-sm-12"<"float-left"l><"float-right"f><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>',
        pageLength: 5,
        columns: [
          { data: "Sr. No." },
          { data: "Staff Name" },
          { data: "Mobile 1" },
          { data: "Email" },
          { data: "Role" },
          { data: "Username" },
          { data: "Password" },
          { data: "Eligibility For Incentive" },
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
          $("#checkAllDataTables01").prop("checked", false);
          $("#checkAllDataTables01").prop("indeterminate", false).trigger("change");

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
        $dataTableRows01.buttons(0).trigger();
      });

      $("#dataTablesExcel01").on("click", function(event) { 
        event.preventDefault();
        $dataTableRows01.buttons(1).trigger();
      });
      
      $("#dataTablesCsv01").on("click", function(event) {
        event.preventDefault();
        $dataTableRows01.buttons(2).trigger();
      });
      
      $("#dataTablesPdf01").on("click", function(event) {
        event.preventDefault();
        $dataTableRows01.buttons(3).trigger();
      });

      $('#dataTableRows01 tbody').on('click', 'tr', function () {
        $(this).toggleClass('selected');
        var $checkBox = $(this).find(".custom-checkbox input");
        $checkBox.prop("checked", !$checkBox.prop("checked")).trigger("change");
        controlCheckAll();
      });

      function controlCheckAll() {
        var anyChecked = false;
        var allChecked = true;
        $('#dataTableRows01 tbody tr .custom-checkbox input').each(function () {
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
        $('#dataTableRows01 tbody tr').removeClass('selected');
        $('#dataTableRows01 tbody tr .custom-checkbox input').prop("checked", false).trigger("change");
      }

      function checkAllRows() {
        $('#dataTableRows01 tbody tr').addClass('selected');
        $('#dataTableRows01 tbody tr .custom-checkbox input').prop("checked", true).trigger("change");
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
        console.log($dataTableRows01.rows('.selected').data());
      }

      $("#searchDatatable01").on("keyup", function (event) {
        $dataTableRows01.search($(this).val()).draw();
      });

      $("#pageCountDatatable01 .dropdown-menu a").on("click", function (event) {
        var selText = $(this).text();
        $dataTableRows01.page.len(parseInt(selText)).draw();
      });

    
</script>