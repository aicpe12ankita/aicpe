<?php $this->load->view('admin/includes/admin_header'); ?>
  
    <main>
        <div class="row">
            <div class="col-12">
                <h1>Marketing Material</h1>
                 <div class="text-zero top-right-button-container">
                   <button type="button" class="btn btn-primary btn-lg top-right-button mr-1" onclick="get_marketing_byId('','');">Add New </button>
                </div>
                <div class="separator mb-5"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 mb-3">
              <form class="form-inline">
                <div class="input-daterange input-group w-90" id="datepicker">
                    <input type="text" id="start_date" class="input-sm form-control date-picker" value="<?= $start_date !=='' ?  $start_date : '' ?>" name="start"
                          placeholder="Select Start Date" />
                      <span class="input-group-addon"></span>
                    <input type="text" id="end_date" value="<?= $end_date !=='' ?  $end_date : '' ?>" class="input-sm form-control date-picker" name="end"
                          placeholder="Select End Date" />
                </div>
                  <span class="btn btn-primary default mar_l-5" id="search-btn"><i class="iconsminds-magnifi-glass"></i></span>
              </form>
            </div>
            <div class="col-lg-2 mb-3">
              <span class="btn btn-info float-md-left default mar_l-5" id="reset-btn"><i class="iconsminds-refresh"></i></span>
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
                <div class="col-lg-6">
                  <div class="d-block d-md-inline-block w-100">
                    <div class="search-sm d-inline-block float-md-left mr-1 mb-1 align-top w-100">
                      <input class="form-control" id="txt_search" value="<?= $search !=='' ? $search :'' ?>" placeholder="Search Table" id="searchDatatable01">
                    </div>
                  </div>
                </div>
              </div>
              <div  id="ajax_data">
               <?php $this->load->view('admin/super-admin/marketing_materials_ajax.php'); ?>
              </div>
            </div>
          </div>
      </div>
    </main>

<?php $this->load->view('admin/includes/footer'); ?>
<div class="modal fade modal-right" id="addAssociate" tabindex="-1" role="dialog" aria-labelledby="addAssociate" aria-hidden="true">
     <?php $this->load->view('admin/super-admin/add_marketing_material'); ?>
</div>
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
        $('#pagination_page').val(1);
        change_search_data("page",1);
        change_search_data('request', 'ajax');  
        change_search_data("search",$.trim($('#txt_search').val()));
        change_search_data("start_date",$.trim($('#start_date').val()));
        change_search_data("end_date",$.trim($('#end_date').val()));     
        page_update();
        return false;
    });
    $("body").on("change",'#txt_search',function(e)
    { 
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

      $("body").on("click",'#reset-btn',function(){
       
       window.location.href='<?php echo base_url(); ?>admin-marketing-material';
        return false;

      });

  });
</script>
<script type="text/javascript">
  function get_marketing_byId(type,id){ 
       
    $.ajax({
      url     : '<?php echo base_url(); ?>get-marketing-material',
      type    : 'POST',
      dataType  : 'html',
      data    : {id:id,type:type},
      beforeSend: function(){
        $(".main-loader").show();
      },
      success:function(data){
        $('#addAssociate').html(data);
        $('#addAssociate').modal('show');
      }
    })
    .done(function() {
      $(".main-loader").hide();
    })
    .fail(function() {
      $(".main-loader").hide();
      toastr['error']('Something went wrong! Please try again');
    })
    .always(function() {
      $(".main-loader").hide();
    });
 }

 function delete_marketing_byId(id){ 
    $.ajax({
              url: '<?php echo base_url(); ?>delete-marketing-material',
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
                  if(response==true){
                    toastr.success('Marketing material has been deleted successfully','Success',{timeOut:5000});
                   
                    page_update();
                  }else{
                    toastr.error('Please try again later','Failed',{timeOut:5000});
                  }
              }
         });
 }
 </script>