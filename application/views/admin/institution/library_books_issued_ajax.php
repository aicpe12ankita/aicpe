<div class="col-12 mb-4 data-table-rows data-tables-hide-filter">
                           
    <table class="custom_table table">
        <thead>
           <tr>
                <th>Sr. No.</th>
                <th>Student Name</th>
                <th>Book Name </th>
                <th>Mobile </th>
                <th>Email</th>
                <th>Date of Issue</th>
                <th>Date of Return</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody> 
        <?php if($data != '' ){
            $i = $from_records; 
            foreach($data as $row){?> 
            <tr>
                <td>
                    <p class="list-item-heading"><?php echo $i++;?></p>
                </td>
                <td>
                    <p class="text-muted"><?= get_value($row,'student_name','-');?></p>
                </td>
                <td>
                    <p class="text-muted"><?= get_value($row,'book_name','-');?></p>
                </td>
                <td>
                    <p class="text-muted"><?= get_value($row,'mobile_no','-');?></p>
                </td>
                <td>
                    <p class="text-muted"><?= get_value($row,'email','-');?></p>
                </td>
                <td>
                    <p class="text-muted"><?= get_value($row,'issue_date','-');?></p>
                </td>
                <td>
                    <p class="text-muted"><?= get_value($row,'return_date','-');?></p>
                </tds>
                <td>
                    <a href="#" class="btn btn-xs btn-primary mb-1"><i class="simple-icon-note"></i></a>
                    <a href="#" class="btn btn-xs btn-danger mb-1"><i class="simple-icon-trash"></i></a>
                    <a href="#" class="btn btn-xs btn-info mb-1"> Send Remainder</a> <a href="#" class="btn btn-xs btn-success mb-1" data-toggle="modal" data-target="#addEnquiry"> Return Book</a>
                </td>
            </tr>
            <?php $i++; } } else {?>
            <?php }?>
        </tbody>
    </table>
</div>