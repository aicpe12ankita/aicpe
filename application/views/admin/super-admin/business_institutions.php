<?php $this->load->view('admin/includes/admin_header'); ?>
  
    <main>
        <div class="row">
            <div class="col-12">
                <h1>AICPE - Institution Business Chart</h1>
                
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
                                <label>Select Institution</label>
                                <select class="form-control select2-single">
                                    <option>Test Institution 1</option>
                                    <option>Test Institution 2</option>
                                    <option>Test Institution 3</option>
                                    <option>Test Institution 4</option>
                                    <option>Test Institution 5</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 mb-3">
                <div class="card mb-4">
                    <div class="card-body">
                        <h6 class="">Admissions and Enquiries Growth Chart</h6>
                            <p class="mb-5 text-small text-muted">Last 6 months Admissions and Enquiries Growth Chart</p>
                        <div class="chart-container chart">
                            <canvas id="productChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="card">
                        <div class="card-body">
                            <h6 class="">Business Growth Chart</h6>
                            <p class="mb-5 text-small text-muted">Last 6 months Business Growth Chart</p>
                            <div class="chart-container chart">
                                <canvas id="salesChart"></canvas>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </main>
<?php $this->load->view('admin/includes/footer'); ?>