<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header custom-modal">
            <h5 class="modal-title white">Add New Course</h5>
            <button type="button" class="close white" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form  id="add_course_data_form" name="add_course_data_form" method="post" enctype="multipart/form-data"  role="form" onsubmit="return false;">
            <div class="modal-body">
                    <input type="hidden" name="no_id" value="<?= isset($non_aicpe_course_details['no_id']) ? get_value($non_aicpe_course_details,'no_id') : ''?>">
                    <div class="form-group">
                        <label>Course Code</label>
                        <input type="text" name="course_code" value="<?= isset($non_aicpe_course_details['no_code']) ? get_value($non_aicpe_course_details,'no_code') : ''?>" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Course Name</label>
                        <input type="text" name="course_name" value="<?= isset($non_aicpe_course_details['no_name']) ? get_value($non_aicpe_course_details,'no_name') : ''?>" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Course Duration</label>
                        <input type="text" name="course_duration" value="<?= isset($non_aicpe_course_details['no_duration']) ? get_value($non_aicpe_course_details,'no_duration') :''?>" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Certifying Authority </label>
                        <input type="text" name="course_authority" value="<?= isset($non_aicpe_course_details['no_course_authority']) ? get_value($non_aicpe_course_details,'no_course_authority') :'' ?>" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Exam fees</label>
                        <input type="text" name="exam_fees" value="<?= isset($non_aicpe_course_details['no_exam_fees']) ? get_value($non_aicpe_course_details,'no_exam_fees') :'' ?>" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Course fees</label>
                        <input type="text" name="course_fees" value="<?= isset($non_aicpe_course_details['no_course_fees']) ? get_value($non_aicpe_course_details,'no_course_fees') :''?>" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Do you want to take demo exam </label>
                        <select class="form-control" name="if_demo_exam" >
                            <option label="&nbsp;">&nbsp;</option>
                            <option value="1" <?= isset($non_aicpe_course_details['if_demo_exam']) && $non_aicpe_course_details['if_demo_exam'] == '1' ? 'selected' : '' ?>>Yes</option>
                            <option value="0"  <?= isset($non_aicpe_course_details['if_demo_exam']) && $non_aicpe_course_details['if_demo_exam'] == '0' ? 'selected' : '' ?>>No</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="input_fields_wrap">
                            <label>Course Syllabus</label>                   
                            <div class="input_fields_wrap">
                               <textarea  id="editor03" name="syllabus"><?= isset($non_aicpe_course_details['no_syllabus']) ? $non_aicpe_course_details['no_syllabus'] :''?></textarea>
                            </div>
                        </div>

                     <!--    <div class="input_fields_wrap">
                            <?php //if(isset($non_aicpe_subject_topic_details) && count($non_aicpe_subject_topic_details) >0): 
                                //foreach ($non_aicpe_subject_topic_details as $key => $value) { ?>
                                 <div>
                                <input type="text" class="form-control mb-1" value="<?php //$value['subject']?>" name="subjects[]" placeholder="Subject Name">
                                <input type="text" name="topics[]" value="<?php //$value['topic']?>" placeholder="Topics" class="form-control mb-1">
                          
                            <?php //if($key == 0): ?>
                            <button class="btn btn-xs btn-outline-primary add_field_button mb-2"><i class="simple-icon-plus"></i></button>
                            <?php //else : ?>
                                <a href="#" class="btn btn-outline-primary btn-xs mb-2 remove_field"><i class="simple-icon-minus"></i></a>
                            <?php //endif; ?>
                              </div>
                        <?php //}  //else: ?>
                            <div>
                                <input type="text" class="form-control mb-1" name="subjects[]" placeholder="Subject Name">
                                <input type="text" name="topics[]" placeholder="Topics" class="form-control mb-1">
                            </div>
                            <button class="btn btn-xs btn-outline-primary add_field_button mb-2"><i class="simple-icon-plus"></i></button> 
                        <?php   //endif; ?>
                            
                        </div> -->
                    </div>
                    <div class="form-group">                        
                        <label>Select Subject</label>
                        <select class="form-control" multiple name="no_subject[]" >
                            <option value="" >-- Select Subject --</option>
                            <?php foreach ($subjects as $key => $name) {  ?>
                                <option <?php isset($non_aicpe_course_details['no_subject']) &&  in_array($key,$non_aicpe_course_details['no_subject']) ? 'selected' : ''  ?> value="<?= $key ?>" ><?= $name; ?></option>
                            <?php } ?>                                
                        </select>                       
                    </div>
                     
                    <div class="form-group">
                        
                         <label>Upload Notes</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="course_note" class="custom-file-input" id="inputGroupFile02" >
                                <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Links</label>
                        <input type="url" class="form-control" value="<?= isset($non_aicpe_course_details['no_course_links']) ? get_value($non_aicpe_course_details,'no_course_links') :''?>" name="course_links" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>YouTube Links</label>
                        <input type="url" class="form-control" value="<?= isset($non_aicpe_course_details['no_course_youtube_links']) ? get_value($non_aicpe_course_details,'no_course_youtube_links') :''?>" name="course_youtube_links" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Upload Sample Question Bank</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file"  name="course_sample_file" class="custom-file-input" id="inputGroupFile03" >
                                <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
                            </div>                            
                        </div>
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



    <script type="text/javascript">
        $(document).ready(function() {
   $('.select2_class_fix').select2();
var max_fields      = 10; //maximum input boxes allowed
var wrapper       = $(".input_fields_wrap"); //Fields wrapper
var add_button      = $(".add_field_button"); //Add button ID

var x = 1; //initlal text box count
$(add_button).click(function(e){ //on add input button click
    e.preventDefault();
if(x < max_fields){ //max input box allowed
x++; //text box increment
$(wrapper).append('<div><input type="text" class="form-control mb-1" name="subjects[]" placeholder="Subject Name"><input type="text" name="topics[]" placeholder="Topics" class="form-control mb-1"><a href="#" class="btn btn-outline-primary btn-xs mb-2 remove_field"><i class="simple-icon-minus"></i></a></div>'); //add input box
}
});

$(wrapper).on("click",".remove_field", function(e){ //user click on remove text
    e.preventDefault(); $(this).parent('div').remove(); x--;
})
});
</script>
<script type="text/javascript">
    $(document).ready(function(){      

        jQuery.validator.addMethod("noBlank", function(value, element) { 

            return $.trim(value) != "";

        },"This field is required");


//ADD BRAND

$('#add_course_data_form').on('submit',function(event){

    event.preventDefault();
//var brand_name = $('#brand_name').val().trim();
 var form_data = $('#add_course_data_form').serialize();

$.ajax({
    url: '<?php echo base_url().'institutions-save-non-courses'; ?>',
    type: 'POST',
    dataType: 'json',
    data: form_data,
    beforeSend: function()
    {
        $(".main-loader").fadeIn();
    },      
    success:function(data)
    {
        $('#addCourse').modal('hide');
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


});
</script>
<script type="text/javascript">
  $(".custom-file-input").on("change", function() {
    //var data = $('#stud_photo').files[0];
  var fileName = $(this).val().split("\\").pop();
 
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
 // $(this).siblings(".custom-file-input").addClass("selected").val(fileName);
  
});
</script>

<script type="text/javascript">
  ClassicEditor.create(document.querySelector("#editor03")).catch(function (error) { console.log(error); });
</script>