<?php $this->load->view('admin/includes/admin_header'); ?>

    <main>
        <div class="row">
            <div class="col-12">
                <h1>Address Lables</h1>
                <div class="separator mb-5"></div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                         <div class="card-header progress-bar pt-20">
                            <h5 class="text-center">Print Address</h5>
                        </div>
                        <div class="card-body">
                            <form method="post" enctype="multipart/form-data">
                              <div class="form-group">
                                <label>Institute</label>
                                <select class="form-control select2-multiple" multiple="multiple">
                                  <option>Test 1 Institution</option>
                                  <option>Test 2 Institution</option>
                                  <option>Test 3 Institution</option>
                                  <option>Test 4 Institution</option>
                                  <option>Test 5 Institution</option>
                                  <option>Test 6 Institution</option>
                                  <option>Test 7 Institution</option>
                                  <option>Test 8 Institution</option>
                                  <option>Test 9 Institution</option>
                                  <option>Test 10 Institution</option>
                                  <option>Test 11 Institution</option>
                                  <option>Test 12 Institution</option>
                                  <option>Test 13 Institution</option>
                                </select>
                              </div>
                           
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card d-flex flex-row mb-4">
                      <div class=" d-flex flex-grow-1 min-width-zero">
                        <div class="card-body align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                          <div class="min-width-zero address_div">
                              <p class="">To,</p> 
                                <h6>ATC Code : L607</h6>
                                <h4><?php echo strtoupper("AFSHAN institute of computer learning"); ?></h4>
                                <p class="">[Kind Attn.: <?php echo strtoupper("Ishfaq Majeed Padder"); ?>, Mobile: 9876543908]
                                </p>
                                <p class=""> <?php echo strtoupper("Sadiwara,"); ?>
                                </p>
                                <p class=""> <?php echo strtoupper("Near Sumo Stand, Pinchoo Gali"); ?>
                                </p>
                                <p><?php echo strtoupper("Verinaag | Anantnag - 192212 [Jammu & Kashmir]"); ?></p>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
            </div>
        </div>
    </main>
<?php $this->load->view('admin/includes/footer'); ?>
