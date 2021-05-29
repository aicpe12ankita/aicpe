<?php $this->load->view('admin/includes/employer_header'); ?>

    <main>
        <div class="row">
            <div class="col-12">
                <h1>Job Post Details</h1>
                 <div class="text-zero top-right-button-container">
                  <a href="<?php echo base_url(); ?>employer-post-jobs-report"><button type="button" class="btn btn-primary btn-lg top-right-button mr-1">Back</button></a>
                </div>
                <div class="separator mb-5"></div>
            </div>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-4">
              <div class="card">
                    <div class="card-header custom_header cust_pt-1">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="job_postLogo">
                                    <img class="" src="<?php echo base_url(); ?>assets/logos/aicpe-logo.png" alt="Card image cap">
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <h6>Front end ui web designer and developer</h6>
                                <p class="text-small mb-1">Test company, Nagpur</p>
                            </div>
                        </div>
                        
                        <h5></h5>
                    </div>
                    <div class="card-body">
                        <p class="text-small text-muted mb-05">Qualification: 12th pass</p>
                        <p class="text-small text-muted mb-05">Skills Required: Typing with 30wpm speed</p>
                        <p class="text-small text-muted mb-05">Pay Scale: Rs.10000 - Rs.15000</p>
                        <p class="text-muted mb-05">Job Requirments
                            <ul>
                                <li class="text-small text-muted">2-4 years of experience working as an Account Coordinator, Account Manager or Sales Administrator</li>
                                <li class="text-small text-muted">Experience using CRM systems preferably Salesforce</li>
                                
                            </ul>
                        </p>
                        <p class="mb-3 text-muted">Job description: </p>
                        <p class="text-small text-muted">
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
                        
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
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
                                data-order="[[ 0, &quot;asc&quot; ]]">
                                <thead>
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Applicants Name </th>
                                        <th>Qualification</th>
                                        <th>Contact No</th>
                                        <th>Resume</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">1</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Sarah Kortney</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">12<sup>th</sup> pass</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">98*******5</p>
                                        </td>
                                        <td>
                                            Download Not Available
                                        </td>
                                        <td>
                                           <a href="#"><button class="btn btn-xs btn-danger"> <i class="simple-icon-trash"></i></button></a>
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
                                            <p class="text-muted">Graduation</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">89784525180</p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><i class="iconsminds-download"></i> </p>
                                        </td>
                                        <td>
                                           <a href="#"><button class="btn btn-xs btn-danger"> <i class="simple-icon-trash"></i></button></a>
                                        </td>
                                    </tr>
                                     <tr>
                                        <td>
                                            <p class="list-item-heading">3</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Mayra Sibley </p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Graduation</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">7852941500</p>
                                        </td>
                                       <td>
                                            <p class="text-muted"><i class="iconsminds-download"></i> </p>
                                        </td>
                                        <td>
                                           <a href="#"><button class="btn btn-xs btn-danger"> <i class="simple-icon-trash"></i></button></a>
                                        </td>
                                    </tr>
                                     <tr>
                                        <td>
                                            <p class="list-item-heading">4</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Williemae Lagasse</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">10<sup>th</sup> pass</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">8855441100</p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><i class="iconsminds-download"></i> </p>
                                        </td>
                                        <td>
                                           <a href="#"><button class="btn btn-xs btn-danger"> <i class="simple-icon-trash"></i></button></a>
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
          { data: "Date" },
          { data: "Post Title" },
          { data: "Total Applications" },
          { data: "Overall Job ratting " },
          { data: "Status" }
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