<div class="content__inner">
    <header class="content__title">
        <a href="<?=site_url('brand-logo')?>" type="button" class="btn btn-primary"><i class="zmdi zmdi-format-list-bulleted"></i> Brand Logo</a>

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
                            <input type="hidden" name="lbl_id" value="<?=$brandlogo['lbl_id']?>" class="form-control is-valid">
                            <input type="text" name="lbl_name" value="<?=$brandlogo['lbl_name']?>" class="form-control is-valid">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Upload Brand Logo <a style="color: red;">*</a></label>
                            <input type="hidden" name="photos" value="<?=$brandlogo['lbl_images']?>">
                            <input type="file" name="lbl_images" class="form-control is-valid">
                            <a style="color: red;"><?=form_error('lbl_images')?></a>
                        </div>
                    </div>

                     <div class="col-sm-6">
                        <div class="form-group">
                            <button type="Reset" class="btn btn-secondary"><i class="zmdi zmdi-refresh-sync"></i> Reset</button>
                            <button type="submit" class="btn btn-success"><i class="zmdi zmdi-mail-send"></i> Save</button>
                        </div>
                    </div>
                </div>

            </form>

        </div>
    </div>
</div>