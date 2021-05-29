<?php $this->load->view('admin/includes/institution_header'); ?>

    <main>
        <div class="row">
            <div class="col-12">
                <h1>Participation Certificates</h1>
                <div class="text-zero top-right-button-container">
                  <button type="button" class="btn btn-primary btn-lg top-right-button mr-1" data-toggle="modal" data-target="#addStudent">Add Students</button>
                   <button type="button" class="btn btn-primary btn-lg top-right-button mr-1" data-toggle="modal" data-target="#addPCertificate">Add Certificate</button>
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
                           
                            <table id="dataTableRows01" class="data-table responsive nowrap data-table-standard" data-order="[[ 1, &quot;desc&quot; ]]">
                                <thead>
                                  <tr>
                                        <th>Sr. No.</th>
                                        <th>Student Name </th>
                                        <th>Email </th>
                                        <th>Mobile No. </th>
                                        <th>Qualification </th>
                                        <th>Session Title</th>
                                        <th>Venue</th>
                                        <th>Date & Time</th>
                                        <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">1</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">John Doe</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">john.doe@gmail.com</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">7845159855</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Appeared in Graduation Course</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Certification in MS Office</p>
                                            <p class="text-muted"> 5months</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Test Institutions</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">10-02-2021</p>
                                        </td>
                                        <td>
                                          <a href="#" class="btn btn-xs btn-primary mb-1" onclick="confirm('Do You Really Want To Order This Certificate ?')"
                                          > Request Certificate </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">2</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">John Doe</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">john.doe@gmail.com</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">7845159855</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Appeared in Graduation Course</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Certification in MS Office</p>
                                            <p class="text-muted"> 5months</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Test Institutions</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">10-02-2021</p>
                                        </td>
                                        <td>
                                          <a href="#" class="btn btn-xs btn-primary mb-1" onclick="confirm('Do You Really Want To Order This Certificate ?')"
                                          > Request Certificate </a>
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
 <div class="modal fade modal-right" id="addStudent" tabindex="-1" role="dialog" aria-labelledby="addStudent" aria-hidden="true">
      <div class="modal-dialog custom-modal-width" role="document">
          <div class="modal-content">
              <div class="modal-header custom-modal">
                  <h5 class="modal-title white">Add Student </h5>
                  <button type="button" class="close white" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-12">
                  <button class="btn btn-xs btn-dark right add_field_button mb-3">Add More</button>
                  </div>
                </div>
                <form>
                  <div class="form-group">
                    <label>Select Certificate</label>
                    <select class="form-control select-2-single">
                      <option></option>
                      <option>Test Title</option>
                      <option>Another Test Title</option>
                      <option>XYZ Title</option>
                    </select>
                  </div>
                  <div class="input_fields_wrap">
                    <div class="mb-5">
                      <div class="row">
                        <div class="col-lg-6">
                          <label class="form-group has-float-label">
                            <input type="text" class="form-control" name="student_name[]" />
                            <span>Student Name</span>
                          </label>
                        </div>
                        <div class="col-lg-6">
                          <label class="form-group has-float-label">
                            <input class="form-control" type="text" name="student_email[]" placeholder="" />
                            <span>Email</span>
                          </label>
                        </div>
                        <div class="col-lg-6">
                          <label class="form-group has-float-label">
                            <input class="form-control" type="text" name="mobile_no[]" />
                            <span>Mobile No.</span>
                          </label>
                        </div>
                        <div class="col-lg-6">
                          <label class="form-group has-float-label">
                            <input class="form-control" type="text" name="qualification[]" />
                            <span>Qualification</span>
                          </label>
                        </div>
                       
                      </div>
                       
                    </div>
                  </div>
                <button type="submit" class="btn btn-primary">Add</button>
                <button type="button" class="btn btn-outline-primary"
                      data-dismiss="modal">Cancel</button>
                  </form>
              </div>
          </div>
      </div>
  </div>
<!-- ----------------------------add certificate----------------------- -->
<div class="modal fade modal-right" id="addPCertificate" tabindex="-1" role="dialog" aria-labelledby="addPCertificate" aria-hidden="true">
      <div class="modal-dialog " role="document">
          <div class="modal-content">
              <div class="modal-header custom-modal">
                  <h5 class="modal-title white">Add Participation Certificate </h5>
                  <button type="button" class="close white" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
               
                <form>
                  <div class="form-group">
                    <label>Select Certificate Type</label>
                    <select class="form-control select-2-single">
                      <option></option>
                      <option>Course</option>
                      <option>Seminar</option>
                      <option>Project</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Date</label>
                    <input type="text" name="" class="form-control date">
                  </div>
                  <div class="form-group">
                    <label>Venue</label>
                    <input type="text" name="" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Association</label>
                    <input type="text" name="" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Faculty</label>
                    <input type="text" name="" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Design Matter</label>
                    <textarea class="form-control"></textarea> 
                  </div>
                  <div class="form-group">
                    <label>Signing Authority - Name</label>
                    <input type="text" name="" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Signing Authority - Designation</label>
                    <input type="text" name="" class="form-control">
                  </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-outline-primary"
                      data-dismiss="modal">Cancel</button>
                  </form>
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
          { data: "Student Name" },
          { data: "Email" },
          { data: "Mobile No." },
          { data: "Qualification"},
          { data: "Session Title"},
          { data: "Venue"},
          { data: "Date & Time"},
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
<script type="text/javascript">
  $(document).ready(function() {
  var max_fields      = 10; //maximum input boxes allowed
  var wrapper       = $(".input_fields_wrap"); //Fields wrapper
  var add_button      = $(".add_field_button"); //Add button ID
  
  var x = 1; //initlal text box count
  $(add_button).click(function(e){ //on add input button click
    e.preventDefault();
    if(x < max_fields){ //max input box allowed
      x++; //text box increment
      $(wrapper).append('<div class="mb-5"><div class="row"><div class="col-lg-6"><label class="form-group has-float-label"><input type="text" class="form-control" name="student_name[]" /><span>Student Name</span></label></div><div class="col-lg-6"><label class="form-group has-float-label"><input class="form-control" type="text" name="student_email[]" placeholder="" /><span>Email</span></label></div><div class="col-lg-6"><label class="form-group has-float-label"><input class="form-control" type="text" name="mobile_no[]" /><span>Mobile No.</span></label></div><div class="col-lg-6"><label class="form-group has-float-label"><input class="form-control" type="text" name="qualification[]" /><span>Qualification</span></label></div><p><span class="mylinkspan badge badge-danger remove_field right"><i class="simple-icon-close"></i></span></p></div></div>'); //add input box
    }
  });
  
  $(wrapper).on("click",".remove_field", function(e){ 

    e.preventDefault(); $(this).parent('div').remove(); x--;
  })
});
</script>
