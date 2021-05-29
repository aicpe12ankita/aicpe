<div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header custom-modal">
                  <h5 class="modal-title white">View Associate</h5>
                  <button type="button" class="close white" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                <div class="">
                  <?php if(isset($data) && $data!=""){
                  if($data->asso_logo!=""){ ?>
                    
                      <img class="img-thumbnail border-0 rounded-circle list-thumbnail table_img mr-15" src="<?php echo base_url(); ?>uploads/associates/<?php echo $data->asso_logo; ?>" />
                    
                  <?php }else{ echo '<span class="simple-icon-picture table_img_icon"></span>'; } } ?>
                  <h6><?= isset($data) ? $data->asso_name : "" ?></h6>
                  <p class="text-muted"> Associate Code: <?= isset($data) ? $data->asso_code : "" ?></p>
                </div>
                 <div>
                  <p>Affiliation </p>
                   <p class="text-small text-muted"><?= isset($data) ? $data->asso_affiliation : "" ?></p>
                 </div>
              </div>
          </div>
      </div>