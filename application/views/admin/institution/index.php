<?php $this->load->view('admin/includes/institution_header'); ?>

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/baguetteBox.min.css" />
    <main>
        <div class="container-fluid">
           <div class="row">
                <div class="col-lg-8">
                    <div class="icon-cards-row w-100">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="glide__slide mb-5">
                                    <a href="<?php echo base_url(); ?>institutions-admissions" class="card">
                                        <div class="card-body text-center">
                                            <i class="iconsminds-network"></i>
                                            <p class="card-text mb-0">Total Admissions</p>
                                            <p class="lead text-center">2500 </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="glide__slide mb-5">
                                    <a href="<?php echo base_url(); ?>institutions-enquiries" class="card">
                                        <div class="card-body text-center">
                                            <i class="iconsminds-user"></i>
                                            <p class="card-text mb-0">Pending Enquiries</p>
                                            <p class="lead text-center">25</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="glide__slide mb-5">
                                    <a href="<?php echo base_url(); ?>institutions-admissions" class="card">
                                        <div class="card-body text-center">
                                            <i class="iconsminds-id-card"></i>
                                            <p class="card-text mb-0">Active Students</p>
                                            <p class="lead text-center">1700</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="glide__slide mb-5">
                                    <a href="<?php echo base_url(); ?>institutions-wallet" class="card">
                                        <div class="card-body text-center">
                                            <i class="iconsminds-wallet"></i>
                                            <p class="card-text mb-0">Wallet Balance </p>
                                            <p class="lead text-center">Rs. 2400</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body birthday_dash">
                            <h5 class="card-title">Today's Birthdays and Anniversaries </h5>

                            <div class="scroll dashboard-list-with-user">
                                <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                    <i class="iconsminds-gift-box theme_color"></i>
                                    <div class="pl-3">
                                        <a href="#">
                                            <p class="font-weight-medium mb-0 ">Mayra Sibley</p>
                                            <p class="text-muted mb-0 text-small">Anniversary</p>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                    <i class="iconsminds-birthday-cake theme_color"></i>
                                    <div class="pl-3">
                                        <a href="#">
                                            <p class="font-weight-medium mb-0 ">Mimi Carreira</p>
                                            <p class="text-muted mb-0 text-small">Birthday</p>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                   <i class="iconsminds-birthday-cake theme_color"></i>
                                    <div class="pl-3">
                                        <a href="#">
                                            <p class="font-weight-medium mb-0 ">Philip Nelms</p>
                                            <p class="text-muted mb-0 text-small">Birthday</p>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                   <i class="iconsminds-gift-box theme_color"></i>
                                    <div class="pl-3">
                                        <a href="#">
                                            <p class="font-weight-medium mb-0 ">Terese Threadgill</p>
                                            <p class="text-muted mb-0 text-small">Anniversary</p>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                    <i class="iconsminds-gift-box theme_color"></i>
                                    <div class="pl-3">
                                        <a href="#">
                                            <p class="font-weight-medium mb-0 ">Kathryn Mengel</p>
                                            <p class="text-muted mb-0 text-small">Anniversary</p>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                    <i class="iconsminds-birthday-cake theme_color"></i>
                                    <div class="pl-3">
                                        <a href="#">
                                            <p class="font-weight-medium mb-0 ">Esperanza Lodge</p>
                                            <p class="text-muted mb-0 text-small">Birthday</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-5">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="">Admissions & Enquiries Chart</h6>
                            <p class="mb-5 text-small text-muted">Last 6 months Admissions & Enquiries Chart</p>
                            <div class="chart-container chart">
                                <canvas id="productChart"></canvas>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-6 mb-5">
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
            <div class="row mb-4">
                        <div class="col-md-12 mb-4 pl-0 pr-0">
                            <div class="glide basic">
                                <div class="glide__track pb-3" data-glide-el="track">
                                    <div class="glide__slides">
                                        <div class="glide__slide">
                                            <div class="card flex-row">
                                                <div class="w-50 position-relative">
                                                    <img class="card-img-left" src="<?php echo base_url(); ?>assets/img/cards/thumb-1.jpg"
                                                        alt="Card image cap">
                                                    
                                                </div>
                                                <div class="w-50">
                                                    <div class="card-body">
                                                        <h6 class="mb-4">Homemade Cheesecake with Fresh Berries and Mint 
                                                        </h6>

                                                        <footer>
                                                            <p class="text-muted text-small mb-0 font-weight-light">
                                                                09.04.2018 <a href="#" class="btn btn-xs btn-primary"><i class="iconsminds-download"></i></a>
                                                            </p>
                                                        </footer>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="glide__slide">
                                            <div class="card flex-row">
                                                <div class="w-50 position-relative">
                                                    <img class="card-img-left" src="<?php echo base_url(); ?>assets/img/cards/thumb-2.jpg"
                                                        alt="Card image cap">
                                                    
                                                </div>
                                                <div class="w-50">
                                                    <div class="card-body">
                                                        <h6 class="mb-4">Wedding Cake with Flowers Macarons and
                                                            Blueberries</h6>

                                                        <footer>
                                                            <p class="text-muted text-small mb-0 font-weight-light">
                                                                09.04.2018 <a href="#" class="btn btn-xs btn-primary"><i class="iconsminds-download"></i></a>
                                                            </p>
                                                        </footer>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="glide__slide">
                                            <div class="card flex-row">
                                                <div class="w-50 position-relative">
                                                    <img class="card-img-left" src="<?php echo base_url(); ?>assets/img/cards/thumb-3.jpg"
                                                        alt="Card image cap">
                                                 
                                                </div>
                                                <div class="w-50">
                                                    <div class="card-body">
                                                        <h6 class="mb-4">Cheesecake with Chocolate Cookies and Cream
                                                            Biscuits
                                                        </h6>

                                                        <footer>
                                                            <p class="text-muted text-small mb-0 font-weight-light">
                                                                09.04.2018 <a href="#" class="btn btn-xs btn-primary"><i class="iconsminds-download"></i></a>
                                                            </p>
                                                        </footer>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="glide__slide">
                                            <div class="card flex-row">
                                                <div class="w-50 position-relative">
                                                    <img class="card-img-left" src="<?php echo base_url(); ?>assets/img/cards/thumb-3.jpg"
                                                        alt="Card image cap">
                                                  
                                                </div>
                                                <div class="w-50">
                                                    <div class="card-body">
                                                        <h6 class="mb-4">Cheesecake with Chocolate Cookies and Cream
                                                            Biscuits
                                                        </h6>

                                                        <footer>
                                                            <p class="text-muted text-small mb-0 font-weight-light">
                                                                09.04.2018 <a href="#" class="btn btn-xs btn-primary"><i class="iconsminds-download"></i></a>
                                                            </p>
                                                        </footer>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="glide__slide">
                                            <div class="card flex-row">
                                                <div class="w-50 position-relative">
                                                    <img class="card-img-left" src="<?php echo base_url(); ?>assets/img/cards/thumb-1.jpg"
                                                        alt="Card image cap">
                                                   
                                                </div>
                                                <div class="w-50">
                                                    <div class="card-body">
                                                        <h6 class="mb-4">Homemade Cheesecake with Fresh Berries and Mint
                                                        </h6>

                                                        <footer>
                                                            <p class="text-muted text-small mb-0 font-weight-light">
                                                                09.04.2018 <a href="#" class="btn btn-xs btn-primary"><i class="iconsminds-download"></i></a>
                                                            </p>
                                                        </footer>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="glide__slide">
                                            <div class="card flex-row">
                                                <div class="w-50 position-relative">
                                                    <img class="card-img-left" src="<?php echo base_url(); ?>assets/img/cards/thumb-3.jpg"
                                                        alt="Card image cap">
                                                   
                                                </div>
                                                <div class="w-50">
                                                    <div class="card-body">
                                                        <h6 class="mb-4">Cheesecake with Chocolate Cookies and Cream
                                                            Biscuits
                                                        </h6>
                                                        <footer>
                                                            <p class="text-muted text-small mb-0 font-weight-light">
                                                                09.04.2018 <a href="#" class="btn btn-xs btn-primary"><i class="iconsminds-download"></i></a>
                                                            </p>
                                                        </footer>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="glide__arrows slider-nav" data-glide-el="controls">
                                    <button class="glide__arrow glide__arrow--left left-arrow btn btn-link"
                                        data-glide-dir="<"><i class="simple-icon-arrow-left"></i></button>
                                    <div class="glide__bullets slider-dot-container" data-glide-el="controls[nav]">
                                        <button class="glide__bullet slider-dot" data-glide-dir="=0"></button>
                                        <button class="glide__bullet slider-dot" data-glide-dir="=1"></button>
                                        <button class="glide__bullet slider-dot" data-glide-dir="=2"></button>
                                        <button class="glide__bullet slider-dot" data-glide-dir="=3"></button>
                                        <button class="glide__bullet slider-dot" data-glide-dir="=4"></button>
                                    </div>
                                    <button class="glide__arrow glide__arrow--right right-arrow btn btn-link"
                                        data-glide-dir=">"><i class="simple-icon-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </main>

<?php $this->load->view('admin/includes/footer'); ?>
<script src="<?php echo base_url(); ?>assets/js/vendor/baguetteBox.min.js"></script>