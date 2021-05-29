<div class="card">
                      <div class="card-header progress-bar pt-20">
                            <h5 class="text-center">Add Birthday Or Anniversary</h5>
                        </div>
                        <div class="card-body">
                          <?= isset($id) && $id!="" ? '<form id="edit_birthday_anniversaries" method="post" enctype="multipart/form-data" class="tooltip-label-right" novalidate>' : '<form id="add_birthday_anniversaries" method="post" enctype="multipart/form-data" class="tooltip-label-right" novalidate>' ?>
                            
                                <div class="form-group mb-1">
                                    <div class="input-group">
                                      <span class="input-group-text input-group-append input-group-addon">
                                            <i class="simple-icon-user"></i>
                                      </span>
                                      <input type="text" class="form-control" placeholder="Name" name="ba_name" value="<?= isset($id) && $id!="" ? $data->ba_name : "" ?>">
                                    </div>
                                </div>
                                <div class="form-group mb-1">
                                    <div class="input-group">
                                      <span class="input-group-text input-group-append input-group-addon">
                                            <i class="iconsminds-office"></i>
                                      </span>
                                      <input type="text" class="form-control" placeholder="Organization or Institute Name" name="ba_organisation" value="<?= isset($id) && $id!="" ? $data->ba_organisation : "" ?>">
                                    </div>
                                </div>
                                <div class="form-group mb-1">
                                    <div class="input-group">
                                      <span class="input-group-text input-group-append input-group-addon">
                                            <i class="simple-icon-envelope"></i>
                                      </span>
                                      <input type="text" class="form-control" placeholder="Email" name="ba_email" value="<?= isset($id) && $id!="" ? $data->ba_email : "" ?>">
                                    </div>
                                </div>
                                <div class="form-group mb-1">
                                    <div class="input-group">
                                      <span class="input-group-text input-group-append input-group-addon">
                                            <i class="simple-icon-screen-smartphone"></i>
                                      </span>
                                      <input type="text" class="form-control" placeholder="Mobile no." name="ba_mobile_1" value="<?= isset($id) && $id!="" ? $data->ba_mobile_1 : "" ?>">
                                    </div>
                                </div>
                                <div class="form-group mb-1">
                                    <div class="input-group">
                                      <span class="input-group-text input-group-append input-group-addon">
                                            <i class="simple-icon-phone"></i>
                                      </span>
                                      <input type="text" class="form-control" placeholder="Alternate Mobile no." name="ba_mobile_2" value="<?= isset($id) && $id!="" ? $data->ba_mobile_2 : "" ?>">
                                    </div>
                                </div>
                                <div class="form-group mb-1">
                                    
                                      <select class="form-control select2-single" data-width="100%" name="country" id="country_dist">
                                          <option label="&nbsp;">Country</option>
                                          <?php if($countries!=""){
                                            foreach ($countries as $countries_row) { ?>
                                              <option value="<?php echo $countries_row->c_id;?>" <?php if(isset($id) && $id!=""){ if($data->ba_country==$countries_row->c_id){ echo "selected"; }  } ?>><?php echo $countries_row->c_name; ?></option>
                                            <?php } } ?>
                                      </select>
                                   
                                </div>
                                <div class="form-group mb-1">
                                  <select class="form-control select2-single" data-width="100%" name="state" id="state_dist" required>
                                        <option label="&nbsp;">State</option>
                                        <option value="<?php if(isset($id) && $id!=''){ if(isset($data) && $data!=""){ echo $data->ba_state; } } ?>"><?php if(isset($type) && $type=='edit'){ if($data!=""){ echo $data->s_name; }}  ?></option>
                                      </select>
                                </div>
                                <div class="form-group mb-1">
                                  <select class="form-control select2-single" data-width="100%" name="district" id="dist_city">
                                        <option label="&nbsp;">District</option>
                                       <option value="<?php if(isset($id) && $id!=""){ 
                                        echo $data->ba_district; }  ?>" selected>
                                        <?php if(isset($data) && $data!=""){  echo $data->d_district_name; }  ?></option>  
                                      </select>
                                </div>
                                <div class="form-group mb-1">
                                  <select class="form-control select2-single" data-width="100%" name="city" id="getcities">
                                        <option label="&nbsp;">City</option>
                                        <option value="<?php  if(isset($id) && $id=''){ if(isset($data) && $data!=""){ echo $data->ba_city; } } ?>" selected><?php if($data!=""){ if(isset($id) && $id!=''){ echo $data->ci_name; }}  ?></option>
                                      </select>
                                    
                                </div>
                                <div class="form-group mb-1">
                                  <div class="row">
                                    <div class="col-lg-6 col-xs-6">
                                      <div class="custom-control custom-radio">
                                          <input type="radio" id="birthday" name="customRadio"
                                              class="custom-control-input" value="0">
                                          <label class="custom-control-label" for="birthday"> Birthday </label>
                                      </div>
                                    </div>
                                    <div class="col-lg-6 col-xs-6">
                                      <div class="custom-control custom-radio">
                                        <input type="radio" id="anniversary" name="customRadio"
                                            class="custom-control-input" value="1">
                                        <label class="custom-control-label" for="anniversary">Anniversary</label>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group mb-1">
                                    <div class="input-group date">
                                      <span class="input-group-text input-group-append input-group-addon">
                                            <i class="simple-icon-calendar"></i>
                                      </span>
                                      <input type="text" class="form-control datepicker" placeholder="Date" name="ba_date" value="<?= isset($id) && $id!="" ? $data->ba_date : "" ?>">
                                    </div>
                                </div>
                                <div class="form-group mb-1" id="anni_type">
                                    <div class="input-group">
                                      <span class="input-group-text input-group-append input-group-addon">
                                            <i class="iconsminds-gift-box"></i>
                                      </span>
                                      <input type="text" class="form-control" placeholder="Anniversary Type" name="ba_birth_or_anni" value="<?= isset($id) && $id!="" ? $data->ba_birth_or_anni : "" ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                  <label> Image</label>
                                  <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="image">
                                        <label class="custom-file-label" for="flag_image">Choose file</label>
                                    </div>
                                  </div>
                                </div>
                                <?php if(isset($id) && $id!=""){ if($data->ba_photo!=""){ ?>
                                <div class="img_preview mb-4">
                                  <img src="<?php echo base_url(); ?>uploads/birthday_and_anniversary/<?php echo $data->ba_photo; ?>">
                                </div>
                              <?php }} ?>
                                <input type="hidden" name="id" value="<?= isset($id) && $id!="" ? $data->ba_id : "" ?>">
                                <?= isset($id) && $id!="" ? '<button type="submit" class="btn btn-primary mb-0">Update</button>' : '<button type="submit" class="btn btn-primary mb-0">Submit</button>' ?>
                                
                            </form>
                        </div>
                    </div>