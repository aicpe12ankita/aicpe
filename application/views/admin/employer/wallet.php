<?php $this->load->view('admin/includes/employer_header'); ?>

    <main>
         <div class="row">
            <div class="col-12">
                <h1>Wallet</h1>
                <div class="separator mb-5"></div>
            </div>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6">
              <div class="card mb-4 progress-banner">
                <div class="card-body justify-content-between d-flex flex-row align-items-center">
                    <div>
                        <i class="iconsminds-wallet mr-2 text-white align-text-bottom d-inline-block"></i>
                        <div>
                            <p class="lead text-white">Rs 2500</p>
                            <p class="text-small text-white">Balance Ammount In Your Wallet</p>
                        </div>
                    </div>
                    <div>
                        <p class="text-small text-white">Last Recharge - 05-01-2021</p>
                        <button class="btn btn-danger">Recharge Now</button>
                    </div>
                </div>
              </div>    
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
               <div class="card">
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
                                data-order="[[ 1, &quot;asc&quot; ]]">
                                <thead>
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Transaction No </th>
                                        <th>Mode of Payment </th>
                                        <th>Transaction Type </th>
                                        <th>Status </th>
                                        <th>Ammount </th>
                                        <th>Recharge Date & Time </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">1</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">0xyz7654UYGJ</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Online</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Internet Banking</p>
                                        </td>
                                        <td>
                                            <p class="badge badge-success">Success</p>
                                        </td>
                                        
                                        <td>
                                            <p class="text-muted">Rs. 2000</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">14-01-2021 12:40pm</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">2</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">0xyz7654UYGJ</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Offline</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Cash</p>
                                        </td>
                                        <td>
                                            <p class="badge badge-success">Success</p>
                                        </td>
                                        
                                        <td>
                                            <p class="text-muted">Rs. 1200</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">14-01-2021 12:40pm</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">3</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">YTR897jgkj</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Online</p>
                                        </td>
                                        <td>
                                            <p class="text-muted"> Credit Card</p>
                                        </td>
                                        <td>
                                            <p class="badge badge-danger">Failed</p>
                                        </td>
                                        
                                        <td>
                                            <p class="text-muted">Rs. 2500</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">04-01-2021 04:40pm</p>
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
          { data: "Transaction No" },
          { data: "Mode of Payment " },
          { data: "Transaction Type " },
          { data: "Status" },
          { data: "Ammount" },
          { data: "Recharge Date & Time" }
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