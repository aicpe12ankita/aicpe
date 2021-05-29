<?php $this->load->view('admin/includes/admin_header'); ?>

    <main>
        <div class="row">
            <div class="col-12">
                <h1>Institutions</h1>
                <div class="text-zero top-right-button-container">
                  <button type="button" class="btn btn-primary btn-lg top-right-button mr-1" onclick="get_institute_byId('','');">Add New Institution</button>
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
                 <?php $this->load->view('admin/super-admin/institutions_ajax.php'); ?>
                </div>
              </div>
            </div>
        </div>
</main>

<?php $this->load->view('admin/includes/footer'); ?>
<div class="modal fade modal-right addEnquiry" id="addEnquiry" tabindex="-1" role="dialog" aria-labelledby="addEnquiry" aria-hidden="true">
  
      <?php $this->load->view('admin/super-admin/add_institution'); ?>
    
</div>
<div class="modal fade modal-right sendSMS" id="sendSMS" tabindex="-1" role="dialog" aria-labelledby="sendSMS" aria-hidden="true">

    <?php $this->load->view('admin/super-admin/chat.php'); ?>
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
    $("body").on("keyup",'#txt_search',function(e)
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
       
       window.location.href='<?php echo base_url(); ?>admin-institutions';
        return false;

      });

  });
</script>




<script type="text/javascript">
  var base = $('#base_url').val();
  function change_status(id){ /*-----------Approve pending institutions-----------*/
    
    var str="";
    if(confirm('Do you really want to perform this action ?')){
        $.ajax({
          url: base+'approve-institute',
          type:'post',
          dataType:'json',
          data: {id:id},
          success:function(response){
            page_update();
          } 
        });
    }
  }

  function change_active_status(id){ /*-----------change active institutions-----------*/
    
    var str="";
    if(confirm('Do you really want to perform this action ?')){
        $.ajax({
          url: base+'active-institute',
          type:'post',
          dataType:'json',
          data: {id:id},
          success:function(response){
            page_update();
          } 
        });
    }
  }

  function change_hold_status(id){ /*-----------change hold institutions-----------*/
    
    var str="";
    if(confirm('Do you really want to perform this action ?')){
        $.ajax({
          url: base+'hold-institute',
          type:'post',
          dataType:'json',
          data: {id:id},
          success:function(response){
            page_update();
          } 
        });
    }
  }

 function change_block_status(id){ /*-----------change block status institutions-----------*/
    
    var str="";
    if(confirm('Do you really want to perform this action ?')){
        $.ajax({
          url: base+'block-institute',
          type:'post',
          dataType:'json',
          data: {id:id},
          success:function(response){
            page_update();
          } 
        });
    }
  }

  function delete_institute_byId(id){
      $.ajax({
              url: base+'delete-institution',
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
                    toastr.success('Institution has been deleted successfully','Success',{timeOut:5000});
                   
                    page_update();
                  }else{
                    toastr.error('Please try again later','Failed',{timeOut:5000});
                  }
              }
         });
  }

  function get_institute_byId(type,id){ 
       
    $.ajax({
      url     : '<?php echo base_url(); ?>get-institution',
      type    : 'POST',
      dataType  : 'html',
      data    : {id: id,type:type},
      beforeSend: function(){
        $(".main-loader").show();
      },
      success:function(data){
        $('#addEnquiry').html(data);
        $('#addEnquiry').modal('show');
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
    
function sendPasswordRecoveryMail(id){
   $.ajax({
              url: base+'send-password-recovery-mail',
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
                    toastr.success('Password recovery mail has been sent successfully','Success',{timeOut:5000});
                   
                   // page_update();
                  }else{
                    toastr.error('Please try again later','Failed',{timeOut:5000});
                  }
              }
         });
} 

function sendPasswordRecoverySMS(id){
  $.ajax({
              url: base+'send-password-recovery-message',
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
                    toastr.success('Password recovery message has been sent successfully','Success',{timeOut:5000});
                   
                   // page_update();
                  }else{
                    toastr.error('Please try again later','Failed',{timeOut:5000});
                  }
              }
         });
} 
  /*function send_sms(type,id){
     $.ajax({
          url: base+'send-sms-admin-to-institution',
          type:'post',
          dataType:'html',
          data: {type:type,id:id},
          success:function(response){
            alert(response);
            $('#sendSMS').html(response);
          } 
        });
  }*/
</script>
<script type="text/javascript">
  function get_dropzone(){
    $("#institution_logo,#photo_id_proof,#owner_photo").dropzone({

        url: base+"institutions/upload_dropzone_file",
            paramName: "file",
            maxFilesize:10,
            maxFiles: 1,
            acceptedFiles: "image/*,application/pdf",
        init: function () {
            var formID = this.element.id;

           
          this.on("success", function (file, responseText) {
              
            var obj = jQuery.parseJSON(responseText);      
            
            $("form").append("<input type='hidden' name='"+formID+"'  value='"+obj.file_name+"'>") ;
            
          }); 
        },
        thumbnailWidth: 160,
        previewTemplate: '<div class="dz-preview dz-file-preview mb-3"><div class="d-flex flex-row "><div class="p-0 w-30 position-relative"><div class="dz-error-mark"><span><i></i></span></div><div class="dz-success-mark"><span><i></i></span></div><div class="preview-container"><img data-dz-thumbnail class="img-thumbnail border-0" /><i class="simple-icon-doc preview-icon" ></i></div></div><div class="pl-3 pt-2 pr-2 pb-1 w-70 dz-details position-relative"><div><span data-dz-name></span></div><div class="text-primary text-extra-small" data-dz-size /><div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div><div class="dz-error-message"><span data-dz-errormessage></span></div></div></div><a href="#/" class="remove" data-dz-remove><i class="glyph-icon simple-icon-trash"></i></a></div>'
      });

    $("#inst_gallery").dropzone({

        url: base+"institutions/upload_dropzone_file",
            paramName: "file",
            maxFilesize:10,
            maxFiles: 10,
            acceptedFiles: "image/*,application/pdf",
        init: function () {
            var formID = this.element.id+'[]';
            
           
          this.on("success", function (file, responseText) {
              
            var obj = jQuery.parseJSON(responseText);      
            
            $("form").append("<input type='hidden' name='"+formID+"'  value='"+obj.file_name+"'>") ;
            
          }); 
        },
        thumbnailWidth: 160,
        previewTemplate: '<div class="dz-preview dz-file-preview mb-3"><div class="d-flex flex-row "><div class="p-0 w-30 position-relative"><div class="dz-error-mark"><span><i></i></span></div><div class="dz-success-mark"><span><i></i></span></div><div class="preview-container"><img data-dz-thumbnail class="img-thumbnail border-0" /><i class="simple-icon-doc preview-icon" ></i></div></div><div class="pl-3 pt-2 pr-2 pb-1 w-70 dz-details position-relative"><div><span data-dz-name></span></div><div class="text-primary text-extra-small" data-dz-size /><div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div><div class="dz-error-message"><span data-dz-errormessage></span></div></div></div><a href="#/" class="remove" data-dz-remove><i class="glyph-icon simple-icon-trash"></i></a></div>'
      });
  }
</script>
<script type="text/javascript">
  function institute_login(id){
      $.ajax({
        url: '<?php echo base_url(); ?>institute-login',
        type: 'post',
        data: {id:id},
        success: function(data){
            if(data){
              var url = "<?php echo base_url(); ?>institutions-dashboard";
             window.open(url, "_blank");
             toastr.success('Login successfully','Failed',{timeOut:5000});
                  }
              }
      });
  }
</script>
<script type="text/javascript">
  $(document).ready(function(){
      $('body').on('click', '#export_report', function(){
    $.ajax({
      url:" <?php echo base_url().'export-institution'; ?>",
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
