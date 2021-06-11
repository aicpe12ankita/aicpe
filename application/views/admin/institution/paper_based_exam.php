<?php $this->load->view('admin/includes/institution_header'); ?>

    <main>
        <div class="row">
            <div class="col-12">
                <h1>Paper Based Exam</h1>
                
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
                        <div class="col-12 mb-4 data-table-rows data-tables-hide-filter">
                           
                            <div  id="ajax_data">
                                 <?php $this->load->view('admin/institution/paper_based_exam_ajax.php'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>
<div class="modal fade" id="paper_based_exam" tabindex="-1" role-="dialog" aria-labelledby="paper_based_exam" aria-hidden="true">
</div>
 <div class="modal fade modal-right" id="addResults" tabindex="-1" role="dialog" aria-labelledby="addResults" aria-hidden="true">
      <div class="modal-dialog custom-modal-width" role="document">
          <div class="modal-content">
              <div class="modal-header custom-modal">
                  <h5 class="modal-title white">Add Result </h5>
                  <button type="button" class="close white" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                <p class="text-muted">Student Name - John doe
                  <button class="btn btn-xs btn-dark right add_field_button">Add Subject</button></p>
                <form>
                  <div class="input_fields_wrap">
                    <div class="mb-5">
                      <div class="row">
                        <div class="col-lg-4">
                          <label class="form-group has-float-label">
                            <input type="text" class="form-control" name="subjects[]" />
                            <span>Subject</span>
                          </label>
                        </div>
                        <div class="col-lg-3">
                          <label class="form-group has-float-label">
                            <input class="form-control" type="text" name="correct_ans[]" placeholder="" />
                            <span>Total Correct Answers</span>
                          </label>
                        </div>
                        <div class="col-lg-3">
                          <label class="form-group has-float-label">
                            <input class="form-control" type="text" name="incorrect_ans[]" />
                            <span>Total Incorrect Answers</span>
                          </label>
                        </div>
                        <div class="col-lg-3">
                          <label class="form-group has-float-label">
                            <input class="form-control" type="text" name="marks[]" />
                            <span>Total Obtained Marks</span>
                          </label>
                        </div>
                        <div class="col-lg-3">
                          <label class="form-group has-float-label">
                            <input class="form-control" type="text" name="percentage[]" />
                            <span>Percentage</span>
                          </label>
                        </div>
                        <div class="col-lg-3">
                          <label class="form-group has-float-label">
                            <input class="form-control" type="text" name="grade[]" />
                            <span>Grade</span>
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

  <!-- ---------------------result status---------- -->
  <div class="modal fade" id="resultStatus" tabindex="-1" role="dialog" aria-labelledby="resultStatus" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
              <div class="modal-header custom-modal">
                  <h5 class="modal-title white">Result Status</h5>
                  <button type="button" class="close white" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
               <h5>Result <span class="badge badge-info">Pass</span> <span class="text-muted text-small right"> 12-02-2021 04:32pm </span></h5>
               <p class="text-small text-muted right">IP Address: 106.210.225.205</p>
               <table class="table">
                 <thead class="thead-light data-table">
                   <tr>
                     <th scope="col"> Sr. No.</th>
                     <th scope="col"> Subject Name</th>
                     <th scope="col"> Total Correct Answer</th>
                     <th scope="col"> Total Inorrect Answer</th>
                     <th scope="col"> Total Obtained Marks</th>
                     <th scope="col"> Percentage</th>
                     <th scope="col"> Grade</th>
                   </tr>
                 </thead>
                 <tbody>
                   <tr>
                     <td>1</td>
                     <td>Subject one</td>
                     <td>25</td>
                     <td>15</td>
                     <td>25</td>
                     <td>60%</td>
                     <td>A</td>
                   </tr>
                    <tr>
                      <td>2</td>
                     <td>Subject one</td>
                     <td>12</td>
                     <td>08</td>
                     <td>25</td>
                     <td>60%</td>
                     <td>A</td>
                   </tr>
                 </tbody>
               </table>
               
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
            $('#search-btn').trigger('click');
             return false;
        });
      $("body").on("click",'#reset-btn',function(){
       
       window.location.href='<?php echo base_url(); ?>institutions-paper-based-exam';
        return false;

      });

  });
</script>



<script type="text/javascript">
  $(document).ready(function(){
      $('body').on('click', '#export_report', function(){
    $.ajax({
      url:" <?php echo base_url().'export-institutions-paper-based-exam'; ?>",
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

  function delete_paper_based_exam_id(id){ 
    $.ajax({
              url: '<?php echo base_url(); ?>delete-institutions-paper-based-exam',
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

 function edit_paper_based_exam_by_id(id){
    $.ajax({
            url:'<?php echo base_url(); ?>edit-institutions-paper-based-exam',
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
                    $('#paper_based_exam').html(response.view);
                    $('#paper_based_exam').modal('show');
                }
                else{
                    toastr[response.type](response.msg);
                }
            }
    });

 }

</script>
