<?php $this->load->view('admin/includes/institution_header'); ?>
    <main>
        <div class="row">
            <div class="col-12">
                <h1>Staff Incentives</h1>
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
                  <a href="javascript:void(0);">
                    <span id="export_report" class="btn btn-outline-primary btn-lg">Export</span>
                  </a>
              </div>
            </div> 
             
        </div>
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                         <div class="card-header progress-bar pt-20">
                            <h5 class="text-center">Assign Incentives</h5>
                        </div>
                        <div class="card-body">
                            <form id="add_staff_incentive_form" method="post"  role="form" onsubmit="return false;" name="add_staff_incentive_form">
                                <div class="form-group">
                                    <label>Staff Name<span class="text-small text-muted">(* onkeyup it will validate if student exist in database or not)</span></label>
                                    <input type="text" name="staff_name" class="form-control" value="">
                                </div>
                                <div class="form-group">
                                    <label>Staff Email<span class="text-small text-muted">(* if Staff is valid email text will fill automatically )</span></label>
                                    <input type="email" name="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Mobile No<span class="text-small text-muted">(* if Staff is valid mobile text will fill automatically )</span></label>
                                    <input type="text" name="mobile_no" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Incentive Pattern</label>
                                    <select class="form-control" name="incentive_pattern">
                                        <option label="">---Select Incentive pattern---</option>
                                        <?php foreach ($incentive_pattern_array as $key => $value) {?>
                                        <option value="<?=$key ?>" ><?= $value ?></option>
                                        <?php }?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Incentive Amount</label>
                                    <input class="form-control" type="text" name="incentive_amount">
                                </div>
                                <div class="form-group">
                                    <label>Task Assign Date </label>
                                    <div class="input-group date">
                                      <span class="input-group-text input-group-append input-group-addon">
                                            <i class="simple-icon-calendar" id="task_assign_date"name="task_assign_date"></i>
                                      </span>
                                      <input type="text" class="form-control" id="task_assign_date"name="task_assign_date" value="" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Task</label>
                                    <input class="form-control" type="text" name="task">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" name="description"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">ADD</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
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
                        <?php $this->load->view('admin/institution/staff_incentives_ajax.php');?>
                    </div>
                </div>
            </div>
                </div>
            </div>
        </div>
    </main>
    <div class="modal fade modal-right" id="edit_staff_incentive" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  </div>
<?php $this->load->view('admin/includes/footer'); ?>
<script type="text/javascript">
  
  $("#task_assign_date").datepicker({
    inline:true,
    formate:"yyyy-mm-dd",
    maxDate:"today"
  });
</script>

<script type="text/javascript">
 $('#add_staff_incentive_form').on('submit',function(event){

    event.preventDefault();
//var brand_name = $('#brand_name').val().trim();
 var form_data = $('#add_staff_incentive_form').serialize();

$.ajax({
    url: '<?php echo base_url().'save-institutions-staff-incentives'; ?>',
    type: 'POST',
    dataType: 'json',
    data: form_data,
    beforeSend: function()
    {
        $(".main-loader").fadeIn();
    },      
    success:function(data)
    {
        toastr[data.type](data.msg);
        $("#add_staff_incentive_form")[0].reset()
        page_update();
    }   
})
.done(function() {
    $(".main-loader").hide();
})
.fail(function() {
    toastr['error']('Something went wrong');
})
.always(function() {
    $(".main-loader").hide();
});

return false;
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

  $(document).ready(function()
  {
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
       
       window.location.href='<?php echo base_url(); ?>institutions-staff-incentives';
        return false;

      });

  });
</script>
<script type="text/javascript">
     $(document).ready(function(){

      $('body').on('click', '#export_report', function(){
    $.ajax({
      url:" <?php echo base_url().'export-institutions-staff-incentives'; ?>",
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
function delete_staff_incentives_by_id(id){ 
    $.ajax({
              url: '<?php echo base_url(); ?>delete-institutions-staff-incentives',
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
function edit_staff_incentives_by_id(id){ 
    $.ajax({
              url: '<?php echo base_url(); ?>edit-institutions-staff-incentives',
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
                    $('#edit_staff_incentive').html(data.view);
                    $('#edit_staff_incentive').modal('show'); 
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