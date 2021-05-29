<?php $this->load->view('admin/includes/header'); ?>

    <main>
        <div class="row">
            <div class="col-12">
                <h1>Final Exam</h1>
                <div class="separator mb-5"></div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
               
                <div class="col-lg-7">
                    <form id="exampleForm" class="tooltip-label-right" novalidate>
                        <div class="form-group">
                          <label>Enter secrete code</label>
                          <input type="text" name="assi_title" id="assi_title" class="form-control" placeholder="">
                        </div>
                        <button type="button" class="btn btn-outline-primary">Cancel</button>
                        <a href="<?php echo base_url(); ?>final-exam-manager">
                            <button type="button" class="btn btn-primary">Start exam</button>
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <?php $this->load->view('admin/includes/footer'); ?>