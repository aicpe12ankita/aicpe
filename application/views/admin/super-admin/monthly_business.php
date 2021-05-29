<?php $this->load->view('admin/includes/admin_header'); ?>
  
    <main>
        <div class="row">
            <div class="col-12">
                <h1>AICPE Monthly Business Chart</h1>
                
                <div class="separator mb-5"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h4></h4>
                        <form>
                            <div class="form-group">
                                <label>Month & Year<span class="mandatory">*</span></label>
                                <div class="input-group">
                                    <select class="form-control">
                                        <option>Jan</option>
                                        <option>Feb</option>
                                        <option>Mar</option>
                                        <option>Apr</option>
                                        <option>May</option>
                                        <option>Jun</option>
                                        <option>Jul</option>
                                        <option>Aug</option>
                                        <option>Sep</option>
                                        <option>Nov</option>
                                        <option>Dec</option>
                                    </select>
                                    <select class="form-control">
                                        <option>2026</option>
                                        <option>2025</option>
                                        <option>2024</option>
                                        <option>2023</option>
                                        <option>2022</option>
                                        <option selected>2021</option>
                                        <option>2020</option>
                                        <option>2019</option>
                                        <option>2018</option>
                                        <option>2017</option>
                                        <option>2016</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="chart-container chart">
                    <canvas id="newproductChart"></canvas>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php $this->load->view('admin/includes/footer'); ?>