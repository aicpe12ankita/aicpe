<?php $this->load->view('admin/includes/admin_header'); ?>

    <main>
        <div class="row">
            <div class="col-12">
                <h1>Currency Converter</h1>
                <div class="separator mb-5"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-3">
            	<div class="card">
            		<div class="card-body">
		            	<form method="post" id="convert_currency">
		            		<div class="form-group">
		            			<label>Select Currency</label>
		            			<select class="form-control select2-single" name="currency" required>
		            				<option value="">&nbsp;</option>
		            				<?php if($currencies!=""){
		            					foreach ($currencies as $data) { ?>
		            						<option value="<?php echo $data->c_id; ?>">
		            							<?php echo $data->c_currency." (".$data->c_name.")"; ?>
		            						</option>
		            					<?php } } ?>
		            			</select>
		            		</div>
		    				<div class="form-group">
		            			<label>Ammount</label>
		            			<input type="text" class="form-control" name="ammount" id="ammount" required>
		            		</div>
		    				<button class="btn btn-success" type="submit">Convert</button>
		            	</form>
		            	<div class=" mb-5"></div>
		            	<div id="response">
		            		Ammount In Indian Currency : <span class="badge badge-outline-warning fs-18"> Rs.0</span>
		            	</div>
		            </div>
		        </div>
            </div>
        </div>
    </main>
<?php $this->load->view('admin/includes/footer'); ?>
<script type="text/javascript">
	$(document).ready(function(){
		 $('#ammount').on('keypress',function(e){
      if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) { return false; }
     });
		var base = $('#base_url').val();
		$('#convert_currency').validate({
		     rules:{
		     	"currency":{
		          required:true
		        },
		        "ammount":{
		          required:true
		        }
		      },
		      messages:{
		        "currency":{
		          required:'Please select currency'
		        },
		        "ammount":{
		          required:'Please enter ammount'
		        }
		      },
		      submitHandler:function(form){
		
					var str="";
				 	var formdata = new FormData(form);
				$.ajax({
					url:base+'convert_currency',
					type:'post',
					data: formdata,
					processData: false,
	              	contentType: false,
	              	dataType: 'json',
					success:function(response){
						if(response!=""){
							str = "Ammount In Indian Currency : <span class='badge badge-outline-warning fs-18'>"+response+"</span>";
						}
						$('#response').html(str);
					}
				});
			}
		});
	});
</script>