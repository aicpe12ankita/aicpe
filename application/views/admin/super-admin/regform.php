<?php $this->load->view('admin/includes/header'); ?>

    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>Student Registration</h1>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Library</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Student Registration</li>
                        </ol>
                    </nav>
                    <div class="separator mb-5"></div>
                </div>
                <div class="col-12 col-lg-6">
                  
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Add Student</h5>
                            <form id="exampleForm" class="tooltip-label-right" method="post" novalidate>
                                <div class="form-group position-relative error-l-50">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="jQueryName" required>
                                </div>
                                <div class="form-group position-relative error-l-50">
                                    <label>Age</label>
                                    <input type="number" class="form-control" required name="jQueryAge">
                                </div>
                                <div class="form-group position-relative error-l-50">
                                    <label>Details</label>
                                    <textarea class="form-control" rows="2" name="jQueryDetail" required></textarea>
                                </div>
                                <div class="form-group position-relative">
                                    <label>Radio</label>
                                    <div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="jQueryCustomRadio1" name="jQueryCustomRadio"
                                                class="custom-control-input" required>
                                            <label class="custom-control-label" for="jQueryCustomRadio1">Toggle this
                                                custom
                                                radio</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="jQueryCustomRadio2" name="jQueryCustomRadio"
                                                class="custom-control-input" required>
                                            <label class="custom-control-label" for="jQueryCustomRadio2">Or toggle this
                                                other
                                                custom
                                                radio</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group position-relative">
                                    <label>Check</label>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="jQueryCustomCheck1"
                                            name="jQueryCheckbox" required>
                                        <label class="custom-control-label" for="jQueryCustomCheck1">Check first</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="jQueryCustomCheck2"
                                            name="jQueryCheckbox" required>
                                        <label class="custom-control-label" for="jQueryCustomCheck2">Check
                                            second</label>
                                    </div>
                                </div>
                                <div class="form-group position-relative error-l-50">
                                    <label>State</label>
                                    <select class="custom-select" required>
                                        <option value=""></option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="form-group position-relative error-l-200">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="jQueryControlValidation"
                                            name="jQueryControlValidation" required>
                                        <label class="custom-control-label" for="jQueryControlValidation">Check this
                                            custom
                                            checkbox</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mb-0" name="submit" value="submit">Submit</button>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </main>

<?php $this->load->view('admin/includes/footer'); ?>