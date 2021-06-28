<?php $this->load->view('admin/includes/institution_header'); ?>

    <main>
        <div class="row">
            <div class="col-12">
                <h1>Employers</h1>
                <div class="text-zero top-right-button-container">
                  <button type="button" class="btn btn-primary btn-lg top-right-button mr-1" data-toggle="modal" data-target="#add_employers">ADD NEW </button>
                           
                </div>
                <div class="separator mb-5"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 mb-3">
              <form class="form-inline">
                <div class="input-daterange input-group w-90" >
                      <input type="text" id ="start_date" value="<?= $start_date?>" class="input-sm form-control" name="start"
                          placeholder="Select Start Date" />
                      <span class="input-group-addon"></span>
                      <input type="text" id="end_date"  value="<?= $end_date?>" class="input-sm form-control" name="end"
                          placeholder="Select End Date" />
                  </div>
                  <button type="submit" id="search-btn" class="btn btn-primary default mar_l-5"> 
                      <i class="iconsminds-magnifi-glass"></i></button>
              </form>
            </div>
            <div class="col-lg-2 mb-3">
              <span class="btn btn-info float-md-left default mar_l-5" id="reset-btn"><i class="iconsminds-refresh"></i></span>
            </div>
            <div class="col-lg-2  mb-3">
              <div class="btn-group right">
                  <a href="javascript:void(0);">
                  <span id="export_report" class="btn btn-outline-primary btn-lg">Export</span>
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
                                            <input class="form-control" value="<?= $search ?>" placeholder="Search Table" id="search_txt">
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
                          </div>
                            <div class="separator"></div>
                        </div>
                        <div class="row" id="ajax_data">
                            <?php $this->load->view('admin/institution/employers_ajax.php');?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>
<div class="modal fade modal-right" id="edit_employers" tabindex="-1" role="dialog" aria-labelledby="edit_employers" aria-hidden="true"></div>
 <div class="modal fade modal-right" id="add_employers" tabindex="-1" role="dialog" aria-labelledby="addEnquiry" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header custom-modal">
                  <h5 class="modal-title white">Add New Employers</h5>
                  <button type="button" class="close white" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
               <form  id="add_employers_form" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                      <div class="form-group">
                          <label>Employer Code</label>
                          <input type="text" class="form-control" name="employer_code" value="">
                      </div>
                      <div class="form-group">
                          <label>Employer Name</label>
                          <input type="text" class="form-control" name="employer_name" value="">
                      </div>
                      <div class="form-group">
                          <label>Company Name</label>
                          <input type="text" class="form-control" name="company_name" value="">
                      </div>
                      <div class="form-group">
                          <label>Designation</label>
                          <input type="text" class="form-control" name="designation" value="">
                      </div>
                      <div class="form-group">
                          <label>Mobile No</label>
                          <input type="text" class="form-control" name="mobile_no" value="">
                      </div>
                      <div class="form-group">
                          <label>Whats App No</label>
                          <input type="text" class="form-control" name="whatsapp_no" min="10" max="10" value="">
                      </div>
                      <div class="form-group">
                          <label>Username</label>
                          <input type="text" class="form-control" name="username" >
                      </div>
                      <div class="form-group">
                          <label>Password</label>
                          <input type="text" class="form-control" name="password" >
                      </div>
                       <div class="form-group">
                          <label>Email</label>
                          <input type="email" class="form-control" name="email" value="">
                      </div>
                      <div class="form-group">
                        <label>Gender</label>
                         <select name="gender" class="form-control">
                             <option>--SELECT GENDER--</option>
                             <?php foreach ($employer_gender_array as $key => $value) { ?>
                                 <option value="<?= $key ?>"><?= $value?></option>
                             <?php } ?>
                         </select> 
                      </div>
                      <div class="form-group">
                        <label>Date Of Birth</label>
                        <div class="input-group">
                            <div class="input-group date">
                              <span class="input-group-text input-group-append input-group-addon">
                                    <i class="simple-icon-calendar" id="date_of_birth"></i>
                              </span>
                              <input type="text" class="form-control" name="date_of_birth" value="" id="date_of_birth" >
                            </div>
                        </div>
                      </div>
                      <div class="form-group">
                          <label>Country</label>
                          <input type="text" class="form-control" name="country">
                      </div>
                      <div class="form-group">
                          <label>State</label>
                         <input type="text" class="form-control" name="state">
                      </div>
                      <div class="form-group">
                          <label>City</label>
                          <input type="text" class="form-control" name="city">
                      </div>
                      <div class="form-group">
                          <label>Pin Code</label>
                          <input type="text" class="form-control" name="pin_code">
                      </div>
                      <div class="form-group">
                          <label>Temporary Address</label>
                          <textarea name="temporary_address" class="form-control" ></textarea>
                      </div>
                      <div class="form-group">
                          <label>Permanent Address</label>
                          <textarea name="permanant_address" class="form-control" ></textarea>
                      </div>
                      <div class="form-group">
                        <label>Employer Logo</label>
                        <input type="file" class="form-control" name="logo">
                      </div>
                      <div class="form-group">
                        <label>Employer Passport Photo</label>
                        <input type="file" class="form-control" name="employer_passport_photo">
                      </div>
                      <div class="form-group">
                          <label>Photo ID Type</label>
                          <select name="photo_id_type" class="form-control">
                             <option>--SELECT PHOTO ID TYPE--</option>
                             <?php foreach ($photo_type_array as $key => $value) { ?>
                                 <option value="<?= $key ?>"><?= $value?></option>
                             <?php } ?>
                         </select> 
                      </div>
                      <div class="form-group">
                          <label>Photo ID No.</label>
                          <input type="text" class="form-control" name="photo_id_no" >
                      </div>
                      <div class="form-group">
                        <label>Upload Photo ID</label>
                        <input type="file" name="upload_photo_id" class="form-control">
                      </div>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-outline-primary"
                          data-dismiss="modal">Cancel</button>
                  </div>
              
            </form>
          </div>
    </div>
</div>
<?php $this->load->view('admin/includes/footer'); ?>
<script type="text/javascript">
 $(document).ready(function(){  
  $('#add_employers_form').on('submit',function(event){

    event.preventDefault();
  //var brand_name = $('#brand_name').val().trim();
   var formdata = new FormData(this);

       $.ajax({
            url: '<?php echo base_url().'save-institutions-employers'; ?>',
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
                $('#add_employers').modal('hide');
                toastr[data.type](data.msg);
                $("#add_employers_form")[0].reset()
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
            $('#search-btn').trigger('click');
             return false;
        });
      $("body").on("click",'#reset-btn',function(){
       
       window.location.href='<?php echo base_url(); ?>institutions-employers';
        return false;

      });

  });
</script>

<script type="text/javascript">
  
  $("#date_of_birth").datepicker({
    inline:true,
    formate:"yyyy-mm-dd",
    maxDate:"today"
  });
</script>

<script type="text/javascript">

  $(document).ready(function(){

      $('body').on('click', '#export_report', function(){
    $.ajax({
      url:" <?php echo base_url().'export-institutions-employers'; ?>",
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
  });

  function delete_employers_by_id(id){ 
    $.ajax({
              url: '<?php echo base_url(); ?>delete-institutions-employers',
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

 function edit_employers_by_id(id){ 
    $.ajax({
              url: '<?php echo base_url(); ?>edit-institutions-employers',
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
                    $('#edit_employers').html(data.view);
                    $('#edit_employers').modal('show'); 
                    page_update();
                }
                else
                {
                    toastr['error']('Something went wrong! Please try again');
                }  
                } 
         });

 }
</script>