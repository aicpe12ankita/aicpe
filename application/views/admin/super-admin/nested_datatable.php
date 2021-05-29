<?php $this->load->view('admin/includes/admin_header'); ?>
<style type="text/css">
	.show{
		display: block;
	}
	.hide{
		display: none;
	}
</style>
 <main>
 	 <div class="row">
            <div class="col-12">
                <h1>AICPE Certificates</h1>
                <div class="separator mb-5"></div>
            </div>
        </div>
        <div class="row">
        	
            <div class="col-lg-12">
            	<div class="card">
            		<div class="card-body">
            			<table id="example" class="table" style="width:100%">
					        <thead>
					            <tr>
					                <th>Sr. No.</th>
					                <th>Name</th>
					                <th>Position</th>
					                <th>Office</th>
					                <th>Salary</th>
					            </tr>
					        </thead>
					        <tbody>
					        	
					        	<tr>
					        		<td id="parent_tr"><i class="simple-icon-plus"></i> 1</td>
					        		<td>John Doe</td>
					        		<td>Developer</td>
					        		<td>test 1</td>
					        		<td>$1200</td>
					        	</tr>
					        	<tr>
					        		<!-- <td  > -->
					        			<table class="table hide" id="data">
					        				<thead>
					        					<tr>
					        						<th>Sr. No.</th>
						        					<th>Student Name</th>
						        					<th>Course Name, Code and Duration</th>
						        					<th>Exam Fees</th>
						        					<th>Marks</th>
						        					<th>Result</th>
						        					<th>Date</th>
						        					<th>Action</th>
					        					</tr>
					        				</thead>
					        				<tbody>
					        					<tr>
					        						<td>1</td>
					        						<td>Sarah Kortney</td>
					        						<td>Typing Speed 30wpm [CRS-9870] [4months]</td>
					        						<td>Rs. 2000</td>
					        						<td>459</td>
					        						<td>Pass</td>
					        						<td>02-02-2021</td>
					        						<td><a href="#" class="btn btn-xs btn-primary mb-1"><i class="simple-icon-note"></i></a>
                                            <a href="#" class="btn btn-xs btn-danger mb-1"><i class="simple-icon-trash"></i></a></td>
					        					</tr>
					        					<tr>
					        						<td>2</td>
					        						<td>Sarah Kortney</td>
					        						<td>Typing Speed 30wpm [CRS-9870] [4months]</td>
					        						<td>Rs. 2000</td>
					        						<td>459</td>
					        						<td>Pass</td>
					        						<td>02-02-2021</td>
					        						<td><a href="#" class="btn btn-xs btn-primary mb-1"><i class="simple-icon-note"></i></a>
                                            <a href="#" class="btn btn-xs btn-danger mb-1"><i class="simple-icon-trash"></i></a></td>
					        					</tr>

					        					<tr>
					        						<td>3</td>
					        						<td>Sarah Kortney</td>
					        						<td>Typing Speed 30wpm [CRS-9870] [4months]</td>
					        						<td>Rs. 2000</td>
					        						<td>459</td>
					        						<td>Pass</td>
					        						<td>02-02-2021</td>
					        						<td><a href="#" class="btn btn-xs btn-primary mb-1"><i class="simple-icon-note"></i></a>
                                            <a href="#" class="btn btn-xs btn-danger mb-1"><i class="simple-icon-trash"></i></a></td>
					        					</tr>
					        				</tbody>
					        			</table>
					        		<!-- </td> -->
					        		
					        	</tr>
					        </tbody>
					    </table>
            		</div>
            	</div>
            </div>
        </div>

<?php $this->load->view('admin/includes/footer'); ?>
<script type="text/javascript">
	$(document).ready(function(){
		
		$('#parent_tr').click(function(){
			if($('#data').hasClass('hide')){
				$('#data').removeClass('hide');
				$('#data').addClass('show');
			}else{
				$('#data').addClass('hide');
				$('#data').removeClass('show');
			}
			
		});
	});
</script>