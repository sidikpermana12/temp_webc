<!DOCTYPE html>
<html lang="en">
    
<!--Designed By ALpha-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Vendor styles -->
        <link rel="stylesheet" href="<?=base_url()?>assets/backend/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/backend/vendors/bower_components/animate.css/animate.min.css">

        <!-- App styles -->
        <link rel="stylesheet" href="<?=base_url()?>assets/backend/css/app.min.css">
    </head>

    <body data-sa-theme="1">
        <div class="login">

            <!-- Login -->
            <div class="login__block active" id="l-login">
                <div class="login__block__header">
                    <i class="zmdi zmdi-account-circle"></i>
                    Hi there! Please Sign in
                </div>

                <form action="<?=site_url('mlehoy/process')?>" method="post">
                    <div class="login__block__body">
                        <div class="form-group">
                            <input type="Email" name="usr_email" class="form-control text-center" placeholder="Email Address">
                        </div>

                        <div class="form-group">
                            <input type="password" name="usr_password" class="form-control text-center" placeholder="Password">
                        </div>
                        
                        <button type="submit" name="login" class="btn btn--icon login__block__btn"><i class="zmdi zmdi-long-arrow-right"></i></button>
                    </div>
                </form>
            </div>

        <!-- Javascript -->
        <!-- Vendors -->
        <script src="<?=base_url()?>assets/backend/vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="<?=base_url()?>assets/backend/vendors/bower_components/popper.js/dist/umd/popper.min.js"></script>
        <script src="<?=base_url()?>assets/backend/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- App functions and actions -->
        <script src="<?=base_url()?>assets/backend/js/app.min.js"></script>
    </body>

<!--Designed By ALpha-->
</html>