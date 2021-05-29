<?php $this->load->view('admin/includes/admin_header'); ?>

    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>Birthday And Anniversary</h1>
                    <div class="text-zero top-right-button-container">
                        <div class="d-block d-md-inline-block w-100">
                            <div class="search-sm d-inline-block float-md-left mr-1 mb-1 align-top w-100">
                                <input class="form-control" id="txt_search" value="<?= $search !=='' ? $search :'' ?>" placeholder="Search Table" id="searchDatatable01">
                            </div>
                        </div>
                    </div>
                    <div class="separator mb-5"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4 col-xl-4 col-left ">
                     <div id="form_data">
                      <?php $this->load->view('admin/super-admin/add_birthday_and_anniversary'); ?>
                  </div>
                </div>
                <div class="col-12 col-lg-8 col-xl-8">
                  <div  id="ajax_data">
                   <?php $this->load->view('admin/super-admin/birthday_and_anniversary_ajax'); ?>
                  </div>
            </div>
        </div>
    </main>
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
       
       window.location.href='<?php echo base_url(); ?>admin-aicpe-associates';
        return false;

      });

  });
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#anni_type').hide();
  });
  $('#anniversary').change(function(){
      if ($("#anniversary").prop("checked")) {
            $('#anni_type').show();
      }else if (!$("#birthday").prop("checked")){
        $('#anni_type').hide();
      }
  });
   $('#birthday').change(function(){
       if ($("#birthday").prop("checked")){
        $('#anni_type').hide();
      }
  });
  
</script>
<script type="text/javascript">
  //add institution 
  $(document).ready(function(){
  $('#add_birthday_anniversaries').on('submit',function()
    { 
        base = $('#base_url').val();
         var formdata = new FormData(this);

        $.ajax({
          url   : base+'add-birthday-and-anniversary',
          type  : 'POST',
          dataType: 'json',
          data  : formdata,
          processData: false,
          contentType: false,
          beforeSend: function()
          {  
            $(".main-loader").fadeIn();
          },      
          success:function(response)
          { 
            
           if(response==true){
              toastr.success('Data has been added successfully','Success',{timeOut:5000});
              $( '#add_birthday_anniversaries' ).each(function(){
                  this.reset();
              });
               window.location.reload();

             }else{
              toastr.error('Please try again later','Failed',{timeOut:5000});
            }
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
        
      });

  $('#edit_birthday_anniversaries').on('submit', function(e){
      e.preventDefault();
      var formdata = new FormData(this);
      $.ajax({
              url: base+'add-birthday-and-anniversary',
              type:'post',
              data: formdata,
              processData: false,
              contentType: false,
              dataType: 'json',
              beforeSend: function()
              {  
                $(".main-loader").fadeIn();
              },      
              success:function(response)
              { 
               
                if(response==true){
                  toastr.success('Data has been updated successfully','Success',{timeOut:5000});
                  $( '#edit_birthday_anniversaries' ).each(function(){
                      this.reset();
                  });
                  // window.location.reload();

                }else{
                  toastr.error('Please try again later','Failed',{timeOut:5000});
                }
          
              }   
            })
            .done(function() {
              $(".main-loader").hide();
              page_update();
            })
            .fail(function() {
              toastr['error']('Something went wrong');
            })
            .always(function() {
              $(".main-loader").hide();
            });
      });
    
});
</script>
 <script type="text/javascript">
  $(document).ready(function(){
  var base = $('#base_url').val();
  $('#country_dist').change(function(){ 
    var id= $('#country_dist').val();
    var str ="<option>State</option>";
    $.ajax({
          url: base+'get-state-by-country',
          type:'post',
          dataType:'json',
          data: {id:id},
          success:function(response){
            if(response!=""){
              for(var i=0;i<response.length;i++){
                str+= '<option value="'+response[i].s_id+'">'+response[i].s_name+'</option>';
              }
            }
            $('#state_dist').html(str);
          } 
        });
  });

  $('#state_dist').change(function(){
    var id= $('#state_dist').val();
    var str ="<option>District</option>";
    $.ajax({
          url: base+'get-district-by-state',
          type:'post',
          dataType:'json',
          data: {id:id},
          success:function(response){
            if(response!=""){
              for(var i=0;i<response.length;i++){
                str+= '<option value="'+response[i].d_id+'">'+response[i].d_district_name+'</option>';
              }
            }
            $('#dist_city').html(str);
          } 
        });
  });

  $('#dist_city').change(function(){ 
    var cid= $('#dist_city').val();
    var str ="<option>City</option>";
    $.ajax({
          url: base+'get-cities-by-district',
          type:'post',
          dataType:'json',
          data: {cid:cid},
          success:function(response){
            if(response!=""){
              for(var i=0;i<response.length;i++){
                str+= '<option value="'+response[i].ci_id+'">'+response[i].ci_name+'</option>';
              }
            }
            $('#getcities').html(str);
          } 
        });
    });
});
</script>

<script type="text/javascript">

  function delete_country(id){
   
       $.ajax({
                  url: '<?php echo base_url(); ?>delete-birthday-and-anniversary',
                  type:'post',
                  data: {id:id},
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
                        toastr.success('Data has been deleted successfully','Success',{timeOut:5000});
                       
                        page_update();
                      }else{
                        toastr.error('Please try again later','Failed',{timeOut:5000});
                      }
                  }
             });
  }
</script>
<script type="text/javascript">

    var base = $('#base_url').val();
        function get_birth(type,id){
          $.ajax({
          url: base+'get-birthday-and-anniversary',
          type:'post',
          dataType:'html',
          data: {type:type,id:id},
          success:function(response){
            $('#form_data').html(response);
          } 
        });
    }
</script>