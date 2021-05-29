<?php $this->load->view('admin/includes/admin_header'); ?>

    <main>
        <div class="row">
            <div class="col-12">
                <h1>Subjects</h1>
                <div class="text-zero top-right-button-container">
                  <button type="button" class="btn btn-primary btn-lg top-right-button mr-1" onclick="get_subject('add','');">Add New Subject</button>
                           
                </div>
                <div class="separator mb-5"></div>
            </div>
        </div>
        <div class="container-fluid">
          <div class="card">
                <div class="card-body">
                 <div class="row">
                  <div class="col-lg-6">
                    <div class="d-block d-md-inline-block w-100">
                      <div class="search-sm d-inline-block float-md-left mr-1 mb-1 align-top w-100">
                        <input class="form-control" id="txt_search" value="" placeholder="Search Table" id="searchDatatable01">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="btn-group right">
                      <a href="javascript:void(0)">
                        <span id="export_report" class="btn btn-outline-primary btn-lg">
                             EXPORT
                        </span>
                      </a> 
                    </div>
                  </div>
                </div>
                <div  id="ajax_data">
                 <?php $this->load->view('admin/super-admin/subjects_ajax.php'); ?>
                </div>
              </div>
            </div>
           
        </div>

</main>

 
<?php $this->load->view('admin/includes/footer'); ?>
<div class="modal fade modal-right" id="addEnquiry" tabindex="-1" role="dialog" aria-labelledby="addEnquiry" aria-hidden="true">
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
    $("body").on("keyup", '#txt_search',function(e)
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


  });
</script>

<script type="text/javascript">
    var base = $('#base_url').val();
        function get_subject(type,id){ 
            $.ajax({
                url: base+'get-subject',
                type:'post',
                dataType:'html',
                data: {type:type,id:id},
                success: function(response){
                      $('#addEnquiry').html(response);
                      $('#addEnquiry').modal('show');
                    }
              });
            
          
    }
</script>
 


 <script type="text/javascript">
  function delete_subject(id){
    var new_id = id;

       $.ajax({
                  url: base+'delete-subject',
                  type:'post',
                  data: {new_id:new_id},
                  dataType: 'json',
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
                        toastr.success('Subject has been deleted successfully','Success',{timeOut:5000});
                       
                        page_update();
                      }else{
                        toastr.error('Please try again later','Failed',{timeOut:5000});
                      }
                  }
             });
  }
</script>
<script type="text/javascript">
  $(document).ready(function(){
      $('body').on('click', '#export_report', function(){
    $.ajax({
      url:" <?php echo base_url().'admin-export-subject'; ?>",
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
</script>