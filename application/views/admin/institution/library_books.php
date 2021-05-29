<?php $this->load->view('admin/includes/institution_header'); ?>

    <main>
        <div class="row">
            <div class="col-12">
                <h1>Library Books </h1>
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
                            <h5 class="text-center">Add Book</h5>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label>Category</label>
                                    <select class="form-control select2-single" data-width="100%">
                                        <option label="&nbsp;">&nbsp;</option>
                                        <option value="Flexbox">Tally Erp 09</option>
                                        <option value="Sass">MS - Office</option>
                                        <option value="React">C++</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Book Title</label>
                                    <input type="text" name="category" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Book Author</label>
                                    <input type="text" name="category" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Pages</label>
                                    <input type="number" name="category" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Price</label>
                                    <input type="number" name="category" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Book Count</label>
                                    <input type="number" name="category" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <!-- <button type="button" class="btn btn-outline-primary">Cancel</button> -->
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
                                data-order="[[ 1, &quot;asc&quot; ]]">
                                <thead>
                                   <tr>
                                        <th>Sr. No.</th>
                                        <th>Book Category </th>
                                        <th>Book Name </th>
                                        <th>Author Name </th>
                                        <th>Pages</th>
                                        <th>Price</th>
                                        <th>Books Count</th>
                                        <th>Available Count </th>
                                        <th>Issued Count</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>  
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">1</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">C++</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">C Programming Absolute Beginner's Guide</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Brian W. Kernighan and Dennis M. Ritchie</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">560</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Rs. 350</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">25</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">13</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">12</p>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-xs btn-primary mb-1"><i class="simple-icon-note"></i></a>
                                            <a href="#" class="btn btn-xs btn-warning mb-1"><i class="simple-icon-trash"></i></a>
                                            <a href="#" class="btn btn-xs btn-danger mb-1"> Block</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">2</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">MS - Office</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Mastering MS Office: Computer Skill Development: be Future Ready</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Bittu Kumar </p>
                                        </td>
                                        <td>
                                            <p class="text-muted">300</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Rs. 150</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">25</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">13</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">12</p>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-xs btn-primary mb-1"><i class="simple-icon-note"></i></a>
                                            <a href="#" class="btn btn-xs btn-warning mb-1"><i class="simple-icon-trash"></i></a>
                                            <a href="#" class="btn btn-xs btn-danger mb-1"> Block</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">3</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Tally Erp 09</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Official Guide to Financial Accounting Using Tally.ERP 9</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">SHRADDHA SINGH</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">560</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Rs. 192</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">30</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">13</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">17</p>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-xs btn-primary mb-1"><i class="simple-icon-note"></i></a>
                                            <a href="#" class="btn btn-xs btn-warning mb-1"><i class="simple-icon-trash"></i></a>
                                            <a href="#" class="btn btn-xs btn-danger mb-1"> Block</a>
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
          { data: "Book Category" },
          { data: "Book Name" },
          { data: "Author Name" },
          { data: "Pages" },
          { data: "Price" },
          { data: "Books Count" },
          { data: "Available Count" },
          { data: "Issued Count" },
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