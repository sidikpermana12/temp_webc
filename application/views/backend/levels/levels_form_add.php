<div class="content__inner">
    <header class="content__title">
        <a href="<?=site_url('levels')?>" type="button" class="btn btn-primary"><i class="zmdi zmdi-format-list-bulleted"></i> List Levels</a>

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

            <form action="<?php echo site_url('levels/add')?>" method="post" enctype="multipart/form-data">

                <div class="row">                    
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Level Name <a style="color: red;">*</a></label>
                            <input type="text" name="lvl_name"
                            <?php if (form_error('lvl_name') == TRUE) {
                                echo 'class="form-control is-invalid"';
                            } ?>
                            class="form-control is-valid" placeholder="Enter Level Name ...">
                            <a style="color: red;"><?=form_error('lvl_name')?></a>
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Level Description</label>
                            <textarea name="lvl_description" class="form-control is-valid" placeholder="Enter Level Description ..."></textarea>
                            <i class="form-group__bar"></i>
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