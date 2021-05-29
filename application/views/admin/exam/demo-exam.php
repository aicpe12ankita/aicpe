<?php $this->load->view('admin/includes/header'); ?>

    <main>
        <div class="row">
            <div class="col-12">
                <h1>Exams List</h1>
                <div class="separator mb-5"></div>
            </div>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
               <button class="btn btn-success mb-3 right" data-toggle="modal" data-target="#exammodal"><span class="iconsminds-pen-2"></span> Start Exam</button>
            </div>
            <div class="col-12">
              <div class="card">
                <div class="card-header progress-bar pt-20">
                  <h5>Previous demo exam results</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-2">
                                <div class="top-right-button-container">
                                    <div class="btn-group">
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
                            
                            <div class="mb-2">
                                <a class="btn pt-0 pl-0 d-inline-block d-md-none" data-toggle="collapse" href="#displayOptions01"
                                    role="button" aria-expanded="true" aria-controls="displayOptions01">
                                    Display Options
                                    <i class="simple-icon-arrow-down align-middle"></i>
                                </a>
                                <div class="collapse dont-collapse-sm" id="displayOptions01">
                                    <div class="d-block d-md-inline-block">
                                        <div class="search-sm d-inline-block float-md-left mr-1 mb-1 align-top">
                                            <input class="form-control" placeholder="Search Table" id="searchDatatable01">
                                        </div>
                                    </div>
                                    <div class="float-md-right dropdown-as-select" id="pageCountDatatable01">
                                        <span class="text-muted text-small">Displaying 1-10 of 40 items </span>
                                        <button class="btn btn-outline-dark btn-xs dropdown-toggle" type="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            10
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">5</a>
                                            <a class="dropdown-item active" href="#">10</a>
                                            <a class="dropdown-item" href="#">20</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="separator"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mb-4 data-table-rows data-tables-hide-filter">
                            <table id="datatableRows01" class="table_assign data-table responsive nowrap"
                                data-order="[[ 1, &quot;desc&quot; ]]">
                                <thead>
                                  <tr>
                                    <th>Sr. No.</th>
                                    <th>Demo no </th>
                                    <th>Duration (min) </th>
                                    <th>Total correct ans</th>
                                    <th>Total incorrect ans</th>
                                    <th>Marks</th>
                                    <th>Grade</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">1</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Demo 1</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">30 min</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">12</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">08</p>
                                        </td>
                                        <td>
                                           <p class="text-muted">12</p>
                                        </td>
                                        <td>
                                            <p><span class="badge badge-pill badge-primary mb-1">A</span></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">2</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Demo 2 </p>
                                        </td>
                                        <td>
                                            <p class="text-muted">50min</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">45</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">05</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">45</p>
                                        </td>
                                        <td>
                                            <p><span class="badge badge-pill badge-success mb-1">A+</span></p>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">3</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Demo 3 </p>
                                        </td>
                                        <td>
                                            <p class="text-muted">10min</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">05</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">05</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">05</p>
                                        </td>
                                        <td>
                                            <p><span class="badge badge-pill badge-warning mb-1">B</span></p>
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
<div class="modal fade" id="exammodal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header progress-bar">
                <h5 class="modal-title">Start Demo Exam</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form enctype="multipart/form-data" method="post">
            <div class="modal-body">
              
                            <form id="exampleForm" class="tooltip-label-right" novalidate>
                                <div class="form-group">
                                    <label>Select subjects</label>
                                    <select class="form-control select2-multiple" multiple="multiple" data-width="100%">
                                        <option label="&nbsp;">&nbsp;</option>
                                        <option value="AZ">Subject one</option>
                                        <option value="CO">Subject two</option>
                                        <option value="ID">Subject three</option>
                                        <option value="MT">Subject four</option>
                                        <option value="NE">Subject five</option>
                                        <option value="NM">Subject six</option>
                                        <option value="ND">Subject seven</option>
                                        <option value="UT">Subject eight</option>
                                        <option value="WY">Subject nine</option>
                                        <option value="WY">Subject ten</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                  <label>No. of question</label>
                                  <input type="text" name="assi_title" id="assi_title" class="form-control" placeholder="">
                                </div>
                                <div class="form-group">
                                  <label>Exam Duration (in minutes)</label>
                                  <input type="text" name="assi_title" id="assi_title" class="form-control" placeholder="">
                                </div>
                               
                            </form>
                        
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary"
                    data-dismiss="modal">Cancel</button>
               <a href="<?php echo base_url(); ?>demo-exam-manager"> <button type="submit" class="btn btn-primary">Start exam</button></a>
            </div>
            </form>
          </div>
    </div>
</div>
<?php $this->load->view('admin/includes/footer'); ?>
<script type="text/javascript">
    // Datatable with rows
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
          { data: "Demo no" },
          { data: "Duration (min)" },
          { data: "Total correct ans" },
          { data: "Total incorrect ans" },
          { data: "Marks" },
          { data: "Grade" }
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
          $("#checkAllDataTables").prop("indeterminate", anyChecked);
        } else {
          $("#checkAllDataTables").prop("indeterminate", anyChecked);
          $("#checkAllDataTables").prop("checked", anyChecked);
        }
        if (allChecked) {
          $("#checkAllDataTables").prop("indeterminate", false);
          $("#checkAllDataTables").prop("checked", allChecked);
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

      $("#checkAllDataTables").on("click", function (event) {
        var isCheckedAll = $("#checkAllDataTables").prop("checked");
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

      var $addToDatatableButton = $("#addToDatatable").stateButton();

</script>