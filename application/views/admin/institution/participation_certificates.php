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
                  <a href="javascript:void(0)">
                  <span id="export_report" class="btn btn-outline-primary btn-lg">
                       EXPORT
                  </span>
                </a> 
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
                                      <!-- <div class="float-md-right dropdown-as-select" id="pageCountDatatable01">
                                        <span class="text-muted text-small">Displaying 1-10 of 40 items </span>
                                        <button class="btn btn-outline-dark btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">10</button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">5</a>
                                            <a class="dropdown-item active" href="#">10</a>
                                            <a class="dropdown-item" href="#">20</a>
                                        </div>
                                      </div> -->
                                      <div class="col-lg-3 float-md-right">
                                            <div class="form-group">
                                                <div class="select-style">
                                                    <select class="form-control " id="per_page_option" name="per_page_option">
                                                        <?php foreach ($per_page_option as $key => $value){ ?>
                                                            <option <?php echo $per_page==$value?"selected":""; ?> value="<?php echo $key;?>"><?php echo $value;?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
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
                        <?php $this->load->view('admin/institution/participation_certificates_ajax.php') ?>
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
            //$("#form_data").load(location.href + " #form_data");          
        },
    });
}
</script>
<script type="text/javascript">

  $(document).ready(function(){
  var base = $('#base_url').val();
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
    $("body").on("click",'#search-btn',function(e)
    { 
        $('#per_page_value').val($('#per_page_option').val());
            $('#pagination_page').val('1');
         
            change_search_data("per_page",$('#per_page_option').val())
    
        change_search_data("page",1);
        change_search_data('request', 'ajax');  
        change_search_data("search",$.trim($('#txt_search').val()));
        change_search_data("start_date",$.trim($('#start_date').val()));
        change_search_data("end_date",$.trim($('#end_date').val()));     
        page_update();
        return false;
    });
    $("body").on("keyup",'#txt_search',function(e)
    { 
        ('#per_page_value').val($('#per_page_option').val());
            $('#pagination_page').val('1');
         
            change_search_data("per_page",$('#per_page_option').val())
        $('#pagination_page').val(1);
        change_search_data("page",1);
        change_search_data('request', 'ajax');   
        change_search_data("search",$.trim($('#txt_search').val()));   
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

        $("body").on("change",'#per_page_option',function(e)
        {
           
           $("#per_page_value").val($(this).val());
           $("pagination_page").val('1');
            change_search_data("page",1)
            change_search_data("per_page",$(this).val());
            page_update();
        });
      $("body").on("click",'#reset-btn',function(){
       
       window.location.href='<?php echo base_url(); ?>institutions-secrete-codes';
        return false;

      });

  });
</script>



<script type="text/javascript">
  $(document).ready(function(){
      $('body').on('click', '#export_report', function(){
    $.ajax({
      url:" <?php echo base_url().'export-institutions-participation-certificates'; ?>",
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
  });

  function delete_secret_code_by_id(id){ 
    $.ajax({
              url: '<?php echo base_url(); ?>delete-institutions-secrete-codes',
              type:'post',
              dataType: 'json',
              data: {id:id},
              
              beforeSend: function()
              {
                $(".main-loader").show();
              },      
              complete:function()
              {
                $(".main-loader").hide();
              },
              success: function(response){
                
                  if(response.type=='success')
                  {                    
                    toastr[response.type](response.msg);
                   
                    page_update();
                  }else{
                    toastr[response.type](response.msg);
                  }
              }
         });
 }
 function edit_secret_code_by_id(id){ 
    $.ajax({
              url: '<?php echo base_url(); ?>edit-institutions-secrete-codes',
              type:'post',
              dataType: 'json',
              data: {id:id},
              
              beforeSend: function()
              {
                $(".main-loader").show();
              },      
              success: function(data){
                
                  if(data.type=='success')
                {
                    $('#edit_secrete_code').html(data.html);
                    $('#edit_secrete_code').modal('show'); 
                }
                else
                {
                    toastr['error']('Something went wrong! Please try again');
                }
              }

                      
         });
 }

</script>