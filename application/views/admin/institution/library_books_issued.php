<?php $this->load->view('admin/includes/institution_header'); ?>

    <main>
        <div class="row">
            <div class="col-12">
                <h1>Library Books Issued</h1>
                <div class="separator mb-5"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 mb-3">
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
            <div class="col-lg-2 mb-3">
              <span class="btn btn-info float-md-left default mar_l-5" id="reset-btn"><i class="iconsminds-refresh"></i></span>
            </div>
            <div class="col-lg-2  mb-3">
              <div class="btn-group right">
                  <!-- <button class="btn btn-sm btn-outline-primary btn-lg dropdown-toggle" type="button"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      EXPORT
                  </button>
                  <div class="dropdown-menu">
                      <a class="dropdown-item" id="dataTablesCopy01" href="#">Copy</a>
                      <a class="dropdown-item" id="dataTablesExcel01" href="#">Excel</a>
                      <a class="dropdown-item" id="dataTablesCsv01" href="#">Csv</a>
                      <a class="dropdown-item" id="dataTablesPdf01" href="#">Pdf</a>
                  </div> -->
                   <a href="javascript:void(0);">
                        <span id="export_report" class="btn btn-outline-primary btn-lg">Export</span>
                    </a>
              </div>
            </div>  
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                         <div class="card-header progress-bar pt-20">
                            <h5 class="text-center">Issue Book</h5>
                        </div>
                        <div class="card-body">
                            <form id="add_issue_book_form">
                                <div class="form-group">
                                    <label> Student Name <span class="text-muted text-small">(* onkeyup it will validate if student exist in database or not)</span></label>
                                    <input type="text" id="student_name" name="studen_name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label> Mobile <span class="text-muted text-small">(* if student is valid mobile text will automatically fill)</span></label>
                                    <input type="text" id="student_contact" name="student_contact" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label> Email <span class="text-muted text-small">(* if student is valid email text will automatically fill)</span></label>
                                    <input type="text" id="student_email" name="student_email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Book Category</label>
                                    <select class="form-control select2-single" data-width="100%">
                                        <option label="&nbsp;">&nbsp;</option>
                                        <option value="Flexbox">Tally Erp 09</option>
                                        <option value="Sass">MS - Office</option>
                                        <option value="React">C++</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Book Title</label>
                                    <select class="form-control select2-single" data-width="100%">
                                        <option label="&nbsp;">&nbsp;</option>
                                        <option value="Flexbox">Tally Erp 09</option>
                                        <option value="Sass">MS - Office</option>
                                        <option value="React">C++</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Issue Date - Return Date</label>
                                    <div class="input-daterange input-group" id="datepicker">
                                        <input type="text" class="input-sm form-control" name="start"
                                            placeholder="Start" />
                                        <span class="input-group-addon"></span>
                                        <input type="text" class="input-sm form-control" name="end"
                                            placeholder="End" />
                                    </div>
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
                    <div class="row" id="ajax_data">
                        <?php $this->load->view('admin/institution/library_books_issued_ajax.php');?>
                    </div>
                </div>
            </div>
                </div>
            </div>
        </div>
    </main>
<div class="modal fade modal-right" id="addEnquiry" tabindex="-1" role="dialog" aria-labelledby="addEnquiry" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header custom-modal">
                  <h5 class="modal-title white">Return Book</h5>
                  <button type="button" class="close white" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                <form>
                  
                    <div class="form-group">
                      <label>Student name </label>
                      <input type="text" class="form-control" placeholder="Sarah Kortney" disabled>
                    </div>
                    <div class="form-group">
                        <label>Mobile No</label>
                        <input type="text" class="form-control" placeholder="9045765345" disabled>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="sahar.kortney@testmail.com" disabled>
                    </div>
                    <div class="form-group">
                      <label>Book Category </label>
                      <input type="text" class="form-control" placeholder="Sarah Kortney" disabled>
                    </div>
                    <div class="form-group">
                      <label>Student Name </label>
                      <input type="text" class="form-control" placeholder="Sarah Kortney" disabled>
                    </div>
                    <div class="form-group">
                        <label>Issue Date - Return Date</label>
                        <div class="input-daterange input-group" id="datepicker">
                            <input type="text" class="input-sm form-control" name="start"
                                placeholder="12-02-2021" disabled>
                            <span class="input-group-addon"></span>
                            <input type="text" class="input-sm form-control" name="end"
                                placeholder="15-03-2021" disabled>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label>Student Return Date</label>
                        <input class="form-control datepicker" placeholder="Date">
                    </div>
                    <div class="form-group">
                        <label>Fine</label>
                         <select class="form-control select2-single" data-width="100%">
                            <option label="&nbsp;">&nbsp;</option>
                            <option label="Rs.1">Rs. 1</option>
                            <option label="Rs.2">Rs. 2</option>
                        </select>
                    </div>
                  </form>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-outline-primary"
                      data-dismiss="modal">Cancel</button>
                  
              </div>
          </div>
      </div>
  </div>
<?php $this->load->view('admin/includes/footer'); ?>
<script type="text/javascript">
 $(document).ready(function(){  
  $('#add_library_books_form').on('submit',function(event){

    event.preventDefault();
  //var brand_name = $('#brand_name').val().trim();
   var formdata = new FormData(this);

       $.ajax({
            url: '<?php echo base_url().'save-institutions-library-books'; ?>',
            type: 'POST',
            dataType: 'json',
            data: formdata,          
          processData: false,
          contentType: false,
            beforeSend: function()
            {
                $(".main-loader").fadeIn();
            },      
            success:function(data)
            {
                $('#add_library_books').modal('hide');
                toastr[data.type](data.msg);
                $("#add_library_books_form")[0].reset()
                page_update();
            }   
        });
       return false;
    });

});
</script>

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
        $('#per_page_value').val($('#per_page_option').val());
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
            $('#per_page_value').val($('#per_page_option').val());
            $('#pagination_page').val('1');
            change_search_data("per_page",$('#per_page_option').val())
            $('#pagination_page').val(1);
            page_update();
            return false;
            
        });

      $("body").on("click",'#reset-btn',function(){
       
       window.location.href='<?php echo base_url(); ?>institutions-library-books';
        return false;

      });

  });
</script>
<script type="text/javascript">

  $(document).ready(function(){

      $('body').on('click', '#export_report', function(){
    $.ajax({
      url:" <?php echo base_url().'export-institutions-library-books'; ?>",
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
      }
    });
  });


    $("#student_name").on('keyup',function(){

    $.ajax({
      url:" <?php echo base_url().'get-valid-student'; ?>",
      type: "POST",
      dataType : "json",
      data:{ 
        'student_name'          : $('#student_name').val(),
        
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
      }
    });
    });
});

  function delete_library_books_by_id(id){ 
    $.ajax({
              url: '<?php echo base_url(); ?>delete-institutions-library-books',
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

 function edit_library_books_by_id(id){ 
    $.ajax({
              url: '<?php echo base_url(); ?>edit-institutions-library-books',
              type:'post',
              dataType:'json',
              data: {id:id},
              
              beforeSend: function()
              {
                $(".main-loader").show();
              },      
              success: function(data){
                
                  if(data.type == 'success')
                {
                    $('#edit_library_books').html(data.view);
                    $('#edit_library_books').modal('show'); 
                    page_update();
                }
                else
                {
                    toastr['error']('Something went wrong! Please try again');
                }  
                } 
         });

 }
 
 function blocked_by_id(id){

    $.ajax({
              url: '<?php echo base_url(); ?>block-institutions-library-books',
              type:'post',
              dataType:'json',
              data: {id:id},
              
              beforeSend: function()
              {
                $(".main-loader").show();
              },      
              success: function(response){
                
                  if(response.type == 'success')
                {
                    toastr[response.type](response.msg);
                    page_update();
                }
                else
                {
                    toastr[response.type](response.msg);
                }  
             } 
         });

 }
</script>