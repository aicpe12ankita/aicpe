<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>AICPE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/font/iconsmind-s/css/iconsminds.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/font/simple-line-icons/css/simple-line-icons.css" />

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/bootstrap.rtl.only.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/bootstrap-float-label.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/bootstrap-tagsinput.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" />
</head>

<body class="background show-spinner no-footer">
    <div class="fixed-background"></div>
    <main>
        <div class="container">
            <div class="row h-100">
                <div class="col-12 col-md-10 mx-auto my-auto">
                    <div class="card auth-card">
                        <div class="position-relative image-side ">

                            <p class=" text-white h2">MAGIC IS IN THE DETAILS</p>

                            <p class="white mb-0">
                                Please use your credentials to login.
                                <br>If you are not a member, please
                                <a href="#" class="white">register</a>.
                            </p>
                        </div>
                        <div class="form-side">
                            <a class="navbar-logo" href="<?php echo base_url();?>">
                                <img src="<?php echo base_url();?>assets/logos/aicpe-logo.png">
                            </a>
                            <h6 class="mb-4">Login</h6>
                            <form id="" class="tooltip-label-bottom" novalidate method="post">
                                <label class="form-group has-float-label mb-4">
                                    <input class="form-control" name="rulesId" required />
                                    <small class="form-text text-muted">Username is required!</small>
                                    <span>Username</span>
                                </label>

                                <label class="form-group has-float-label mb-4">
                                    <input class="form-control" type="password" name="rulesPassword" required />
                                    <small class="form-text text-muted">Password is required!</small>
                                    <span>Password</span>
                                </label>
                                <input type="hidden" value="<?php echo base_url(); ?>" id="base">
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#">Forget password?</a>
                                    <button class="btn btn-primary btn-lg btn-shadow" type="submit" name="login" value="login">LOGIN</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="<?php echo base_url(); ?>assets/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/vendor/bootstrap-tagsinput.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/vendor/jquery.validate/jquery.validate.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/vendor/jquery.validate/additional-methods.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/dore.script.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
</body>
<script type="text/javascript">
    
</script>
</html>