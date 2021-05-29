<div class="card">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs " role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="first-tab" data-toggle="tab" href="#first"
                                    role="tab" aria-controls="first" aria-selected="true">Today's Birthday and Anniversary</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="second-tab" data-toggle="tab" href="#second"
                                    role="tab" aria-controls="second" aria-selected="false">Upcomung Birthday and Anniversary</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="first" role="tabpanel" aria-labelledby="first-tab">
                                <div class="row">
                                   <?php if($data!=""){ $i=$from_records; foreach ($data as $row) { ?>   
                                  <div class="col-lg-6">
                                    <div class="card d-flex flex-row mb-4">
                                      <a class="d-flex" href="javascript:(void);">
                                        <?php if($row->ba_photo!=""){ ?> 
                                          <img alt="Profile" src="<?php echo base_url(); ?>uploads/birthday_and_anniversary/<?= $row->ba_photo ?>" class="img-thumbnail border-0 rounded-circle m-4 list-thumbnail align-self-left custom_img_max_width">
                                        <?php }else{ ?>
                                         <img alt="Profile" src="<?php echo base_url(); ?>assets/img/profiles/profile_placeholder.png" class="img-thumbnail border-0 rounded-circle m-4 list-thumbnail align-self-left custom_img_max_width">
                                        <?php } ?>
                                      </a>
                                      <div class=" d-flex flex-grow-1 min-width-zero">
                                          <div class="card-body pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                              <div class="min-width-zero">
                                                  <a href="#">
                                                      <p class="list-item-heading mb-1 truncate">
                                                        <?= $row->ba_name!="" ? $row->ba_name : "" ?></p>
                                                  </a>
                                                  <p class="mb-2 text-muted text-small"><?= $row->s_name!="" ? $row->ci_name.", ".$row->s_name : "" ?>
                                                  </p>
                                                  <p class="mb-2 text-muted text-small">
                                                    <i class="simple-icon-calendar"></i> <?= $row->ba_date!="" ? date('d-m-Y',strtotime($row->ba_date)) : "" ?>
                                                  </p>
                                                  <p class="mb-2 text-muted text-small">
                                                    <i class="simple-icon-phone"></i> <?= $row->ba_mobile_1!="" ? $row->ba_mobile_1 : "" ?>
                                                  </p>
                                                  <p class="mb-2 text-muted text-small">
                                                    <i class="iconsminds-birthday-cake"></i> <?= $row->ba_anni_type=="0" ?'Birthday' : "Anniversary" ?>
                                                  </p>
                                                  <button type="button" class="btn btn-xs btn-outline-primary mb-2" onclick="get_birth('edit','<?= $row->ba_id; ?>');">Edit</button>
                                                  <button type="button" class="btn btn-xs btn-outline-danger mb-2" onclick="delete_birth('<?= $row->ba_id; ?>');">Delete</button>
                                                <a href="#"><button type="button" class="btn btn-xs btn-primary ">Send SMS</button></a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                </div>
                                
                              <?php $i++; }} ?>
                              </div>

                              <!-- START PAGINATION -->
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
      <!-- END PAGINATION --> 
                            </div>
                            <div class="tab-pane fade" id="second" role="tabpanel" aria-labelledby="second-tab">
                                <div class="row">
                                  <?php for($i=1;$i<6;$i++){ ?>
                                  <div class="col-lg-6">
                                    <div class="card d-flex flex-row mb-4">
                                      <a class="d-flex" href="#">
                                          <img alt="Profile" src="<?php echo base_url(); ?>assets/img/profiles/l-5.jpg"
                                              class="img-thumbnail border-0 rounded-circle m-4 list-thumbnail align-self-center">
                                      </a>
                                      <div class=" d-flex flex-grow-1 min-width-zero">
                                          <div class="card-body pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                              <div class="min-width-zero">
                                                  <a href="#">
                                                      <p class="list-item-heading mb-1 truncate">
                                                        Sarah Kortney</p>
                                                  </a>
                                                  <p class="mb-2 text-muted text-small">Nagpur, Maharashtra
                                                  </p>
                                                  <p class="mb-2 text-muted text-small">
                                                    <i class="simple-icon-calendar"></i> 14.01.2021
                                                  </p>
                                                  <p class="mb-2 text-muted text-small">
                                                    <i class="simple-icon-phone"></i> 09988235496
                                                  </p>
                                                  <p class="mb-2 text-muted text-small">
                                                    <i class="iconsminds-birthday-cake"></i> Birthday
                                                  </p>
                                                  <button type="button" class="btn btn-xs btn-outline-primary mb-2">Edit</button>
                                                  <button type="button" class="btn btn-xs btn-outline-danger mb-2">Delete</button>
                                                 <a href="#"><button type="button" class="btn btn-xs btn-primary ">Send SMS</button></a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                </div>
                              <?php } ?>
                              </div>
                            </div>
                        </div>
                    </div>
                  </div>

