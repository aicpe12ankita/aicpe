<?php $this->load->view('admin/includes/admin_header'); ?>

    <main>
        <div class="row">
            <div class="col-12">
                <h1>AICPE Typing Certificates</h1>
                <div class="text-zero top-right-button-container">
                  <a href="#"><button type="button" class="btn btn-primary btn-lg top-right-button mr-1">Print Certificates</button></a>
                           
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
                    <table id="example" class="table" style="width:100%">
                  <thead>
                      <tr>
                          <th>Sr. No.</th>
                          <th>ATC Code</th>
                          <th>Institute Name</th>
                          <th>City, District & State</th>
                          <th>Date Of Order</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php for($i=1; $i<6; $i++){ ?>
                    <tr>
                      <td id="parent_tr<?php echo $i; ?>" onclick="getdata(<?php echo $i; ?>)"><i class="simple-icon-plus"></i> &nbsp;<?php echo $i; ?></td>
                      <td>L0878</td>
                      <td>XYZ Institutions</td>
                      <td>Ramtek, Nagpur, Maharashtra</td>
                      <td>01-02-2021</td>
                      <td><a href="#" class="btn btn-xs btn-danger mb-1"><i class="simple-icon-trash"></i></a></td>
                    </tr>
                    <tr><td colspan="5">
                        <table class="table hide" id="data<?php echo $i; ?>">
                          <thead>
                            <tr>
                              <th>Sr. No.</th>
                              <th>Student Name</th>
                              <th>Course Name, Code and Duration</th>
                              <th>Exam Fees</th>
                              <th>Marks</th>
                              <th>Result</th>
                              <th>Date</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td><label
                                        class="custom-control custom-checkbox mb-1 align-self-center data-table-rows-check">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label">&nbsp;</span>
                                    </label></td>
                              <td>Sarah Kortney K</td>
                              <td>Typing Speed 30wpm [CRS-9870] [4months] </td>
                              <td>Rs. 2000</td>
                              <td>459</td>
                              <td>Pass</td>
                              <td>02-02-2021</td>
                              <td>
                                <a href="#" class="btn btn-xs btn-info mb-1"><i class="simple-icon-eye"></i></a>
                                <a href="#" class="btn btn-xs btn-primary mb-1"><i class="simple-icon-note"></i></a>
                                  <a href="#" class="btn btn-xs btn-danger mb-1"><i class="simple-icon-trash"></i></a></td>
                            </tr>
                            <tr>
                              <td><label
                                        class="custom-control custom-checkbox mb-1 align-self-center data-table-rows-check">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label">&nbsp;</span>
                                    </label></td>
                              <td>Sarah Kortney</td>
                              <td>Typing Speed 30wpm [CRS-9870] [4months]</td>
                              <td>Rs. 2000</td>
                              <td>459</td>
                              <td>Pass</td>
                              <td>02-02-2021</td>
                              <td>
                                <a href="#" class="btn btn-xs btn-info mb-1"><i class="simple-icon-eye"></i></a>
                                <a href="#" class="btn btn-xs btn-primary mb-1"><i class="simple-icon-note"></i></a>
                                  <a href="#" class="btn btn-xs btn-danger mb-1"><i class="simple-icon-trash"></i></a></td>
                            </tr>

                            <tr>
                              <td><label
                                        class="custom-control custom-checkbox mb-1 align-self-center data-table-rows-check">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label">&nbsp;</span>
                                    </label></td>
                              <td>Sarah Kortney</td>
                              <td>Typing Speed 30wpm [CRS-9870] [4months]</td>
                              <td>Rs. 2000</td>
                              <td>459</td>
                              <td>Pass</td>
                              <td>02-02-2021</td>
                              <td>
                                <a href="#" class="btn btn-xs btn-info mb-1"><i class="simple-icon-eye"></i></a>
                                <a href="#" class="btn btn-xs btn-primary mb-1"><i class="simple-icon-note"></i></a>
                                            <a href="#" class="btn btn-xs btn-danger mb-1"><i class="simple-icon-trash"></i></a></td>
                            </tr>
                          </tbody>
                        </table>
                    </td>
                  </tr>
                 <?php } ?>
                  </tbody>
              </table>
                </div>
            </div>
        </div>
</main>
 
<?php $this->load->view('admin/includes/footer'); ?>
<script type="text/javascript">
  function getdata(i){ 
    //$('#parent_tr'+i).click(function(){
      if($('#data'+i).hasClass('hide')){
        $('#data'+i).removeClass('hide');
        $('#data'+i).slideDown('fast').addClass('show');
        $('#parent_tr'+i+' i').removeClass('simple-icon-plus').addClass('simple-icon-minus');
      }else{
        $('#data'+i).slideDown('fast').addClass('hide');
        $('#data'+i).removeClass('show');
        $('#parent_tr'+i+' i').addClass('simple-icon-plus').removeClass('simple-icon-minus');
      }
      
    //});
  }
  
</script>