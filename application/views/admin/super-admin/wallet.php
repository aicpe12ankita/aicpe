<?php $this->load->view('admin/includes/admin_header'); ?>

    <main>
        <div class="row">
            <div class="col-12">
                <h1>Wallet List</h1>
                
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
                                        <th>Logo </th>
                                        <th>Institution Name </th>
                                        <th>Mobile No. </th>
                                        <th>Email</th>
                                        <th>Last Recharge Date </th>
                                        <th>Payment Mode</th>
                                        <th>Recharged Amount</th>
                                        <th>Total Balance</th>
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
                                            <p class="text-muted">Test Institutions Of Technology</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">8957635067</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">xyz.abc@testmail.com</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">12-02-2021</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Online</p>
                                        </td>
                                        <td>
                                           <p class="text-muted">Rs. 2000 </p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Rs. 3500 </p>
                                        </td>
                                        <td>
                                          <p class="badge badge-pill badge-info" data-toggle="modal" data-target="#paymentHistory">Payment History</p>
                                            <p class="badge badge-pill badge-warning" data-toggle="modal" data-target="#rechargeNow">Recharge Now</p>
                                          <button class="btn btn-xs btn-danger"><i class="simple-icon-trash"></i></button></button>
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
 <div class="modal fade modal-right" id="paymentHistory" tabindex="-1" role="dialog" aria-labelledby="paymentHistory" aria-hidden="true">
      <div class="modal-dialog custom-modal-width" role="document">
          <div class="modal-content ">
              <div class="modal-header custom-modal">
                  <h5 class="modal-title white">Payment History</h5>
                  <button type="button" class="close white" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                <div class="">
                  <img src="<?php echo base_url();?>assets/img/profiles/l-2.jpg" class="img-thumbnail border-0 rounded-circle list-thumbnail table_img mr-15">
                  <h6>Test Institutions Of Technology <span class="right badge badge-pill badge-info"><i class="iconsminds-wallet"></i> 3500</span></h6>
                  <p class="text-muted">xyz.abc@testmail.com | 8957635067</p>
                </div>
                
                <div class="separator mb-1"></div>
               
                <table class="data-table data-table-scrollable responsive">
                  <thead>
                      <tr>
                          <th scope="col">Sr. No.</th>
                          <th scope="col">Transaction No.</th>
                          <th scope="col">Transaction Mode</th>
                          <th scope="col">Transaction Type</th>
                          <th scope="col">Recharge Date & Time</th>
                          <th scope="col">Amount</th>
                          <th scope="col">Recharge By</th>
                     </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <th scope="row">1</th>
                          <td>XYZ_83KDJBU087</td>
                          <td>Online</td>
                          <td> Debit</td>
                          <td>12-02-2021 12:45pm</td>
                          <td>Rs. 1000</td>
                          <td>John doe (Account Manager)</td>
                      </tr>
                      <tr>
                          <th scope="row">2</th>
                          <td>UNYZ_83KBU087</td>
                          <td>Online</td>
                          <td>Credit</td>
                          <td>01-02-2021 02:05pm</td>
                          <td>Rs. 2600</td>
                          <td>John Xeyryed (Recruiter)</td>
                      </tr>
                      <tr>
                          <th scope="row">3</th>
                          <td>UNYZ_83KBU087</td>
                          <td>Offline</td>
                          <td>Credit</td>
                          <td>01-02-2021 02:05pm</td>
                          <td>Rs. 4600</td>
                          <td>Sarah Kortney (Recruiter)</td>
                      </tr>
                  </tbody>
              </table>
              </div>
          </div>
      </div>
  </div>
  <!-- ----------------------------------recharge now------------ -->
  <div class="modal fade modal-right" id="rechargeNow" tabindex="-1" role="dialog" aria-labelledby="rechargeNow" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header custom-modal">
                  <h5 class="modal-title white">Recharge Wallet</h5>
                  <button type="button" class="close white" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                <div class="">
                  <img src="<?php echo base_url();?>assets/img/profiles/l-2.jpg" class="img-thumbnail border-0 rounded-circle list-thumbnail table_img mr-15">
                  <h6>Test Institutions Of Technology </h6>
                  <p class="text-muted">xyz.abc@testmail.com | 8957635067</p>
                  <p class="text-right"><button class=" btn btn-primary" type="button"><i class="iconsminds-wallet"></i> 3500</button></p>
                </div>
                <div class="separator mb-1"></div>
                <form>
                  <div class="form-group">
                      <label>Transaction Type </label>
                      <select class="form-control">
                          <option label="&nbsp;">&nbsp;</option>
                          <option value="Flexbox">Credit</option>
                          <option value="Sass">Debit</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label>Amount</label>
                      <input type="text" class="form-control" placeholder="">
                  </div>
                  <div class="form-group">
                      <label>Payment Mode </label>
                      <select class="form-control">
                          <option label="&nbsp;">&nbsp;</option>
                          <option value="Flexbox">Online</option>
                          <option value="Sass">Offline</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label> Payment Remark </label>
                      <textarea class="form-control" cols="2"></textarea>
                  </div>
                  <div class="form-group">
                      <label> Payment Details </label>
                      <textarea class="form-control" cols="2"></textarea>
                  </div>
                  <div class="form-group">
                      <label>Cheque / Demand Draft No.</label>
                      <input type="text" class="form-control" placeholder="">
                  </div>
                  <div class="form-group">
                      <label>Cheque / Demand Draft Date</label>
                      <div class="input-group date">
                        <span class="input-group-text input-group-append input-group-addon">
                              <i class="simple-icon-calendar"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="Date" required>
                      </div>
                  </div>
                  <div class="form-group">
                      <label>Cheque / Demand Draft Bank Details </label>
                       <textarea class="form-control" cols="2"></textarea>
                  </div>
                  <div class="form-group">
                      <label>Cheque / Demand Draft No.</label>
                      <input type="text" class="form-control" placeholder="">
                  </div>
              </div>
              <div class="modal-footer">
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
          { data: "Logo" }, 
          { data: "Institution Name" },
          { data: "Mobile No." },
          { data: "Email" },
          { data: "Last Recharge Date" },
          { data: "Payment Mode" },
          { data: "Recharged Amount" },
          { data: "Total Balance" },
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
