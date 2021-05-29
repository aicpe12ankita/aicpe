<?php $this->load->view('admin/includes/employer_header'); ?>

    <main>
        <div class="row">
            <div class="col-12">
                <h1>Job Post Report</h1>
                <div class="text-zero top-right-button-container">
                  <a href="<?php echo base_url(); ?>employer-post-job"><button type="button" class="btn btn-primary btn-lg top-right-button mr-1">Post Job</button></a>
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
                            <table id="datatableRows01" class="table_assign data-table responsive nowrap data-table-standard"
                                data-order="[[ 0, &quot;asc&quot; ]]">
                                <thead>
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Date </th>
                                        <th>Post Title </th>
                                        <th>Total Applications</th>
                                        <th>Overall Job ratting</th>
                                        <th>Closing Date</th>
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
                                            <p class="text-muted">14-01-2021</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Data Enrty Operator</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">22</p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><i class="iconsminds-reverbnation"></i> 4.1</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">22-02-2021</p>
                                        </td>
                                        <td>
                                           <p><span class="badge badge-pill badge-danger mb-1">Open</span></p>
                                        </td>
                                        <td>
                                          <a href="<?php echo base_url(); ?>employer-view-job-post"><button class="btn btn-xs btn-info"> View Applicants</button></a>
                                          <a href="#"><button class="btn btn-xs btn-dark"> Close Job</button></a>
                                          <a href="#"><button class="btn btn-xs btn-danger"> Hide</button></a>
                                        </td>
                                    </tr>
                                     <tr>
                                        <td>
                                            <p class="list-item-heading">2</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">14-01-2021</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Data Enrty Operator</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">15</p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><i class="iconsminds-reverbnation"></i> 4.5</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">12-02-2021</p>
                                        </td>
                                        <td>
                                           <p><span class="badge badge-pill badge-danger mb-1">Open</span></p>
                                        </td>
                                         <td>
                                          <a href="<?php echo base_url(); ?>employer-view-job-post"><button class="btn btn-xs btn-info"> View Applicants</button></a>
                                          <a href="#"><button class="btn btn-xs btn-dark"> Close Job</button></a>
                                          <a href="#"><button class="btn btn-xs btn-danger"> Hide</button></a>
                                        </td>
                                    </tr>
                                     <tr>
                                        <td>
                                            <p class="list-item-heading">3</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">14-01-2021</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Data Enrty Operator</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">56</p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><i class="iconsminds-reverbnation"></i> 4.1</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">02-02-2021</p>
                                        </td>
                                        <td>
                                            <p><span class="badge badge-pill badge-success mb-1">Closed</span></p>
                                        </td>
                                         <td>
                                          <a href="<?php echo base_url(); ?>employer-view-job-post"><button class="btn btn-xs btn-info"> View Applicants</button></a> 
                                          <a href="#"><button class="btn btn-xs btn-dark"> Repost Job</button></a>
                                          <a href="#"><button class="btn btn-xs btn-danger"> Hide</button></a>
                                        </td>
                                    </tr>
                                     <tr>
                                        <td>
                                            <p class="list-item-heading">4</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">14-01-2021</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Data Enrty Operator</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">35</p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><i class="iconsminds-reverbnation"></i> 4.1</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">22-02-2021</p>
                                        </td>
                                        <td>
                                           <p><span class="badge badge-pill badge-success mb-1">Closed</span></p>
                                        </td>
                                         <td>
                                          <a href="<?php echo base_url(); ?>employer-view-job-post"><button class="btn btn-xs btn-info"> View Applicants</button></a>
                                          <a href="#"><button class="btn btn-xs btn-dark"> Repost Job</button></a>
                                          <a href="#"><button class="btn btn-xs btn-danger"> Hide</button></a>
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
          { data: "Date" },
          { data: "Post Title" },
          { data: "Total Applications" },
          { data: "Overall Job ratting " },
          { data: "Closing Date" },
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