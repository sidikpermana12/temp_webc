<div class="content__inner">
    <header class="content__title">
        <a href="<?=site_url('list-posts')?>" type="button" class="btn btn-primary"><i class="zmdi zmdi-format-list-bulleted"></i> List Posts</a>

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

            <form action="<?php echo site_url('posts/add')?>" method="post" enctype="multipart/form-data">

                <div class="row">

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Select Posts Categories<a style="color: red;">*</a></label>
                            <select id="vieworhide" name="pst_categoriespost_id" class="form-control" style="background: #355956">
                                <?php foreach($postscategories as $cat_posts) : ?>
                                    <?php if ($cat_posts['cat_pst_id'] == $posts['pst_categoriespost_id']) { ?>
                                        <option value="<?=$cat_posts['cat_pst_id']?>" selected><?=$cat_posts['cat_pst_name']?></option>
                                    <?php }else{ ?>
                                        <option value="<?=$cat_posts['cat_pst_id']?>"><?=$cat_posts['cat_pst_name']?></option>
                                    <?php } ?>
                                <?php  endforeach ?>
                            </select>
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Title<a style="color: red;">*</a></label>
                            <input type="text" name="pst_name"
                            <?php if (form_error('pst_name') == TRUE) {
                                echo 'class="form-control is-invalid"';
                            } ?>
                            class="form-control is-valid" placeholder="Enter Title posts ...">
                            <a style="color: red;"><?=form_error('pst_name')?></a>
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Images</label>
                            <input type="file" name="pst_images" class="form-control is-valid">
                            <a style="color: red;"><?=form_error('pst_images')?></a>
                            <i class="form-group__bar"></i>
                        </div>
                    </div>
                    
                    <div style="display: none;" id="5" class="voh col-sm-6" >
                        <div class="form-group">
                            <label>Link</label>
                            <input type="text" name="pst_link" class="form-control is-valid" placeholder="Input Your Link ...">
                            <a style="color: red;"><?=form_error('pst_link')?></a>
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label>Description Posts</label>
                            <textarea id="editor1" name="pst_body" class="form-control is-valid" placeholder="Enter Description posts ..."></textarea>
                            <i class="form-group__bar"></i> 
                        </div>
                    </div>

                    <div class="voh col-sm-6" >
                        <div class="form-group">
                            <label>Tags</label>
                            <input type="text" name="pst_tags" class="form-control is-valid" placeholder="Input Your Tags Separated with ',' (ex: culture,sports,business,ets) ...">
                            <a style="color: red;"><?=form_error('pst_tags')?></a>
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="voh col-sm-6" >
                        <div class="form-group">
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