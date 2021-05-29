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
                  <button class="btn btn-sm btn-outline-primary" type="button">
                      EXPORT
                  </button>
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
  <div class="modal-dialog custom-modal-width" role="document">
    <div class="modal-content" id="inst_content">
      <?php $this->load->view('admin/super-admin/add_institution'); ?>
    </div>
  </div>
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
    $("body").on("change", '#txt_search',function(e)
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
  $(document).ready(function(){
    get_dropzone();
    var base = $('#base_url').val();

    $('#email').change(function(){
    var email= $('#email').val();
    var str ="";
    $.ajax({
          url: base+'check-email',
          type:'post',
          dataType: 'json',
          data: {email:email},
          success:function(response){
             if(response){
                toastr.error('Email is already resigestered','Failed',{timeOut:5000});
             }
          } 
        });
    });

    $('#add_institution').on('submit', function(e){
      e.preventDefault();
      var formdata = new FormData(this);
      $.ajax({
              url: base+'add-institution',
              type:'post',
              data: formdata,
              processData: false,
              contentType: false,
              dataType: 'json',
              
    }).done(function(response){
      if(response==true){
          toastr.success('New Institution has been added successfully','Success',{timeOut:5000});
          page_update();
        }else{
          toastr.error('Please try again later','Failed',{timeOut:5000});
        }
    }).then(function(){
        $( 'form' ).each(function(){
            this.reset();
        });
    });
  
  });

});
  $('#cancel').click(function(){
        $( 'form' ).each(function(){
            this.reset();
        });
  });
</script>
<script type="text/javascript">
  var base = $('#base_url').val();
  $('#country_dist').change(function(){ alert();
    var id= $('#country_dist').val();
    var str ="";
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
    var str ="";
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
    var str ="";
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
</script>
<script type="text/javascript">
  var base = $('#base_url').val();
  function change_status(id){ /*-----------Approve pending institutions-----------*/
    
    var str="";
    if(confirm('Do you really want to approve this institution ?')){
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

  $('#edit_institution').on('submit', function(e){
      e.preventDefault();
      var formdata = new FormData(this);
      $.ajax({
              url: base+'add-institution',
              type:'post',
              data: formdata,
              processData: false,
              contentType: false,
              dataType: 'json',
              success: function(response){
                  if(response==true){
                    toastr.success(' Institution has been updated successfully','Success',{timeOut:5000});
                    page_update();
                  }else{
                    toastr.error('Please try again later','Failed',{timeOut:5000});
                  }
              }
      });
    });

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
          url: base+'get-institution-byId',
          type:'post',
          dataType:'html',
          data: {type:type,id:id},
          
        }).done(function(response){
          $('#inst_content').html(response);
          $('#addEnquiry').modal('show');
        }).then(function(){
        
           get_dropzone();
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
              success: function(response){ alert(response);
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
            var formID = this.element.id;
            
           
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