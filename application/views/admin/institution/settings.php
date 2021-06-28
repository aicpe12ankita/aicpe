<?php $this->load->view('admin/includes/institution_header'); ?>
    <main>
        <div class="row">
            <div class="col-12">
                <h1>Settings</h1>
                <div class="separator mb-5"></div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <form>
                        <div class="form-group">
                            <label>Old Password</label>
                            <input type="password" name="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>New Password</label>
                            <input type="password" name="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" name="" class="form-control">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-outline-primary" type="submit">submit</button>
                        </div>
                    </form>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </main>
<?php $this->load->view('admin/includes/footer'); ?>