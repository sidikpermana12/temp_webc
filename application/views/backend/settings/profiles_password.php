<div class="content__inner">
    <header class="content__title">
        <a href="<?=site_url('profile')?>" type="button" class="btn btn-primary"><i class="zmdi zmdi-assignment-account"></i> Profile</a>

        <div class="actions">
            <a href="#" class="actions__item zmdi zmdi-trending-up"></a>
            <a href="#" class="actions__item zmdi zmdi-check-all"></a>

            <div class="dropdown actions__item">
                <i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item">Refresh</a>
                    <a href="#" class="dropdown-item">Manage Widgets</a>
                    <a href="#" class="dropdown-item">Settings</a>
                </div>
            </div>
        </div>
    </header>

    <div class="card">
        <div class="card-body">

            <form action="" method="post" enctype="multipart/form-data">

                <div class="row">                    
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Password <a style="color: red;">*</a></label>
                            <input type="hidden" name="usr_id" value="<?=$this->fungsi->user_login()->usr_id ?>">
                            <input type="Password" name="usr_password"
                            <?php if (form_error('usr_password') == TRUE) {
                                echo 'class="form-control is-invalid"';
                            } ?>
                            class="form-control is-valid" placeholder="Enter New Password ..">
                            <a style="color: red;"><?=form_error('usr_password')?></a>
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Re-Password <a style="color: red;">*</a></label>
                            <input type="Password" name="usr_passconf"
                            <?php if (form_error('usr_passconf') == TRUE) {
                                echo 'class="form-control is-invalid"';
                            } ?>
                            class="form-control is-valid" placeholder="Enter New Password ..">
                            <a style="color: red;"><?=form_error('usr_passconf')?></a>
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <button type="Reset" class="btn btn-secondary"><i class="zmdi zmdi-refresh-sync"></i> Reset</button>
                            <button type="submit" class="btn btn-success"><i class="zmdi zmdi-mail-send"></i> Update</button>
                        </div>
                    </div>
                </div>

            </form>

        </div>
    </div>
</div>