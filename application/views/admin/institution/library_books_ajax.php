<div class="col-12 mb-4 data-table-rows data-tables-hide-filter">
    <table class="custom_table table">
        <thead>
           <tr>
                <th>Sr. No.</th>
                <th>Book Category </th>
                <th>Book Name </th>
                <th>Author Name </th>
                <th>Pages</th>
                <th>Price</th>
                <th>Books Count</th>
                <th>Available Count </th>
                <th>Issued Count</th>
                <th>Block Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody> 
        <?php if($data !=''){
            $i= $from_records;
            foreach ($data as $row) {
        ?> 
            <tr>
                <td>
                    <p class="list-item-heading"><?= $i;?></p>
                </td>
                <td>
                    <p class="text-muted"><?= get_value($row,'book_category','-');?></p>
                </td>
                <td>
                    <p class="text-muted"><?= get_value($row,'book_name','-');?></p>
                </td>
                <td>
                    <p class="text-muted"><?= get_value($row,'author_name','-');?></p>
                </td>
                <td>
                    <p class="text-muted"><?= get_value($row,'pages','-');?></p>
                </td>
                <td>
                    <p class="text-muted"><?= get_value($row,'price','-');?></p>
                </td>
                <td>
                    <p class="text-muted"><?= get_value($row,'book_count','-');?></p>
                </td>
                <td>
                    <p class="text-muted"><?= get_value($row,'available_count','-');?></p>
                </td>
                <td>
                    <p class="text-muted"><?= get_value($row,'issued_count','-');?></p>
                </td>
                <td>
                <?php if($row['is_blocked']=='block'){?>
                    <p class="text-muted">Blocked</p>
                <?php } else {?>
                    <p class="text-muted">Unblocked</p>
                <?php }?>
                </td>
                <td>
                    <a href="javascript:void(0);" class="btn btn-xs btn-primary mb-1"><i class="simple-icon-note" onclick="edit_library_books_by_id(<?php echo $row['id']?>);"></i></a>

                    <a href="javascript:void(0);" class="btn btn-xs btn-warning mb-1"><i class="simple-icon-trash" onclick="delete_library_books_by_id(<?php echo $row['id']?>);"></i></a>

                    <a href="javascript:void(0);" class="btn btn-xs btn-danger mb-1" onclick="blocked_by_id(<?php echo $row['id']?>);"> Block</a>
                </td>
            </tr>
        <?php $i++; } } else { ?>
            <tr><td colspan="100%" style="text-align:center">No Records Found.</td></tr>
        <?php }?>
        </tbody>
    </table>
</div>
<div class="col-12 text-left">
    <?php if($total_records > 0) { ?>
        Showing <?php echo $from_records; ?> to <?php echo $to_records; ?> of <?php echo $total_records; ?>
    <?php } else echo '&nbsp'; ?>
</div>
<div class="col-12 text-right">
    <nav aria-label="Page navigation">
        <?php echo $pagination; ?> 
    </nav>
    <input type="hidden" id="pagination_url" value="<?php echo $paging_url; ?>" />
    <input type="hidden" id="pagination_page" value="<?php echo $page; ?>" />
    <input type="hidden" id="per_page_value" value="<?php echo $per_page; ?>" />
    <input type="hidden" id="pagination_sort_by" value="<?php echo $sort_by; ?>" />
    <input type="hidden" id="pagination_sort_direction" value="<?php echo $sort_direction; ?>" />

</div>