<?php $this->load->view('admin/includes/institution_header'); ?>

    <main>
        <div class="row">
            <div class="col-12">
                <h1>Assignments</h1>
                <div class="text-zero top-right-button-container">
                  <button type="button" class="btn btn-primary btn-lg top-right-button mr-1" data-toggle="modal" data-target="#add_assignment">ADD NEW</button>
                           
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
                <a href="javascript:void(0);"><span id="export_report" class="btn btn-outline-primary btn-lg">EXPORT</span></a>
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
                    <div class="row" id="ajax_data">
                        <?php $this->load->view('admin/institution/assignment_ajax.php');?>
                    </div>
                </div>
            </div>
        </div>
</main>
  <div class="modal fade modal-right" id="edit_assignment" data-backdrop="static" role="dialog" ></div>
  <div class="modal fade modal-right" id="add_assignment" data-backdrop="static" role="dialog" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header custom-modal">
                  <h5 class="modal-title white">Add Assignment Details</h5>
                  <button type="button" class="close white" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
            <form id="add_assignments_form" name="add_assignments_form" method="post" enctype="multipart/form-data"  role="form" onsubmit="return false;">
                <div class="modal-body">
                    <div class="form-group">
                      <label>Course Name</label>
                     <select class="form-control" name="course_name">
                          <option value="">---Select Course Name--</option>
                         <?php foreach($course_array as $key => $value): ?>
                          <option value="<?= $key ?>"> <?= $value ?></option>
                        <?php endforeach; ?>
                      </select>
                  </div>
                  <div class="form-group">
                      <label>Assignment Title</label>
                      <input type="text" class="form-control" name="assignment_title" id="assignment_title" value="">
                  </div>
                  <div class="form-group">
                      <label>Description</label>
                      <textarea name="description" id="description" class="form-control" rows="3"></textarea>
                  </div>
                  <div class="form-group">
                    <label>Post Date</label>
                    <div class="input-group ">
                      <span class="input-group-text input-group-append input-group-addon" id="post_date_icon">
                            <i class="simple-icon-calendar" ></i>
                      </span>
                      <input type="text" class="form-control" id="post_date" name="post_date" value="" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Submission Date</label>
                    <div class="input-group ">
                      <span class="input-group-text input-group-append input-group-addon" id="submission_date_icon">
                            <i class="simple-icon-calendar" ></i>
                      </span>
                      <input type="text" class="form-control" id="submission_date" name="submission_date" value="" >
                    </div>
                  </div>
                  <div class="form-group">
                      <label>Assign Faculty</label>
                      <select class="form-control" name="faculty">
                          <option value="">--Assign Faculty--</option>
                          <?php foreach($assign_faculty as $key => $value):?>
                          <option value="<?= $key ?>"><?= $value ?></option>
                          <?php endforeach; ?>
                      </select>
                  </div>
                   <div class="form-group">
                        <label>Question Image</label>                 
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" required="required" name="assignment_document">
                                <label class="custom-file-label">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>  
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">ADD</button>
                  <button type="button" class="btn btn-outline-primary"
                        data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
  </div>
<!-- -------------------------view assignment--------------------------- -->
<div class="modal fade " id="viewAssignment" tabindex="-1" role="dialog" aria-labelledby="viewAssignment" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header custom-modal">
                  <h5 class="modal-title white">Assignment Details</h5>
                  <button type="button" class="close white" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                <div class="">
                  <h6>This is test assignment title</h6>
                <p class="text-muted">Submission Date : 15-02-20201</p>
                </div>
                
                <div class="separator mb-2"></div>

                <div id="accordion">
                  <div class="border mb-2 bg_white">
                    <button class="btn btn-primary default w-100" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Sarah Kortney <span class="right">Submitted On : 02-02-2021</span>
                    </button>
                    <div id="collapseOne" class="collapse show pd-15" data-parent="#accordion">
                      <p class="text-small"><strong>Mobile No :</strong>
                       <span class="text-muted">9898989898</span>
                       <a href="#" class="right">Download Assignment <i class="iconsminds-download"></i></a>
                      </p>
                      <p class="text-small"><strong>Email :</strong>
                       <span class="text-muted">sarah.kortney@testmail.com</span>
                      </p>
                      <p class="text-small"><strong>Description :</strong>
                       <span class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>
                      </p>

                      <p class="text-small"><strong>Post Remark :</strong>
                        <form>
                          <div class="form-group">
                            <textarea class="form-control" rows="3" placeholder="write something..."></textarea>
                          </div>
                          <button class="btn btn-xs btn-primary">Post</button>
                        </form>
                      </p>
                    </div>
                  </div>
                  <div class="border mb-2 bg_white">
                    <button class="btn btn-primary default w-100" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    Student Name Test <span class="right">Submitted On : 02-02-2021</span>
                    </button>
                    <div id="collapseTwo" class="collapse pd-15" data-parent="#accordion">
                      <p class="text-small"><strong>Mobile No :</strong>
                       <span class="text-muted">9898989898</span>
                       <a href="#" class="right">Download Assignment <i class="iconsminds-download"></i></a>
                      </p>
                      <p class="text-small"><strong>Email :</strong>
                       <span class="text-muted">sarah.kortney@testmail.com</span>
                      </p>
                      <p class="text-small"><strong>Description :</strong>
                       <span class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>
                      </p>

                      <p class="text-small"><strong>Post Remark :</strong>
                        <form>
                          <div class="form-group">
                            <textarea class="form-control" rows="3" placeholder="write something..."></textarea>
                          </div>
                          <button class="btn btn-xs btn-primary">Post</button>
                        </form>
                      </p>
                    </div>
                  </div>
                  <div class="border mb-2 bg_white">
                    <button class="btn btn-primary default w-100" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                    Sarah Kortney <span class="right">Submitted On : 02-02-2021</span>
                    </button>
                    <div id="collapseThree" class="collapse pd-15" data-parent="#accordion">
                      <p class="text-small"><strong>Mobile No :</strong>
                       <span class="text-muted">9898989898</span>
                       <a href="#" class="right">Download Assignment <i class="iconsminds-download"></i></a>
                      </p>
                      <p class="text-small"><strong>Email :</strong>
                       <span class="text-muted">sarah.kortney@testmail.com</span>
                      </p>
                      <p class="text-small"><strong>Description :</strong>
                       <span class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>
                      </p>

                      <p class="text-small"><strong>Post Remark :</strong>
                        <form>
                          <div class="form-group">
                            <textarea class="form-control" rows="3" placeholder="write something..."></textarea>
                          </div>
                          <button class="btn btn-xs btn-primary">Post</button>
                        </form>
                      </p>
                    </div>
                  </div>

                </div>
              </div>
          </div>
      </div>
  </div>
<?php $this->load->view('admin/includes/footer'); ?>
<script type="text/javascript">
  
  $("#submission_date").datepicker({
    inline:true,
    formate:"yyyy-mm-dd",
    maxDate:"today"
  });
  $("#submission_date_icon").click(function(){
   $("#submission_date").datepicker("show");
  });
  $("#post_date").datepicker({
    inline:true,
    formate:"yyyy-mm-dd",
    maxDate:"today"
  });

  $("#post_date_icon").click(function(){
   $("#post_date").datepicker("show");
  });
</script>

<script type="text/javascript">

  
$('#add_assignments_form').on('submit',function(event){

    event.preventDefault();
   var formdata = new FormData(this);
$.ajax({
    url: '<?php echo base_url().'save-institutions-assignments'; ?>',
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
        $('#add_assignment').modal('hide');
        toastr[data.type](data.msg);
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
          $('#per_page_value').val($('#per_page_option').val());
            $('#pagination_page').val('1');
         
            change_search_data("per_page",$('#per_page_option').val())
    
        change_search_data("page",1);
        
        page_update();
        return false;
        });
      $("body").on("click",'#reset-btn',function(){
       
       window.location.href='<?php echo base_url(); ?>institutions-assignments';
        return false;

      });

  });
</script>



<script type="text/javascript">
  $(document).ready(function(){
      $('body').on('click', '#export_report', function(){
    $.ajax({
      url:" <?php echo base_url().'export-institutions-assignments'; ?>",
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

  function delete_admissions_by_id(id){ 
    $.ajax({
              url: '<?php echo base_url(); ?>delete-institutions-admissions',
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

 function edit_assignment_by_id(id){
    $.ajax({
            url:'<?php echo base_url(); ?>edit-institutions-assignments',
            type:'post',
            dataType:'json',
            data:{id:id},
            beforeSend:function()
            {
                $(".main-loader").show();
            },
            complete:function(){
                $(".main-loader").hide();
            },
            success:function(response){
                if(response.type=='success')
                {
                    $('#edit_assignment').html(response.view);
                    $('#edit_assignment').modal('show');
                }
                else{
                    toastr[response.type](response.msg);
                }
            }
    });

 }

</script>