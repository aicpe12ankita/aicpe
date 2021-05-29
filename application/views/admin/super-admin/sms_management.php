<?php $this->load->view('admin/includes/admin_header'); ?>

    <main>
        <div class="row">
            <div class="col-12">
                <h1>SMS Management </h1>
                <div class="text-zero top-right-button-container">
                  <button type="button" class="btn btn-primary btn-lg top-right-button mr-1" data-toggle="modal" data-target="#sendSmsEmail">Send SMS Or Email</button>
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
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                         <div class="card-header progress-bar pt-20">
                            <h5 class="text-center">Add SMS</h5>
                        </div>
                        <div class="card-body">
                            <form method="post" enctype="multipart/form-data">
                              <div class="form-group position-relative error-l-100">
                                <label>Sender Type</label>
                                  <div class="row">
                                    <div class="col-lg-6 col-xs-6">
                                      <div class="custom-control custom-radio">
                                          <input type="radio" id="Institution" name="sender_type"
                                              class="custom-control-input" value="Institution">
                                          <label class="custom-control-label" for="Institution"> Institution </label>
                                      </div>
                                    </div>
                                    <div class="col-lg-6 col-xs-6">
                                      <div class="custom-control custom-radio">
                                        <input type="radio" id="Employer" name="sender_type"
                                            class="custom-control-input" value="Employer">
                                        <label class="custom-control-label" for="Employer">Employer</label>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                              <div class="form-group hide" id="inst_list">
                                <label>Institution </label>
                                <select class="form-control select2-single">
                                  <option>Institution 1</option>
                                  <option>Institution 2</option>
                                  <option>Institution 3</option>
                                  <option>Institution 4</option>
                                </select>
                              </div>
                               <div class="form-group hide" id="emp_list">
                                <label>Employer</label>
                                <select class="form-control select2-single">
                                  <option>Employer 1</option>
                                  <option>Employer 2</option>
                                  <option>Employer 3</option>
                                  <option>Employer 4</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label>SMS</label>
                                <input type="text" class="form-control" name="">
                              </div>
                              <div class="form-group">
                                <label>Payment</label>
                                <input type="text" class="form-control" name="">
                              </div>
                              <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
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
                                data-order="[[ 0, &quot;asc&quot; ]]">
                                <thead>
                                   <tr>
                                        <th>Sr. No.</th>
                                        <th>Sender Type </th>
                                        <th>Logo </th>
                                        <th>ATC Code</th>
                                        <th>Company / Institute Name </th>
                                        <th>Employer / Institute Owner Name </th>
                                        <th>SMS Count</th>
                                        <th>Used SMS Count</th>
                                        <th>Unused SMS Count</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>  
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">1</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Institution</p>
                                        </td>
                                        <td>
                                            <img src="<?php echo base_url();?>assets/img/profiles/l-2.jpg" class="img-thumbnail border-0 rounded-circle list-thumbnail table_img">
                                        </td>
                                        <td>
                                            <p class="text-muted">YT8990</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Test Institution</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">John Doe</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">500</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">200</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">300</p>
                                        </td>
                                        <td>
                                          <a href="#" class="btn btn-xs btn-primary mb-1"><i class="simple-icon-plus"></i> Add SMS</a>
                                            <a href="#" class="btn btn-xs btn-warning mb-1"><i class="simple-icon-note"></i></a>
                                            <a href="#" class="btn btn-xs btn-danger mb-1"><i class="simple-icon-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">2</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Employer</p>
                                        </td>
                                        <td>
                                            <img src="<?php echo base_url();?>assets/img/profiles/l-2.jpg" class="img-thumbnail border-0 rounded-circle list-thumbnail table_img">
                                        </td>
                                        <td>
                                            <p class="text-muted">-</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Test Organization</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Sarah Kortney</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">700</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">250</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">450</p>
                                        </td>
                                        <td>
                                          <a href="#" class="btn btn-xs btn-primary mb-1"><i class="simple-icon-plus"></i> Add SMS</a>
                                            <a href="#" class="btn btn-xs btn-warning mb-1"><i class="simple-icon-note"></i></a>
                                            <a href="#" class="btn btn-xs btn-danger mb-1"><i class="simple-icon-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">3</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Institution</p>
                                        </td>
                                        <td>
                                            <img src="<?php echo base_url();?>assets/img/profiles/l-2.jpg" class="img-thumbnail border-0 rounded-circle list-thumbnail table_img">
                                        </td>
                                        <td>
                                            <p class="text-muted">YT8990</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Test Institution</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">John Doe</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">500</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">200</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">300</p>
                                        </td>
                                        <td>
                                          <a href="#" class="btn btn-xs btn-primary mb-1"><i class="simple-icon-plus"></i> Add SMS</a>
                                            <a href="#" class="btn btn-xs btn-warning mb-1"><i class="simple-icon-note"></i></a>
                                            <a href="#" class="btn btn-xs btn-danger mb-1"><i class="simple-icon-trash"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
                </div>
            </div>
        </div>
    </main>
<div class="modal fade modal-right" id="sendSmsEmail" tabindex="-1" role="dialog" aria-labelledby="sendSmsEmail" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header custom-modal">
                  <h5 class="modal-title white">Send SMS Or Email</h5>
                  <button type="button" class="close white" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                <form id="enquiryForm" method="post" action="<?php echo base_url(); ?>add-enquiry">
                  <div class="form-group position-relative error-l-100">
                    <label>Send SMS Or Email</label>
                      <div class="row">
                        <div class="col-lg-6 col-xs-6">
                          <div class="custom-control custom-radio">
                              <input type="radio" id="sms" name="send_type" class="custom-control-input" value="sms">
                              <label class="custom-control-label" for="sms"> Send SMS </label>
                          </div>
                        </div>
                        <div class="col-lg-6 col-xs-6">
                          <div class="custom-control custom-radio">
                            <input type="radio" id="email" name="send_type" class="custom-control-input" value="email">
                            <label class="custom-control-label" for="email">Send Email</label>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="form-group position-relative error-l-100">
                    <label>Sender Type</label>
                      <div class="row">
                        <div class="col-lg-6 col-xs-6">
                          <div class="custom-control custom-radio">
                              <input type="radio" id="inst_1" name="sender_type_1" class="custom-control-input" value="Institution">
                              <label class="custom-control-label" for="inst_1"> Institution </label>
                          </div>
                        </div>
                        <div class="col-lg-6 col-xs-6">
                          <div class="custom-control custom-radio">
                            <input type="radio" id="emp_1" name="sender_type_1" class="custom-control-input" value="Employer">
                            <label class="custom-control-label" for="emp_1">Employer</label>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="form-group hide" id="inst_list_1">
                    <label>Institution </label>
                    <select class="form-control select2-single">
                      <option>Institution 1</option>
                      <option>Institution 2</option>
                      <option>Institution 3</option>
                      <option>Institution 4</option>
                    </select>
                  </div>
                  <div class="form-group hide" id="emp_list_1">
                    <label>Employer</label>
                    <select class="form-control select2-single">
                      <option>Employer 1</option>
                      <option>Employer 2</option>
                      <option>Employer 3</option>
                      <option>Employer 4</option>
                    </select>
                  </div>
                  <div class="form-group" id="">
                    <label>Select From Draft</label>
                    <select class="form-control select2-single">
                      <option>Draft Title 1</option>
                      <option>Draft Title 2</option>
                      <option>Draft Title 3</option>
                      <option>Draft Title 4</option>
                    </select>
                  </div>
                  <div class="form-group">
                      <label>Title</label>
                      <input type="text" name="occupation" class="form-control" placeholder="">
                  </div>
                  <div class="form-group">
                      <label>Description</label>
                      <textarea placeholder="" name="address" class="form-control" rows="3"></textarea>
                  </div>
                  <div class="form-group">
                    <label>Attachment</label>
                    <div class="dropzone"></div>
                  </div>
                  
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Send</button>
                <button type="submit" class="btn btn-primary">Save As Draft</button>
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
          { data: "Sender Type" },
          { data: "Logo" },
          { data: "ATC Code" },
          { data: "Company / Institute Name" },
          { data: "Employer / Institute Owner Name" },
          { data: "SMS Count" },
          { data: "Used SMS Count" },
          { data: "Unused SMS Count" },
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
  $(document).ready(function(){
    $("input[name=sender_type]").change(function(){
      
      var myRadio = $("input[name=sender_type]");
      var checkedValue = myRadio.filter(":checked").val();
     
      if(checkedValue=="Institution"){
        if($('#emp_list').hasClass('show')){
          $('#emp_list').removeClass('show').addClass('hide');
        }
        if($('#inst_list').hasClass('hide')){
          $('#inst_list').removeClass('hide').addClass('show');
        }
      }else if(checkedValue=="Employer"){
        if($('#inst_list').hasClass('show')){
          $('#inst_list').removeClass('show').addClass('hide');
        }
        if($('#emp_list').hasClass('hide')){
          $('#emp_list').removeClass('hide').addClass('show');
        }

      }else{
        $('#inst_list').removeClass('show').addClass('hide');
        $('#emp_list').removeClass('show').addClass('hide');
      }
    });
    
  });
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $("input[name=sender_type_1]").change(function(){
      
      var myRadio = $("input[name=sender_type_1]");
      var checkedValue = myRadio.filter(":checked").val();
     
      if(checkedValue=="Institution"){
        if($('#emp_list_1').hasClass('show')){
          $('#emp_list_1').removeClass('show').addClass('hide');
        }
        if($('#inst_list_1').hasClass('hide')){
          $('#inst_list_1').removeClass('hide').addClass('show');
        }
      }else if(checkedValue=="Employer"){
        if($('#inst_list_1').hasClass('show')){
          $('#inst_list_1').removeClass('show').addClass('hide');
        }
        if($('#emp_list_1').hasClass('hide')){
          $('#emp_list_1').removeClass('hide').addClass('show');
        }

      }else{
        $('#inst_list_1').removeClass('show').addClass('hide');
        $('#emp_list_1').removeClass('show').addClass('hide');
      }
    });
    
  });
</script>