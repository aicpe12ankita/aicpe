   <script src="<?php echo base_url(); ?>assets/js/jquery-3.5.1.min.js"></script>
  
    <script src="<?php echo base_url(); ?>assets/js/vendor/bootstrap.bundle.min.js"></script>
    
   
    <script src="<?php echo base_url(); ?>assets/js/vendor/jquery.validate/jquery.validate.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/vendor/jquery.validate/additional-methods.min.js"></script> 
 <script src="<?php echo base_url(); ?>assets/js/vendor/Chart.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/vendor/chartjs-plugin-datalabels.js"></script>
  
    <script src="<?php echo base_url(); ?>assets/js/vendor/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/vendor/fullcalendar.min.js"></script>
    
    <script src="<?php echo base_url(); ?>assets/js/vendor/perfect-scrollbar.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/vendor/progressbar.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/vendor/jquery.barrating.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/vendor/nouislider.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/vendor/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/vendor/Sortable.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/vendor/mousetrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/vendor/glide.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/vendor/ckeditor5-build-classic/ckeditor.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/vendor/bootstrap-tagsinput.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/vendor/dropzone.min.js"></script>
     <script src="<?php echo base_url(); ?>assets/js/vendor/jquery.smartWizard.min.js"></script>
   
    <script src="<?php echo base_url(); ?>assets/js/dore-plugins/select.from.library.js"></script>
     <script src="<?php echo base_url(); ?>assets/js/vendor/video.js"></script>
   

   
    <script src="<?php echo base_url(); ?>assets/js/vendor/select2.full.js"></script>
  
    <script src="<?php echo base_url(); ?>assets/js/dore.script.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/toastr.min.js"></script>

<script type="text/javascript">
  $(".custom-file-input").on("change", function() {
    //var data = $('#stud_photo').files[0];
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>