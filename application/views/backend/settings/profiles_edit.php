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
                            <label>Full Name <a style="color: red;"></a></label>
                            <input type="hidden" name="usr_id" value="<?=$this->fungsi->user_login()->usr_id ?>">
                            <input type="text" name="usr_fullname" value="<?=$this->fungsi->user_login()->usr_fullname ?>" class="form-control is-valid">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Phone <a style="color: red;"></a></label>
                            <input type="number" name="usr_phone" value="<?=$this->fungsi->user_login()->usr_phone ?>" class="form-control is-valid">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Address <a style="color: red;"></a></label>
                            <textarea name="usr_address" class="form-control is-valid"><?=$this->fungsi->user_login()->usr_address ?></textarea>
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Photo <a style="color: red;"></a></label>
                            <input type="hidden" name="photos" value="<?=$this->fungsi->user_login()->usr_images ?>">
                            <input type="file" name="usr_images" class="form-control is-valid">
                            <a style="color: red;"><?=form_error('usr_images')?></a>
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