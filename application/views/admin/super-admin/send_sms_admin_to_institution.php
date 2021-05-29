<div class="modal-dialog custom-modal-width" role="document">
    <div class="modal-content">
        <div class="modal-header custom-modal">
            <h5 class="modal-title white"><?= isset($type) && $type !=="" ? "Edit Institution" : "Add Institution" ?> </h5>
            <button type="button" class="close white" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-body">
        	<?= isset($type) && $type =="get" ? '<form id="edit_institution" method="post" enctype="multipart/form-data">' : '<form id="get_institution" method="post" enctype="multipart/form-data">' ?>
        </div>
    </div>
</div>