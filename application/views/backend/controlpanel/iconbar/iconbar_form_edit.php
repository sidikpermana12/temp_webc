<div class="content__inner">
    <header class="content__title">
        <a href="<?=site_url('icon-bar')?>" type="button" class="btn btn-primary"><i class="zmdi zmdi-format-list-bulleted"></i> Icon Bar</a>

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
                            <label>Upload Icon Tab (image harus .png) <a style="color: red;"></a></label>
                            <input type="hidden" name="photos" value="<?=$iconbarid['lib_images']?>">
                            <input type="file" name="lib_images" class="form-control is-valid">
                            <a style="color: red;"><?=form_error('lib_images')?></a>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="hidden" name="lib_id" value="<?=$iconbarid['lib_id']?>">
                        </div>
                    </div>

                     <div class="col-sm-6">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success"><i class="zmdi zmdi-mail-send"></i> Save</button>
                        </div>
                    </div>
                </div>

            </form>

        </div>
    </div>
</div>