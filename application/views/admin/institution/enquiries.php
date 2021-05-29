<?php $this->load->view('admin/includes/institution_header'); ?>

    <main>
        <div class="row">
            <div class="col-12">
                <h1>Enquiries</h1>
                <div class="text-zero top-right-button-container">
                  <button type="button" class="btn btn-primary btn-lg top-right-button mr-1" data-toggle="modal" data-target="#addEnquiry">ADD NEW ENQUIRY</button>
                </div>
                <div class="separator mb-5"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 mb-3">
              <form class="form-inline">
                <div class="input-daterange input-group w-90" id="datepicker">
                      <input type="text" id="start_date" class="input-sm form-control date-picker" value="<?= $start_date !=='' ?  $start_date : '' ?>" name="start"
                          placeholder="Select Start Date" />
                      <span class="input-group-addon"></span>
                      <input type="text" id="end_date" value="<?= $end_date !=='' ?  $end_date : '' ?>" class="input-sm form-control date-picker" name="end"
                          placeholder="Select End Date" />
                  </div>
                 <!--  <button type="submit" class="btn btn-primary default mar_l-5"> 
                      <i class="iconsminds-magnifi-glass"></i></button> -->
                      <span class="btn btn-primary default mar_l-5" id="search-btn"><i class="iconsminds-magnifi-glass"></i></span>
              </form>
            </div>
            <div class="col-lg-2  mb-3">
              <div class="btn-group right">
                <a href="javascript:void(0)">
                            <span id="export_report" class="btn btn-outline-primary btn-lg dropdown-toggle">
                               EXPORT
                            </span>
                        </a> 
                <!-- <button class="btn btn-outline-primary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> EXPORT </button> -->
                  <!-- <div class="dropdown-menu">
                      <a class="dropdown-item" id="dataTablesCopy" href="#">Copy</a>
                      <a class="dropdown-item" id="dataTablesExcel" href="#">Excel</a>
                      <a class="dropdown-item" id="dataTablesCsv" href="#">Csv</a>
                      <a class="dropdown-item" id="dataTablesPdf" href="#">Pdf</a>
                  </div> -->
              </div>
            </div>  
        </div>
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="d-block d-md-inline-block w-100">
                                <div class="search-sm d-inline-block float-md-left mr-1 mb-1 align-top w-100">
                                    <input class="form-control" id="txt_search" value="<?= $search !=='' ? $search :'' ?>" placeholder="Search Table" id="searchDatatable01">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div  id="ajax_data">
                     <?php $this->load->view('admin/institution/enquiries_ajax.php'); ?>
                    </div>
                </div>
            </div>
        </div>
</main>
<div class="modal fade modal-right" id="addEnquiry" tabindex="-1" role="dialog" aria-labelledby="addEnquiry" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header custom-modal">
                  <h5 class="modal-title white">Add New Enquiry</h5>
                  <button type="button" class="close white" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                <form id="enquiryForm" method="post" action="<?php echo base_url(); ?>add-enquiry">
                  <div class="form-group">
                    <label>Full Name <span class="mandatory">*</span></label>
                      <div class="input-group">
                            <input type="text" name="first_name" class="form-control" placeholder="First Name">
                            <input type="text" name="middle_name" class="form-control" placeholder="Middle Name">
                            <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                      </div>
                  </div>
                  <div class="form-group">
                      <label>Course Of Interest <span class="mandatory">*</span></label>
                      <input type="text" name="course_of_interest" class="form-control" placeholder="">
                  </div>
                  <div class="form-group">
                      <label>Mobile No <span class="mandatory">*</span></label>
                      <input type="text" name="mobile1" class="form-control" placeholder="">
                  </div>
                   <div class="form-group">
                      <label>Alternate Mobile No</label>
                      <input type="text" name="mobile2" class="form-control" placeholder="">
                  </div>
                  <div class="form-group">
                      <label>Whats App No</label>
                      <input type="text" name="whatsappNo" class="form-control" placeholder="">
                  </div>
                   <div class="form-group">
                      <label>Email </label>
                      <input type="email" name="email" class="form-control" placeholder="">
                  </div>
                  <div class="form-group">
                    <label>Gender <span class="mandatory">*</span></label>
                        <div class="row">
                          <div class="col-lg-4 col-xs-4">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="Male" name="gender"
                                    class="custom-control-input" value="1">
                                <label class="custom-control-label" for="Male"> Male </label>
                            </div>
                          </div>
                          <div class="col-lg-4 col-xs-4">
                            <div class="custom-control custom-radio">
                              <input type="radio" id="Female" name="gender"
                                  class="custom-control-input" value="2">
                              <label class="custom-control-label" for="Female">Female</label>
                            </div>
                          </div>
                          <div class="col-lg-4 col-xs-4">
                            <div class="custom-control custom-radio">
                              <input type="radio" id="Other" name="gender"
                                  class="custom-control-input" value="3">
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
                          <input type="text" name="date_of_birth" class="form-control" placeholder="Date">
                        </div>
                      </div>
                      <div class="form-group">
                          <label>Education Qualification <span class="mandatory">*</span></label>
                          <input type="text" name="education" class="form-control" placeholder="">
                      </div>
                      <div class="form-group">
                          <label>Occupation</label>
                          <input type="text" name="occupation" class="form-control" placeholder="">
                      </div>
                      <div class="form-group">
                          <label>Address</label>
                          <textarea placeholder="" name="address" class="form-control" rows="3"></textarea>
                      </div>
                      <div class="form-group">
                          <label>Country <span class="mandatory">*</span></label>
                          <select class="form-control"  name="country">
                              <option label="&nbsp;">&nbsp;</option>
                              <option value="Flexbox">Flexbox</option>
                              <option value="Sass">Sass</option>
                              <option value="React">React</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>State <span class="mandatory">*</span></label>
                          <select class="form-control"  name="state">
                              <option label="&nbsp;">&nbsp;</option>
                              <option value="Flexbox">Flexbox</option>
                              <option value="Sass">Sass</option>
                              <option value="React">React</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>City <span class="mandatory">*</span></label>
                          <select class="form-control"  name="city">
                              <option label="&nbsp;">&nbsp;</option>
                              <option value="Flexbox">Flexbox</option>
                              <option value="Sass">Sass</option>
                              <option value="React">React</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>Pin Code <span class="mandatory">*</span></label>
                          <input type="text" name="pincode" class="form-control" placeholder="" maxlength="6">
                      </div>
                      <div class="form-group">
                          <label>Assign Staff <span class="mandatory">*</span></label>
                          <select class="form-control"  name="assign_staff">
                              <option label="&nbsp;">&nbsp;</option>
                              <option value="1">Flexbox</option>
                              <option value="2">Sass</option>
                              <option value="3">React</option>
                          </select>
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
       $('#start_date,#end_date,.date-picker').datepicker({
            inline: true,
            format: 'yyyy-mm-dd',
            maxDate: "today",
            clearBtn:true,
            autoclose: true,
            enableOnReadonly:true,
            disableTouchKeyboard:true,
            leftArrow: '<i class="fa fa-long-arrow-left"></i>',
            rightArrow: '<i class="fa fa-long-arrow-right"></i>',
            todayHighlight:true,
        });

///////// PAGINATION SCRIPT START
    $("body").on("click",'ul.pagination li a.paginate_button',function(e)
    {
        e.preventDefault();

        if($(this).attr('href') && $(this).attr('href')!="#" && !$(this).hasClass("disabled"))
        {
            $('#pagination_url').val($(this).attr('href'));

            $('#pagination_page').val('');

            page_value = $(this).attr('page_number');

            if(page_value!="" && page_value!=undefined)
            {
                change_search_data("page",page_value)
            }

            page_update();
        }

        return false;
    });
function page_update()
{
    $.ajax({
        url: $('#pagination_url').val() + $('#pagination_page').val(),
        type: 'POST',
        data:{ 
            'request'                   : 'ajax', 
            'sort_by'                   : $('#pagination_sort_by').val(), 
            'sort_direction'            : $('#pagination_sort_direction').val(), 
            'per_page'                  : $('#per_page_value').val(),
            'search'                    : $.trim($('#txt_search').val()),
            'start_date'                : $('#start_date').val(),
            'end_date'                  : $('#end_date').val(),
        },
        beforeSend: function()
        {
            $(".main-loader").show();
        },      
        complete:function()
        {
            $(".main-loader").hide();
        },
        success: function( data )
        {
            $('#ajax_data').html(data);           
        },
    });
}
</script>
<script type="text/javascript">
     $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();

    $("a.sorting").each(function(){
        if($("#pagination_sort_by").val() == $(this).attr('sort-by') )
        {
            if($("#pagination_sort_direction").val() == 'asc' )
            {
                $(this).addClass('sort-asc');

                $(this).attr('sort-order','desc')
            }
            else if($("#pagination_sort_direction").val() == 'desc' )
            {
                $(this).addClass('sort-desc');

                $(this).attr('sort-order','asc')

            }
        }
    })
    //SEARCH SUBMIT BUTTON EVENT
    $("body").on("click",'#search-btn', '#txt_search',function(e)
    {
        $('#pagination_page').val(1);
        change_search_data("page",1);
        change_search_data('request', 'ajax');   
        change_search_data("search",$.trim($('#txt_search').val()));
        change_search_data("start_date",$.trim($('#start_date').val()));
        change_search_data("end_date",$.trim($('#end_date').val()));
             
        page_update();
        return false;
    });
    //SORTING
        $("body").on("click",'a.sorting[sort-by]',function(e)
        {
            $('#pagination_sort_by').val($(this).attr("sort-by"))
            $('#pagination_sort_direction').val($(this).attr("sort-order"))
            $('#pagination_page').val(1);
            change_search_data("page",1)
            change_search_data("sort_direction",$('#pagination_sort_direction').val())
            change_search_data("sort_by",$('#pagination_sort_by').val())
            page_update();
            return false;
        });
        
    $('body').on('click', '#export_report', function(){
    $.ajax({
      url: "/aicpe/institutions-enquiries-export",
      type: "POST",
      dataType : "json",
      data:{ 
        'search'          : $('#txt_search').val(),
        'start_date'          : $('#start_date').val(),
        'end_date'          : $('#end_date').val(),
      },
      beforeSend: function()
      {
        $(".main-loader").show();
      },      
      complete:function()
      {
        $(".main-loader").hide();
      },
      success: function( data )
      {
        window.location.href = data;
      },
    });
  });
  
  $('#enquiryForm').on('submit', function(e){
          e.preventDefault();
          var form = $(this);

          $.ajax({
            url: form.attr('action'),
            type: 'post',
            data: form.serialize(),
            success: function(response){
             
              if(response.status=='success'){
               
                toastr.success('New enquiry has been added successfully.','success',{'timeOut':5000});
               $( '#enquiryForm' ).each(function(){
                        this.reset();
                    }); 
              }else{
                toastr.error('Please try again later.','error',{'timeOut':5000});
                
              }
            }
          });
    });

});

     function print_test(id='')
     {        
        var order_id_array= [];

        if(id !=='')
        {
           order_id_array.push(id);
        }
        else
        {
            $('.check-child:checked').each(function(){
                var order_id = $(this).attr('order_id');
                order_id_array.push(order_id);
            }); 
        }
         
             var path = '<?php base_url(); ?>';         
             var url = path +'prints/print_test_print_call/?ids='+order_id_array;

            window.open(url,150,150);  
     }
</script>